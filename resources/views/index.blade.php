@extends('layouts.app')

@section('content')
<section id="start" class="section section-full">

    <div class="depth-js">
        <div class="background" data-depth="0.3"></div>
        <div class="victor" data-depth="0.4"></div>
    </div>

    <div class="heading fade-in">
        <header>
          <h1 class="js-typed">Hello!</h1>
        </header>

        <p class="text fading-text">
          <span>esu laisvai samdomas web programuotojas ir lektorius iš</span>
          <span>Vilniaus. Kuriu internetines svetaines pastaruosius</span>
          <span>6 metus Lietuvos, Švedijos ir Australijos rinkoms</span>
          <span class="hidden-xs">Dėstau programavimą <a href="http://3wa.lt" target="_blank" title="3W Academy">3WA</a> akademijoje.</span>
        </p>

        <a href="/paslaugos/web-dizainas/" class="btn btn-primary">Paslaugos</a>
    </div>

    @@include('components.icon-mouse')

</section>

<section id="lenndy" class="section section-project section-fading section-parallax">
    <div class="container">
        <div class="heading">
            <header>
              <h2 class="slide-in-parent">Lenndy</h2>
            </header>

            <p class="text fading-text">
              <span>Lenndy yra pirmoji Lietuvoje sutelktinio finansavimo platforma skirta verslui.</span>
              <span>Šiuo metu platforma yra pritraukusi virš 250,000€ investicijų.</span>
            </p>

        </div>

        <div class="btn-wrapper">
            <a href="#" class="btn btn-primary">Peržiūrėti</a>
            <span class="btn btn-line d-none d-md-block slide-in-parent"></span>
            <h3 class="slide-in-parent">Web dizainas ir front-end</h3>
        </div>

        <img src="@asset('/images/projects/lenndy-crowdfunding.jpg')" class="image image-border" alt="">
    </div>
</section>


<section id="amplify" class="section section-project section-fading section-parallax">
    <div class="container">
        <div class="heading">
            <header>
              <h2 class="slide-in-parent">Amplify</h2>
            </header>

            <p class="text fading-text">
              <span>Mano tikslas buvo sukurti naują dizainą "Amplify Digital Stockholm"</span>
              <span>įmonei ir pritaikyti jį WordPress turinio valdymo sistemai.</span>
            </p>

        </div>

        <div class="btn-wrapper">
            <a href="#" class="btn btn-primary">Peržiūrėti</a>
            <span class="btn btn-line d-none d-md-block slide-in-parent"></span>
            <h3 class="slide-in-parent">Web dizainas ir Wordpress</h3>
        </div>

        <img src="@asset('images/projects/amplify-digital-stockholm.jpg')" class="image image-border" alt="">
    </div>
</section>
@endsection
