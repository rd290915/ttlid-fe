
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


@include('web.include.brochure')
  </div>
@endsection

@section('js')
@endsection