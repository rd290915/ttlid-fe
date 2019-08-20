@extends('web.layouts.web')

@section('css')

@endsection

@section('content')
 <!-- section 1 header -->
    <div
  class="tl-home-header position-relative height-fix"
  id="facilities-header"
  j-direction="parallax"
  data-parallax-bg-image="{{ asset('/images/gallery/'. $image->where('section', 'image-header-background')->first()->image) }}">
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
        <a class="j-scroll" j-direction="scroll-section" j-target="facilities-gallery">
          <span></span><span></span><span></span>Scroll
        </a>
      </div>
    </div>
  </div>
</div>


    <!-- section 2 gallery -->
    <div class="tl-home-fac tl-sec-padding-y" id="facilities-gallery">
  <div class="tl-container pad-more">
    <!-- title -->
    <h2 class="tl-sec-title bordered-top text-black text-center">
      {!! $text->where('section', 'section-title-bordered-top')->first()->text !!}
    </h2>

    <!-- text -->
    <p class="tl-home-fac-text text-black text-center">{!! $text->where('section', 'section-desc')->first()->text !!}</p>

    <!-- list -->
    <div class="tl-home-fac-list smaller text-center">
      <div class="row">
        @foreach($image->where('section', 'section-multiple-image') as $i)
        <div class="tl-home-fac-list-item col-md-6 col-sm-12 mb-25 smaller">
          <div class="tl-home-fac-list-item-thumb" j-direction="show-image" j-height-width-equal>
            <div data-image="{{ asset('/images/gallery/'.$i->image) }}" class="tl-home-fac-list-item-bg" style="height: 100%; background-image: url('{{ asset('/images/gallery/'.$i->image) }}'); background-repeat: no-repeat; background-position: center center; background-size: cover;">&nbsp;</div>
          </div>
          <h3 class="tl-home-fac-list-item-title smaller">
              {!! $i->detail !!}
          </h3>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

    <!-- section 3 details -->
    <div class="tl-fac-detail tl-sec-padding-y" id="facilities-detail">
  <div class="tl-container pad-more">
    <!-- title -->
    <h2 class="tl-sec-title bordered-top text-white text-center">
      {!! $text->where('section', 'section-2-title-table')->first()->text !!}
    </h2>
    
    <!-- table -->
    {!! $text->where('section', 'section-2-table')->first()->text !!}
  </div>
</div>
 
@endsection

@section('js')
@endsection
