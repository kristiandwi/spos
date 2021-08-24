<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MBVNS9P');</script>
    <!-- End Google Tag Manager -->
    <title>{{ $header['title'] }} - Panduan Informasi dan Inspirasi</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta name="copyright" content="Solopos Media Group" />     
    <meta name="googlebot" content="index, follow, all" />
    <meta name="Bingbot" content="index, follow">
    <meta name="robots" content="index, follow, noodp, noydir" />
    <meta name="google-site-verification" content="AA4UjbZywyFmhoSKLELl4RA451drENKllt5Sbq9uINw" />
    <meta name="yandex-verification" content="7966bb082003f8ae" />
    <meta name="msvalidate.01" content="F2320220951CEFB78E7527ECC232031C" />
    <meta name='dailymotion-domain-verification' content='dm0w2nbrkrxkno2q2' />
    <meta property="fb:app_id" content="1438927622798153"/>
    <meta property="fb:pages" content="395076396062" />
    <meta name="language" content="id" />
    <meta name="geo.country" content="id" />
    <meta http-equiv="content-language" content="In-Id" />
    <meta name="geo.placename" content="Indonesia" />
    <meta name="showus-verification" content="pub-2627" />
    <meta property="dable:item_id" content="2015111202028">

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
                "url":"http://www.solopos.com/images/logo.png",
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

    <script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-7051417-1', 'auto', {'useAmpClientId': true});
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
    <link rel="amphtml" href="{{ $header['link'] }}/amp" data-component-name="amp:html:link">
    @endif

	<!--Favicon-->
	<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	
	<!-- IconFont -->
	<link rel="stylesheet" href="{{ asset('css/iconfonts.css') }}">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	<!-- magnific -->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

	
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">

	<!-- Template styles-->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
	
	<!-- Colorbox -->
	<link rel="stylesheet" href="{{ asset('css/colorbox.css') }}">

    <!-- custom script js -->
	
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    @include('includes.custom-script')
</head>
