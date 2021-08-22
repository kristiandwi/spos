    <!-- start headline -->
    <div class="news-top half-bottom">
        @php $hl_loop = 1; @endphp
        @foreach($popular as $hl)
        @if($hl_loop <=1)       
        <a href="{{ url("/{$hl['slug']}-{$hl['id']}") }}/amp" title="{{ $hl['title'] }}" class="news-header">
            <amp-img src="{{ $hl['images']['thumbnail'] }}" layout="responsive" width="600" height="350" alt="{{ $hl['title'] }}"></amp-img>
            <u class="bg-red-dark">MOST POPULAR</u>
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
  
      <div class="content full-bottom">
        <div class="decoration"></div>
        <div class="news-boxes">
            @php $loop2 = 1; @endphp
            @foreach($popular as $hl)
            @if($loop2 > 1 && $loop2 <= 3)         
            <div class="news-box-item">
              <a href="{{ url("/{$hl['slug']}-{$hl['id']}") }}/amp" title="{{ $hl['title'] }}">
                <amp-img src="{{ $hl['images']['thumbnail'] }}" class="responsive-image" layout="responsive" width="200" height="200" alt="{{ $hl['title'] }}"></amp-img>
                <strong>{{ $hl['title'] }}</strong>
                <em>{{ $hl['category'] }} | {{ Helper::time_ago($hl['date']) }}</em>
              </a>
            </div>
            @endif
            @php $loop2++ @endphp
            @endforeach           
            <div class="clear"></div>
        </div>
        <div class="decoration half-top"></div>
      </div>