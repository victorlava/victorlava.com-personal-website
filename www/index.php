<?php include('partials/head.php'); ?>

<body id="home">
<!-- start of #home-page -->
    <main>
        <?php include('partials/navigation.php'); ?>

            <section id="start" class="section section-full">

                <div class="depth-js">
                    <div id="background" data-depth="0.3"></div>
                    <div class="victor" data-depth="0.4"></div>
                </div>

                <script type="text/javascript">

                    var Depth = function(settings) {

                        this.parent = document.querySelector(settings.parent);
                        this.children = this.parent.querySelector(settings.children);
                        this.elements = this.children.querySelectorAll('*[data-depth]');
                        this.coordinates = {x: 0, y: 0};

                        // Add neccesery attributes to movable objects
                        var center = this.getCenterCoordinates(this.parent);
                        console.log(center);

                        // Start mouse tracking on parent element
                        this.parent.addEventListener('mousemove', function(e) {

                            var coordinates = { x: 0, y: 0 };

                            coordinates.x = center.x - e.clientX;
                            coordinates.y = center.y - e.clientY;


                            this.addAttributes();
                            this.move(coordinates.x, coordinates.y);

                            // console.log(coordinates);
                        }.bind(this));




                    }

                    // Adds transform styles
                    Depth.prototype.addAttributes = function() {

                        for(i = 0; i < this.elements.length; i++) {
                            this.elements[i].setAttribute('style', 'transform-style: preserve-3d; backface-visibility: hidden;');
                        }

                    }

                    // Get's the center coordinates of the element
                    Depth.prototype.getCenterCoordinates = function(element) {

                        var coordinates = {x: 0, y: 0 },
                            element = element.getBoundingClientRect();

                            coordinates.x = element.width / 2;
                            coordinates.y = element.height / 2;

                        return coordinates;
                    }

                    // Adds transform styles
                    Depth.prototype.move = function(x, y) {

                        for(i = 0; i < this.elements.length; i++) {
                            this.elements[i].setAttribute('style', 'transform-style: preserve-3d;' +
                                                                   'backface-visibility: hidden;' +
                                                                   'transform: translate3d(' + x + '%, ' + y + '%, 0px)');
                        }

                    }

                    /*
                    transform: translate3d(-1.78017%, -3.82703%, 0px);
                    transform-style: preserve-3d;
                    backface-visibility: hidden;
                    */

                    var depth = new Depth({
                        parent: "#start",
                        children: '.depth-js'
                    })


                </script>
<!--
                <div class="me-wrapper">
                </div> -->

                <div class="heading">
                    <header>
                      <h1 class="js-typed">Hello!</h1>
                    </header>

                    <p class="text fading-text">
                      <span>esu laisvai samdomas web programuotojas ir lektorius iš</span>
                      <span>Vilniaus. Kuriu internetines svetaines pastaruosius</span>
                      <span>6 metus Lietuvos, Švedijos ir Australijos rinkoms</span>
                      <span class="hidden-xs">Dėstau programavimą <a href="http://3wa.lt" target="_blank" title="3W Academy">3WA</a> akademijoje.</span>
                    </p>

                    <a href="/paslaugos/web-dizainas/" class="btn btn-primary">Paslaugos</a>
                </div>

                <i class="mouse-icon"></i>

            </section>

            <?php include('components/cta.php'); ?>
    </main> <!-- .container -->
<!-- end of #home-page -->
<?php include('partials/footer.php') ?>
