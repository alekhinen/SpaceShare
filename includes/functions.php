<?php





///////////////////////////////////////////////////////////////////////////////
// sec_session_start //////////////////////////////////////////////////////////
/** 
 *
 *
 *
 */
function sec_session_start() {
    // Set a custom session name
    $session_name = 'thisisasessionname'; 
    // Set to true if using https.
    $secure = false; 
    // This stops javascript being able to access the session id. 
    $httponly = true; 
 
    // Forces sessions to only use cookies. 
    ini_set('session.use_only_cookies', 1); 
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params(); 
    session_set_cookie_params($cookieParams["lifetime"], 
                              $cookieParams["path"], 
                              $cookieParams["domain"], 
                              $secure, 
                              $httponly); 
    // Sets the session name to the one set above.
    session_name($session_name); 
    // Start the php session
    session_start(); 
    // regenerated the session, delete the old one.     
    session_regenerate_id(true); 
}





///////////////////////////////////////////////////////////////////////////////
// login //////////////////////////////////////////////////////////////////////
/** 
 *
 *
 *
 */
function login($email, $password, $mysqli) {
    // Using prepared statements means that SQL injection is not possible. 
    if ($stmt = $mysqli->prepare("SELECT id, first_name, last_name, password 
                                  FROM users 
                                  WHERE email = ?
                                  LIMIT 1")) {

        $stmt->bind_param('s', $email);  
        $stmt->execute();
        $stmt->store_result();
 
        // get variables from result.
        $stmt->bind_result($user_id, $first_name, $last_name, $db_password);
        $stmt->fetch();

        // Check if the user exists
        if ($stmt->num_rows == 1) {
            // Check if the password in the database matches the given
            if (crypt($password, $db_password) === $db_password) {
                // Get the user-agent string of the user.
                $user_browser = $_SERVER['HTTP_USER_AGENT'];
                
                // XSS protection as we might print this value
                $user_id = preg_replace("/[^0-9]+/", "", $user_id);
                $_SESSION['user_id'] = $user_id;
                
                // XSS protection as we might print this value
                $first_name = preg_replace("/[^a-zA-Z0-9_\-]+/", 
                                         "", 
                                         $first_name);
                $_SESSION['first_name'] = $first_name;
                // XSS protection as we might print this value
                $last_name = preg_replace("/[^a-zA-Z0-9_\-]+/", 
                                         "", 
                                         $last_name);
                $_SESSION['last_name'] = $last_name;

                $_SESSION['email'] = $email;

                $_SESSION['login_string'] = crypt($db_password, $user_browser);
                // Login successful.
                return true;
            }
            else {
                return false;
            }
        }
        else {
            // No user exists.
            return false;
        }
    }
    else {
        return false;
    }
}





///////////////////////////////////////////////////////////////////////////////
// check_brute /////////////////////////////////////////////////////////////////
/** 
 *
 *
 *
 */
function check_brute($user_id, $mysqli) {
    // Get timestamp of current time 
    $now = time();
 
    // All login attempts are counted from the past 2 hours. 
    $valid_attempts = $now - (2 * 60 * 60);
 
    if ($stmt = $mysqli->prepare("SELECT time 
                             FROM login_attempts <code><pre>
                             WHERE user_id = ? 
                            AND time > '$valid_attempts'")) {
        $stmt->bind_param('i', $user_id);
 
        // Execute the prepared query. 
        $stmt->execute();
        $stmt->store_result();
 
        // If there have been more than 5 failed logins 
        if ($stmt->num_rows > 5) {
            return true;
        } else {
            return false;
        }
    }
}





///////////////////////////////////////////////////////////////////////////////
// login_check ////////////////////////////////////////////////////////////////
/** 
 *
 *
 *
 */
function login_check($mysqli) {
    // Check if all session variables are set 
    if (isset($_SESSION['user_id'], 
              $_SESSION['first_name'], 
              $_SESSION['last_name'],
              $_SESSION['email'], 
              $_SESSION['login_string'])) {
 
        $user_id = $_SESSION['user_id'];
        $login_string = $_SESSION['login_string'];
        $first_name = $_SESSION['first_name'];
        $last_name = $_SESSION['last_name'];
        // Get the user-agent string of the user.
        $user_browser = $_SERVER['HTTP_USER_AGENT'];
 
        if ($stmt = $mysqli->prepare("SELECT password FROM users WHERE id = ? LIMIT 1")) {
            $stmt->bind_param('i', $user_id);
            $stmt->execute();
            $stmt->store_result();
 
            if ($stmt->num_rows == 1) {
                // If the user exists get variables from result.
                $stmt->bind_result($password);
                $stmt->fetch();
                // $login_check = hash('sha512', $password . $user_browser);
 
                //if ($login_check == $login_string) {
                if (crypt($password, $user_browser) === $login_string) {
                    // Logged In!!!! 
                    return true;
                } else {
                    // Not logged in 
                    return false;
                }
            } else {
                // Not logged in 
                return false;
            }
        } else {
            // Not logged in 
            return false;
        }
    } else {
        // Not logged in 
        return false;
    }
}




///////////////////////////////////////////////////////////////////////////////
// escURL /////////////////////////////////////////////////////////////////
/** 
 *
 *
 *
 */
function esc_url($url) {
 
    if ('' == $url) {
        return $url;
    }
 
    $url = preg_replace('|[^a-z0-9-~+_.?#=!&;,/:%@$\|*\'()\\x80-\\xff]|i', '', $url);
 
    $strip = array('%0d', '%0a', '%0D', '%0A');
    $url = (string) $url;
 
    $count = 1;
    while ($count) {
        $url = str_replace($strip, '', $url, $count);
    }
 
    $url = str_replace(';//', '://', $url);
 
    $url = htmlentities($url);
 
    $url = str_replace('&amp;', '&#038;', $url);
    $url = str_replace("'", '&#039;', $url);
 
    if ($url[0] !== '/') {
        // We're only interested in relative links from $_SERVER['PHP_SELF']
        return '';
    } else {
        return $url;
    }
}

?>