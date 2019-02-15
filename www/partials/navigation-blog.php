<nav id="navigation" class="navigation navigation-blog">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <!-- <div id="navigation-open" class="hamburger hamburger--spring" type="button" onclick="app.openNavigation();">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div> -->

        <ul class="menu menu-left">
            <li class="logo-mobile slide-down d-sm-block d-md-none">
                <a href="index.php" class="logo logo-white logo-xs">
                    <?php include('components/logo.php'); ?>
                </a>
            </li>
            <li class="logo-wrapper slide-down d-none d-md-block">
                <a href="index.php" class="logo logo-white logo-xs">
                    <?php include('components/logo.php'); ?>
                </a>
            </li>
            <!-- <li class="active">
                <a href="blog.php" class="slide-in-parent">
                    Blog
                </a>
            </li>
            <li>
                <a href="single.php" class="slide-in-parent">
                    Newsletter
                </a>
            </li> -->
        </ul>

        <ul class="menu menu-right">
            <li>
                <a href="/paslaugos/web-dizainas/" class="btn btn-xs btn-primary">Contact</a>
            </li>
            <li class="menu-background" onclick="app.openNav(this);">
                <div class="hamburger hamburger--spring" type="button">
                    <div class="hamburger-box">
                      <div class="hamburger-inner"></div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav><!-- .navigation -->
<script type="text/javascript">
    app.hideLinks();
</script>
