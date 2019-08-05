
@extends('web.layouts.web')

@section('css')

@endsection

@section('content')
<div class="tl-home-header position-relative" id="home-header">
  <div j-direction="slider">
    <div class="position-relative">
      <!-- image background -->
      <div class="tl-home-header">
        <img src="{{ asset('/assets_web/img/images/home-bg-header.jpg') }}">
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
              {{ $text->where('section', 'judul-home-1')->first()->text }}
            </h1>
    
            <!-- button -->
            <div class="tl-home-header-button">
              <a class="tl-button btn-white">
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

    <div class="position-relative">
      <!-- image background -->
      <div class="tl-home-header">
        <img src="{{ asset('/images/gallery/'. $image->where('section', 'home-bg-header')->first()->image) }}">
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
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </h1>
    
            <!-- button -->
            <div class="tl-home-header-button">
              <a class="tl-button btn-white">
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

    <div class="position-relative">
      <!-- image background -->
      <div class="tl-home-header">
        <img src="../../../img/images/home-bg-header.jpg">
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
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </h1>
    
            <!-- button -->
            <div class="tl-home-header-button">
              <a class="tl-button btn-white">
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
      Welcome to Branz Simatupang
    </h2>

    <!-- gallery list -->
    <div class="tl-home-gallery-list no-gap">
      <div class="row">
        <div class="tl-home-gallery-list-item col-lg-3 col-md-3 col-sm-2 col-xs-2">
          <a j-direction="show-image" j-height-width-equal>
            <div
              data-image="../../../img/images/home-bg-header.jpg"
              style="height: 100%; background-image: url('../../../img/images/home-bg-header.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
              &nbsp;
            </div>
          </a>
        </div>

        <div class="tl-home-gallery-list-item col-lg-3 col-md-3 col-sm-2 col-xs-2">
          <a j-direction="show-image" j-height-width-equal>
            <div
              data-image="../../../img/images/home21-gal-2.jpg"
              style="height: 100%; background-image: url('../../../img/images/home21-gal-2.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
              &nbsp;
            </div>
          </a>
        </div>

        <div class="tl-home-gallery-list-item col-lg-3 col-md-3 col-sm-2 col-xs-2">
          <a j-direction="show-image" j-height-width-equal>
            <div
              data-image="../../../img/images/home21-gal-3.jpg"
              style="height: 100%; background-image: url('../../../img/images/home21-gal-3.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
              &nbsp;
            </div>
          </a>
        </div>

        <div class="tl-home-gallery-list-item col-lg-3 col-md-3 col-sm-2 col-xs-2">
          <a j-direction="show-image" j-height-width-equal>
            <div
              data-image="../../../img/images/home21-gal-4.jpg"
              style="height: 100%; background-image: url('../../../img/images/home21-gal-4.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
              &nbsp;
            </div>
          </a>
        </div>

        <div class="tl-home-gallery-list-item col-lg-3 col-md-3 col-sm-2 col-xs-2">
          <a j-direction="show-image" j-height-width-equal>
            <div
              data-image="../../../img/images/home21-gal-5.jpg"
              style="height: 100%; background-image: url('../../../img/images/home21-gal-5.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
              &nbsp;
            </div>
          </a>
        </div>

        <div class="tl-home-gallery-list-item col-lg-3 col-md-3 col-sm-2 col-xs-2">
          <a j-direction="show-image" j-height-width-equal>
            <div
              data-image="../../../img/images/home21-gal-6.jpg"
              style="height: 100%; background-image: url('../../../img/images/home21-gal-6.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
              &nbsp;
            </div>
          </a>
        </div>

        <div class="tl-home-gallery-list-item col-lg-3 col-md-3 col-sm-2 col-xs-2">
          <a j-direction="show-image" j-height-width-equal>
            <div
              data-image="../../../img/images/home21-gal-7.jpg"
              style="height: 100%; background-image: url('../../../img/images/home21-gal-7.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
              &nbsp;
            </div>
          </a>
        </div>

        <div class="tl-home-gallery-list-item col-lg-3 col-md-3 col-sm-2 col-xs-2">
          <a j-direction="show-image" j-height-width-equal>
            <div
              data-image="../../../img/images/home21-gal-8.jpg"
              style="height: 100%; background-image: url('../../../img/images/home21-gal-8.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
              &nbsp;
            </div>
          </a>
        </div>

        <div class="tl-home-gallery-list-item col-lg-3 col-md-3 col-sm-2 col-xs-2">
          <a j-direction="show-image" j-height-width-equal>
            <div
              data-image="../../../img/images/home21-gal-9.jpg"
              style="height: 100%; background-image: url('../../../img/images/home21-gal-9.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
              &nbsp;
            </div>
          </a>
        </div>

        <div class="tl-home-gallery-list-item col-lg-3 col-md-3 col-sm-2 col-xs-2">
          <a j-direction="show-image" j-height-width-equal>
            <div
              data-image="../../../img/images/home21-gal-10.jpg"
              style="height: 100%; background-image: url('../../../img/images/home21-gal-10.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
              &nbsp;
            </div>
          </a>
        </div>

        <div class="tl-home-gallery-list-item col-lg-3 col-md-3 col-sm-2 col-xs-2">
          <a j-direction="show-image" j-height-width-equal>
            <div
              data-image="../../../img/images/home21-gal-11.jpg"
              style="height: 100%; background-image: url('../../../img/images/home21-gal-11.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
              &nbsp;
            </div>
          </a>
        </div>

        <div class="tl-home-gallery-list-item col-lg-3 col-md-3 col-sm-2 col-xs-2">
          <a j-direction="show-image" j-height-width-equal>
            <div
              data-image="../../../img/images/home21-gal-12.jpg"
              style="height: 100%; background-image: url('../../../img/images/home21-gal-12.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
              &nbsp;
            </div>
          </a>
        </div>
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
      Our Facilities
    </h2>

    <!-- list -->
    <div class="tl-home-fac-list no-gap text-center">
      <div class="row">
        <div class="tl-home-fac-list-item col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="tl-home-fac-list-item-thumb">
            <div data-image="../../../img/images/home21-fac-1.jpg" class="tl-home-fac-list-item-bg" style="height: 100%; background-image: url('../../../img/images/home21-fac-1.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">&nbsp;</div>
          
            <div class="tl-home-fac-list-item-text display-flex justify-content-center align-items-center">Outdoor Swimming Pool</div>
          </div>
          <h3 class="tl-home-fac-list-item-title">
            Enjoy luxurious moments in the semi-private pool.
          </h3>
        </div>

        <div class="tl-home-fac-list-item col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="tl-home-fac-list-item-thumb">
            <div data-image="../../../img/images/home21-fac-2.jpg" class="tl-home-fac-list-item-bg" style="height: 100%; background-image: url('../../../img/images/home21-fac-2.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">&nbsp;</div>
          
            <div class="tl-home-fac-list-item-text display-flex justify-content-center align-items-center">Cafe & Lounge</div>
          </div>
          <h3 class="tl-home-fac-list-item-title">
            A sophisticated space offering a luxurious and relaxing time.
          </h3>
        </div>

        <div class="tl-home-fac-list-item col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="tl-home-fac-list-item-thumb">
            <div data-image="../../../img/images/home21-fac-3.jpg" class="tl-home-fac-list-item-bg" style="height: 100%; background-image: url('../../../img/images/home21-fac-3.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">&nbsp;</div>
          
            <div class="tl-home-fac-list-item-text display-flex justify-content-center align-items-center">Garden</div>
          </div>
          <h3 class="tl-home-fac-list-item-title">
            An open space full opportunities for meeting other people.
          </h3>
        </div>
      </div>
    </div>

    <!-- button -->
    <div class="tl-home-fac-button display-flex justify-content-center mt-50">
      <a class="tl-button btn-black">Explore Facilities</a>
    </div>
  </div>
</div>
    
    <!-- section 4 landscape -->
    <div class="tl-home-ls" id="home-landscape">
  <!-- slider -->
  <div class="tl-home-landscape-slider" id="home-landscape-slider">
    <!-- item 1 -->
    <div class="tl-home-ls-slider-item" j-direction="parallax" data-parallax-bg-image="../../../img/images/home21-bg-landscape.jpg">
      <div class="tl-container tl-sec-padding-y">
        <h2 class="tl-sec-title text-white gap-less">LANDSCAPE AND DESIGN</h2>
        <p class="tl-home-ls-text text-white mb-25">
          Reminiscent of a waterfall from the Sky. <br>
          Blending with the surroundings to become a symbol of the city.
        </p>
        <div class="tl-home-ls-button display-flex">
          <a class="tl-button btn-white">See More</a>
        </div>
      </div>
    </div>

    <!-- item 2 -->
    <div class="tl-home-ls-slider-item" data-image="../../../img/images/home-bg-header.jpg" style="height: 100%; background-image: url('../../../img/images/home-bg-header.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
      <div class="tl-container tl-sec-padding-y">
        <h2 class="tl-sec-title text-white gap-less">LANDSCAPE AND DESIGN 2</h2>
        <p class="tl-home-ls-text text-white mb-25">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.
        </p>
        <div class="tl-home-ls-button display-flex">
          <a class="tl-button btn-white">See More</a>
        </div>
      </div>
    </div>

    <!-- item 3 -->
    <div class="tl-home-ls-slider-item" data-image="../../../img/images/home-bg-header.jpg" style="height: 100%; background-image: url('../../../img/images/home-bg-header.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
      <div class="tl-container tl-sec-padding-y">
        <h2 class="tl-sec-title text-white gap-less">LANDSCAPE AND DESIGN 3</h2>
        <p class="tl-home-ls-text text-white mb-25">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.
        </p>
        <div class="tl-home-ls-button display-flex">
          <a class="tl-button btn-white">See More</a>
        </div>
      </div>
    </div>
  </div>
</div>


    <!-- section 5 video -->
    <div class="tl-home-vid" id="home-video">
  <div class="tl-home-vid-row display-flex">
    <!-- video -->
    <!-- video -->
    <div
      class="tl-home-vid-video"
      j-direction="popup-video-show"
      j-popup-video-target="popup-video"
      j-popup-video-embed="https://www.youtube.com/embed/Ti5ibERnPBg">
      <div style="height: 100%; background-image: url('../../../img/images/video-vr.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">&nbsp;</div>
    </div>

    <!-- descr -->
    <div class="tl-home-vid-descr display-flex align-items-center">
      <div>
        <!-- title -->
        <div class="tl-home-vid-descr-title-wrapper display-flex align-items-center">
          <img src="../../../img/images/japan-flag.png" class="mr-10" alt="Flag">
          <h2 class="tl-home-vid-descr-title tl-sec-title bordered-bottom text-white gap-0">
            ALL JAPANESE PERFECTION
          </h2>
        </div>

        <!-- descr text -->
        <div class="tl-home-vid-descr-text mb-25">
          <p class="text-center">Get our units experience in 360° Video</p>
        </div>

        <!-- button -->
        <div class="tl-home-vid-button">
          <a
            class="tl-button btn-white"
            j-direction="popup-show"
            j-popup-target="popup-video">
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
  <div class="tl-home-ls-slider-item" j-direction="parallax" data-parallax-bg-image="../../../img/images/home21-bg-unit.jpg">
    <div class="tl-container tl-sec-padding-y display-flex align-items-center">
      <div>
        <h2 class="tl-sec-title text-white gap-less">Unit Plan</h2>
        <p class="tl-home-ls-text text-white mb-25">
          The Fusion of Artisanship  and Different Values, <br>
          Inspiring The Senses of Those Who Live Here.
        </p>
        <div class="tl-home-ls-button display-flex">
          <a class="tl-button btn-white">Explore Units</a>
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
      COmpany Overview
    </h2>

    <!-- chart -->
    <div class="tl-home-au-chart text-center mb-25">
      <img src="../../../img/images/about-us-chart.jpg" alt="Chart">
    </div>

    <!-- statistic -->
    <div class="tl-home-au-stat">
      <div class="row">
        <!-- employee -->
        <div class="tl-home-au-stat-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="wrapp employee">
            <div class="tl-home-au-stat-item-icon text-center">
              <img src="../../../img/icons/employee.png" alt="Employee">
            </div>
            <div class="tl-home-au-stat-item-descr text-center">
              <h2 class="valuee">17.000</h2>
              <h4 class="titlee">Employess</h4>
            </div>
          </div>
        </div>

        <!-- companies -->
        <div class="tl-home-au-stat-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="wrapp companies">
            <div class="tl-home-au-stat-item-icon">
              <img src="../../../img/icons/group-companies.png" alt="Group Companies">
            </div>
            <div class="tl-home-au-stat-item-descr text-center">
              <h2 class="valuee">100</h2>
              <h4 class="titlee">Group Companies</h4>
            </div>
          </div>
        </div>

        <!-- consolidated -->
        <div class="tl-home-au-stat-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="wrapp consolidated">
            <div class="tl-home-au-stat-item-icon">
              <img src="../../../img/icons/consolidated.png" alt="Consolidated Net Sales">
            </div>
            <div class="tl-home-au-stat-item-descr">
              <h2 class="valuee">6 <span>BILLION</span></h2>
              <h4 class="titlee text-center">Consolidated Net Sales</h4>
            </div>
          </div>
        </div>

        <!-- sqm -->
        <div class="tl-home-au-stat-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="wrapp sqm">
            <div class="tl-home-au-stat-item-icon">
              <img src="../../../img/icons/sqm.png" alt="Sqm Office Space Leasing">
            </div>
            <div class="tl-home-au-stat-item-descr">
              <h2 class="valuee text-center">669.000</h2>
              <h4 class="titlee">Sqm Office Space Leasing</h4>
            </div>
          </div>
        </div>

        <!-- condominium -->
        <div class="tl-home-au-stat-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="wrapp condominium">
            <div class="tl-home-au-stat-item-icon">
              <img src="../../../img/icons/condominium.png" alt="Condominiums per year">
            </div>
            <div class="tl-home-au-stat-item-descr">
              <h2 class="valuee">2.500</h2>
              <h4 class="titlee">Condominiums per year</h4>
            </div>
          </div>
        </div>

        <!-- office -->
        <div class="tl-home-au-stat-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="wrapp office">
            <div class="tl-home-au-stat-item-icon">
              <img src="../../../img/icons/offices.png" alt="Office Buildings in Tokyo">
            </div>
            <div class="tl-home-au-stat-item-descr">
              <h2 class="valuee">2.500</h2>
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
  <div class="tl-home-ls-slider-item height-auto" data-image="../../../img/images/home-bg-header.jpg" style="height: 100%; background-image: url('../../../img/images/home-bg-header.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
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
      <img src="../../../img/images/map.jpg" alt="Map">
    </div>
  </div>
</div>

    <!-- section 10 brochure form -->
    <!-- image popup -->
<div
  class="tl-popup"
  id="popup-brochure-form"
  j-popup-place="brochure-form">
  <div class="tl-popup-brochure-inner position-relative">
    <a
      class="tl-popup-close"
      j-direction="popup-hide"
      j-popup-hide-target="brochure-form">
      <i class="fa fa-times"></i>
    </a>

    <div class="tl-fob">
      <h1 class="tl-sec-title text-white">Request Brochure</h1>

      <div class="tl-fob-form">
        <!-- request -->
        <div class="tl-field-chekbox mb-25">
          <div class="tl-field-chekbox-input">
            <input type="radio" class="tl-field-chekbox-input-field" name="brochure-radio" value="request" id="brochure-request">
            <div class="tl-field-chekbox-input-skin"></div>
          </div>
          <label class="tl-field-chekbox-label text-white" for="brochure-request">
            Request the printed brochure and we will deliver to your place right away
          </label>
        </div>

        <!-- discover -->
        <div class="tl-field-chekbox mb-25">
          <div class="tl-field-chekbox-input">
            <input type="radio" class="tl-field-chekbox-input-field" name="brochure-radio" value="discover" id="brochure-discover">
            <div class="tl-field-chekbox-input-skin"></div>
          </div>
          <label class="tl-field-chekbox-label text-white" for="brochure-discover">
            Discover our precious investment by downloading the E-brochure
          </label>
        </div>

        <!-- full name -->
        <div class="tl-field mandatory mb-25">
          <input type="text" class="tl-field-input">
          <label class="tl-field-label">Full Name</label>
        </div>

        <!-- telp -->
        <div class="tl-field mandatory mb-25">
          <input type="number" class="tl-field-input">
          <label class="tl-field-label">Telp</label>
        </div>

        <!-- email -->
      <div class="tl-field mandatory mb-25">
          <input type="email" class="tl-field-input">
          <label class="tl-field-label">Email</label>
        </div>
  
        <!-- address -->
        <div class="tl-field mandatory mb-25">
          <input type="text" class="tl-field-input">
          <label class="tl-field-label">Address</label>
        </div>
  
        <!-- message -->
        <div class="tl-field mb-25">
          <textarea class="tl-field-input"></textarea>
          <label class="tl-field-label">Message</label>
        </div>

        <!-- agree -->
        <div class="tl-fob-agree display-flex justify-content-center mb-25">
          <div class="tl-field-chekbox">
            <div class="tl-field-chekbox-input">
              <input type="radio" class="tl-field-chekbox-input-field" name="brochure-agree" value="agree" id="brochure-agree">
              <div class="tl-field-chekbox-input-skin"></div>
            </div>
            <label class="tl-field-chekbox-label text-white" for="brochure-agree">
              Agree to our <u>privacy policy</u>
            </label>
          </div>
        </div>

        <!-- agree -->
        <div class="tl-fob-button display-flex justify-content-center mb-25">
          <button type="button" class="tl-button btn-white">Submit</button>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>

@endsection

@section('js')
@endsection