
@extends('web.layouts.web')

@section('css')

@endsection

@section('content')
<!-- section 1 header -->
<div class="tl-home-header position-relative" id="home-header">
  <div j-direction="slider">

    @foreach($image->where('section', 'multiple-image-1') as $i)

    <div class="position-relative">
      <!-- image background -->
      <div class="tl-home-header">
        <img src="{{ asset('/images/gallery/'.$i->image) }}">
      </div>

      <!-- #############################
        - Background opacity:
          - tujuannya dibuat bg opacity
            agar bisa diedit ketebalan
            opacitynya
      ############################## -->
      <div class="tl-home-header-op" style="opacity: 0.7;">&nbsp;</div>

      <!-- inner -->
      <div class="tl-home-header-inner">
        <!-- text, button -->
        <div class="tl-home-header-tb tl-container display-flex flex-wrap justify-content-center align-items-center">
          <div class="display-flex flex-wrap justify-content-center">
            <!-- text -->
            <h1 class="tl-home-header-text width-100 text-center">
              {{ $i->detail }}
            </h1>
    
            <!-- button -->
            <div class="tl-home-header-button">
              <a class="tl-button btn-white" href="{{ url('/tower-tour') }}">
                Tower Tour Preview
              </a>
            </div>
    
            <!-- scroll down -->
            <a class="j-scroll" j-direction="scroll-section" j-target="home-gallery">
              <span></span><span></span><span></span>Scroll
            </a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  <!-- fireflies -->
  <div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
  </div>
</div>


<!-- section 2 gallery -->
<div class="tl-home-gallery tl-sec-padding-y" id="home-gallery">
  <div class="tl-container">
    <!-- title -->
    <h2 class="tl-sec-title text-white text-center">
      {!! $text->where('section', 'text-2-about-us')->first()->text !!}
    </h2>

    <!-- gallery list -->
    <div class="tl-home-gallery-list no-gap">
      <div class="row">

        @foreach($image->where('section', 'multiple-image-2') as $i)
        <div class="tl-home-gallery-list-item col-lg-3 col-md-3 col-sm-2 col-xs-2">
          <a j-direction="show-image" j-height-width-equal>
            <div
              data-image="{{ asset('/images/gallery/'.$i->image) }}"
              style="height: 100%; background-image: url('{{ asset('/images/gallery/'.$i->image) }}'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
              &nbsp;
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>

    <!-- button -->
    <!-- <div class="tl-home-galler-button display-flex justify-content-center">
      <a class="tl-button btn-white">See All Photos</a>
    </div> -->

    <!-- image popup -->
    <div class="tl-popup" id="popup-show-img-wrapper">
      <div class="tl-popup-img-inner position-relative">
        <a class="tl-popup-close" id="popup-show-img-close"><i class="fa fa-times"></i></a>
        <div class="tl-popup-img-show" id="popup-show-img-place">
          <img src="">
        </div>
      </div>
    </div>
  </div>
</div>


<!-- section 3 facilities -->
<div class="tl-home-fac tl-sec-padding-y" id="home-facilities">
  <div class="tl-container">
    <!-- title -->
    <h2 class="tl-sec-title text-black text-center">
      {!! $text->where('section', 'text-3-facilities')->first()->text !!}
    </h2>

    <!-- list -->
    <div class="tl-home-fac-list no-gap text-center">
      <div class="row">
        @foreach($image->where('section', 'multiple-image-3') as $i)
        <div class="tl-home-fac-list-item col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="tl-home-fac-list-item-thumb">
            <div data-image="{{ asset('/images/gallery/'.$i->image) }}" class="tl-home-fac-list-item-bg" style="height: 100%; background-image: url('{{ asset('/images/gallery/'.$i->image) }}'); background-repeat: no-repeat; background-position: center center; background-size: cover;">&nbsp;</div>
          
            <div class="tl-home-fac-list-item-text display-flex justify-content-center align-items-center">{{ $i->title }}</div>
          </div>
          <h3 class="tl-home-fac-list-item-title">
            {{ $i->detail }}
          </h3>
        </div>
        @endforeach

      </div>
    </div>

    <!-- button -->
    <div class="tl-home-fac-button display-flex justify-content-center mt-50">
      <a class="tl-button btn-black" href="{{ url('/facilities') }}" style="text-decoration: none;">Explore Facilities</a>
    </div>
  </div>
</div>
    
<!-- section 4 landscape -->
<div class="tl-home-ls" id="home-landscape">
  <!-- slider -->
  <div class="tl-home-landscape-slider" id="home-landscape-slider">
    @foreach($image->where('section', 'multiple-image-4') as $i)
    <div class="tl-home-ls-slider-item" j-direction="parallax" data-parallax-bg-image="{{ asset('/images/gallery/'.$i->image) }}">
      <div class="tl-container tl-sec-padding-y display-flex align-items-center">
        <div>
          <h2 class="tl-sec-title text-white gap-less">{{ $i->title }}</h2>
          <p class="tl-home-ls-text text-white mb-25">
            {{ $i->detail }}
          </p>
          <div class="tl-home-ls-button display-flex">
            <a class="tl-button btn-white" href="{{ url('/landscape-design') }}" style="text-decoration: none;">See More</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
  

<!-- section 5 video -->
<div class="tl-home-vid" id="home-video">
  <div class="tl-home-vid-row display-flex">
    <!-- video -->
    <!-- video -->
    <div class="tl-home-vid-video">
      <div style="height: 100%; background-image: url('{{ asset('/images/gallery/'. $image->where('section', 'video-thumbnail')->first()->image) }}'); background-repeat: no-repeat; background-position: center center; background-size: cover;">&nbsp;</div>
    </div>

    <!-- descr -->
    <div class="tl-home-vid-descr display-flex align-items-center">
      <div>
        <!-- title -->
        <div class="tl-home-vid-descr-title-wrapper display-flex align-items-center">
          <img src="{{ asset('assets_web/img/images/japan-flag.png') }}" class="mr-10" alt="Flag">
          <h2 class="tl-home-vid-descr-title tl-sec-title bordered-bottom text-white gap-0">
            ALL JAPANESE PERFECTION
          </h2>
        </div>

        <!-- descr text -->
        <div class="tl-home-vid-descr-text mb-25">
          <p class="text-center">{!! $text->where('section', 'text-6-360-video')->first()->text !!}</p>
        </div>

        <!-- button -->
        <div class="tl-home-vid-button">
          <a
            class="tl-button btn-white"
            j-direction="popup-video-show"
            j-popup-video-target="popup-video"
            j-popup-video-embed="{{ $video->where('section', 'video-1')->first()->embed }}">
            Explore
          </a>
        </div>
      </div>
    </div>

    <!-- popup video -->
    <div
      class="tl-popup"
      id="popup-video-video"
      j-popup-video-place="popup-video">
      <div class="tl-popup-video-inner position-relative">
        <a
          class="tl-popup-close"
          j-direction="popup-video-hide"
          j-popup-video-hide-target="popup-video">
          <i class="fa fa-times"></i>
        </a>

        
      </div>
    </div>
  </div>
</div>


<!-- section 6 unit plan -->
<div class="tl-home-ls" id="home-plan">
  <div class="tl-home-ls-slider-item" j-direction="parallax" data-parallax-bg-image="{{ asset('/images/gallery/'. $image->where('section', 'image-5')->first()->image) }}">
    <div class="tl-container tl-sec-padding-y display-flex align-items-center">
      <div>
        <h2 class="tl-sec-title text-white gap-less">{!! $text->where('section', 'text-7-unit-plan')->first()->text !!}</h2>
        <p class="tl-home-ls-text text-white mb-25">{!! $text->where('section', 'text-8-unit-plan-isi')->first()->text !!}
        </p>
        <div class="tl-home-ls-button display-flex">
          <a class="tl-button btn-white" href="{{ url('/unit-plan') }}" style="text-decoration: none;">Explore Units</a>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- section 7 about -->
<div class="tl-home-au tl-sec-padding-y" id="home-about">
  <div class="tl-container">
    <!-- title -->
    <h2 class="tl-sec-title text-black text-center">
      {!! $text->where('section', 'text-9-company-overview')->first()->text !!}
    </h2>

    <!-- chart -->
    <div class="tl-home-au-chart text-center mb-25">
      <img src="{{ asset('/assets_web/img/images/about-us-chart.jpg') }}" alt="Chart">
    </div>

    <!-- statistic -->
    <div class="tl-home-au-stat">
      <div class="row">
        <!-- employee -->
        <div class="tl-home-au-stat-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="wrapp employee">
            <div class="tl-home-au-stat-item-icon text-center">
              <img src="{{ asset('/assets_web/img/icons/employee.png') }}" alt="Employee">
            </div>
            <div class="tl-home-au-stat-item-descr text-center">
              <h2 class="valuee">{!! $text->where('section', 'no-employess')->first()->text !!}</h2>
              <h4 class="titlee">Employess</h4>
            </div>
          </div>
        </div>

        <!-- companies -->
        <div class="tl-home-au-stat-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="wrapp companies">
            <div class="tl-home-au-stat-item-icon">
              <img src="{{ asset('/assets_web/img/icons/group-companies.png') }}" alt="Group Companies">
            </div>
            <div class="tl-home-au-stat-item-descr text-center">
              <h2 class="valuee">{!! $text->where('section', 'no-group-companies')->first()->text !!}</h2>
              <h4 class="titlee">Group Companies</h4>
            </div>
          </div>
        </div>

        <!-- consolidated -->
        <div class="tl-home-au-stat-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="wrapp consolidated">
            <div class="tl-home-au-stat-item-icon">
              <img src="{{ asset('/assets_web/img/icons/consolidated.png') }}" alt="Consolidated Net Sales">
            </div>
            <div class="tl-home-au-stat-item-descr">
              <h2 class="valuee">{!! $text->where('section', 'no-consolidated-net-sales')->first()->text !!} <span>BILLION</span></h2>
              <h4 class="titlee text-center">Consolidated Net Sales</h4>
            </div>
          </div>
        </div>

        <!-- sqm -->
        <div class="tl-home-au-stat-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="wrapp sqm">
            <div class="tl-home-au-stat-item-icon">
              <img src="{{ asset('/assets_web/img/icons/sqm.png') }}" alt="Sqm Office Space Leasing">
            </div>
            <div class="tl-home-au-stat-item-descr">
              <h2 class="valuee text-center">{!! $text->where('section', 'no-sqm-office-space-leasing')->first()->text !!}</h2>
              <h4 class="titlee">Sqm Office Space Leasing</h4>
            </div>
          </div>
        </div>

        <!-- condominium -->
        <div class="tl-home-au-stat-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="wrapp condominium">
            <div class="tl-home-au-stat-item-icon">
              <img src="{{ asset('/assets_web/img/icons/condominium.png') }}" alt="Condominiums per year">
            </div>
            <div class="tl-home-au-stat-item-descr">
              <h2 class="valuee">{!! $text->where('section', 'no-condominiums-per-year')->first()->text !!}</h2>
              <h4 class="titlee">Condominiums per year</h4>
            </div>
          </div>
        </div>

        <!-- office -->
        <div class="tl-home-au-stat-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="wrapp office">
            <div class="tl-home-au-stat-item-icon">
              <img src="{{ asset('/assets_web/img/icons/offices.png') }}" alt="Office Buildings in Tokyo">
            </div>
            <div class="tl-home-au-stat-item-descr">
              <h2 class="valuee">{!! $text->where('section', 'no-office-buildings-in-tokyo')->first()->text !!}</h2>
              <h4 class="titlee">Office Buildings in Tokyo</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- section 8 brochure -->
<div class="tl-home-ls" id="home-brochure">
  <div class="tl-home-ls-slider-item height-auto" data-image="{{ asset('/images/gallery/'. $image->where('section', 'request-brochure-background')->first()->image) }}" style="height: 100%; background-image: url('{{ asset('/images/gallery/'. $image->where('section', 'request-brochure-background')->first()->image) }}'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
    <div class="tl-container tl-sec-padding-y text-center">
      <h2 class="tl-sec-title text-white gap-less">Get and Download Our Brochure!</h2>
      <div class="tl-home-ls-button display-flex justify-content-center">
        <a
          class="tl-button btn-white"
          j-direction="popup-show"
          j-popup-target="brochure-form">
          Request Brochure!
        </a>
      </div>
    </div>
  </div>
</div>

<!-- section 9 location -->
<div class="tl-home-lc tl-sec-padding-y" id="home-location">
  <div class="tl-container">
    <!-- title -->
    <h2 class="tl-sec-title text-white text-center">
      Location
    </h2>

    <!-- map -->
    <div class="tl-home-lc-map">
      <div class="row align-items-center">
        <div class="col-md-6 col-sm-12">
          <iframe width="1126" height="460" id="gmap_canvas" src="{!! $text->where('section', 'google-maps-url')->first()->text !!}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
        <div class="col-md-6 col-sm-12">
          <h4 class="tb-home-lc-map-title mb-25">Marketing Gallery Office</h4>
          <img src="{{ asset('/images/gallery/'. $image->where('section', 'image-map')->first()->image) }}" alt="Map">
        </div>
      </div>
    </div>
  </div>
</div>

@include('web.include.brochure')
  </div>

@endsection

@section('js')
@endsection