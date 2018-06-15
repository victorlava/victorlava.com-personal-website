<?php include('partials/head.php'); ?>

<body id="blog" data-hijacking="off" data-animation="parallax">
    <?php include('partials/navigation.php'); ?>
    <!-- start of #home-page -->
    <main class="container-fluid">

        <div class="row">

            <?php include('partials/sidebar.php'); ?>

            <section class="article-feed col-6">
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

            <aside class="sticky col-3">
                <div class="featured">
                    <h3 class="featured-title">Weekly Web Development Goodies</h3>
                    <div class="featured-content col-md-12">
                        <div class="featured-image">
                            <img class="" src="http://codropspz.tympanus.netdna-cdn.com/codrops/wp-content/uploads/2015/05/Collective170.png">
                        </div>

                        <div class="collective-wrapper">
                            <ul>
                                <li>
                                    <a href="#">The Art Of The SVG Filter</a>
                                </li>
                                <li>
                                    <a href="#">10 year of YouTube</a>
                                </li>
                                <li>
                                    <a href="#">Vibrant.js</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary btn-square">See more...</a>
                </div>
            </aside>

        </div>

    </main> <!-- .container -->

    <?php include('components/cta.php'); ?>

    <script src="/js/main.js"></script> <!-- Resource jQuery -->
<!-- end of #home-page -->
<?php include('partials/footer.php') ?>
