@extends('web.layouts.web')

@section('css')

@endsection

@section('content')
  

  <div
  class="tl-home-header position-relative height-fix"
  id="concept-header"
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
          <a class="j-scroll" j-direction="scroll-section" j-target="concept-concept-1">
            <span></span><span></span><span></span>Scroll
          </a>
        </div>
      </div>
    </div>
  </div>
  

    <!-- section 2 concept 1 -->
    <div class="tl-con1 tl-sec-padding-y" id="concept-concept-1">
  <!-- title -->
  <div class="tl-container">
    <h2 class="tl-sec-title bordered-top text-white text-center more-pad">
      {!! $text->where('section', 'section-title-bordered-top')->first()->text !!}
    </h2>
  </div>

  <!-- descr -->
  <div class="tl-con1-descr">
    <div data-image="{{ asset('/images/gallery/'. $image->where('section', 'section-concept-desc')->first()->image) }}" style="height: 100%; background-image: url('{{ asset('/images/gallery/'. $image->where('section', 'section-concept-desc')->first()->image) }}'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
      <div class="tl-con1-descr-text">
        <p class="text-black mb-25">
          {!! $text->where('section', 'section-title-description-text')->first()->text !!}
        </p>
      </div>
    </div>
  </div>
</div>


    <!-- section 3 concept 2 -->
    <div class="tl-con2 tl-sec-padding-y" id="concept-concept-2">
  <!-- title -->
  <div class="tl-container">
    <h2 class="tl-sec-title bordered-top text-black text-center more-pad">
      {!! $text->where('section', 'section-2-title-bordered-top')->first()->text !!}
    </h2>
  </div>

  <!-- descr -->
  <div class="tl-con1-descr con2">
    <div data-image="{{ asset('/images/gallery/'. $image->where('section', 'section-2-concept-desc')->first()->image) }}" style="height: 100%; background-image: url('{{ asset('/images/gallery/'. $image->where('section', 'section-2-concept-desc')->first()->image) }}'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
      <div class="tl-con1-descr-text">
        <p class="text-white mb-25">
          {!! $text->where('section', 'section-2-description-text')->first()->text !!}
        </p>
      </div>
    </div>
  </div>
</div>


    <!-- section 4 brochure -->
    <div class="tl-up-rp-get bg-white tl-container pad-more display-flex justify-content-between align-items-center">
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
