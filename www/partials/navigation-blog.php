<nav id="navigation" class="navigation navigation-blog">

    <div id="navigation-open" class="hamburger hamburger--spring" type="button" onclick="app.openNavigation();">
      <div class="hamburger-box">
        <div class="hamburger-inner"></div>
      </div>
    </div>

    <ul class="menu menu-left">
        <li class="logo-mobile d-sm-block d-md-none">
            <a href="index.php" class="logo logo-black logo-xs">
                <?php include('components/logo.php'); ?>
            </a>
        </li>
        <li class="logo-wrapper slide-down d-none d-md-block">
            <a href="index.php" class="logo logo-black logo-xs">
                <?php include('components/logo.php'); ?>
            </a>
        </li>
        <li class="active">
            <a href="blog.php" class="slide-in-parent">
                Blog
            </a>
        </li>
        <li>
            <a href="about.php" class="slide-in-parent">
                About Me
            </a>
        </li>
        <li>
            <a href="#" class="slide-in-parent">
                Newsletter
            </a>
        </li>
    </ul>

    <ul class="menu menu-right">
        <li>
            <a href="index.php">
                <i class="fas fa-arrow-left"></i> Back to Intro
            </a>
        </li>
        <li>
            <a href="#">
                <i class="far fa-newspaper"></i>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-rss"></i>
            </a>
        </li>
        <li>
            <a href="http://github.com/">
                <i class="fab fa-github"></i>
            </a>
        </li>
    </ul>
</nav><!-- .navigation -->
<script type="text/javascript">
    app.hideLinks();
</script>
