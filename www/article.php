<?php include('partials/settings.php'); ?>
<?php $settings['id'] = 'blog'; $settings['whiteMenu'] = true; ?>

<?php include('partials/head.php'); ?>

    <?php include('partials/navigation.php'); ?>
    <main class="container-fluid">

        <div class="row">

            <?php include('partials/sidebar.php'); ?>

            <section class="article-feed col-12 col-md-8 col-lg-9">

                <a href="blog.php" class="article-return btn btn-primary btn-text btn-xs">
                    <i class="fas fa-arrow-left"></i>
                    Return back
                </a>

                <article class="article">

                    <?php include('partials/article-header.php'); ?>

                    <div class="article-image">
                        <img src="https://freeforcommercialuse.net/wp-content/uploads/2018/02/msp_1711_8601.jpg" alt="">
                    </div>

                    <div class="article-content">

                        <p>Lorem <a href="https://www.google.com/">ipsum</a> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>

                    <div class="article-footer">
                        <div id="disqus_thread"></div>
                        <script>

                        /**
                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                        /*
                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        */
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://victorlava-1.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    </div>
                </article>
            </section>
        </div>

    </main> <!-- .container -->

    <script src="/js/main.js"></script> <!-- Resource jQuery -->
<!-- end of #home-page -->
<?php include('partials/footer.php') ?>
