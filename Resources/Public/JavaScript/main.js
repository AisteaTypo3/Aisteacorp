/* ========================================== 
scrollTop() >= 300
Should be equal the the height of the header
========================================== */

$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('#navigation').addClass('fixed-header');
    }
    else {
        $('#navigation').removeClass('fixed-header');
    }
});

/**
 * ------------------------------------------------------------------------
 * Smooth Anchor Scroll (Offset)
 * ------------------------------------------------------------------------
 **/

// caching
//var $root = $('html, body');

// offset
var $globalOffset = -120;

var $anchor_scrolling = false;

if (window.location.hash) {
    // to top right away
    scroll(0,0);
    // void some browsers issue
    setTimeout( function() { scroll(0,0); }, 1);

    console.log("anchor scroll: to top right away");
}


$(document).ready(function() {
    //On Load
    if (window.location.hash && !$("body").hasClass("anchorscrolling-off")) {
        console.log("anchor scroll on path: " + window.location.pathname);

        $offset = $globalOffset;

        setTimeout(function() {
            smooth_scroll_to(window.location.hash, $offset);
        }, 100);
    }
});

$(document).ready(function() {
    //On Click
    $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').not('[href*="#carousel"]').not('[href*="#accordion"]').on('click', function(event){
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
            &&
            !$("body").hasClass("anchorscrolling-off")
        ) {

            $offset = $globalOffset;
            // Figure out element to scroll to
            smooth_scroll_to(this.hash, $offset, event);
        }
    });


}); //end document.ready


function smooth_scroll_to(hash, offset, event) {

    $anchor_scrolling = true;

    if(typeof hash == 'undefined') {
        console.log("smooth anchor scroll hash=undefined");
        return false;
    } else {

        var target = $(hash);
        target = target.length ? target : $('[name=' + hash.slice(1) + ']');

        console.log("anchor scroll with offset: " + offset);

        if($(target).length > 0) {

            if(typeof event !== 'undefined') {
                event.preventDefault();
                history.pushState(null, null, $(event.target).attr('href'));
            }
            $('html, body').animate({
                scrollTop: target.offset().top + offset + 'px'
            }, 700, 'swing', function() {
                /*
                // Callback after animation
                // Must change focus!
                var $target = $(target);
                $target.focus();
                if ($target.is(":focus")) { // Checking if the target was focused
                    return false;
                } else {
                    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                    $target.focus(); // Set focus again
                };
                */

                location.hash = hash;
                $anchor_scrolling = false;
            });
        }
    }

}//END smooth_scroll_to