<?php include('partials/head.php'); ?>
<?php $whiteMenu = true; ?>
<body id="blog" class="padding-top" data-hijacking="off" data-animation="parallax" style="position:relative;">

    <?php include('partials/navigation.php'); ?>

    <!-- start of #home-page -->
    <main id="content" class="container-fluid">

        <div class="row">

            <?php include('partials/sidebar.php'); ?>

            <section class="article-feed col-12 col-md-8 col-lg-6">
                <?php foreach (range(1, 5) as $x) : ?>
                <article class="article">

                    <?php include('partials/feed-header.php'); ?>

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

<!-- end of #blog-page -->
<?php include('partials/footer.php') ?>
