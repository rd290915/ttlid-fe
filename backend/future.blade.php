@extends('web.layouts.web')

@section('css')

@endsection

@section('content')
  
  <div
  class="tl-home-header position-relative height-fix"
  id="future-header"
  j-direction="parallax"
  data-parallax-bg-image="{{ asset('/images/gallery/'. $image->where('section', 'big-image-header')->first()->image) }}">
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
        <h1 class="tl-sec-title text-white gap-less">{!! $text->where('section', 'text-big-image')->first()->text !!}</h1>

        <!-- text -->
        <p class="tl-header-text width-100 text-center text-white">
          {!! $text->where('section', 'text-big-image-2')->first()->text !!}
        </p>

        <!-- scroll down -->
        <a class="j-scroll" j-direction="scroll-section" j-target="future-marker">
          <span></span><span></span><span></span>Scroll
        </a>
      </div>
    </div>
  </div>
</div>


<!-- section 2 marker -->
<div class="tl-mk tl-sec-padding-y" id="future-marker">
  <div class="tl-container pad-more">
    <!-- title -->
    <h2 class="tl-sec-title text-white bordered-top text-center">
      {!! $text->where('section', 'section-title-text-white')->first()->text !!}
    </h2>

    <!-- image -->
    <div class="tl-mk-image mb-50">
      <img src="{{ asset('/images/gallery/'. $image->where('section', 'section-image')->first()->image) }}">
    </div>

    <!-- descr -->
    <div class="tl-mk-descr1 mb-50">
      <p class="text-white text-center mb-25">
        {!! $text->where('section', 'section-description-text-white')->first()->text !!}
      </p>
    </div>

    <!-- map -->
    <div class="tl-mk-map">
      <div class="tl-mk-map-item">
        <div><img src="{{ asset('/images/gallery/'. $image->where('section', 'section-map-1')->first()->image) }}" alt="Map 1"></div>
        <div class="mobile"><img src="{{ asset('/images/gallery/'. $image->where('section', 'section-map-1')->first()->image) }}" alt="Map 1"></div>
      </div>
    </div>
  </div>
</div>


    <!-- section 3 brochure -->
    <div class="tl-up-rp-get bg-silver tl-container pad-more display-flex justify-content-between align-items-center">
  <!-- title -->
  <h2 class="tl-up-rp-get-title">Get and Download Our Brochure!</h2>

  <!-- button -->
  <a
    class="tl-button btn-brown"
    j-direction="popup-show"
    j-popup-target="brochure-form">
    Request Brochure!
  </a>
</div>

@include('web.include.brochure')
 
@endsection

@section('js')
@endsection
