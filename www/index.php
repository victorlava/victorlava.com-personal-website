<?php include('partials/head.php'); ?>

<body id="home">
<!-- start of #home-page -->
    <main class="container">
        <?php include('partials/navigation.php'); ?>


    </main> <!-- .container -->

    <footer class="container">
        <div class="row">
            <div class="col-3">
                <a href="/" title="Web Developer &amp; UI Designer">
                    <img src="/img/logo.png" width="67" height="67" alt="Web Developer &amp; UI Designer">
                </a>
                <!-- blockqoute -->
                <p>Dizainas nėra tai, kaip tai atrodo ar ką primena. Dizainas yra tai, kaip tai veikia. <span style="font-size:14px;">- Steve Jobs</span></p>
                <a href="mailto:info@viktoraslava.lt" onclick="ga('send', 'event', 'Email', 'click', 'place=footer');">info@viktoraslava.lt</a>
            </div>
            <div class="col-3">
                <!--  TODO: h6 really? -->
            	<h6 class="title">Navigacija</h6>
            	<ul>
            		<li>
                        <a href="/paslaugos/web-dizainas/" title="Web dizaino paslaugos">
                            Paslaugos
                        </a>
                    </li>
            		<li>
                        <a href="/projektai/" title="Interneto projektai">
                            Projektai
                        </a>
                    </li>
            	</ul>
            </div>
            <div class="col-3">
    			<h6 class="title hidden-xs hidden-sm">
                    Daugiau projektų
                </h6>
    			<ul>
    				<li>
                        <a href="/apie-mane/" title="Apie mane">
                            Apie mane
                        </a>
                    </li>
    				<li>
                        <a href="/kontaktai/" title="Susisiekti">
                            Susisiekti
                        </a>
                    </li>
    			</ul>
            </div>
            <div class="col-3">
        		<h6 class="title">Būk socialus</h6>
        		<ul>
        			<li class="facebook">
                        <a title="Facebook" target="_blank" href="https://www.facebook.com/vvictorlava">
                            Facebook
                        </a>
                    </li>
        			<li class="linkedin">
                        <!--  TODO: add linkedin -->
                        <a title="LinkedIn" target="_blank" href="">
                            LinkedIn
                        </a>
                    </li>
        		</ul>
            </div>
        </div>
    </footer>

<!-- end of #home-page -->
<?php include('partials/footer.php') ?>
