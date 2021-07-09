<!DOCTYPE html>
<html lang="id">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title><?php if(!empty($title)) { echo $title." - Perilaku Baru #SetopPenularanCovid19"; } else { echo "Perilaku Baru #SetopPenularanCovid19"; } ?> - Solopos.com</title>

	<!-- Mobile Specific Metas
	================================================== -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--Favicon-->
	<link rel="shortcut icon" href="<?php echo ASSETS_PILKADA; ?>images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo ASSETS_PILKADA; ?>images/favicon.ico" type="image/x-icon">
	
	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo ASSETS_PILKADA; ?>css/bootstrap.min.css">
	
	<!-- IconFont -->
	<link rel="stylesheet" href="<?php echo ASSETS_PILKADA; ?>css/iconfonts.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="<?php echo ASSETS_PILKADA; ?>css/font-awesome.min.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo ASSETS_PILKADA; ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo ASSETS_PILKADA; ?>css/owl.theme.default.min.css">
	<!-- magnific -->
	<link rel="stylesheet" href="<?php echo ASSETS_PILKADA; ?>css/magnific-popup.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="<?php echo ASSETS_; ?>css/colorbox.css?v=<?php echo time(); ?>">
	
	<link rel="stylesheet" href="<?php echo ASSETS_PILKADA; ?>css/animate.css">

	<!-- Template styles-->

	<link rel="stylesheet" href="https://www.solopos.com/files/tema/desktop/css/style.css?v=<?php echo time(); ?>">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="<?php echo ASSETS_PILKADA; ?>css/responsive.css">
	


	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
	<!-- start izooto -->
      <script> window._izq = window._izq || []; window._izq.push(["init" ]); </script>
      <script src="https://cdn.izooto.com/scripts/d5d5d221008b7f33e0283b4e8c813a4df9da5cd8.js"></script>
	<!-- end izooto -->
</head>
	
<body id="uksw">

	<?php include(TEMPLATEPATH.'/part/uksw/ads/ads-wraped.php'); ?>

	<!-- Header start -->
	<header id="header" class="header">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-md-3 col-sm-12">
					<div class="logo">
						 <a href="https://www.solopos.com/uksw">
							<img src="<?php echo ASSETS_; ?>images/logo-uksw.png" alt="Logo" style="width:250px;">
						 </a>
					</div>
				</div><!-- logo col end -->

				<div class="col-md-8 col-sm-12 p-0 header-right">
					<div class="ad-banner float-right">
						<img src="<?php echo ASSETS_; ?>images/banner/uksw-banner.jpg">
					</div>
				</div><!-- header right end -->
			</div><!-- Row end -->
		</div><!-- Logo and banner area end -->
	</header><!--/ Header end -->

	<div class="main-nav clearfix is-ts-sticky">
		<div class="container">
			<div class="row justify-content-between">
				<nav class="navbar navbar-expand-lg col-lg-0">
					<div class="site-nav-inner float-left">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
						<span class="fa fa-bars"></span>
					</button>
					   <!-- End of Navbar toggler -->
					   <div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
							<ul class="nav navbar-nav">
								<li class="sticky">
									<img src="<?php echo ASSETS_; ?>images/logo-uksw.png" alt="Logo">
								</li>
								<li>
									<a href="https://www.solopos.com/uksw">Home</a>
								</li>
								<li>
									<a href="https://www.solopos.com/uksw/berita">Berita</a>
								</li>
								<li>
									<a href="https://www.solopos.com/uksw/prestasi">Prestasi</a>
								</li>
								<li>
									<a href="https://www.solopos.com/uksw/foto">Galeri Foto</a>
								</li>																
								<li>
									<a href="https://www.solopos.com/uksw/video">Galeri Video</a>
									<!--a href="https://www.youtube.com/channel/UCSNKgXlbQ7x0dMQ0UsPi3gw" target="_blank">Galeri Video</a-->
								</li>
								<li>
									<a href="https://www.solopos.com/uksw/tanya-jawab">Tanya Jawab</a>
								</li>
								<li>
									<a href="https://www.solopos.com/uksw/kontak">Kontak</a>
								</li>
				
							</ul><!--/ Nav ul end -->
						</div><!--/ Collapse end -->

					</div><!-- Site Navbar inner end -->
				</nav><!--/ Navigation end -->

				<div class="col-lg-3 pr-0 text-right nav-social-wrap">
					<a href="#" onclick="window.location.href='https://www.solopos.com'">
					<img src="<?php echo ASSETS_PILKADA; ?>images/logo-solopos.png"></a>

					<div class="nav-search">
						<a href="#search-popup" class="xs-modal-popup">
							<i class="icon icon-search1"></i>
						</a>
					</div><!-- Search end -->
						
					<div class="zoom-anim-dialog mfp-hide modal-searchPanel ts-search-form" id="search-popup">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="xs-search-panel">
									<form class="ts-search-group">
										<div class="input-group">
											<input type="search" class="form-control" name="s" placeholder="Search" value="">
											<button class="input-group-btn search-button">
												<i class="icon icon-search1"></i>
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div><!-- End xs modal -->
				</div>
			</div><!--/ Row end -->
		</div><!--/ Container end -->	
		<div class="trending-bar trending-light d-md-block">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-md-9 text-center text-md-left">
						<p class="trending-title"><i class="tsicon fa fa-bolt" style="padding-right:10px;"></i> STORY </p>
						<div id="trending-slide" class="owl-carousel owl-theme trending-slide">
					    <?php
					      $no = 1;
					      $arg=array(
					              //'cat' => $listcat->term_id,
					              'post_type' => 'post',
					              'meta_key'  => 'post_feature',
					              'meta_value' => 'story',
					              'post_status' => 'publish',
					              'posts_per_page' => 10,
					            );
					            
					      $my_query = new WP_Query($arg);
					      if( $my_query->have_posts() ) :
					      while ($my_query->have_posts()) : $my_query->the_post(); ?>							
							<div class="item">
							   <div class="post-content">
							      <h2 class="post-title title-small">
							         <a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							      </h2>
							   </div><!-- Post content end -->
							</div><!-- Item 1 end -->
					      <?php endwhile; endif; wp_reset_query(); ?>							
						</div><!-- Carousel end -->
					</div><!-- Col end -->
					<div class="col-md-3 text-md-right text-center">
						<div class="ts-date">
							<i class="fa fa-calendar-check-o"></i><?php echo date('d M Y'); ?>
						</div>
					</div><!-- Col end -->
				</div><!--/ Row end -->
			</div><!--/ Container end -->
		</div><!--/ Trending end -->			
	</div><!-- Menu wrapper end -->