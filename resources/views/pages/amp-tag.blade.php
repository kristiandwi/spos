@extends('layouts.app-amp')
@section('content')
    <!-- start headline -->
    <div class="news-top half-bottom">
      @php $hl_loop = 1; @endphp
      @foreach($tags as $hl)
      @php            
      $medium = $hl['featured_image']['medium'] ?? 'https://m.solopos.com/images/no-medium.jpg';
      $title = html_entity_decode($hl['title']);
      @endphp      
      @if($hl_loop <= 1)       
      <a href="{{ url("/{$hl['slug']}-{$hl['id']}") }}/amp" title="{{ $title }}" class="news-header">
          <amp-img src="{{ $medium }}" layout="responsive" width="600" height="400" alt="{{ $title }}"></amp-img>
          <u class="bg-red-dark">HEADLINE</u>
          <i><span>@if($hl['catparent'] ==''){{ $hl['catsname'] }} @else {{ $hl['catparent'] }} @endif</span></i>
          <strong>{{ $title }}</strong>
          <em>{{ Helper::time_ago($hl['date']) }}</em>
      </a>
      <amp-accordion class="news-share">
          <section>
              <h4><i class="fa fa-retweet"></i></h4>
              <p>
                  <amp-social-share type="facebook" width="43" height="40" class="custom-news-share"><i class="fa fa-facebook"></i></amp-social-share>
                  <amp-social-share type="twitter" width="43" height="40" class="custom-news-share"><i class="fa fa-twitter"></i></amp-social-share>
                  <amp-social-share type="pinterest" width="43" height="40" class="custom-news-share"><i class="fa fa-pinterest"></i></amp-social-share>
                  <amp-social-share type="linkedin" width="43" height="40" class="custom-news-share"><i class="fa fa-linkedin"></i></amp-social-share>
                  <amp-social-share type="email" width="43" height="40" class="custom-news-share"><i class="fa fa-envelope-o"></i></amp-social-share>
              </p>
          </section>
      </amp-accordion>
      @endif
      @php $hl_loop++ @endphp
      @endforeach      
    </div>  
    <amp-ad width="100vw" height="320"
    type="adsense"
    data-ad-client="ca-pub-4969077794908710"
    data-ad-slot="2921244965"
    data-auto-format="rspv"
    data-full-width="">
    <div overflow=""></div>
    </amp-ad>
    <!-- start breaking 1 -->
    <div class="content">
      @php $br_loop = 1; @endphp
      @foreach ($tags as $item) @if($br_loop > 1 && $br_loop <= 4)
      @php            
      $image = $item['featured_image']['thumbnail'] ?? 'https://m.solopos.com/images/no-thumbnail.jpg';
      $title = html_entity_decode($item['title']);
      @endphp       
      <div class="news-strip">       
        <a href="{{ url("/{$item['slug']}-{$item['id']}") }}/amp" title="{{ $title }}">
            <strong>{{ $title }}</strong>
            <amp-img src="{{ $image }}" width="100" height="100" layout="responsive" style="object-fit: cover; height: 100px; width: 100px;"></amp-img>
            <u>@if($item['catparent'] ==''){{ $item['catsname'] }} @else {{ $item['catparent'] }} @endif | {{ Helper::time_ago($item['date']) }}</u>
        </a>
      </div>  
      @endif
      @php $br_loop++ @endphp
      @endforeach           
    </div>

    <!-- start skinads parallax -->
    {{-- <div class="content half-bottom">
      <amp-fx-flying-carpet height="400px" class="i-amphtml-element i-amphtml-layout-fixed-height i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" i-amphtml-layout="fixed-height" style="height: 400px;">
        <div class="i-amphtml-fx-flying-carpet-clip">
          <div class="i-amphtml-fx-flying-carpet-container" style="width: 340px;">
            <a href="https://m.solopos.com">
              <amp-img src="https://m.solopos.com/banner/sekaten-festival.gif" width="340" height="640" alt="Banner" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" i-amphtml-layout="fixed" style="width: 340px; height: 640px;" i-amphtml-auto-lightbox-visited="">
                <img decoding="async" alt="an image" src="https://m.solopos.com/banner/sekaten-festival.gif" class="i-amphtml-fill-content i-amphtml-replaced-content">
              </amp-img>
            </a>
          </div>
        </div>
      </amp-fx-flying-carpet>    
    </div>   --}}
    <amp-ad width="100vw" height="320"
    type="adsense"
    data-ad-client="ca-pub-4969077794908710"
    data-ad-slot="2921244965"
    data-auto-format="rspv"
    data-full-width="">
    <div overflow=""></div>
    </amp-ad>      
    <!-- start breaking 2 -->
    <div class="content">
      @php $br2_loop = 1; @endphp
      @foreach ($tags as $item) @if($br2_loop > 4 ) 
      @php            
      $image = $item['featured_image']['thumbnail'] ?? 'https://m.solopos.com/images/no-thumbnail.jpg';
      $title = html_entity_decode($item['title']);
      @endphp       
      <div class="news-strip">       
        <a href="{{ url("/{$item['slug']}-{$item['id']}") }}/amp" title="{{ $title }}">
            <strong>{{ $title }}</strong>
            <amp-img src="{{ $image }}" width="100" height="100" layout="responsive" style="object-fit: cover; height: 100px; width: 100px;"></amp-img>
            <u>@if($item['catparent'] ==''){{ $item['catsname'] }} @else {{ $item['catparent'] }} @endif | {{ Helper::time_ago($item['date']) }}</u>
        </a>
      </div>  
      @endif
      @php $br2_loop++ @endphp
      @endforeach           
    </div>     
@endsection