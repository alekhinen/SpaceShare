

/** to slide the carousel either to the left or the right,
  * depending on the string input
  * @author Nick Alekhine
  * 
  * @param direction - string value of the direction to slide
  * @return 
  */
function slideSwitchOnClick(direction) {
    // Arguments //////////////////////////////////////////
    if (direction == undefined) direction = "";


    // Fields /////////////////////////////////////////////
    var $active = $('#imageCarousel .contentContainer.active');
    var $next = $active.next().length ? $active.next()
                : $('#imageCarousel .contentContainer:first');


    // If there is nothing in active, set it to last element.
    if ( $active.length == 0 ) {
        $active = $('#imageCarousel .contentContainer:last');
    }
    // Set the class of $active to last-active
    $active.addClass('last-active');


    // Logic //////////////////////////////////////////////
    // transitions into the next slide in the carousel. 
    if (direction == "right") {
        $next.css({opacity: 0.0})
            .addClass('active')
            .animate({opacity: 1.0}, 1000, function() {
                $active.removeClass('active last-active');
            });

    } else if (direction == "left") {
        $next = $active.prev().length ? $active.prev()
                : $('#imageCarousel .contentContainer:last');


        $next.css({opacity: 0.0})
            .addClass('active')
            .animate({opacity: 1.0}, 1000, function() {
                $active.removeClass('active last-active');
            });

    } else {
        $next.css({opacity: 0.0})
            .addClass('active')
            .animate({opacity: 1.0}, 1000, function() {
                $active.removeClass('active last-active');
            }); 
    }

}




// Main ///////////////////////////////////////////////////////////////////////
// runs slideSwitchOnClick()
$(function() {

    jQuery('#btnLeft').click(function() {
        slideSwitchOnClick("left");
    });
    jQuery('#btnRight').click(function() {
        slideSwitchOnClick("right");
    });

    // TODO
    // we need to somehow reset the interval every single time a button is 
    // clicked. if we leave it as it is there will be times when the click
    // and the interval will occur simultaneously and bad things will
    // happen. 
    // setInterval( "slideSwitchOnClick()", 10000);
});








