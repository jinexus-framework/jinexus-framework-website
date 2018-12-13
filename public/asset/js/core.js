/* JiNexus Framework (http://framework.jinexus.com)
 * Copyright (c) 2018, Jimvirle Calago (JiNexus) - All Rights Reserved
 * Open Source Project
 * Written by Jimvirle E. Calago <jimvirle@gmail.com>, July 21, 2018
 */

const Core = (function($) {
    let init, mainMasthead;

    init = function() {
        $(document).ready(function() { });

        $(window).on('load', function() {
            mainMasthead = $('main.bd-masthead').outerHeight() - 28;

            $('.cover-scrollspy').css({'top': mainMasthead + 'px'});
            $(document).on('click', '.cover-scrollspy', function() {
                $('html, body').animate({
                    scrollTop: mainMasthead + 28
                });
            });
        });

        $(window).on('resize', function() {
            mainMasthead = $('main.bd-masthead').outerHeight() - 28;

            $('.cover-scrollspy').css({'top': mainMasthead + 'px'});
        });
    };

    init();

}(jQuery));