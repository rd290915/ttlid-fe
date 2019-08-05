@extends('web.layouts.web')

@section('css')

@endsection

@section('content')
  
  <div
  class="tl-home-header position-relative height-fix"
  id="unit-header"
  j-direction="parallax"
  data-parallax-bg-image="{{ asset('/images/gallery/'. $image->where('section', 'unit-plan-top-img')->first()->image) }}">
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
        <h1 class="tl-sec-title text-white gap-less">{!! $text->where('section', 'top-image-title')->first()->text !!}</h1>

        <!-- text -->
        <p class="tl-header-text width-100 text-center text-white">
          {!! $text->where('section', 'top-image-sub-title')->first()->text !!}
        </p>

        <!-- scroll down -->
        <a class="j-scroll" j-direction="scroll-section" j-target="unit-living">
          <span></span><span></span><span></span>Scroll
        </a>
      </div>
    </div>
  </div>
</div>


    <!-- section 2 living -->
    <div class="tl-lad-design tl-sec-padding-y" id="unit-living">
  <div class="tl-container pad-more">
    <!-- title -->
    <h2 class="tl-sec-title bordered-top text-black text-center more-pad">
      {!! $text->where('section', 'living-style-title')->first()->text !!}
    </h2>

    <!-- descr -->
    <div class="tl-lad-descr tl-up-descr mb-50">
      <p class="text-center text-black">{!! $text->where('section', 'living-style-desc-1')->first()->text !!}
      </p>
    </div>

    <!-- images -->
    <div class="tl-up-image mb-50">
      <div>
        <img src="{{ asset('/images/gallery/'. $image->where('section', 'livingstyle-img')->first()->image) }}">
      </div>
    </div>

    <!-- descr 2 -->
    <div class="tl-lad-descr tl-up-descr">
      <p class="text-center text-black">
        {!! $text->where('section', 'living-style-desc-2')->first()->text !!}
      </p>
    </div>
  </div>
</div>


    <!-- section 3 luxurious -->
    <div class="tl-lad-design tl-sec-padding-y" id="unit-luxurious">
  <div class="tl-container pad-more">
    <!-- title -->
    <h2 class="tl-sec-title bordered-top text-black text-center more-pad">
      {!! $text->where('section', 'luxurious-style-title')->first()->text !!}
    </h2>

    <!-- images -->
    <div class="tl-up-image no-pad mb-50">
      <div class="display-flex">
        <div data-image="{{ asset('/images/gallery/'. $image->where('section', 'luxuriousstyle-img')->first()->image) }}" style="height: 100%; width: 50%; background-image: url('{{ asset('/images/gallery/'. $image->where('section', 'luxuriousstyle-img')->first()->image) }}'); background-repeat: no-repeat; background-position: center center; background-size: cover;">&nbsp;</div>
        <div data-image="{{ asset('/images/gallery/'. $image->where('section', 'luxuriousstyle-img')->first()->image) }}" style="height: 100%; width: 50%; background-image: url('{{ asset('/images/gallery/'. $image->where('section', 'luxuriousstyle-img')->first()->image) }}'); background-repeat: no-repeat; background-position: center center; background-size: cover;">&nbsp;</div>
      </div>
    </div>

    <!-- descr -->
    <div class="tl-lad-descr tl-up-descr">
      <p class="text-center text-black">
        {!! $text->where('section', 'luxurious-style-desc')->first()->text !!}
      </p>
    </div>
  </div>
</div>


    <!-- section 4 japanese -->
    <div class="tl-lad-design tl-sec-padding-y" id="unit-japanese">
  <div class="tl-container pad-more">
    <!-- title -->
    <h2 class="tl-sec-title bordered-top text-black text-center more-pad">
      {!! $text->where('section', 'japanese-style-title')->first()->text !!}
    </h2>

    <!-- images -->
    <div class="tl-up-image mb-50">
      <div>
        <img src="{{ asset('/images/gallery/'. $image->where('section', 'japanesestyle-img')->first()->image) }}">
      </div>
    </div>

    <!-- descr -->
    <div class="tl-lad-descr tl-up-descr">
      <p class="text-center text-black">
        {!! $text->where('section', 'japanese-style-desc')->first()->text !!}
      </p>
    </div>
  </div>
</div>


    <!-- section 5 room -->
    <div class="tl-up-rp" id="unit-room-plans">
  <!-- section filter -->
  <div class="tl-up-rp-filter tl-container">
    <!-- filter -->
    <div class="tl-up-rp-filter-wrap display-flex justify-content-center align-items-center">
      <!-- title -->
      <h1 class="tl-up-rp-filter-title tl-sec-title gap-0 text-white">Room Plan</h1>

      <!-- form -->
      <div class="tl-up-rp-filter-form">
        <form class="tl-up-rp-filter-form-wrap display-flex">
          <!-- select -->
          <div class="tl-up-rp-filter-select">
            <select class="tl-field-select">
              <option value="north-tower" selected>North Tower</option>
            </select>
          </div>

          <!-- list type -->
          <div class="tl-up-rp-filter-type display-flex">
            <a class="tl-up-rp-filter-type-item active">2 Bed Type</a>
            <a class="tl-up-rp-filter-type-item">1 Bed Type</a>
          </div>
        </form>
      </div>
    </div>

    <!-- name -->
    <h4 class="tl-up-rp-filter-name tranjanpro-bold text-center font-size-18px text-white">
      125sqm(Net)
    </h4>
  </div>

  <!-- section image -->
  <div class="tl-up-rp-result tl-container pad-more text-center">
    <img src="{{ asset('/images/gallery/'. $image->where('section', 'bottom-room-plan-1')->first()->image) }}" alt="Room Plans"> 
  </div>
</div>


    <!-- section 6 brochure -->
    <div class="tl-up-rp-get tl-container pad-more display-flex justify-content-between align-items-center">
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
