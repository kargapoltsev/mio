/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
    Drupal.behaviors.my_custom_behavior = {
        attach: function (context, settings) {

            $(".b-slider .block-inner").owlCarousel({
                navigation: false,
                pagination: false,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true,
                navigationText: [,],
            });

            $(".b-switcher").click(function () {
                $(this).each(function() {
                    $(this).toggleClass("active");
                });
                
                $(".p-left").toggleClass("show");
                $(".p-right").toggleClass("hide");
            });


            // var is_mobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini|Touch/i.test(navigator.userAgent);

 
            // $(".form-select").chosen({
            //     disable_search_threshold: 10,
            //     width: "100%",
            // });

            // $(".menu-484 > a").click(function() {
            //     return false;
            // })

        }
    };


})(jQuery, Drupal, this, this.document);
