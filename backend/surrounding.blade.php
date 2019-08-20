@extends('web.layouts.web')

@section('css')

@endsection

@section('content')
 <!-- section 1 header -->
    <div
  class="tl-home-header position-relative height-fix"
  id="surrounding-header"
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
          {!! $text->where('section', 'child-text-big-image')->first()->text !!}
        </p>

        <!-- scroll down -->
        <a class="j-scroll" j-direction="scroll-section" j-target="surrounding-marker">
          <span></span><span></span><span></span>Scroll
        </a>
      </div>
    </div>
  </div>
</div>


    <!-- section 2 marker -->
    <div class="tl-mk-m tl-sec-padding-y" id="surrounding-marker">
  <div class="tl-container pad-more">
    <div class="tl-sd-m-title-grid">
      <div class="row">
        <!-- title -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h2 class="tl-sec-title no-gap text-brown">
            {!! $text->where('section', 'section-title-no-gap')->first()->text !!}
          </h2>
        </div>

        <!-- descr -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="tl-sd-m-descr">
            <p class="text-black mb-25">
              {!! $text->where('section', 'section-description')->first()->text !!}
            </p>

            <p class="text-black">
              {!! $text->where('section', 'section-description-2')->first()->text !!}
            </p>
          </div>
        </div>
      </div>
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


    <!-- section 3 our -->
    <div class="tl-mk-o tl-sec-padding-y" id="surrounding-our">
  <div class="tl-container pad-more">
    <!-- title -->
    <h2 class="tl-sec-title bordered-top text-center text-white">
      {!! $text->where('section', 'section-2-bordered-top')->first()->text !!}
    </h2>

    <!-- descr -->
    <div class="tl-mk-o tl-au-table">
      <div class="row">
        <!-- left -->
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
          <!-- international school -->
          <div class="tl-sd-table-item-wrapper">
            <div class="tl-au-table-item bg-brown">{!! $text->where('section', 'section-2-table-item')->first()->text !!}</div>

            {!! $text->where('section', 'section-2-table-item-value')->first()->text !!}
          </div>

          <!-- hospital -->
          <div class="tl-sd-table-item-wrapper">
            <div class="tl-au-table-item bg-brown">{!! $text->where('section', 'section-2-table-item-2')->first()->text !!}</div>

            {!! $text->where('section', 'section-2-table-item-value-2')->first()->text !!}
          </div>

          <!-- business place -->
          <div class="tl-sd-table-item-wrapper">
            <div class="tl-au-table-item bg-brown">{!! $text->where('section', 'section-2-table-item-3')->first()->text !!}</div>

            {!! $text->where('section', 'section-2-table-item-value-3')->first()->text !!}
          </div>
        </div>

        <!-- limit -->
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">&nbsp;</div>

        <!-- right -->
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
          <!-- private school -->
          <div class="tl-sd-table-item-wrapper">
            <div class="tl-au-table-item bg-brown">{!! $text->where('section', 'section-2-table-item-4')->first()->text !!}</div>

            {!! $text->where('section', 'section-2-table-item-value-4')->first()->text !!}
            
          </div>

          <!-- commercial convinience -->
          <div class="tl-sd-table-item-wrapper">
            <div class="tl-au-table-item bg-brown">{!! $text->where('section', 'section-2-table-item-5')->first()->text !!}</div>
            {!! $text->where('section', 'section-2-table-item-value-5')->first()->text !!}
            
          </div>
          
          <!-- access -->
          <div class="tl-sd-table-item-wrapper">
            <div class="tl-au-table-item bg-brown">{!! $text->where('section', 'section-2-table-item-6')->first()->text !!}</div>
            {!! $text->where('section', 'section-2-table-item-value-6')->first()->text !!}
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  

    <!-- section 4 future -->
    <div class="tl-home-ls" id="surrounding-future">
  <div class="tl-home-ls-slider-item" data-image="{{ asset('/images/gallery/'. $image->where('section', 'big-image-footer')->first()->image) }}" style="height: 100%; background-image: url('{{ asset('/images/gallery/'. $image->where('section', 'big-image-footer')->first()->image) }}'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
    <div class="tl-container tl-sec-padding-y">
      <h2 class="tl-sec-title text-center text-white gap-less">{!! $text->where('section', 'text-big-image-footer')->first()->text !!}</h2>
      <p class="tl-home-ls-text text-center text-white mb-25">
        {!! $text->where('section', 'text-big-image-footer-2')->first()->text !!}
      </p>
      <div class="tl-home-ls-button display-flex justify-content-center">
        <a href="{{ url('/future') }}" class="tl-button btn-white">See details</a>
      </div>
    </div>
  </div>
</div>


    <!-- section 5 brochure -->
    <div class="tl-up-rp-get bg-black tl-container pad-more display-flex justify-content-between align-items-center">
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
