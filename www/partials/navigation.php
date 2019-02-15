<?php $whiteMenu = ($whiteMenu) ? ' navigation-blog' : ''; ?>
<nav id="navigation" class="navigation<?=$whiteMenu?>">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <ul class="menu menu-left">
            <li class="logo-wrapper slide-down d-none d-md-block">
                <a href="index.php" class="logo logo-white">
                    <?php include('components/logo.php'); ?>
                </a>
            </li>
        </ul>
        <ul class="menu menu-right">
            <li>
                <a href="/paslaugos/web-dizainas/" class="btn btn-xs btn-primary">Contact</a>
            </li>
            <li class="navigation-mobile-background" onclick="app.openMobileNav(this);">
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
