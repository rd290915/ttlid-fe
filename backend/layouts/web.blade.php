<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home - Branz Simatupang</title>
    
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('assets_admin/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('/assets_web/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets_web/icon/css/font-awesome.min.css') }}">
    @section ('css')
    @show
  </head>

  <body>
    

  <!-- header -->
  <div class="tl-header bg-black" id="header">
  <div class="tl-header-inner display-flex justify-content-between align-items-center">
    <!-- logo -->
    <div class="tl-header-logo">
      <a class="logo-white">
        <img src="{{ asset('/assets_web/img/logos/logo-white.png') }}" alt="Branz Simatupang">
      </a>
    </div>

    <!-- navicon -->
    <a
      class="tl-header-navicon" j-direction="sidebar-show">
      <i class="fa fa-navicon"></i>
    </a>

    <!-- button japan -->
    <a class="tl-header-button-fr mobile display-flex justify-content-center align-items-center" href="#rent" target="_blank">
      賃貸希望の方へ
    </a>

    @include('web.layouts.menu')
    
  </div>
</div>

  <!-- content -->
  <div class="tl-content sec-2" id="content-body">
      @yield('content')
  </div>

  <!-- footer -->
   <div class="tl-footer sc-2 position-relative" id="footer">
  <div class="tl-container-fluid display-flex justify-content-between align-items-center">
    <div>
      <!-- logo -->
      <div class="tl-footer-logo mb-5">
        <a>
          <img src="{{ asset('/assets_web/img/logos/logo-footer.png') }}" alt="Toky Land Indonesia">
        </a>
      </div>

      <!-- copyright -->
      <div class="tl-footer-cr">
        BRANZ Simatupang Official Site &copy;TOKYU LAND INDONESIA | <a href="{{ url('/disclaimer') }}" style="text-decoration: underline; ;color: white;"><span>Disclaimer</span></a>
      </div>
    </div>

    <div>
      <div class="tl-footer-2-menu display-flex align-items-center">
        <!-- business hour -->
        <div class="tl-footer-2-menu-item">
          <div class="tl-footer-2-menu-info text-center">
            <h3 class="trajanpro font-size-14px text-brown mb-5">Business Hour</h3>
            <h4 class="font-size-24px text-white">{!! $global->where('section', 'business-hour')->first()->text !!}</h4>
          </div>
        </div>

        <!-- marketing gallery -->
        <div class="tl-footer-2-menu-item">
          <div class="tl-footer-2-menu-info text-center">
            <h3 class="trajanpro font-size-14px text-brown mb-5">Marketing Gallery</h3>
            <h4 class="font-size-24px text-white">{!! $global->where('section', 'telp-marketing-gallery')->first()->text !!}</h4>
          </div>
        </div>

        <!-- sosmed -->
        <div class="tl-footer-2-menu-item">
          <div class="tl-footer-sosmed display-flex justify-content-end align-items-center">
              <a href="{!! $global->where('section', 'facebook-url')->first()->text !!}" class="display-block"><i class="fa fa-facebook-square"></i></a>
            <a href="{!! $global->where('section', 'instagram-url')->first()->text !!}" class="display-block"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('/assets_web/js/vendor.js') }} "></script>
    <script src="{{ asset('/assets_web/js/main.min.js') }}"></script>
    @section ('js')
    @show
  </body>
</html>
