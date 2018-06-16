<nav id="navigation" class="navigation">

    <div id="navigation-open" class="hamburger hamburger--spring" type="button" onclick="app.openNavigation();">
      <div class="hamburger-box">
        <div class="hamburger-inner"></div>
      </div>
    </div>

    <ul>
        <li class="logo-mobile d-sm-block d-md-none">
            <a href="#" class="logo logo-black logo-xs">
                <?php include('components/logo.php'); ?>
            </a>
        </li>
        <li>
            <a href="#" class="slide-in-parent">
                Projects
            </a>
        </li>
        <li class="logo-wrapper slide-down d-none d-md-block">
            <a href="#" class="logo logo-white logo-xs">
                <?php include('components/logo.php'); ?>
            </a>
        </li>
        <li>
            <a href="#" class="slide-in-parent">
                Blog
            </a>
        </li>
    </ul>
</nav><!-- .navigation -->
<script type="text/javascript">
    app.hideLinks();
</script>
