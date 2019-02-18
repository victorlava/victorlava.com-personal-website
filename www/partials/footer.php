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

		app.animateHomePage();

		setTimeout(function() {
			app.animateLinks('#navigation'); // animate navigation links
		}, 400);

		$('#navigation').sexymenu({
			classes: {
			  visible: 'visible',
			  detached: 'detached'
			},

			topOffset: 250,
			bottomOffset: 150,
			hideShowOffset: 10,

			delay: 30
		});

	});

	</script>
	<script type="text/javascript" src="/www/js/jquery.sexy-menu.min.js"></script>
	<script type="text/javascript" src="http://localhost:35729/livereload.js"></script>
</body>
</html>
