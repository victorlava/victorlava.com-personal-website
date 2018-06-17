<?php include('partials/head.php'); ?>

<body id="blog" data-hijacking="off" data-animation="parallax">
    <?php include('partials/navigation-blog.php'); ?>
    <!-- start of #home-page -->
    <main class="container-fluid">

        <div class="row">

            <?php include('partials/sidebar.php'); ?>

            <section class="article-feed col-12 col-md-8 col-lg-6">

                <?php foreach (range(1, 5) as $x) : ?>
                <article class="article">

                    <?php include('partials/category-header.php'); ?>

                    <div class="article-image">
                        <img src="https://freeforcommercialuse.net/wp-content/uploads/2018/02/msp_1711_8601.jpg" alt="">
                    </div>

                    <div class="article-content">

                        <p>Lorem <a href="https://www.google.com/">ipsum</a> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </article>
                <?php endforeach; ?>

            </section>

            <?php include('partials/sticky.php'); ?>

        </div>

    </main> <!-- .container -->

    <script src="/js/main.js"></script> <!-- Resource jQuery -->
<!-- end of #home-page -->
<?php include('partials/footer.php') ?>
