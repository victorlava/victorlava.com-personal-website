<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp
                          data-menu="closed"
  				                data-hijacking="off"
  				                data-animation="parallax">
    @php do_action('get_header') @endphp
    @include('partials.navigation-opened')

    <main class="main">
      @include('partials.navigation')
      @yield('content')
    </main>
    @if (App\display_sidebar())
      <aside class="sidebar">
        @include('partials.sidebar')
      </aside>
    @endif

    @include('components.cta')

    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
