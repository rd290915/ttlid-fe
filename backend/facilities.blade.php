@extends('web.layouts.web')

@section('css')

@endsection

@section('content')
 <!-- section 1 header -->
    <div
  class="tl-home-header position-relative height-fix"
  id="facilities-header"
  j-direction="parallax"
  data-parallax-bg-image="{{ asset('/assets_web/img/images/home-bg-header.jpg') }}">
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
  <div class="tl-container">
    <!-- title -->
    <h2 class="tl-sec-title bordered-top text-black text-center">
      {!! $text->where('section', 'section-title-bordered-top')->first()->text !!}
    </h2>

    <!-- list -->
    <div class="tl-home-fac-list text-center">
      
        <div id="post_data" ></div>
      
    </div>
  </div>
</div>

    <!-- section 3 unit -->
    <div class="tl-home-ls" id="home-plan">
  <div class="tl-home-ls-slider-item" j-direction="parallax" data-parallax-bg-image="{{ asset('/assets_web/img/images/home21-bg-unit.jpg') }}">
    <div class="tl-container tl-sec-padding-y display-flex align-items-center">
      <div>
        <h2 class="tl-sec-title text-white gap-less">{!! $text->where('section', 'section-2-title-text-white')->first()->text !!}</h2>
        <p class="tl-home-ls-text text-white mb-25">
          {!! $text->where('section', 'section-2-home-text')->first()->text !!}
        </p>
        <div class="tl-home-ls-button display-flex">
          <a class="tl-button btn-white">Explore Units</a>
        </div>
      </div>
    </div>
  </div>
</div>


    <!-- section 4 brochure -->
    <div class="tl-up-rp-get bg-black tl-container pad-more display-flex justify-content-between align-items-center">
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
<script>
$(document).ready(function(){
 
  var _token = "{{ csrf_token() }}";

  load_data('', _token);

  $(document).on('click', '#load_more_button', function(){
    var id = $(this).data('id');
    $('#load_more_button').html('<b>Loading...</b>');
    load_data(id, _token);
  });

  function load_data(id="", _token)
  {
    $.ajax({
      url:"{{ url('/facilities/gallery/load-data') }}" ,
      method:"POST",
      data:{id:id, _token:_token},
      success:function(data)
      {
        $('#load_more').remove();
        $('#post_data').append(data);
      }
    })
  }

});
</script>
@endsection
