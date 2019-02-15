	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3">
					<a href="/" title="Web Developer &amp; UI Designer" class="logo logo-white logo-xs logo-no-bg">
						<?php include('components/logo.php'); ?>
					</a>
					<!-- TODO: change quote -->
					<blockquote>
					 	<span>Dizainas nėra tai, kaip tai atrodo ar ką primena.</span>
						<span>Dizainas yra tai, kaip tai veikia.</span>
						<footer>- Steve Jobs</footer>
					</blockquote >
					<a href="mailto:hello@victorlava.com">hello@victorlava.com</a>
				</div>
				<div class="col-sm-6 col-md-3">
					<!--  TODO: h5 really? -->
					<h5 class="title">Menu</h5>
					<ul>
						<li>
							<a href="/paslaugos/web-dizainas/" title="Web dizaino paslaugos" class="slide-in-parent">
								Home
							</a>
						</li>
						<li>
							<a href="/projektai/" title="Interneto projektai" class="slide-in-parent">
								Projects
							</a>
						</li>
						<li>
							<a href="/projektai/" title="Interneto projektai" class="slide-in-parent">
								Blog
							</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-6 col-md-3">
					<h5 class="title">
						More
					</h5>
					<ul>
						<li>
							<a href="/apie-mane/" title="Apie mane" class="slide-in-parent">
								About me
							</a>
						</li>
						<li>
							<a href="/apie-mane/" title="Apie mane" class="slide-in-parent">
								Services
							</a>
						</li>
						<li>
							<a href="/kontaktai/" title="Susisiekti" class="slide-in-parent">
								Contact
							</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-12 col-md-3">
					<h5 class="title">Be social</h5>
					<ul>
						<li class="facebook">
							<a title="Facebook" target="_blank" class="slide-in-parent" href="https://www.facebook.com/vvictorlava">
								Facebook
							</a>
						</li>
						<li class="linkedin">
							<!--  TODO: add linkedin -->
							<a title="LinkedIn" target="_blank" class="slide-in-parent" href="">
								LinkedIn
							</a>
						</li>
						<li class="linkedin">
							<!--  TODO: add linkedin -->
							<a title="LinkedIn" target="_blank" class="slide-in-parent" href="">
								Instagram
							</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<p class="copyright">
					Visos teisės saugomos © 2012-2018, <a href="/" title="Web programuotojas - Viktoras Lava">viktoraslava.lt</a>
				</p>
			</div>
		</div>
	</footer>

	<script type="text/javascript">

	$(document).ready(function(){

		var sectionOffset = 300;

		app.animateHomePage();

		setTimeout(function() {
			app.animateLinks('#navigation'); // animate navigation links
		}, 400);

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
	})
	</script>

	<script type="text/javascript" src="http://localhost:35729/livereload.js"></script>
</body>
</html>
