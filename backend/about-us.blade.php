
@extends('web.layouts.web')

@section('css')

@endsection

@section('content')

  <div
  class="tl-home-header position-relative height-fix"
  id="about-header"
  j-direction="parallax"
  data-parallax-bg-image="{{ asset('/images/gallery/'. $image->where('section', 'about-us-top-img')->first()->image) }}">
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
        <h1 class="tl-sec-title text-white gap-less">{{ $text->where('section', 'title')->first()->text }}</h1>

        <!-- text -->
        <p class="tl-header-text width-100 text-center text-white">
          {{ $text->where('section', 'isi')->first()->text }}
        </p>
      </div>
    </div>
  </div>
</div>
<div class="tl-home-au tl-sec-padding-y" id="about">
  <div class="tl-container">
    <!-- chart -->
    <div class="tl-home-au-chart text-center mb-25">
      <img src="{{ asset('/assets_web/img/images/about-us-chart.jpg') }}" alt="Chart">
    </div>

    <!-- statistic -->
    <div class="tl-home-au-stat">
      <div class="row">
        <!-- employee -->
        <div class="tl-home-au-stat-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="wrapp employee">
            <div class="tl-home-au-stat-item-icon text-center">
              <img src="{{ asset('/assets_web/img/icons/employee.png') }}" alt="Employee">
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
              <img src="{{ asset('/assets_web/img/icons/group-companies.png') }}" alt="Group Companies">
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
              <img src="{{ asset('/assets_web/img/icons/consolidated.png') }}" alt="Consolidated Net Sales">
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
              <img src="{{ asset('/assets_web/img/icons/sqm.png') }}" alt="Sqm Office Space Leasing">
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
              <img src="{{ asset('/assets_web/img/icons/condominium.png') }}" alt="Condominiums per year">
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
              <img src="{{ asset('/assets_web/img/icons/offices.png') }}" alt="Office Buildings in Tokyo">
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
  {!! $text->where('section', 'section-product-outline')->first()->text !!}


    <!-- section 4 brochure -->
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


    <!-- section 5 brochure form -->
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