@extends('web.layouts.web')

@section('css')

@endsection

@section('content')
<!-- section 1 header -->
<div class="tl-at-header" id="adventages-1-header">
  <!-- menu 1 -->
  <div class="tl-container pad-more display-flex justify-content-center align-items-center">
    <div class="tl-at-header-inner">
      <!-- menu 1 -->
      <div class="tl-at-menu-1 mb-50">
        <!-- title -->
        <h1 class="tl-sec-title text-center text-white">{!! $text->where('section', 'text-main-title')->first()->text !!}</h1>

        <!-- buttons -->
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <a class="tl-button btn-brown active">HOW ABOUT YOUR PRODUCT?</a>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <a href="{{ url('/advantages-2') }}" class="tl-button btn-black-light">ONLY ONE</a>
          </div>
        </div>
      </div>

      <!-- menu 2 -->
      <div class="tl-at-menu-2">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <a
              class="tl-at-menu-2-item display-flex align-items-center"
              j-direction="scroll-section"
              j-target="adventages-1-team">
              {!! $text->where('section', 'menu-item-1')->first()->text !!}
            </a>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <a
              class="tl-at-menu-2-item display-flex align-items-center"
              j-direction="scroll-section"
              j-target="adventages-1-design">
              {!! $text->where('section', 'menu-item-2')->first()->text !!}
            </a>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <a
              class="tl-at-menu-2-item display-flex align-items-center"
              j-direction="scroll-section"
              j-target="adventages-1-premium">
              {!! $text->where('section', 'menu-item-3')->first()->text !!}
            </a>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <a
              class="tl-at-menu-2-item display-flex align-items-center"
              j-direction="scroll-section"
              j-target="adventages-1-luxury">
              {!! $text->where('section', 'menu-item-4')->first()->text !!}
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- section 2 team -->
<div class="tl-at-tm tl-sec-padding-y" id="adventages-1-team">
  <div class="tl-container pad-more">
    <!-- title -->
    <h2 class="tl-sec-title bordered-top text-center">
      {!! $text->where('section', 'section-bordered-top')->first()->text !!}
    </h2>

    <!-- images -->
    <div class="tl-at-tm-img text-center mb-50">
      <img src="{{ asset('/images/gallery/'. $image->where('section', 'image-tokyu-land')->first()->image) }}" alt="Tokyo X Obayashi">
    </div>

    <!-- descr -->
    <div class="tl-at-tm-descr text-center">
      <p class="mb-25">
        {!! $text->where('section', 'section-description-text')->first()->text !!}
      </p>
      <p class="trajanpro-bold text-brown">{!! $text->where('section', 'section-description-text-2-trajanpro')->first()->text !!}</p>
    </div>
  </div>
</div>


<!-- section 3 design -->
<div class="tl-at-ds tl-sec-padding-y" id="adventages-1-design">
  <div class="tl-container pad-more">
    <!-- title -->
    <h2 class="tl-sec-title bordered-top text-center text-white">
      {!! $text->where('section', 'section-2-title')->first()->text !!}
    </h2>

    <!-- items -->
    <div class="tl-at-ds-card">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="tl-at-ds-card-item">
            <h4 class="tl-at-ds-ci-title">{!! $text->where('section', 'section-2-card-item-title')->first()->text !!}</h4>
            <div class="tl-at-ds-ci-content text-center">
              <div class="tl-at-ds-ci-ct-title_img">
                <img src="{{ asset('/images/gallery/'. $image->where('section', 'image-total-design')->first()->image) }}" alt="Title image">
              </div>
              <div class="tl-at-ds-ci-thumb">
                <div data-image="{{ asset('/images/gallery/'. $image->where('section', 'image-thumb-total-design')->first()->image) }}" style="height: 100%; background-image: url('{{ asset('/images/gallery/'. $image->where('section', 'image-thumb-total-design')->first()->image) }}'); background-repeat: no-repeat; background-position: center center; background-size: cover;">&nbsp;</div>
              </div>
              <p class="tl-at-ds-ci-descr">{!! $text->where('section', 'section-2-card-item-description')->first()->text !!}
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="tl-at-ds-card-item">
            <h4 class="tl-at-ds-ci-title">{!! $text->where('section', 'section-2-card-item-title-2')->first()->text !!}</h4>
            <div class="tl-at-ds-ci-content text-center">
              <div class="tl-at-ds-ci-ct-title_img">
                <img src="{{ asset('/images/gallery/'. $image->where('section', 'image-interior-design')->first()->image) }}" alt="Title image">
              </div>
              <div class="tl-at-ds-ci-thumb">
                <div data-image="{{ asset('/images/gallery/'. $image->where('section', 'image-thumb-interior-design')->first()->image) }}" style="height: 100%; background-image: url('{{ asset('/images/gallery/'. $image->where('section', 'image-thumb-interior-design')->first()->image) }}'); background-repeat: no-repeat; background-position: center center; background-size: cover;">&nbsp;</div>
              </div>
              <p class="tl-at-ds-ci-descr">{!! $text->where('section', 'section-2-card-item-description-2')->first()->text !!}
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="tl-at-ds-card-item">
            <h4 class="tl-at-ds-ci-title">{!! $text->where('section', 'section-2-card-item-title-3')->first()->text !!}</h4>
            <div class="tl-at-ds-ci-content text-center">
              <div class="tl-at-ds-ci-ct-title_img">
                <img src="{{ asset('/images/gallery/'. $image->where('section', 'image-facade-design')->first()->image) }}" alt="Title image">
              </div>
              <div class="tl-at-ds-ci-thumb">
                <div data-image="{{ asset('/images/gallery/'. $image->where('section', 'image-thumb-facade-design')->first()->image) }}" style="height: 100%; background-image: url('{{ asset('/images/gallery/'. $image->where('section', 'image-thumb-facade-design')->first()->image) }}'); background-repeat: no-repeat; background-position: center center; background-size: cover;">&nbsp;</div>
              </div>
              <p class="tl-at-ds-ci-descr">{!! $text->where('section', 'section-2-card-item-description-3')->first()->text !!}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- section 4 premium -->
<div class="tl-at-premium tl-sec-padding-y" id="adventages-1-premium">
  <div class="tl-container pad-more">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
        <!-- title -->
        <h2 class="tl-sec-title bordered-top text-center text-white">
          {!! $text->where('section', 'section-3-title-bordered-top')->first()->text !!}
        </h2>

        <!-- descr -->
        <p class="text-center text-white">
          {!! $text->where('section', 'section-3-descriotion')->first()->text !!}
        </p>
      </div>

      <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
        <div class="tl-at-pr-marker text-right">
          <img src="{{ asset('/images/gallery/'. $image->where('section', 'image-exquisite')->first()->image) }}" alt="Marker">
        </div>
      </div>
    </div>
  </div>
</div>


<!-- section 5 luxury -->
<div class="tl-at-luxury" id="adventages-1-luxury">
  <div class="tl-at-lx-item display-flex flex-wrap align-items-center">
    <div class="tl-at-lx-img text-right">
      <div data-image="{{ asset('/images/gallery/'. $image->where('section', 'image-first-rate')->first()->image) }}" style="height: 100%; background-image: url('{{ asset('/images/gallery/'. $image->where('section', 'image-first-rate')->first()->image) }}'); background-repeat: no-repeat; background-position: center center; background-size: cover;">&nbsp;</div>
    </div>

    <div class="tl-at-lx-descr display-flex align-items-center">
      <div>
        <!-- title -->
        <h2 class="tl-sec-title bordered-top text-center text-white">
          {!! $text->where('section', 'section-4-title-bordered-top')->first()->text !!}
        </h2>

        <!-- descr -->
        <p class="text-center text-white">
          {!! $text->where('section', 'section-4-description')->first()->text !!}
        </p>
      </div>
    </div>
  </div>
</div>

@endsection

@section('js')
@endsection
