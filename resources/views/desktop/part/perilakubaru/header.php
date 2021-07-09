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
	<link rel="stylesheet" href="<?php echo ASSETS_PILKADA; ?>css/colorbox.css">
	
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
	
<body>

	<?php include(TEMPLATEPATH.'/part/perilakubaru/ads/ads-wraped.php'); ?>

	<!-- Header start -->
	<header id="header" class="header">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-md-3 col-sm-12">
					<div class="logo">
						 <a href="https://www.solopos.com/ubahlaku">
							<img src="<?php echo ASSETS_PILKADA; ?>images/ubahlaku.png" alt="Logo" style="width:250px;">
						 </a>
					</div>
				</div><!-- logo col end -->

				<div class="col-md-8 col-sm-12 p-0 header-right">
					<div class="ad-banner float-right">
						<?php include(TEMPLATEPATH.'/part/perilakubaru/ads/ads-top.php'); ?>
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
									<img src="<?php echo ASSETS_PILKADA; ?>images/ubahlaku.png" alt="Logo">
								</li>
								<li>
									<a href="https://www.solopos.com/ubahlaku">Home</a>
								</li>
								<li>
									<a href="https://www.solopos.com/ubahlaku/news">Berita</a>
								</li>
								<li>
									<a href="https://www.solopos.com/ubahlaku/info-grafis">Info Grafis</a>
								</li>
								<li>
									<a href="https://www.solopos.com/ubahlaku/video">Video</a>
								</li>																
								<li>
									<a href="https://www.solopos.com/ubahlaku/cek-fakta">Cek Fakta</a>
								</li>
								<li>
									<a href="https://www.solopos.com/ubahlaku/data">Data</a>
								</li>
								<li>
									<a href="https://www.solopos.com/ubahlaku/galeri">Galeri</a>
								</li>
								<li>
									<a href="https://www.solopos.com/ubahlaku/faq">F.A.Q</a>
								</li>
							</ul><!--/ Nav ul end -->
						</div><!--/ Collapse end -->

					</div><!-- Site Navbar inner end -->
				</nav><!--/ Navigation end -->

				<div class="col-lg-3 pr-0 text-right nav-social-wrap">
					<img src="<?php echo ASSETS_PILKADA; ?>images/logo-solopos.png">

					

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
		<div class="trending-bar trending-light d-md-block" style="background: #272c76;">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-md-9 text-center text-md-left">
						<p class="trending-title"><i class="tsicon fa fa-bolt"></i> TERPOPULER </p>
						<div id="trending-slide" class="owl-carousel owl-theme trending-slide">
						<!--?php
							$args = array(
											'showposts' => 4,
											'meta_key' => 'post_views_count',
											'orderby' => 'meta_value_num',
											'order' => 'DESC',
											'no_found_rows' => true, // untuk fast loading
											'date_query' => array(
																array(
																	'after' => '-24 hours',
																	//'day' => date('d'),
																	//'monthnum' => date('m'),
																	//'year' => date('Y'),
																),
															),
														);
							$loop = new WP_Query($args);
							if ($loop->have_posts()) :
								while ($loop->have_posts()) : $loop->the_post(); ?>
									<div class="item" style="max-width: 630px; overflow: hidden;">
									<div class="post-content">
										<h2 class="post-title title-small">
										<a href="<!--?php the_permalink(); ?>"><!--?php echo limit_title($post->post_title, 10) //the_title(); ?></a>
										</h2>
									</div><!-- Post content end -->
									<!--</div><!-- Item 1 end -->
							<!--?php endwhile; endif; wp_reset_query(); ?>-->
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