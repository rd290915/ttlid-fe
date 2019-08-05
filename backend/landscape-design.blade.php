
@extends('web.layouts.web')

@section('css')

@endsection

@section('content')

    <div
  class="tl-home-header position-relative height-fix"
  id="landscape-header"
  j-direction="parallax"
  data-parallax-bg-image="{{ asset('/images/gallery/'. $image->where('section', 'top-big-image')->first()->image) }}">
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
          <h1 class="tl-sec-title text-white gap-less">Landscape and Design</h1>

          <!-- text -->
          <p class="tl-header-text width-100 text-center text-white">
            Reminiscent of a waterfall from the sky. Produces in collaboration with a world-reowned glass artist.
          </p>

          <!-- scroll down -->
          <a class="j-scroll" j-direction="scroll-section" j-target="landscape-landscape">
            <span></span><span></span><span></span>Scroll
          </a>
        </div>
      </div>
    </div>
  </div>


      <!-- section 2 landscape -->
      <div class="tl-home-gallery tl-sec-padding-y" id="landscape-landscape">
    <div class="tl-container pad-more">
      <!-- title litle -->
      <div class="display-flex justify-content-center">
        <h3 class="tl-sec-title-litle text-white">
          Landscape
        </h3>
      </div>

      <!-- title -->
      <h2 class="tl-sec-title text-white text-center more-pad">
        {!! $text->where('section', 'landscape-section-title')->first()->text !!}
      </h2>

      <!-- images -->
      <div class="tl-lad-img">
        <img src="{{ asset('/images/gallery/'. $image->where('section', 'landscape-section-img')->first()->image) }}">
      </div>

      <!-- descr -->
      <div class="tl-lad-descr">
        <p class="text-center text-white mb-25">
          {!! $text->where('section', 'landscape-section-desc1')->first()->text !!}
        </p>
      </div>
    </div>
  </div>


      <!-- section 3 gallery -->
      <div class="tl-lad-gal" id="landscape-gallery">
    <div class="tl-lad-gal-list display-flex">

        @foreach($image->where('section', 'landscape-thumb-img') as $i)
          <div class="tl-lad-gal-list-item" data-image="{{ asset('/images/gallery/'.$i->image) }}" style="background-image: url('{{ asset('/images/gallery/'.$i->image) }}'); background-repeat: no-repeat; background-position: center center; background-size: cover;">&nbsp;</div>
        @endforeach
    </div>
  </div>


      
    <!-- section 4 design -->
    <div class="tl-lad-design tl-sec-padding-y" id="landscape-design">
  <div class="tl-container pad-more">
    <!-- title litle -->
    <div class="display-flex justify-content-center">
      <h3 class="tl-sec-title-litle text-white">
        {!! $text->where('section', 'interiortags')->first()->text !!}
      </h3>
    </div>

    <div j-direction="slider-design">

      @foreach($image->where('section', 'interior-design-section-img') as $i)
      <div>
        <!-- title -->
        <h2 class="tl-sec-title text-black text-center more-pad">
            {{ $i->title }}
        </h2>

        <!-- images -->
        <div class="tl-lad-img">
          <img src="{{ asset('/images/gallery/'.$i->image) }}">
        </div>

        <!-- descr -->
        <div class="tl-lad-descr">
          <p class="text-center text-black">
            {!! $i->detail !!}
          </p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>


      <!-- section 5 join -->
      <div class="tl-home-ls" id="landscape-join">
    <div class="tl-home-ls-slider-item height-auto" data-image="{{ asset('/images/gallery/'. $image->where('section', 'tower-tour-bg-bottom')->first()->image) }}" style="height: 100%; background-image: url('{{ asset('/images/gallery/'. $image->where('section', 'tower-tour-bg-bottom')->first()->image) }}'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
      <div class="tl-container tl-sec-padding-y text-center">
        <h2 class="tl-sec-title text-white gap-less">{!! $text->where('section', 'bottom-title')->first()->text !!}</h2>
        <div class="tl-home-ls-button display-flex justify-content-center">
          <a class="tl-button btn-white" href="{{ url('/tower-tour') }}" style="text-decoration: none;">{!! $text->where('section', 'bottom-text-btn')->first()->text !!}</a>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('js')
@endsection