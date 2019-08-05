@extends('web.layouts.web')

@section('css')

@endsection

@section('content')
<!-- section 1 header -->
<div class="tl-at-header" id="adventages-2-header">
  <!-- menu 1 -->
  <div class="tl-container pad-more display-flex justify-content-center align-items-center">
    <div class="tl-at-header-inner">
      <!-- menu 1 -->
      <div class="tl-at-menu-1 mb-50">
        <!-- title -->
        <h1 class="tl-sec-title text-center text-white">{!! $text->where('section', 'title')->first()->text !!}</h1>

        <!-- buttons -->
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <a class="tl-button btn-black-light">HOW ABOUT YOUR PRODUCT?</a>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <a class="tl-button btn-brown active">ONLY ONE</a>
          </div>
        </div>
      </div>

      <!-- menu 2 -->
      <div class="tl-at-menu-2">
        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a
              class="tl-at-menu-2-item display-flex align-items-center"
              j-direction="scroll-section"
              j-target="adventages-2-security">
              {!! $text->where('section', 'section-top-text-1')->first()->text !!}
            </a>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a
              class="tl-at-menu-2-item display-flex align-items-center"
              j-direction="scroll-section"
              j-target="adventages-2-revolution">
              {!! $text->where('section', 'section-top-text-2')->first()->text !!}
            </a>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a
              class="tl-at-menu-2-item display-flex align-items-center"
              j-direction="scroll-section"
              j-target="adventages-2-ultimate">
              {!! $text->where('section', 'section-top-text-3')->first()->text !!}
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- section 2 security -->
<div class="tl-at-tm tl-sec-padding-y" id="adventages-2-security">
  <div class="tl-container">
    <!-- title -->
    <h2 class="tl-sec-title bordered-top text-center">
      {!! $text->where('section', 'title-2')->first()->text !!}
    </h2>

    <!-- descr -->
    <div class="tl-at-sc-descr">
      <div class="row">
        <div class="tl-at-sc-descr-images col-md-4">
          <div><img src="{{ asset('/images/gallery/'. $image->where('section', 'image-1')->first()->image) }}"></div>
          <div class="mobile"><img src="{{ asset('/images/gallery/'. $image->where('section', 'image-1')->first()->image) }}"></div>
        </div>

        <div class="tl-at-sc-descr-text col-md-4 text-center">
          <h3 class="tl-at-sc-descr-text-title opensans-bold font-size-18px text-brown mb-15">
            {!! $text->where('section', 'section-middle-title-1')->first()->text !!}
          </h3>
          <p class="tl-at-sc-descr-text-text">
            {!! $text->where('section', 'section-middle-description-1')->first()->text !!}
          </p>
        </div>

        <div class="tl-at-sc-descr-text col-md-4 text-center">
          <h3 class="tl-at-sc-descr-text-title opensans-bold font-size-18px text-brown mb-15">
            {!! $text->where('section', 'section-middle-title-2')->first()->text !!}
          </h3>
          <p class="tl-at-sc-descr-text-text">
            {!! $text->where('section', 'section-middle-description-2')->first()->text !!}
          </p>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- section 3 revolution -->
<div class="tl-at-revolution tl-sec-padding-y" id="adventages-2-revolution">
  <div class="tl-container pad-more">
    <!-- title -->
    <h2 class="tl-sec-title bordered-top text-center text-white">
      {!! $text->where('section', 'title-3')->first()->text !!}
    </h2>

    <!-- image -->
    <div class="tl-at-rv-image text-center mb-25">
      <img src="{{ asset('/images/gallery/'. $image->where('section', 'image-2')->first()->image) }}">
    </div>

    <!-- descr -->
    <div class="tl-at-rv-descr text-center">
      <h3 class="tl-at-rv-descr-title opensans-bold font-size-18px text-brown mb-15">
        {!! $text->where('section', 'section-middle-title-3')->first()->text !!}
      </h3>
      <p class="tl-at-rv-descr-text text-white">
        {!! $text->where('section', 'section-middle-description-3')->first()->text !!}
      </p>
    </div>
  </div>
</div>


<!-- section 4 ultimate -->
<div class="tl-at-ultimate tl-sec-padding-y" id="adventages-2-ultimate">
  <div class="tl-container pad-more">
    <!-- title -->
    <h2 class="tl-sec-title bordered-top text-center text-white">
      {!! $text->where('section', 'title-4')->first()->text !!}
    </h2>

    <!-- descr -->
    <div class="tl-at-um-descr">
      <div class="tl-at-um-d-item row align-items-center text-center mb-50">
        <div class="tl-at-um-d-i-image col-md-6 text-left"><img src="{{ asset('/images/gallery/'. $image->where('section', 'image-3')->first()->image) }}"></div>
        <div class="tl-at-um-d-i-descr col-md-6">
          <h3 class="tl-at-um-d-i-d-title opensans-bold font-size-18px text-brown mb-25">
            {!! $text->where('section', 'section-middle-title-4')->first()->text !!}
          </h3>
          <p class="tl-at-um-d-i-d-text text-white">
            {!! $text->where('section', 'section-middle-description-4')->first()->text !!}
          </p>
        </div>
      </div>

      <div class="tl-at-um-d-item row align-items-center text-center mb-50">
        <div class="tl-at-um-d-i-descr col-md-6">
          <h3 class="tl-at-um-d-i-d-title opensans-bold font-size-18px text-brown mb-25">
            {!! $text->where('section', 'section-middle-title-5')->first()->text !!}
          </h3>
          <p class="tl-at-um-d-i-d-text text-white">
            {!! $text->where('section', 'section-middle-description-5')->first()->text !!}
          </p>
        </div>
        <div class="tl-at-um-d-i-image col-md-6 text-right"><img src="{{ asset('/images/gallery/'. $image->where('section', 'image-4')->first()->image) }}"></div>
      </div>

      <div class="tl-at-um-d-item row align-items-center text-center">
        <div class="tl-at-um-d-i-image col-md-6 text-left"><img src="{{ asset('/images/gallery/'. $image->where('section', 'image-5')->first()->image) }}"></div>
        <div class="tl-at-um-d-i-descr col-md-6">
          <h3 class="tl-at-um-d-i-d-title opensans-bold font-size-18px text-brown mb-25">
            {!! $text->where('section', 'section-middle-title-6')->first()->text !!}
          </h3>
          <p class="tl-at-um-d-i-d-text text-white">
            {!! $text->where('section', 'section-middle-description-6')->first()->text !!}
          </p>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- section 5 size -->
<div class="tl-at-revolution tl-sec-padding-y" id="adventages-2-size">
  <div class="tl-container pad-more">
    <!-- small title -->
    <h2 class="tl-sec-title-small text-center text-brown">
      {!! $text->where('section', 'section-middle-title-7')->first()->text !!}
    </h2>

    <!-- descr -->
    <p class="tl-at-sz-descr text-center text-white mb-35">
      {!! $text->where('section', 'section-middle-description-7')->first()->text !!}
    </p>

    <!-- image 1 -->
    <div class="tl-at-sz-image-1 text-center mb-35"><img src="{{ asset('/images/gallery/'. $image->where('section', 'image-6')->first()->image) }}"></div>

    <!-- descr 2 -->
    <div class="tl-at-sz-descr-2 text-center mb-50">
      <div class="row">
        <div class="tl-at-sz-d2-descr col-md-6">
          <h3 class="tl-at-sz-d2-d-title opensans-bold font-size-18px text-brown mb-15">
            {!! $text->where('section', 'section-middle-title-8')->first()->text !!}
          </h3>
          <p class="tl-at-sz-d2-d-text text-white mb-10">
            {!! $text->where('section', 'section-middle-description-8')->first()->text !!}
          </p>
        </div>
        <div class="tl-at-sz-d2-image col-md-6"><img src="{{ asset('/images/gallery/'. $image->where('section', 'image-7')->first()->image) }}"></div>
      </div>
    </div>

    <!-- small title -->
    <h2 class="tl-sec-title-small text-center text-brown">
      {!! $text->where('section', 'section-middle-title-9')->first()->text !!}
    </h2>

    <!-- image 2 -->
    <div class="tl-at-sz-image-2 text-center"><img src="{{ asset('/images/gallery/'. $image->where('section', 'image-8')->first()->image) }}"></div>
  </div>
</div>

@endsection

@section('js')
@endsection
