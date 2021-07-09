<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta name="googlebot" content="index,follow,all" />
    <meta name="Bingbot" content="index, follow">
    <meta name="copyright" content="Solopos Digital Media" /> 
    <meta name="robots" content="index,follow,noodp,noydir" />
    <meta name="google-site-verification" content="AA4UjbZywyFmhoSKLELl4RA451drENKllt5Sbq9uINw" />
    <meta name="yandex-verification" content="7966bb082003f8ae" />
    <meta name="msvalidate.01" content="F2320220951CEFB78E7527ECC232031C" />
    <meta name='dailymotion-domain-verification' content='dm0w2nbrkrxkno2q2' />
    <meta property="fb:pages" content="395076396062" />
    <meta name="language" content="id" />
    <meta name="geo.country" content="id" />
    <meta http-equiv="content-language" content="In-Id" />
    <meta name="geo.placename" content="Indonesia" />
    <meta name="showus-verification" content="pub-2627" />
    <meta property="dable:item_id" content="2015111202028">
    <?php if (is_single()) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <meta property="article:section" content="<?php $category = get_the_category(); $firstCategory = $category[0]->cat_name; echo $firstCategory;?>">
    <?php endwhile; endif; endif; ?> 

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--Favicon-->
	<link rel="shortcut icon" href="<?php echo ASSETS_; ?>images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo ASSETS_; ?>images/favicon.ico" type="image/x-icon">
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo ASSETS_; ?>css/bootstrap.min.css">
	
	<!-- IconFont -->
	<link rel="stylesheet" href="<?php echo ASSETS_; ?>css/iconfonts.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="<?php echo ASSETS_; ?>css/font-awesome.min.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo ASSETS_; ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo ASSETS_; ?>css/owl.theme.default.min.css">
	<!-- magnific -->
	<link rel="stylesheet" href="<?php echo ASSETS_; ?>css/magnific-popup.css">

	
	<link rel="stylesheet" href="<?php echo ASSETS_; ?>css/animate.css">

	<!-- Template styles-->
	<link rel="stylesheet" href="<?php echo ASSETS_; ?>css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="<?php echo ASSETS_; ?>css/responsive.css">
	
	<!-- Colorbox -->
	<link rel="stylesheet" href="<?php echo ASSETS_; ?>css/colorbox.css">

    <?php if( is_singular() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
	<?php include (TEMPLATEPATH . '/custom-script.php'); ?>
	
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<?php $datacat = array('737122','737123','737124','737125','737126','737127','737128','737129','740409'); $cat_id = ''; ?>
<?php // deteksi kategori (utk aktif menu dan menampilkan sub menu)
	if (is_category()) {
		$category = get_category($cat);
		$cat_id = $category->term_id; 
		$cat_name = $category->name; 
		$cat_slug = $category->slug; 
		$cat_link= get_category_link( $category->term_id );   
	} elseif ( is_single() ) {
		foreach((get_the_category()) as $category) {
		$cat_id = $category->term_id;
		$cat_name = $category->name;
		$cat_slug = $category->slug;
		$cat_link = get_category_link( $category->term_id );
		}
	}
?>   

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MBVNS9P"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
	<?php //include (TEMPLATEPATH . '/ads/ads-frame-top.php'); ?>

	<?php include (TEMPLATEPATH . '/header-section.php'); ?>
