@extends('web.layouts.web')

@section('css')

@endsection

@section('content')


<!-- section 1 header -->
<div class="tl-home-header position-relative" id="tower-tour-header">
  <!-- image background -->
  <div class="tl-home-header">
    <img src="{{ asset('/images/gallery/'. $image->where('section', 'big-image-header')->first()->image) }}">
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
        <!-- title -->
        <h1 class="tl-sec-title text-white gap-less">{{ $text->where('section', 'text-big-image')->first()->text }}</h1>

        <!-- text -->
        <p class="tl-header-text width-100 text-center text-white">
          {{ $text->where('section', 'text-big-image-2')->first()->text }}
        </p>

        <!-- scroll down -->
        <a class="j-scroll" j-direction="scroll-section" j-target="tower-tour-video">
          <span></span><span></span><span></span>Scroll
        </a>
      </div>
    </div>
  </div>
</div>


<!-- section 2 video -->
<div class="tl-home-vid" id="tower-tour-video">
  <div class="tl-home-vid-row display-flex">
    <!-- video -->
    <div class="tl-home-vid-video height-out">
      <iframe width="100%" height="100%" src="{{ $video->where('section', 'section-2-top-left-video')->first()->embed }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <!-- descr -->
    <div class="tl-home-vid-descr display-flex align-items-center">
      <div>
        <!-- title -->
        <div class="tl-home-vid-descr-title-wrapper display-flex align-items-center">
          <h2 class="tl-home-vid-descr-title little-border tl-sec-title text-white gap-0">
            {{ $text->where('section', 'section-2-title-text-right')->first()->text }}
          </h2>
        </div>

        <!-- descr text -->
        <div class="tl-home-vid-descr-text small-text">
          <p>
            {{ $text->where('section', 'section-2-desc-text-right')->first()->text }}
          </p>
        </div>
      </div>
    </div>
  </div>
</div>


    <!-- section 3 facilities -->
    <div class="tl-home-gallery tl-sec-padding-y" id="tower-tour-facilities">
  <div class="tl-container">
    <!-- title -->
    <h2 class="tl-sec-title text-white text-center bordered">
      {{ $text->where('section', 'section-3-title')->first()->text }}
    </h2>

    <!-- descr -->
    <p class="tl-tower-descr-text mb-25 text-white text-center">
      {{ $text->where('section', 'section-3-desc')->first()->text }}
    </p>

    <!-- gallery list -->
    <div class="tl-home-gallery-list no-gap">
      <div class="row">
        @foreach($image->where('section', 'section-3-multiple-image') as $i)
        <div class="tl-home-gallery-list-item col-lg-4 col-md-4 col-sm-2 col-xs-2">
          <a j-direction="show-image">
            <div data-image="{{ asset('images/gallery/'.$i->image) }}" style="height: 100%; background-image: url('{{ asset('images/gallery/'.$i->image) }}'); background-repeat: no-repeat; background-position: center center; background-size: cover;">&nbsp;</div>
          </a>
        </div>
        @endforeach
      </div>
    </div>

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


    <!-- section 4 actual -->
    <div class="tl-home-gallery bg-white tl-sec-padding-y" id="tower-tour-actual">
  <div class="tl-container">
    <!-- title, video -->
    <div class="tl-actual-tv display-flex">
      <!-- title -->
      <div class="tl-actual-tv-title text-center">
        <h2 class="titlee mb-10">
          {!! $text->where('section', 'section-4-title')->first()->text !!}
        </h2>
        <p class="text-black text-center">
          {!! $text->where('section', 'section-4-desc')->first()->text !!}
        </p>
      </div>

      <!-- video -->
      <div class="tl-actual-tv-video">
        <iframe width="100%" height="100%" src="{{ $video->where('section', 'section-4-video-right-side')->first()->embed }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>

    <!-- gallery list -->
    <div class="tl-home-gallery-list no-gap">
      <div class="row">
        @foreach($image->where('section', 'section-4-multiple-image') as $i)
        <div class="tl-home-gallery-list-item col-lg-4 col-md-4 col-sm-2 col-xs-2">
          <a j-direction="show-image">
            <div data-image="{{ asset('images/gallery/'.$i->image) }}" style="height: 100%; background-image: url('{{ asset('images/gallery/'.$i->image) }}'); background-repeat: no-repeat; background-position: center center; background-size: cover;">&nbsp;</div>
          </a>
        </div>
        @endforeach
      </div>
    </div>

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


    <!-- section 5 brochure -->
    <div class="tl-home-ls" id="tower-tour-brochure">
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

@include('web.include.brochure')

@endsection

@section('js')
@endsection