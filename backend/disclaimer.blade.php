@extends('web.layouts.web')

@section('css')

@endsection

@section('content')
  <!-- section 1 disclaimer -->
    <div class="tl-dc-dc tl-sec-padding-y" id="disclaimer-disclaimer">
  <div class="tl-container pad-more">
    <!-- title -->
    <h2 class="tl-sec-title bordered-top text-center text-brown">
      {!! $text->where('section', 'section-title')->first()->text !!}
    </h2>

    <!-- descr -->
    <div class="tl-dc-dc-descr mb-50">
      <p class="mb-25">
        {!! $text->where('section', 'section-title-description')->first()->text !!}
        </p>
      </div>
    </div>

    <!-- title 2 -->
    <h3 class="tl-sec-title bordered-top text-center text-brown">
      {!! $text->where('section', 'section-title-2')->first()->text !!}
    </h3>

    <!-- descr 2 -->
    <p class="tl-dc-dc-descr-2 text-center">
      We <span class="opensans-bold">{!! $text->where('section', 'section-title-description-2')->first()->text !!}</span>
    </p>
  </div>
</div>

@endsection

@section('js')
@endsection
