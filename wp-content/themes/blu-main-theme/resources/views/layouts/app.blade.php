<a class="visually-hidden focus:not-visually-hidden" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

  <main id="main" class="main">
    <div class="container">
      @yield('content')
    </div>
  </main>

@include('sections.footer')
