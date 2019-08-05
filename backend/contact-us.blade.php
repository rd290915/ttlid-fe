@extends('web.layouts.web')

@section('css')

@endsection

@section('content')
  
  <div
  class="tl-home-header position-relative height-fix"
  id="contact-header"
  j-direction="parallax"
  data-parallax-bg-image="{{ asset('/images/gallery/'. $image->where('section', 'contact-us-top-img')->first()->image) }}">
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
        <h1 class="tl-sec-title text-white gap-less">{{ $text->where('section', 'judul')->first()->text }}</h1>

        <!-- text -->
        <p class="tl-header-text width-100 text-center text-white">
          {{ $text->where('section', 'business-hours')->first()->text }}
        </p>
      </div>
    </div>
  </div>
</div>



    <!-- section 2 address -->
    <div class="tl-cu-adrs" id="contact-address">
  <div class="tl-cu-adrs-wrapper display-flex">
    <!-- address -->
    <div class="tl-cu-adrs-descr tl-sec-padding-y tl-container display-flex align-items-center">
      <div>
        <!-- <h2 class="tl-cu-adrs-descr-phone mb-25">
          PT. Tokyu Land Indonesia (Marketing Gallery) <br>
          (62 21) 2765 2100
        </h2>
        <h2 class="tl-cu-adrs-descr-full">
          Marketing Office Commercial Building 2nd FL. <br>
          Jl. RA. Kartini / Jl. Kaimun Jaya No. 9, <br>
          Cilandak, Jakarta Selatan
        </h2> -->
        <h2 class="tl-cu-adrs-descr-phone mb-25">
          {!! $text->where('section', 'alamat')->first()->text !!}
        </h2>
      </div>
    </div>

    <!-- map -->
    <div class="tl-cu-adrs-map">
      <iframe width="726" height="460" id="gmap_canvas" src="{!! $text->where('section', 'google-url-map')->first()->text !!}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
  </div>
</div>


    <!-- section 3 form -->
    <div class="tl-cu-fm tl-sec-padding-y" id="contact-form">
  <div class="tl-container pad-more">
    <!-- form -->
    <form class='form-horizontal form-label-left' action='{{ url("/contact/store") }}' method='post'>
    @csrf
      <!-- appoinment, inquire -->
      <div class="tl-cu-fm-limit display-flex justify-content-center align-items-center mb-25">
        <!-- appoinment -->
        <div>
          <div class="tl-field-chekbox">
            <div class="tl-field-chekbox-input">
              <input type="radio" class="tl-field-chekbox-input-field" name="category" value="appoinment" id="form-appoinment">
              <div class="tl-field-chekbox-input-skin"></div>
            </div>
            <label class="tl-field-chekbox-label" for="form-appoinment">
              Appointment
            </label>
          </div>
        </div>

        <!-- limit -->
        <div class="tl-limit">&nbsp;</div>

        <!-- inquire -->
        <div>
          <div class="tl-field-chekbox">
            <div class="tl-field-chekbox-input">
              <input type="radio" class="tl-field-chekbox-input-field" name="category" value="inquery" id="form-inqure">
              <div class="tl-field-chekbox-input-skin"></div>
            </div>
            <label class="tl-field-chekbox-label" for="form-inqure">
              Inquiry
            </label>
          </div>
        </div>
        @if ($errors->has('category'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('category') }}</strong>
            </span>
        @endif        
      </div>


      <!-- fullname, telp -->
      <div class="row mb-25">
        <!-- fullname -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="tl-field mandatory">
            <input type="text" name="name" class="tl-field-input">
            <label class="tl-field-label">Full Name</label>
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </div>
        </div>

        <!-- telp -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="tl-field mandatory">
            <input type="number" name="telp" class="tl-field-input">
            <label class="tl-field-label">Telp</label>
            @if ($errors->has('telp'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('telp') }}</strong>
                </span>
            @endif
          </div>
        </div>
      </div>

      <!-- email -->
      <div class="tl-field mandatory mb-25">
        <input type="email" name="email" class="tl-field-input">
        <label class="tl-field-label">Email</label>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>

      <!-- address -->
      <div class="tl-field mandatory mb-25">
        <input type="text" name="address" class="tl-field-input">
        <label class="tl-field-label">Address</label>
      </div>

      <!-- address -->
      <div class="tl-field mb-20">
        <textarea class="tl-field-input" name="message"></textarea>
        <label class="tl-field-label">Message</label>
        @if ($errors->has('message'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('message') }}</strong>
            </span>
        @endif
      </div>

      <!-- agree, button -->
      <div class="display-flex justify-content-center">
        <!-- agree -->
        <div class="mr-10">
          <div class="tl-field-chekbox">
            <div class="tl-field-chekbox-input">
              <input type="radio" class="tl-field-chekbox-input-field" name="accept" value="agree" id="form-agree">
              <div class="tl-field-chekbox-input-skin"></div>
            </div>
            <label class="tl-field-chekbox-label" for="form-agree">
              Agree to our <u>privacy policy</u>
            </label>
          </div>
        </div>

        <!-- button -->
        <div class="ml-10">
          <button type="submit" class="tl-button btn-black">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>

  </div>

@endsection

@section('js')
@endsection