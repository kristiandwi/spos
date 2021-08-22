<head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-font" src="https://cdn.ampproject.org/v0/amp-font-0.1.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
    <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
    <script async custom-element="amp-image-lightbox" src="https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js"></script>
    <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    {{-- <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script> --}}
    {{-- <script async custom-element="amp-sticky-ad" src="https://cdn.ampproject.org/v0/amp-sticky-ad-1.0.js"></script> --}}
    {{-- <script async custom-element="amp-fx-flying-carpet" src="https://cdn.ampproject.org/v0/amp-fx-flying-carpet-0.1.js"></script> --}}
    {{-- <script async custom-element="amp-addthis" src="https://cdn.ampproject.org/v0/amp-addthis-0.1.js"></script>
    <script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script> --}}
    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
    <!-- izooto --> 
    {{-- <script async custom-element="amp-web-push" src="https://cdn.ampproject.org/v0/amp-web-push-0.1.js"></script>  --}}
    <!-- // izooto -->  
    <title>{{ $header['title'] }}</title>
    <meta name="copyright" content="Solopos Media Group" />     
    <meta name="googlebot" content="index, follow, all" />
    <meta name="Bingbot" content="index, follow">
    <meta name="robots" content="index, follow, noodp, noydir" />
    <meta name="google-site-verification" content="AA4UjbZywyFmhoSKLELl4RA451drENKllt5Sbq9uINw" />
    <meta name="yandex-verification" content="7966bb082003f8ae" />
    <meta name="msvalidate.01" content="F2320220951CEFB78E7527ECC232031C" />
    <meta property="fb:app_id" content="1438927622798153"/>
    <meta property="fb:pages" content="395076396062" />
    <meta name="language" content="id" />
    <meta name="geo.country" content="id" />
    <meta http-equiv="content-language" content="In-Id" />
    <meta name="geo.placename" content="Indonesia" />
    <meta name="showus-verification" content="pub-2627" />
    <meta property="dable:item_id" content="2015111202028">
    <meta name="title" content="{{ $header['title'] }}" />
    <meta name="description" content="{{ $header['description'] ?? 'Solopos.com Panduan Informasi dan Inspirasi' }}" />

    @if(isset($header['is_single']) == 'yes')
    <!-- Primary Meta Tags -->
    <meta name="title" content="{{ $header['title'] }}" />
    <meta name="description" content="{{ $header['description'] }}" />
    <meta property="article:section" content="{{ $header['category'] }}"> 
    <meta property="article:publisher" content="https://www.facebook.com/soloposcom" />
    <meta property="article:author" content="{{ $header['author'] }}" />
    <meta property="article:published_time" content="{{ $header['publish_time'] }}" />  
    <link rel="image_src" href="{{ $header['image'] }}" />
    <link rel="canonical" href="{{ $header['link'] }}" />       
    <!-- Open Graph / Facebook -->
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $header['title'] }}" />
    <meta property="og:description" content="{{ $header['description'] }}" />
    <meta property="og:image" content="{{ $header['image'] }}" />
    <meta property="og:url" content="{{ $header['link'] }}" />
    <meta property="og:image:width" content="{{ $header['img_width'] }}" />
    <meta property="og:image:height" content="{{ $header['img_height'] }}" />
    <meta property="og:site_name" content="Solopos.com" />
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $header['title'] }}" />
    <meta name="twitter:description" content="{{ $header['description'] }}" />
    <meta name="twitter:image" content="{{ $header['image'] }}" />
    <meta name="twitter:image:src" content="{{ $header['image'] }}" />
    <meta name="twitter:site" content="@soloposdotcom" />  

    <script type="application/ld+json">
    {
        "@context":"http://schema.org",
        "@type":"NewsArticle",
        "headline":"{{ $header['title'] }}",
        "datePublished":"{{ $header['publish_time'] }}",
        "dateModified":"{{ $header['publish_time'] }}",
        "mainEntityOfPage":{
            "@type":"WebPage",
            "@id":"{{ $header['link'] }}"
        },
        "description":"{{ $header['description'] }}",
        "image":{
            "@type":"ImageObject",
            "url":"{{ $header['image'] }}",
            "width":{{ $header['img_width'] }},
            "height":{{ $header['img_height'] }}
        },
        "author":{
            "@type":"Person",
            "name":"{{ $header['author'] }}"
        },
        "editor":{
          "@type":"Person",
          "name":"{{ $header['editor'] }}"
      },          
        "publisher":{
            "@type":"Organization",
            "name":"Solopos.com",
            "logo":{
                "@type":"ImageObject",
                "url":"{{ url('images/xlogo.png.pagespeed.ic.r-renCjxN7.webp') }}",
                "width":360,
                "height":63
            }
        }
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebPage",
      "headline": "{{ $header['title'] }}",
      "url": "{{ $header['link'] }}",
      "datePublished": "{{ $header['publish_time'] }}",
      "image": "{{ $header['image'] }}",
      "thumbnailUrl" : "{{ $header['image'] }}"
    }
    </script>
    
    
    <script type="application/ld+json">
    {
        "@context":"http://schema.org",
        "@type":"BreadcrumbList",
        "itemListElement":[{
            "@type":"ListItem",
            "position":1,"name":"{{ $header['category'] }}",
            "item":"https://www.solopos.com/{{ $header['category'] }}"
        }]
    }
    </script>

    {{-- <script type="text/javascript" amp-custom>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-7051417-1', 'auto');
      ga('set', 'dimension1', '{{ $header['editor'] }}');
      ga('set', 'dimension2', '{{ $header['category'] ?? '' }}');
      ga('set', 'dimension3', '{{ $header['keyword'] }}');
      ga('set', 'dimension4', '{{ $header['focusKeyword'] }}');
      ga('set', 'dimension5', '{{ $header['publish_time'] }}');
      ga('set', 'dimension6', 'post');  
      ga('set', 'dimension7', '{{ $header['author'] }}');      
      ga('set', 'dimension8', 'solopos.com');
      ga('send', 'pageview');
    </script>
    <link rel="canonical" href="{{ $header['link'] }}"> --}}
    @else 
    <link rel="canonical" href="https://www.solopos.com">
    @endif

    <link rel="icon" href="{{ asset('images/favicon.ico') }}"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i|Playfair+Display:400,400i,700,700i,900,900i|Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Merriweather:ital,wght@0,300;0,900;1,700">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,maximum-scale=1,user-scalable=no"><meta name="apple-mobile-web-app-capable" content="yes"/><meta name="apple-mobile-web-app-status-bar-style" content="black">
    <style amp-custom>
    body{font-family:'Poppins', sans-serif; font-size:14px; background-color:#FFFFFF;}
    .bg-teal-light{ background-color: #1abc9c; color:#FFFFFF}
    .bg-teal-dark{  background-color: #16a085; color:#FFFFFF}
    .border-teal-light{ border:solid 1px #1abc9c;}
    .border-teal-dark{  border:solid 1px #16a085;}
    .color-teal-light{ color: #1abc9c;}
    .color-teal-dark{  color: #16a085;}
    .bg-green-light{background-color: #2ecc71; color:#FFFFFF}
    .bg-green-dark{background-color: #2abb67; color:#FFFFFF}
    .border-green-light{border:solid 1px #2ecc71;}
    .border-green-dark{ border:solid 1px #2abb67;}
    .color-green-light{color: #2ecc71;}
    .color-green-dark{color: #2abb67;}
    .bg-blue-light{background-color: #3498db; color:#FFFFFF}
    .bg-blue-dark{background-color: #2980b9; color:#FFFFFF;}
    .border-blue-light{border:solid 1px #3498db;}
    .border-blue-dark{ border:solid 1px #2980b9;}
    .color-blue-light{color: #3498db;}
    .color-blue-dark{color: #2980b9;}
    .bg-magenta-light{background-color: #9b59b6; color:#FFFFFF}
    .bg-magenta-dark{background-color: #8e44ad; color:#FFFFFF}
    .border-magenta-light{border:solid 1px #9b59b6;}
    .border-magenta-dark{ border:solid 1px #8e44ad;}
    .color-magenta-light{color: #9b59b6;}
    .color-magenta-dark{color: #8e44ad;}
    .bg-night-light{background-color: #34495e; color:#FFFFFF}
    .bg-night-dark{background-color: #2c3e50; color:#FFFFFF}
    .border-night-light{border:solid 1px #34495e;}
    .border-night-dark{ border:solid 1px #2c3e50;}
    .color-night-light{color: #34495e;}
    .color-night-dark{color: #2c3e50;}
    .bg-yellow-light{background-color: #E67E22; color:#FFFFFF}
    .bg-yellow-dark{background-color: #e86f2a; color:#FFFFFF}
    .border-yellow-light{border:solid 1px #E67E22;}
    .border-yellow-dark{ border:solid 1px #F27935;}
    .color-yellow-light{color: #f1c40f;}
    .color-yellow-dark{color: #f39c12;}
    .bg-orange-light{background-color: #F9690E; color:#FFFFFF}
    .bg-orange-dark{background-color: #D35400; color:#FFFFFF}
    .border-orange-light{border:solid 1px #F9690E;}
    .border-orange-dark{ border:solid 1px #D35400;}
    .color-orange-light{color: #e67e22;}
    .color-orange-dark{color: #d35400;}
    .bg-red-light{background-color: #e74c3c; color:#FFFFFF}
    .bg-red-dark{background-color: #c0392b; color:#FFFFFF}
    .border-red-light{border:solid 1px #e74c3c;}
    .border-red-dark{ border:solid 1px #c0392b;}
    .color-red-light{color: #e74c3c;}
    .color-red-dark{color: #c0392b;}
    .bg-pink-light{background-color: #fa6a8e ; color:#FFFFFF}
    .bg-pink-dark{background-color: #FB3365 ; color:#FFFFFF}
    .border-pink-light{border:solid 1px #fa6a8e ;}
    .border-pink-dark{ border:solid 1px #FB3365 ;}
    .color-pink-light{color: #fa6a8e;}
    .color-pink-dark{color: #FB3365;}
    .bg-gray-light{background-color: #bdc3c7; color:#FFFFFF}
    .bg-gray-dark{background-color: #95a5a6; color:#FFFFFF}
    .border-gray-light{border:solid 1px #bdc3c7;}
    .border-gray-dark{ border:solid 1px #95a5a6;}
    .color-gray-light{color: #bdc3c7;}
    .color-gray-dark{color: #95a5a6;}
    .bg-white{background-color:#FFFFFF;}
    .color-white{color:#FFFFFF;}
    .border-white{border:solid 1px #FFFFFF;}
    .bg-black{background-color:#000000;}
    .color-black{color:#000000;}
    .border-black{border:solid 1px #000000;}

    /*Social Icons*/
    .facebook-bg{background-color:#3b5998; color:#FFFFFF;}
    .linkedin-bg{background-color:#0077B5; color:#FFFFFF;}
    .twitter-bg{background-color:#4099ff; color:#FFFFFF;}
    .google-bg{ background-color:#d34836; color:#FFFFFF;}
    .whatsapp-bg{ background-color:#34AF23; color:#FFFFFF;}
    .pinterest-bg{ background-color:#C92228; color:#FFFFFF;}
    .sms-bg{ background-color:#27ae60; color:#FFFFFF;}
    .mail-bg{ background-color:#3498db; color:#FFFFFF;}
    .dribbble-bg{ background-color:#EA4C89; color:#FFFFFF;}
    .tumblr-bg{ background-color:#2C3D52; color:#FFFFFF;}
    .reddit-bg{ background-color:#336699; color:#FFFFFF;}
    .youtube-bg{ background-color:#D12827; color:#FFFFFF;}
    .phone-bg{ background-color:#27ae60; color:#FFFFFF;}
    .skype-bg{ background-color:#12A5F4; color:#FFFFFF;}
    .facebook-color{    color:#3b5998;}
    .linkedin-color{    color:#0077B5;}
    .twitter-color{     color:#4099ff;}
    .google-color{      color:#d34836;}
    .whatsapp-color{    color:#34AF23;}
    .pinterest-color{   color:#C92228;}
    .sms-color{         color:#27ae60;}
    .mail-color{        color:#3498db;}
    .dribbble-color{    color:#EA4C89;}
    .tumblr-color{      color:#2C3D52;}
    .reddit-color{      color:#336699;}
    .youtube-color{     color:#D12827;}
    .phone-color{       color:#27ae60;}
    .skype-color{       color:#12A5F4;}

    /*Font Settings*/
    h1{ font-size:24px; line-height:34px; font-weight:500;}
    h2{ font-size:22px; line-height:32px; font-weight:500;}
    h3{ font-size:20px; line-height:30px; font-weight:500;}
    h4{ font-size:18px; line-height:28px; font-weight:500;}
    h5{ font-size:16px; line-height:26px; font-weight:500;}
    h6{ font-size:14px; line-height:22px; font-weight:800;}
    .ultrathin{font-weight:200;}
    .thin{font-weight:300;}
    .thiner{font-weight:400;}
    .boder{font-weight:600;}
    .bold{font-weight:700;}
    .ultrabold{font-weight:800;}
    .capitalize{text-transform: capitalize;}
    .italic{font-style: italic;}
    .small-text{font-size:12px; display:block;}
    .center-text{text-align:center; display:block;}
    .right-text{text-align:right;}
    .uppercase{text-transform: uppercase;}
    .boxed-text{width:80%; margin:0px auto 30px auto;}
    .round-image{border-radius:500px;}
    p a{display:inline;}

    /*Content Settings*/
    .content{padding:0px 10px 0px 10px}
    .container{margin-bottom:30px}
    .full-bottom{margin-bottom:25px}
    .no-bottom{margin-bottom:0px}
    .full-top{margin-top:25px}
    .half-bottom{margin-bottom:15px}
    .half-top{margin-top:15px}
    .quarter-bottom{margin-bottom:15px}
    .hidden{display:none}
    .left-column{width:45%; margin-right:5%; float:left}
    .right-column{width:45%; margin-left:5%; float:left}
    .one-third-left{float:left; width:29%;  margin-right:1%}
    .one-third-center{float:left; width:29%; margin-left:5%; margin-right:5%}
    .one-third-right{float:left; width:29%; margin-left:1%}
    .clear{clear:both}

    * {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        vertical-align: baseline;
        outline: none;
        font-size-adjust: none;
        -webkit-text-size-adjust: none;
        -moz-text-size-adjust: none;
        -ms-text-size-adjust: none;
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        -webkit-font-smoothing: antialiased;
        -webkit-transform: translate3d(1,1,1);
        transform:translate3d(1,1,1);    
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    div, a, p, img, blockquote, form, fieldset, textarea, input, label, iframe, code, pre {
        display: block;
        position:relative;
    }

    p{
        line-height:30px; 
        font-weight:400; 
        color:#111; 
        font-size:14px; 
        margin-bottom:30px;
    }

    a{text-decoration:none; color:#3498db;} 

    /*Link Block*/

    .link-block{
        height:50px;
        line-height:50px;
        font-size:14px;
        color:#1f1f1f;
        font-weight:400;
        border-bottom:solid 1px rgba(0,0,0,0.1);
    }

    .link-block i{
        position:absolute;
        right:0px;
        height:50px;
        line-height:50px;
    }

    .border-top{border-top:solid 1px rgba(0,0,0,0.1);}

    /*Lists*/
    .icon-list{list-style:none; font-size:14px; line-height:28px; color:#666666;}
    .icon-list i{width:30px;}

    .center-icon{
        width:80px;
        height:80px;
        border-radius:80px;
        border:solid 1px rgba(0,0,0,0.5);
        text-align:center;
        line-height:80px;
        font-size:24px;
        margin:0px auto 30px auto;
        display:block;
    }

    .decoration, .decoration-no-bottom{
        height:1px; 
        background-color:rgba(0,0,0,0.1);
    }

    .decoration{margin-bottom:30px;}
    .decoration-margins{margin:0px 20px 30px 20px}

    header{
        position:fixed;
        height:59px;
        background-color:#FFFFFF;
        width:100%;
        z-index:99999;
        border-bottom:solid 1px rgba(0,0,0,0.1);
    }

    .header-icon-1, .header-icon-2{
        position:absolute;
        color:#00437d;
        line-height:60px; 
        text-align:center; 
        width:60px;
        display:block;
        font-size:27px;
        background-color:transparent;
    }

    .header-icon-1{
        right:0px; 
        top:0px;
        border-left:dashed 1px rgba(0,0,0,0.05);
    }

    .header-icon-2{
        left: 0;
        top:0px;
        border-right:dashed 1px rgba(0,0,0,0.05);
    }

    .header-logo{
        width:175px;
        height:30px;
        display:block;
        padding-top: 15px;
        margin: 0 auto;
    }

    .header-clear{
        height:60px;
    }

    /*Footer*/

    .footer{
        padding-bottom: 30px;
        background: #eaeef1;
        padding-top: 20px;
        border-top: 1px solid #909ca5;
    }

    .footer-logo{
        width:175px;
        height:30px;
        background-image:url({{ url('images/logo.png') }});
        background-repeat:no-repeat;
        background-size:175px 30px;
        margin:0px auto 20px auto;
    }

    .footer-socials a{
        width:40px;
        height:40px;
        line-height:40px;
        text-align:center;
        color:#1f1f1f;
        float:left;
    }

    .footer p {font-size: 11px;text-align: center;line-height: 15px;}

    .footer-socials{
        width:200px;
        height:30px;
        margin:0 auto;
    }

    /*Homepage*/

    .caption{
        position:absolute;
        bottom:0px;
        left:0px;
        right:0px;
        height:65px;
        padding-left:20px;
        padding-right:20px;
        background-color:rgba(0,0,0,0.5);
    }

    .caption h4{
        font-size:14px;
        color:#FFFFFF;
        line-height:20px;
        margin-top:12px;
    }

    .caption h3{
        color:#FFFFFF;
        margin-bottom:5px;
        font-size:16px;
        padding-top:23px;
        line-height:0px;
    }

    .caption p{
        font-size:12px;
        color:rgba(255,255,255,0.5);
    }

    p.img-caption {font-size: 12px; padding: 5px 10px;line-height: 15px; margin-bottom: 20px;}
    .call-to-action a{
        width:33.3%;
        float:left;
        text-align:center;
        border-bottom:solid 1px rgba(0,0,0,0.1);
        height:50px;
        line-height:50px;
        color:#1f1f1f;
        font-size:12px;
    }

    .call-to-action a i{
        padding-right:10px;
    }

    .social-icons{
        width:150px;
        margin:0 auto;
    }

    .social-round a{border-radius:50px;}

    .social-icons-small{
        width:95px;
        margin:0 auto;
    }

    .social-icons a{
        line-height:40px;
        width:40px;
        height:40px;
        margin-left:5px;
        margin-right:5px;
        float:left;
    }

    .social-icons-small a{
        line-height:35px;
        width:35px;
        height:35px;
        margin-left:5px;
        margin-right:5px;
        float:left;
    }

    /*Heading Block*/
    .heading-block{
        padding:30px 20px;
        margin-bottom:30px;
    }

    .heading-block h4{
        position:relative;
        z-index:10;
        color:#FFFFFF;
    }

    .heading-block p{
        position:relative;
        z-index:10;
        color:rgba(255,255,255,0.5);
        margin-bottom:0px;
    }

    .heading-block a{
        z-index:10;
        width:100px;
        height:30px;
        line-height:30px;
        color:#FFFFFF;
        text-align:center;
        font-size:12px;
        margin:20px auto 0px auto;
        border:solid 1px rgba(255,255,255,0.5);
        border-radius:5px;
        display:block;
    }

    .icon-heading h4{margin-bottom:5px}
    .icon-heading h4 i{
        font-size:16px;
        padding-right:20px;
    }

    .quote-style h4{
        font-weight:300;
        margin-left:40px;
        margin-right:40px;
        text-align:center;
        line-height:40px;
    }

    .rating{
        width:95px;
        margin-left:auto;
        margin-right:auto;
        margin-bottom:10px;
        display:block; 
    }


    .half-column-left .half-left-img{
        position:absolute;
        border-radius:150px;
        margin-left:-50px;
        left:0px;
    }

    .half-column-left{
        padding-left:70px;
        padding-right:20px;
        min-height:110px;
        overflow:hidden;
    }


    .half-column-right .half-right-img{
        position:absolute;
        border-radius:150px;
        margin-right:-50px;
        right:0px;
    }

    .half-column-right{
        padding-right:70px;
        padding-left:20px;
        min-height:110px;
        overflow:hidden;
    }

    /*Gallery*/

    .gallery-thumb{
        width:31%;
        float:left;
        margin-bottom:3%;
    }
    .gallery-round .gallery-thumb{border-radius:100px}
    .gallery-wide .gallery-thumb-wide{margin-bottom:5px;}

    .gallery-thumb:nth-child(3n-1){
        margin-left:3%;
        margin-right:3%;
    }

    ::-webkit-scrollbar { width: 0; }

    #sidebar{
        width:100%;
        background-color:#FFFFFF;
        padding-top:40px;
    }

    .sidebar-header a{
        width:50px;
        float:left;
        padding-top:60px;
        line-height:60px;
        color:#000000;
        text-align:center;
        border-bottom:solid 1px rgba(0,0,0,0.05);
    }

    .sidebar-logo{
        background-image:url({{ url('images/logo.png') }});
        height:31px;
        width:150px;
        background-size:150px 31px;
        display:block;
        margin:25px 0px 25px 15px;
    }

    .sidebar-menu{margin-left:15px; margin-bottom:0px;}

    .sidebar-menu i{
        font-size:14px;
        width:35px;
        height:35px;
        line-height:35px;
        text-align:center;
        border-radius:35px;
        margin-right:15px;
    }

    .sidebar-menu ul li a .fa-circle{font-size:4px; margin-left:1px;}
    .sidebar-menu .fa-circle, .sidebar-menu .fa-angle-down{
        width:35px;
        height:35px;
        position:absolute;
        right:0px;
        top:3px;
        font-size:4px;
        color:#c9c9c9;
    }

    .sidebar-menu .fa-angle-down{font-size:12px;}

    .sidebar-menu section[expanded] .fa-angle-down{
        transform:rotate(180deg);
    }

    .sidebar-menu h4{
        background:none;
        border:none;
        color: #3a3a3a;
        line-height: 60px;
        font-size: 12px;
    }

    .sidebar-menu ul{
        line-height:50px;
        padding:10px 0px 20px 0px;
    }

    .sidebar-menu ul li a{
        color:#6b757d;
        font-size:11px;
        line-height:50px;
    }

    .sidebar-menu i:first-child{
        font-size:14px;
    }

    .sidebar-menu li a .fa-circle{margin-top:-5px;}

    .sidebar-divider{
        font-family: 'Roboto', sans-serif;
        margin-bottom: 20px;
        margin-top:20px;
        font-size: 17px;
        padding-left: 20px;
        font-weight: 800;
        text-transform: uppercase;
        color:#495254;
        border-bottom: solid 1px rgba(0,0,0,0.05);
        border-top: solid 1px rgba(0,0,0,0.05);
        line-height:60px;
        margin-bottom:10px;
    }

    .sidebar-copyright{
        margin-bottom:40px;
    }

    .sidebar-menu .sidebar-item{
        color:#1f1f1f;
        font-size:13px;
        line-height:40px;
    }

    .active-menu, .active-item{
        font-weight:600;
        color:#000000;
    }

    .active-menu .fa-circle, .active-item .fa-circle{
        color:#27ae60;
        opacity:1;
        font-size:8px;
        margin-top:-1px;
    }


    /*Splash Page*/
    .splash-content .splash-logo{
        background-image:url({{ url('images/logo.png') }});
        background-size:120px 35px;
        width:120px;
        height:35px;
        margin:0px auto 20px auto;
    }

    .splash-content{
        position:fixed;
        width:240px;
        height:350px;
        left:50%;
        top:50%;
        margin-left:-120px;
        margin-top:-115px;
    }

    .splash-button{
        width:130px;
        margin:0 auto;
        text-align:center;
        height:40px;
        line-height:40px;
        font-size:12px;
        font-weight:600;
    }

    /*Landing Content*/
    .landing-content{
        width:300px;
        margin:30px auto 30px auto;
        border-bottom:solid 1px rgba(255,255,255,0.1);
    }

    .landing-content a{
        width:70px;
        height:70px;
        float:left;
        margin:0px 15px 60px 15px;
        border-radius:70px;
        line-height:70px;
        font-size:21px;
        text-align:center;
    }

    .landing-content a em{
        position:absolute;
        font-size:14px;
        width:70px;
        text-align:center;
        bottom:-60px;
        left:0px;
        right:0px;
        font-style:normal;
    }

    /*Accordion Styles*/
    .accordion h4{
        background-color:transparent;
        border:none;
    }

    .accordion h4{
        font-size:16px;
        line-height:40px;
    }

    .accordion h4 i{
        height:40px;
        line-height:40px;
        position:absolute;
        right:0px;
        font-size:12px;
    }

    .nested-accordion h4{
        font-size:14px;
    }

    section[expanded] .fa-plus{	transform:rotate(45deg);}
    section[expanded] .fa-angle-down{	transform:rotate(180deg);}
    section[expanded] .fa-chevron-down{	transform:rotate(180deg);}

    /*Fonts*/
    .demo-icons a{
        color:#FFFFFF; 
        width:20%;
        height:50px;
        float:left;
    }
    .demo-icons a i{
        color:#1f1f1f; 
        font-size:21px;
        width:50px;
        height:50px; 
        float:left; 
        text-align:center; 
        overflow:hidden;
    }

    /*User Notifications*/
    .user-notification{
        text-align:left;
        padding-top:5px;
        padding-left:10px;
        padding-right:10px;
        background-color:#27ae60;
        height:50px;
        color:#FFFFFF;
        font-size:12px;
        line-height:24px;
        width:70%;
        float:left;
    }

    .user-notification button{
        background-color:#27ae60;
        color:#FFFFFF;
        height:55px;
        position:fixed;
        right:0px;
        bottom:0px;
        width:25%;
    }

    /*Dropcaps*/

    .dropcaps-1:first-letter{
        float:left;
        font-size:57px;
        padding:14px 15px 0px 0px;
        font-weight:800;
        color:#1f1f1f;
    }

    .dropcaps-2:first-letter{
        font-family: 'Times New Roman', sans-serif;
        float:left;
        font-size:42px;
        padding:15px 15px 0px 0px;
        font-weight:800;
        color:#1f1f1f;
    }

    .dropcaps-3:first-letter{
        background-color:#1f1f1f;
        padding:10px 15px 10px 15px;
        margin:5px 12px 0px 0px;
        float:left;
        font-size:24px;
        font-weight:800;
        color:#FFFFFF;
    }

    .dropcaps-4:first-letter{
        font-family: 'Times New Roman', sans-serif;
        font-weight:800;
        background-color:#1f1f1f;
        padding:8px 17px 8px 17px;
        margin:5px 12px 0px 0px;
        float:left;
        font-size:20px;
        font-weight:400;
        color:#FFFFFF;
    }

    /*Highlights*/
    .highlight{margin-bottom:10px;}
    .highlight span{padding:3px 5px 3px 5px; margin-right:2px;}
    ol ul{	padding-left:5px;}
    ol, ul{line-height:24px; margin-left:20px;}
    .icon-list{list-style:none; margin-left:0px; padding-left:0px;}
    .icon-list i{font-size:10px;}
    .icon-list ul{list-style:none; padding-left:10px;}
    .icon-list ul ul{padding-left:10px;}

    /*Blockquotes*/
    .blockquote-1{border-left:solid 2px #1f1f1f; padding:5px 0px 5px 20px;}
    .blockquote-1 a{text-align:right; margin-top:-20px;  font-size:12px;}
    .blockquote-2 .blockquote-image{position:absolute; border-radius:50px;}
    .blockquote-2 h5{padding-left:60px;}
    .blockquote-2 .first-icon{padding-left:60px;}
    .blockquote-2 a{text-align:right; margin-top:-20px; font-size:12px;}
    .blockquote-3 .blockquote-image{width:150px; border-radius:150px; margin:0 auto; display:block;}
    .blockquote-3 h5{margin:10px 0px 10px 0px;}
    .blockquote-3 .ratings{width:100px; margin:10px auto 10px auto;}
    .blockquote-3 .ratings i{font-size:18px;}
    .blockquote-4 i{font-size:24px; position:absolute; margin-top:10px;}
    .blockquote-4 p{padding-left:50px;}

    /*Buttons*/
    .button{
        display:inline-block;
        padding:13px 20px;
        margin:0px 0px 25px 0px;
        font-size:12px;
    }

    .button-round{border-radius:30px;}
    .button-full{display: block; text-align: center;}
    .button-center{width:100px; margin-left:auto; margin-right:auto; display:block; text-align:center;}
    .button:hover{opacity:0.9;}

    .icon-square, .icon-round{
        width:40px;
        height:40px;
        line-height:40px;
        text-align:center;
        display:inline-block;
        margin-left:6px;
        margin-right:6px;
        margin-bottom:10px;
        font-size:14px;
    }
    .icon-square:hover, .icon-round:hover{opacity:0.9;}
    .icon-round{border-radius:45px;}

    /*Page 404*/
    .page-404 h1{font-size:60px; line-height:70px; margin-top:50px;}
    .page-soon h1{font-size:60px; line-height:70px; margin-top:50px;}
    .page-soon h6{font-size:24px;}

    /*Profile Page*/

    .profile-gradient{
        background: -moz-linear-gradient(top,rgba(255,255,255,0) 0%,rgba(255,255,255,0.95) 75%,rgba(255,255,255,1) 100%);
        background: -webkit-linear-gradient(top,rgba(255,255,255,0) 0%,rgba(255,255,255,0.95) 75%,rgba(255,255,255,1) 100%);
        background: linear-gradient(to bottom,rgba(255,255,255,0) 0%,rgba(255,255,255,0.95) 75%,rgba(255,255,255,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00ffffff',endColorstr='#ffffff',GradientType=0);
        height: 250px;
        margin-top: -235px;
    }

    .profile-overlay .profile-header{margin-top:-80px}
    .profile-header h1{font-size:30px;}
    .profile-header h6{letter-spacing:2px; opacity:0.5;}
    .profile-header h5{font-size:12px;}
    .profile-header i{margin-right:10px;}
    .profile-header p{font-size:18px;}
    .profile-followers a{float:left; width:33%; color:#1f1f1f; font-size:18px;}
    .profile-followers em{display:block; font-style:normal; font-size:12px;}
    .profile-thumb{margin-top:-50px; width:100px; margin-left:auto; margin-right:auto; display:block; border-radius:100px; border-radius:100px; border:solid 3px #FFFFFF;}

    /*Timeline 1*/

    .timeline-1{overflow:hidden; padding:20px }

    .timeline-1 .timeline-deco{
        position:absolute;
        top:0px;
        left:50%;
        width:1px;
        bottom:0px;
        background-color:rgba(0,0,0,0.15);
    }

    .timeline-1 .timeline-icon{
        width:60px;
        height:60px;
        border-radius:60px;
        line-height:60px;
        text-align:center;
        font-size:18px;
        background-color:#FFFFFF;
        border:solid 1px rgba(0,0,0,0.2);
        margin:0px auto 30px auto;
    }

    .timeline-1 .container{background-color:#FFFFFF; padding:30px 0px 1px 0px}
    .timeline-2{overflow:hidden; padding:50px 20px 0px 20px; }

    .timeline-2 .timeline-deco{
        position:absolute;
        top:0px;
        left:50px;
        width:1px;
        bottom:0px;
        background-color:rgba(0,0,0,0.15);
    }

    .timeline-2 .timeline-icon{
        width:40px;
        height:40px;
        border-radius:40px;
        line-height:40px;
        text-align:center;
        font-size:18px;
        background-color:#FFFFFF;
        border:solid 1px rgba(0,0,0,0.2);
        margin-left:10px;
    }

    .timeline-2 .container{
        background-color:#FFFFFF; 
        margin-left:70px;
        margin-top:-60px;
        padding-bottom:30px;
    }

    /*Contact Page*/

    .contactField{
        font-family:'Roboto', sans-serif;
        height:40px;
        line-height:40px;
        line-height:100%;
        width:100%;
        display:block;
        border:solid 1px rgba(0,0,0,0.1);
        text-indent:10px;
        font-size:13px;
        transition:all 250ms ease;
        margin-bottom:20px;
    }

    .contactField:focus{
        border:solid 1px rgb(39, 174, 96);
        transition:all 250ms ease;
    }

    .contactTextarea{
        font-family:'Roboto', sans-serif;
        padding-top:10px;
        min-height:80px;
        line-height:40px;
        line-height:100%;
        width:100%;
        display:block;
        border:solid 1px rgba(0,0,0,0.1);
        text-indent:10px;
        font-size:13px;
        transition:all 250ms ease;
        margin-bottom:30px;
    }

    .contactTextarea:focus{
        transition:all 250ms ease;
        border:solid 1px rgb(39, 174, 96);
    }

    .field-title{
        font-size:13px; 
        margin-bottom:5px;
    }

    .field-title span{
        font-size:10px;
        color:#cacaca;
        position:absolute;
        right:0px;
        margin-top:2px;
    }

    .buttonWrap{
        width:100%;
        display:block;
        text-align:center;
        margin-bottom:30px;
        appearance:none;
        -webkit-appearance:none;
    }

    .contact-icon{
        color:#666666;
        line-height:30px;
    }

    .contact-icon i{
        color:#1f1f1f;
        width:30px;
    }





    /*News Box*/

    .addthis-wrapper{
        margin-bottom:-40px;
        margin-top:-25px;
        text-align: center;
    }

    .news-box{
        background-position:center center;
        background-attachment: fixed;
        padding-top:50px;
        padding-bottom:50px;
    }

    .no-stack{
        padding-top:20px;
        padding-bottom:20px;
    }

    .full-post{
        padding-bottom:0px;
        padding-top:0px;
    }

    .full-post .news-box-content{
        margin-left:0px;
        margin-right:0px;
    }

    .news-stack-1,
    .news-stack-2,
    .news-stack-3,
    .news-stack-4,
    .news-stack-5,
    .news-stack-6,
    .news-stack-7,
    .news-stack-8{
        border:solid 1px rgba(0,0,0,0.1);
        position:absolute;
        background-color:#FFFFFF;
        height:5px;
    }

    .news-stack-1{
        width:90%;
        margin-top:-5px;
        margin-left:5%;
        z-index:10;
    }

    .news-stack-2{
        width:86%;
        margin-top:-10px;
        margin-left:7%;
        z-index:9;
    }

    .news-stack-3{
        width:82%;
        margin-top:-15px;
        margin-left:9%;
        z-index:8;
    }

    .news-stack-4{
        width:78%;
        margin-top:-20px;
        margin-left:11%;
        z-index:7;
    }

    .news-stack-5{
        width:90%;
        margin-left:5%;
        z-index:9;
    }

    .news-stack-6{
        width:86%;
        margin-left:7%;
        margin-top:5px;
        z-index:8;
    }

    .news-stack-7{
        width:82%;
        margin-left:9%;
        margin-top:10px;
        z-index:7;
    }

    .news-stack-8{
        width:78%;
        margin-left:11%;
        margin-top:10px;
        z-index:6;
    }

    .news-box-content{
        /*border:solid 1px rgba(0,0,0,0.1);*/
        border-bottom:none;
        background-color:#FFFFFF;
        margin-left:10px;
        margin-right:10px;
        z-index:11;
        padding:20px 10px;
        padding-bottom:10px;
    }

    .news-box-content img, .news-box-content amp-img {max-width: 100%; height: auto;}
    .alignleft {
    display: inline;
    float: left;
    margin: 5px 20px 10px 0;
  max-width: 100%;
  height: auto;
}
.alignright {
    display: inline;
    float: right;
  max-width: 100%;
  height: auto;
    margin: 5px 0 10px 20px
}
.aligncenter {
    text-align: center;
    display: block;
    max-width: 100%;
    height: auto;
    margin-right: auto;
    margin-left: auto
}
.wp-caption {
    max-width: 100%;
    background: #fff;
    margin-bottom: 20px;
}
.wp-caption img {
    margin: 0;
  max-width: 100%;
  height: auto;
}
p.wp-caption-text {
    color: #666;
    font-size: 13px;
    line-height: 15px;
    font-style: italic;
    margin: 5px 0 25px 0
}

figcaption {font-size: 12px;} 
    .news-box-content p{
        font-size: 18px;
        line-height: 30px;
    }

    .news-box-content .footer{
        margin-top:50px;
    }

    .news-box-content-title{
        font-size:24px; 
        font-weight:700;
        padding-bottom:15px;
        font-family: "Roboto";
        text-align: center;
        line-height: 31px;
    }

    p.news-box-content-sub {
        padding-bottom:0px;
        text-align: center;
    }

    .news-box-content-sub strong{
        font-size:12px;
        font-weight:400;
    }

    .news-box-content-sub a{
        font-size:12px;
        padding-left:5px;
    }

    .news-box-content-sub em{
        display:block;
        margin-top:-10px;
        margin-bottom:-5px;
        font-size:12px;
        font-style:normal;
        color:#9f9f9f;
        line-height: 17px;
    }

    .profile-content-wrapper {
        position: relative;
        z-index: 1;
        padding-top: 15px;
        padding-bottom: 15px;
        overflow: hidden;
        background: #ffffcc;
        background: -webkit-linear-gradient(to right, #dcebfd, #fff);
        background: linear-gradient(to right, #dcebfd, #fff); 
        margin-bottom: 20px;
    }
    .profile-settings-option a {
    display: block;
    position: absolute;
    top: 0.1rem;
    right: 1rem;
    width: 2rem;
    height: 2rem;
    text-align: center;
    background-color: #00437c;
    border-radius: 50%;
    z-index: 99;
    box-shadow: 0 1px 16px 0 rgba(16, 13, 209, 0.175); }
    .profile-settings-option a i {
        line-height: 32px; color: #fff; }
    .profile-settings-option a:hover, .profile-settings-option a:focus {
        background-color: #100DD1;
        color: #ffffff; }

    .user-meta-data {
    position: relative;
    z-index: 1; }
    .user-meta-data .user-thumbnail {
        position: relative;
        z-index: 1;
        max-width: 80px;
        width: 80px; float:left; margin-right: 10px}
        .user-meta-data .user-thumbnail img {
        border-radius: 0.5rem; height: auto;}
    .user-meta-data .user-content {
        padding-left: 0.5rem; }
        .user-meta-data .user-content h6 {font-size:17px; font-weight: 600; margin-bottom: 0;}
        .user-meta-data .user-content > p {
        font-size: 12px;
        color: #999;
        display: block;
        font-weight: 500;
        margin-bottom: 2px; line-height: 19px;}
        .user-meta-data .user-content .user-meta-data p {
        margin-bottom: 0;
        text-transform: uppercase;
        line-height: 1; }
        .user-meta-data .user-content .user-meta-data p span {
            display: block;
            font-size: 10px;
            font-weight: 400;
            color: #797494; line-height: 13px; }
            .user-meta-data .user-content .user-meta-data p span.counter {
            font-size: 18px;
            margin-bottom: 0.375rem;
            font-weight: 700;
            color: #020b10; }
            .author-social {
                font-size: 13px;
                margin-left: 80px;
            }

            .author-social a {
                color: #999;
                margin-left: 10px;
                display: inline-block;
                
            }

    .user-meta-data .user-content .post-list {
        background: linear-gradient(to right, #1fb4dd, #00437d);
        padding: 0.125rem 1rem 0.1rem;
        border-radius: 4px;
        font-size: 12px;
        display: inline-block;
        font-weight: 500;
        margin: 7px 0 15px 80px;
    }

    .user-meta-data .user-content .post-list a { color: #ffffff; }

    .tag-lists span {
    padding: 4px 8px;
    background: #00437d;
    font-size: 12px;
    color: #fff;
    border-radius: 35px;
    margin-right: 6px;
    display: inline-block;
    }
    .tag-lists a {
    border: 1px solid #aaaaaa;
    color: #aaaaaa;
    display: inline-block;
    font-size: 12px;
    padding: 2px 8px;
    margin-left: 3px;
    margin-bottom: 10px;
    border-radius: 16px;
    -webkit-transition: .3s;
    -o-transition: .3s;
    transition: .3s;
    word-spacing: -2px;
    }
    .tag-lists a:not(:first-child) {
    margin-left: 1px;
    }

    .tag-lists a:hover {
    color: #fff;
    background: #00437d;
    border-color: #00437d;
    }
    /*News Header*/

    .news-header strong{
        display:block;
        color:#000000;
        font-size:20px;
        padding:10px 20px 10px 20px;
        font-weight:900;
        font-family: "Roboto";
        font-weight: 600;
    }

    .news-header em{
        color:#9b9b9b;
        font-size:12px;
        font-style: normal;
        padding-left:20px;
        padding-top:10px;
        display:block;
    }

    .news-header u{
        margin-left:20px;
        margin-top:15px;
        display:inline-block;
        font-size:11px;
        border-radius:10px;
        height:15px;
        padding:2px 10px 3px 10px;
        text-decoration: none;
    }

    .news-header i{
        float:right;
        padding-right:20px;
        padding-top:15px;
        font-size:12px;
        font-style:normal;
        color:#cacaca;
    }

    .news-header i span{
        padding-left:5px;
        color:#2980b9;
        font-weight: 700;
        text-transform: uppercase;
    }

    .news-top .news-share{
        margin-left:20px;
        margin-right:20px;
    }

    .news-share p{
        border-top:solid 1px rgba(0,0,0,0.1);
        padding-top:10px;
        margin-bottom:-9px;
    }

    .news-share h4{
        background-color:transparent;
        border:none;
        width:40px;
        height:40px;
        display:block;
        text-align:right;
        font-size:14px;
        line-height:38px;
        position:absolute;
        width:100%;
        margin-top:-25px;
    }

    .custom-news-share{
        background-color:transparent;
        text-align:center;
        line-height:40px;
        color:#1f1f1f;
    }

    /*News Boxes*/

    .news-top-slider .amp-carousel-button{
        background-color:rgba(255,255,255,0.5);
        top:110px;
    }

    .news-box-item{
        width:45%;
        float:left;
    }

    .news-box-item amp-img{
        border-radius:5px;
    }

    .news-boxes .news-box-item:nth-child(2n){
        margin-left:10%;
    }

    .news-boxes .amp-carousel-button{
        transform:scale(1, 1);
        background-color:rgba(255,255,255,0.5);
        top:50px;
    }

    .news-box-item u{
        margin-left:0px;
        margin-top:15px;
        display:inline-block;
        font-size:11px;
        border-radius:10px;
        height:15px;
        padding:2px 10px 3px 10px;
        text-decoration: none;
    }

    .news-box-item strong{
        color:#1f1f1f;
        font-size:13px;
        line-height: 21px;
        display:block;
        padding-top:7px;
        font-weight: 500;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;        
    }

    .news-box-share h4{
        background-color:transparent;
        border:none;
        font-size:14px;
        text-align:right;
        position:absolute;
        margin-top:-21px;
        padding-right:0px;
        padding-bottom:10px;
    }

    .news-box-item em{
        font-size:12px;
        color:#a0a0a0;
        font-style: normal;
        padding-top:5px;
        margin-bottom:3px;
        display:block;
        text-transform: capitalize;
    }

    .news-strip{
        min-height:130px;
    }

    .news-strip amp-img{
        position:absolute;
        left:0px;
        top:0px;
        border-radius:10px;
    }

    .news-strip strong{
        padding-left:110px;
        font-size:15px;
        line-height:20px;
        display:block;
        color:#1f1f1f;
        font-weight: 600;
    }
    .news-strip u{
        padding-left:110px;
        padding-top:9px;
        display:block;
        text-decoration:none;
        font-size:12px;
        color:#a0a0a0;
        text-transform: capitalize;
    }

    .news-strip .news-share{
        padding:0px;
    }

    .news-strip h4 i{
        padding-right:120px;
    }

    .news-strip p{
        margin-top:20px;
        border-bottom:solid 1px rgba(0,0,0,0.1);
        margin-bottom:30px;
    }

    #sidebar{
        padding-top:0px;
    }

    .sidebar-divider{
        margin-top:0px;
    margin-bottom:0px;
    }        
    </style>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    
</head>