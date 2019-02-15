var app = {
    navigationOpened: false,
    openNav: function(element) {
            console.log(element);

            var li = $(element),
                hamburger = li.find('.hamburger'),
                isActive = li.hasClass('is-active'),
                menu = $('.navigation-mobile'),
                logo = menu.find('.logo-mobile');

            if(!isActive) {
                li.addClass('is-active');
                hamburger.addClass('is-active');
                menu.addClass('is-active');
                logo.addClass('animated');

                setTimeout(function() {
                    // logo.addClass('animated');
                    this.animateLinks(menu);
                }.bind(this), 600);
            } else {
                li.removeClass('is-active');
                hamburger.removeClass('is-active');
                menu.removeClass('is-active');
                logo.removeClass('animated');

                this.hideLinks();
            }

    },
    openNavigation: function() {

        let nav = $('#navigation'),
            open = nav.find('#navigation-open'),
            menu = nav.find('ul'),
            logo = nav.find('.logo-mobile');

            nav.find('a').css('color', 'transparent');

            open.toggleClass('animated is-active');
            menu.toggle();
            // this.navigationOpened = true;

            // app.animateLinks

            if(open.hasClass('is-active')) {
                // alert('opened');
                setTimeout(function() {
                    logo.addClass('animated');
                    this.animateLinks(nav);
                }.bind(this), 600);
            }
            else {
                logo.removeClass('animated');
                this.hideLinks();
            }
        // menu.show();

    },
    animateHomePage: function() {
        $('#navigation .logo-wrapper').addClass('animated'); // Animate navigation on page load
		$('#start .icon-mouse').addClass('animated'); // Animate mouse icon on page load
    },
    hideLinks: function(){
        var elements = document.querySelectorAll('body .slide-in-parent');

        console.log(elements);
        for(i = 0; i < elements.length; i++) {
            elements[i].style.color = 'rgba(0,0,0,0)';
        }

    },
    animateLinks: function(parent) {

        $(parent).find('.slide-in-parent').each(function() {
            var element = $(this),
                slideIn = $('<span class="slide-in"></span>');
                // element.css('color', 'rgba(0,0,0,0)');

                element.css({
                    color: 'rgba(0,0,0,0)'
                })

            $(this).find('.slide-in').remove(); // remove old slide in to avoid stacking up elements
            $(this).append(slideIn);

            // element.css('position', 'relative');

            slideIn.css('left', '0px');

            slideIn.animate({
                width: '100%'
            }, function(){

                element.css({
                    color: ''
                });

                slideIn.css('left', '');

                slideIn.css('right', '0px');
                slideIn.animate({
                    width: '0%'
                });

            });

        });

    }

}

$(document).ready(function() {
    $('#sticky').scrollspy();
});
