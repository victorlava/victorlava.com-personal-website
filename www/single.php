<?php include('partials/settings.php'); ?>
<?php $settings['id'] = 'blog'; $settings['whiteMenu'] = true; ?>

<?php include('partials/head.php'); ?>
<?php include('partials/navigation.php'); ?>

    <main class="container-fluid">

        <div class="row">

            <?php include('partials/sidebar.php'); ?>

            <section class="article-feed col-12 col-md-8 col-lg-9">
                <article class="article">

                    <?php include('partials/page-header.php'); ?>

                    <div class="article-image">
                        <img src="https://freeforcommercialuse.net/wp-content/uploads/2018/02/msp_1711_8601.jpg" alt="">
                    </div>

                    <div class="article-content">

                        <p>Lorem <a href="https://www.google.com/">ipsum</a> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>

            </section>
        </div>

    </main> <!-- .container -->

    <script src="/js/main.js"></script> <!-- Resource jQuery -->
<!-- end of #home-page -->
<?php include('partials/footer.php') ?>
