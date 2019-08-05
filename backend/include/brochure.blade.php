    <!-- section 10 brochure form -->
    <!-- image popup -->
<div
  class="tl-popup 
  @if ($errors->any())
    active
  @endif
  "
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
        <form action='{{ url("/brochure/store") }}' method='post'>
        @csrf
        <div class="tl-field-chekbox mb-25">
          <div class="tl-field-chekbox-input">
            <input type="radio" class="tl-field-chekbox-input-field" name="brochure_type" value="request" id="brochure-request">
            <div class="tl-field-chekbox-input-skin"></div>
          </div>
          <label class="tl-field-chekbox-label text-white" for="brochure-request">
            Request the printed brochure and we will deliver to your place right away
          </label>
        </div>
        
        <!-- discover -->
        <div class="tl-field-chekbox mb-25">
          <div class="tl-field-chekbox-input">
            <input type="radio" class="tl-field-chekbox-input-field" name="brochure_type" value="discover" id="brochure-discover" >
            <div class="tl-field-chekbox-input-skin"></div>
          </div>
          <label class="tl-field-chekbox-label text-white" for="brochure-discover">
            Discover our precious investment by downloading the E-brochure
          </label>
        </div>    

          <!-- full name -->
          <div class="tl-field mandatory mb-25">
            <input type="text" name="name" class="tl-field-input" required="required">
            <label class="tl-field-label">Full Name</label>
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </div>

          <!-- telp -->
          <div class="tl-field mandatory mb-25">
            <input type="number" name="telp" class="tl-field-input" required="required">
            <label class="tl-field-label">Telp</label>
            @if ($errors->has('telp'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('telp') }}</strong>
                </span>
            @endif
          </div>

          <!-- email -->
        <div class="tl-field mandatory mb-25">
            <input type="email" name="email" class="tl-field-input" required="required">
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
            @if ($errors->has('address'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
          </div>
    
          <!-- message -->
          <div class="tl-field mb-25">
            <textarea class="tl-field-input" name="message" required="required"></textarea>
            <label class="tl-field-label">Message</label>
            @if ($errors->has('message'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('message') }}</strong>
                </span>
            @endif
          </div>

          <!-- agree -->
          <div class="tl-fob-agree display-flex justify-content-center mb-25">
            <div class="tl-field-chekbox">
              <div class="tl-field-chekbox-input">
                <input type="radio" name="agree" class="tl-field-chekbox-input-field" name="brochure-agree" value="agree" id="brochure-agree" required="required">
                <div class="tl-field-chekbox-input-skin"></div>
              </div>
              <label class="tl-field-chekbox-label text-white" for="brochure-agree">
                Agree to our <u>privacy policy</u>
              </label>
            </div>
          </div>

          <!-- agree -->
          <div class="tl-fob-button display-flex justify-content-center mb-25">
            <button type="Submit" class="tl-button btn-white">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>