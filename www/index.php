<?php include('partials/settings.php'); ?>
<?php $settings['id'] = 'home'; ?>

<?php include('partials/head.php'); ?>
    <main>
            <?php include('partials/navigation.php'); ?>

            <section id="start" class="section section-full">

                <div class="depth-js">
                    <div class="background" data-depth="0.3"></div>
                    <div class="victor" data-depth="0.4"></div>
                </div>

                <div class="heading fade-in">
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

                <?php include('partials/icon-mouse.php'); ?>

            </section>

            <section id="lenndy" class="section section-project section-fading section-parallax">
                <div class="container">
                    <div class="heading">
                        <header>
                          <h2 class="slide-in-parent">Lenndy</h2>
                        </header>

                        <p class="text fading-text">
                          <span>Lenndy yra pirmoji Lietuvoje sutelktinio finansavimo platforma skirta verslui.</span>
                          <span>Šiuo metu platforma yra pritraukusi virš 250,000€ investicijų.</span>
                        </p>

                    </div>

                    <div class="btn-wrapper">
                        <a href="#" class="btn btn-primary">Peržiūrėti</a>
                        <span class="btn btn-line d-none d-md-block slide-in-parent"></span>
                        <h3 class="slide-in-parent">Web dizainas ir front-end</h3>
                    </div>

                    <img src="img/projects/lenndy-crowdfunding.jpg" class="image image-border" alt="">
                </div>
            </section>


            <section id="amplify" class="section section-project section-fading section-parallax">
                <div class="container">
                    <div class="heading">
                        <header>
                          <h2 class="slide-in-parent">Amplify</h2>
                        </header>

                        <p class="text fading-text">
                          <span>Mano tikslas buvo sukurti naują dizainą "Amplify Digital Stockholm"</span>
                          <span>įmonei ir pritaikyti jį WordPress turinio valdymo sistemai.</span>
                        </p>

                    </div>

                    <div class="btn-wrapper">
                        <a href="#" class="btn btn-primary">Peržiūrėti</a>
                        <span class="btn btn-line d-none d-md-block slide-in-parent"></span>
                        <h3 class="slide-in-parent">Web dizainas ir Wordpress</h3>
                    </div>

                    <img src="img/projects/amplify-digital-stockholm.jpg" class="image image-border" alt="">
                </div>
            </section>

    </main> <!-- .container -->

    <?php include('components/cta.php'); ?>

    <script src="/www/js/velocity.min.js"></script>
    <script type="text/javascript" src="/www/js/typed.min.js"></script>
    <script type="text/javascript" src="/www/js/depth.js"></script>
    <script type="text/javascript">

        var depth = new Depth({
            parent: "#start",
            children: '.depth-js',
            intesity: 1
        });

        $(document).ready(function(){

    		var sectionOffset = 300;

    		setTimeout(function() {
    			$('#start .fade-in').addClass('animated');
    			// $('#start .fade-in').addClass('animated');
    		}, 1000);

    		// Lenndy waypoint
    		var waypoint = new Waypoint({
    		  element: document.getElementById('lenndy'),
    		  offset: sectionOffset,
    		  handler: function(direction) {

    			  if(direction == 'down') {
    				  app.animateLinks('#lenndy');
    			  }

    		  }
    		})

    		// Amplify waypoint
    		var waypoint = new Waypoint({
    		  element: document.getElementById('amplify'),
    		  offset: sectionOffset,
    		  handler: function(direction) {

    			  if(direction == 'down') {
    				  app.animateLinks('#amplify');
    			  }

    		  }
    		})

            // Footer waypoint
    		var waypoint = new Waypoint({
    		  element: document.getElementById('cta'),
    		  handler: function(direction) {
    			  if(direction == 'down') {
    				  app.animateLinks('#footer');
    			  }
    		  }
    		})

    		$(".js-typed").typed({
    				strings: ["Sveiki...", "Hallå...", "Hello...", "Bonjour...", "¡Hola..."],
    				typeSpeed: 150,
    				backSpeed: 100,
    				loop: true
    		});

    	});

    </script>
    <script src="/www/js/main.js"></script> <!-- Resource jQuery -->
<!-- end of #home-page -->
<?php include('partials/footer.php') ?>
