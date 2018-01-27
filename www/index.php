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

                    var depth = new Depth({
                        parent: "#start",
                        children: '.depth-js',
                        intesity: 1
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

                <a href="#" class="icon icon-mouse"></a>

            </section>

            <?php include('components/cta.php'); ?>
    </main> <!-- .container -->
<!-- end of #home-page -->
<?php include('partials/footer.php') ?>
