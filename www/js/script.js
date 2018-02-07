var app = {

    openNavigation: function() {

        var nav = $('#navigation'),
            open = nav.find('#navigation-open'),
            menu = nav.find('ul');

            menu.toggle();
            // app.animateLinks()
            this.animateLinks(nav);
        // menu.show();

    },
    animateLinks: function(parent) {

        $(parent).find('.slide-in-parent').each(function() {
            var element = $(this),
                slideIn = $('<span class="slide-in"></span>');
                element.css('color', 'rgba(0,0,0,0)');

            $(this).append(slideIn);

            element.css('position', 'relative');

            slideIn.animate({
                width: '100%'
            }, function(){

                element.css('color', '');

                slideIn.css('right', '0px');
                slideIn.animate({
                    width: '0%'
                });

            });

        });

    }


}
