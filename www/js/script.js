var app = {
    navigationOpened: false,
    bodyOverflow: function (show) {
        var body = $('body');

        if(show) {
            body.removeClass('overflow-hidden');
        } else {
            body.addClass('overflow-hidden');
        }
    },
    open: function(element) {
        var body = $('body'),
            mobileNavigation = $('.navigation-mobile'),
            btn = $('.navigation-mobile-background'),
            hamburger = btn.find('.hamburger');

            mobileNavigation.css('z-index', 5);

            // this.debounce(300, this.animateLinks(mobileNavigation))
            setTimeout(function() {
                this.animateLinks(mobileNavigation);
            }.bind(this), 300);

            btn.attr('onclick', 'app.close(this)');

            hamburger.addClass('is-active');
            body.attr('data-menu', 'opened');
    },
    close: function(element) {
        var body = $('body'),
            mobileNavigation = $('.navigation-mobile'),
            btn = $('.navigation-mobile-background'),
            hamburger = btn.find('.hamburger');

            setTimeout(function() {
                mobileNavigation.css('z-index', 0);
            }.bind(this), 300);

            btn.attr('onclick', 'app.open(this)')
            hamburger.removeClass('is-active');
            body.attr('data-menu', 'closed');
            this.hideLinks();

    },
    openMobileNav: function(element) {
            console.log(element);
            var body = $('body'),
                menuStatus = body.data('menu');

            var nav = $('#navigation'),
                menu = $('.navigation-mobile'),
                logo = menu.find('.slide-down'),
                li = $(element),
                hamburger = li.find('.hamburger'),
                isActive = li.hasClass('is-active');

            if(menuStatus === 'opened') {
                alert('open');
                menu.addClass('is-active');
                li.addClass('is-active');
                hamburger.addClass('is-active');
                nav.addClass('is-active');
                logo.addClass('animated');

                this.bodyOverflow(false);

                setTimeout(function() {
                    // logo.addClass('animated');
                    this.animateLinks(menu);
                }.bind(this), 600);
                body.data('menu', 'closed');
            } else if (menuStatus === 'closed') {
                body.data('menu', 'opened');

                nav.removeClass('animated');
                li.removeClass('is-active');
                hamburger.removeClass('is-active');
                // menu.removeClass('is-active');
                logo.removeClass('animated');

                this.bodyOverflow(true);

                setTimeout(function() {
                    menu.removeClass('is-active');
                }.bind(this), 600);

                this.hideLinks();
            }

            //
            // if(!isActive) {
            //     menu.addClass('is-active');
            //     li.addClass('is-active');
            //     hamburger.addClass('is-active');
            //     nav.addClass('is-active');
            //     logo.addClass('animated');
            //
            //     this.bodyOverflow(false);
            //
            //     setTimeout(function() {
            //         // logo.addClass('animated');
            //         this.animateLinks(menu);
            //     }.bind(this), 600);
            // } else {
            //     nav.removeClass('animated');
            //     li.removeClass('is-active');
            //     hamburger.removeClass('is-active');
            //     // menu.removeClass('is-active');
            //     logo.removeClass('animated');
            //
            //     this.bodyOverflow(true);
            //
            //     setTimeout(function() {
            //         menu.removeClass('is-active');
            //     }.bind(this), 600);
            //
            //     this.hideLinks();
            // }

    },
    animateHomePage: function() {
        $('#navigation .logo-wrapper').addClass('animated'); // Animate navigation on page load
		$('#start .icon-mouse').addClass('animated'); // Animate mouse icon on page load
    },
    hideLinks: function(){
        var elements = document.querySelectorAll('body .slide-in-parent');
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
