    <div class="footer full-top">
        <a href="{{ url('amp') }}" class="footer-logo"></a>
        <p>
            Copyright © 2021 solopos.com<br>
			Media Informasi & Inspirasi. All Rights Reserved
        </p>
        <div class="footer-socials">
            <a href="https://www.facebook.com/soloposcom"><i class="fa fa-facebook"></i></a>
            <a href="https://www.twitter.com/soloposdotcom"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/koransolopos"><i class="fa fa-instagram"></i></a>
            <a href="https://www.youtube.com/soloposTV"><i class="fa fa-youtube"></i></a>
            <a href="#"><i class="fa fa-chevron-up"></i></a>
            <div class="clear"></div>
        </div>
    </div> 
    @if(isset($header['is_single']) == 'yes')
    <amp-analytics type="googleanalytics">
      <script type="application/json">
        {
          "vars": {
            "account": "UA-7051417-1"
          },
          "extraUrlParams": {
            "cd1": "{{ $header['editor'] }}",
            "cd2": "{{ $header['category'] ?? '' }}",
            "cd3": "{{ $header['keyword'] }}",
            "cd4": "{{ $header['focusKeyword'] }}",
            "cd6": "post",
            "cd7": "{{ $header['author'] }}"
        },            
          "triggers": {
            "trackPageviewWithCustomData": {
              "on": "visible",
              "request": "pageview",
              "vars": {
                "title": "{{ $header['title'] }}",
                "page": "{{ $header['link'] }}/amp"
              }
            }
          }
        }
      </script>
    </amp-analytics>
    @else 
    <amp-analytics type="googleanalytics">
      <script type="application/json">
        {
          "vars": {
            "account": "UA-7051417-1"
          },
          "triggers": {
            "default pageview": {
              "on": "visible",
              "request": "pageview",
              "vars": {
                "title": "{{ $header['title'] }}"
              }
            }
          }
        }
      </script>
    </amp-analytics>    
    @endif  