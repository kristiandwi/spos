@extends('layouts.app-amp')
@section('content')
<div class="full-post">
  <div class="news-box-content">
      <h1 class="news-box-content-title">
        {{ $header['title'] }}
      </h1>
      <p class="news-box-content-sub"><em>{{ $header['ringkasan'] }}</em></p>
      <p class="news-box-content-sub">
          <a href="#">{{ $header['author'] }}</a><br>
          <em>{{ Carbon\Carbon::parse($content['date'])->translatedFormat('l, j F Y - H:i') }} WIB</em>
      </p>
  </div>    
  @if(!empty($video))
  <amp-youtube data-videoid="{{ $video }}" layout="responsive" width="480" height="270"></amp-youtube>
  @else
  <amp-img src="{{ $content['image'] }}" alt="{{ $content['title'] }}" layout="responsive" width="600" height="400"></amp-img>
  <p class="img-caption">
    @if(!empty($content['caption']))
    SOLOPOS.COM - {{ htmlentities($content['caption']) }}
    @else
    SOLOPOS.COM - Panduan Informasi dan Inspirasi
    @endif
  </p> 
  @endif 
  <div class="news-box-content">  

      {{-- <div class="addthis-wrapper">
        <amp-addthis width="320" height="92"  data-pub-id="ra-4dc8efb674777330" data-widget-id="thr1" data-widget-type="inline"></amp-addthis>
      </div> --}}
      <div class="decoration"></div>
      @php
      $konten = htmlspecialchars_decode($content['content']) ;
      $contents = explode('</p>', $konten);
      $total_p = count(array_filter($contents)); 

      // many paragraph
      $p_iklan_1  = array_slice($contents, 0, 2);
      //$first_p  = array_slice($contents, 2, 1);
      $p_iklan_2  = array_slice($contents, 2, 5);
      //$terkait = array_slice($contents, 2,6);
      $last_p  = array_slice($contents, 7);
      @endphp         
      <!-- ads top -->

      <!-- ads parallax -->
      
      {!! implode('</p>', $p_iklan_1) !!}

      <div class="iklan half-bottom" align="center">
        <amp-ad width="100vw" height="320"
        type="adsense"
        data-ad-client="ca-pub-4969077794908710"
        data-ad-slot="2921244965"
        data-auto-format="rspv"
        data-full-width="">
        <div overflow=""></div>
        </amp-ad>
      </div>

      {!! implode('</p>', $p_iklan_2) !!}

      <div class="iklan half-bottom" align="center">
        <amp-ad width="100vw" height="320"
        type="adsense"
        data-ad-client="ca-pub-4969077794908710"
        data-ad-slot="2921244965"
        data-auto-format="rspv"
        data-full-width="">
        <div overflow=""></div>
        </amp-ad>
      </div>

      {!! implode('</p>', $last_p) !!}  

      <div class="iklan half-bottom" align="center">
        <amp-ad width="100vw" height="320"
        type="adsense"
        data-ad-client="ca-pub-4969077794908710"
        data-ad-slot="2921244965"
        data-auto-format="rspv"
        data-full-width="">
        <div overflow=""></div>
        </amp-ad>
      </div>

      <div class="profile-content-wrapper">
        <!-- User Meta Data-->
        <div class="user-meta-data">
          <!-- User Thumbnail-->
          <div class="user-thumbnail">
                @if(!empty($content['avatar']))
                <amp-img src="{{ htmlentities($content['avatar']) }}" width="80" height="80" alt="Profile"></amp-img>
                @else
                <amp-img src="https://images.solopos.com/2019/10/avatar-solopos-370x370.jpg" width="80" height="80" alt="Profile"></amp-img>
                @endif      
          </div>
          <!-- User Content-->             
          <div class="user-content">
            <h6>
              <a href="@if(!empty($data['authors']['editor_url'])){{ url('/')}}/author/{{ $data['authors']['editor_url'] }} @else https://index.solopos.com @endif">{{ $content['editor'] }}</a>
            </h6>
            
            <p>Jurnalis di Solopos Group. Menulis konten di Solopos Group yaitu Harian Umum Solopos, Koran Solo, Solopos.com.</p>
            
            <div class="post-list">
              <a href="@if(!empty($data['authors']['editor_url'])){{ url('/')}}/author/{{ $data['authors']['editor_url'] }} @else https://index.solopos.com @endif">Lihat Artikel Saya Lainnya</a>
            </div>
            <div class="author-social">
              <span>Follow Me: </span>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-google-plus"></i></a>
            </div>              
          </div>
        </div>
      </div>      

      <div class="container mt-3">
        <div class="tag-lists">
        <span>Kata Kunci :</span>
        @if(isset($content['tag']))
            @foreach($content['tag'] as $tag)
            @php
                $tag_name = $tag;
                $tag_slug = str_replace(' ', '-',$tag)
            @endphp
            <a href="{{ url("/tag/{$tag_slug}") }}/amp">{{ $tag_name }}</a>
            @endforeach
        @endif                                
        </div>
      </div>

      <div class="iklan half-bottom" align="center">
        <amp-ad width="100vw" height="320"
        type="adsense"
        data-ad-client="ca-pub-2449643854165381"
        data-ad-slot="3798913759"
        data-auto-format="rspv"
        data-full-width="">
        <div overflow=""></div>
        </amp-ad>
      </div>

      <!-- start hanya untukmu -->
      <h2 class="uppercase full-top no-bottom">Hanya Untuk Anda</h2>
      <h6 class="uppercase full-bottom color-red-dark">Inspiratif & Informatif</h6> 
      <div class="news-top half-bottom">
        @php $hl_loop = 1; @endphp
        @foreach($breakingcat as $hl)
        @if($hl_loop <= 7)       
        <a href="{{ url("/{$hl['slug']}-{$hl['id']}") }}/amp" title="{{ $hl['title'] }}" class="news-header">
            <amp-img src="{{ $hl['images']['thumbnail'] }}" layout="responsive" width="600" height="300" alt="{{ $hl['title'] }}"></amp-img>
            <u class="bg-red-dark">HEADLINE</u>
            <i><span>{{ $hl['category'] }}</span></i>
            <strong>{{ $hl['title'] }}</strong>
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
  </div> <!-- end blog content -->
</div>
@endsection