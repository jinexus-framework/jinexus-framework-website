/* JiNexus Framework (http://framework.jinexus.com)
 * Copyright (c) 2018, Jimvirle Calago (JiNexus) - All Rights Reserved
 * Open Source Project
 * Written by Jimvirle E. Calago <jimvirle@gmail.com>, July 21, 2018
 */

const Core = (function($) {
    let init;

    init = function() {
        $(document).ready(function() { });

        $(window).on('load', function() {
            let mainMasthead = $('main.bd-masthead').outerHeight() - 28;

            $('.cover-scrollspy').css({'top': mainMasthead + 'px'});
            $(document).on('click', '.cover-scrollspy', function() {
                $('html, body').animate({
                    scrollTop: mainMasthead + 28
                });
            });
        });
    };

    init();

}(jQuery));