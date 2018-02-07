var app = {

    openNavigation: function() {

        var nav = $('#navigation'),
            open = nav.find('#navigation-open'),
            menu = nav.find('ul');

            open.toggleClass('animated');
            menu.toggle();
            // app.animateLinks
            setTimeout(function() {
                this.animateLinks(nav);
            }.bind(this), 600);
        // menu.show();

    },
    hideLinks: function(){
        var elements = document.querySelectorAll('body .slide-in-parent');

        console.log(elements);
        for(i = 0; i < elements.length; i++) {
            elements[i].style.color = 'rgba(0,0,0,0)';
        }
        // $('.slide-in-parent').css('color', 'rgba(0,0,0,0)');
    },
    animateLinks: function(parent) {

        $(parent).find('.slide-in-parent').each(function() {
            var element = $(this),
                slideIn = $('<span class="slide-in"></span>');
                // element.css('color', 'rgba(0,0,0,0)');

                element.css({
                    color: 'rgba(0,0,0,0)',
                    position: 'relative' 
                })

            $(this).append(slideIn);

            // element.css('position', 'relative');

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

app.hideLinks();
