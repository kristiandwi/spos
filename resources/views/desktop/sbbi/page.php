<?php 
/*
Template Name: Page Detail SBBI 2020
*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php the_title(); ?> - SBBI - Solopos.com</title>
		<?php wp_head();?>
		<link rel="icon" href="<?php bloginfo('template_url');?>/sbbi/img/faviconsbbi.png">
		<!-- CSS FILES -->
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@latest/dist/css/uikit.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/sbbi/css/style.css">
		<style type="text/css">
			.top-wrap::before, .overlay-wrap::before {background-color: rgba(0,0,0,0.5) !important;}
		</style>		
	</head>
	<body>
		<!-- TOP -->
		<div class="top-wrap uk-position-relative uk-light uk-background-secondary">
			
			<!-- NAV -->
			<div class="nav" data-uk-sticky="cls-active: uk-background-secondary uk-box-shadow-medium; top: 20vh; animation: uk-animation-slide-top">
				<div class="uk-container">
					<nav class="uk-navbar uk-navbar-container uk-navbar-transparent" data-uk-navbar>
						<div class="uk-navbar-left">
							<div class="uk-navbar-item uk-padding-remove-horizontal">
								<a class="uk-logo" title="Logo" href="https://www.solopos.com/sbbi"><img src="<?php bloginfo('template_url');?>/sbbi/img/logo.png" alt="Logo"></a>
							</div>
						</div>
						<div class="uk-navbar-right">
							<ul class="uk-navbar-nav uk-visible@s">
								<li class="uk-active uk-visible@m"><a href="https://www.solopos.com/sbbi" data-uk-icon="home"></a></li>
								<li><a href="https://www.solopos.com/sbbi/tentang-sbbi-award-2021">Tentang SBBI</a></li>
								<li><a href="https://www.solopos.com/sbbi/tentang-sda-2021">Tentang SDA</a></li>
								<li><a href="https://www.solopos.com/sbbi/event">Event</a></li>
								<li><a href="https://www.solopos.com/sbbi#news">Informasi</a></li>
								<li><a href="https://www.solopos.com/sbbi/pemenang-2021">Pemenang</a></li>
								<!--li><a href="https://www.solopos.com/sbbi/partner">Partner</a></li-->
							</ul>
							<a class="uk-navbar-toggle uk-navbar-item uk-hidden@s" data-uk-toggle data-uk-navbar-toggle-icon href="#offcanvas-nav"></a>
						</div>
					</nav>
				</div>
			</div>
			<!-- /NAV -->
			
			<div class="uk-cover-container uk-light uk-flex uk-flex-middle" style="height: 23vw">				
				<!-- TOP CONTAINER -->
				<div class="uk-container uk-flex-auto top-container uk-position-relative uk-margin-medium-top" data-uk-parallax="y: 0,50; easing:0; opacity:0.9">
					<div class="uk-width-1-1@s" data-uk-scrollspy="cls: uk-animation-slide-right-medium; target: > *; delay: 150">

					</div>
				</div>
				<!-- /TOP CONTAINER -->
				<!-- TOP IMAGE -->

				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="https://www.solopos.com/assets/ads/sbbi/2021/Banner_SBBI_2021.gif"
				data-sizes="12vw" data-src="https://picsum.photos/1200/900/?image=816" alt="" data-uk-cover data-uk-img data-uk-parallax="opacity: 1,0.1; easing:0">
				 <!-- /TOP IMAGE -->
			</div>
		</div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); 
        $do_not_duplicate = $post->ID;
        ?>
        <!-- mfunc setPostViews(get_the_ID()); --><?php setPostViews(get_the_ID()); ?> <!--/mfunc-->

		<section class="uk-section uk-article">
			<div class="uk-container uk-container-small">
				<h1 class="uk-text-bold uk-h1 uk-margin-remove-adjacent uk-margin-remove-top"><?php the_title();?></h1>
				<p class="uk-article-meta"><?php the_time('l, j/m/Y'); ?>. Posted in <a href="https://solopos.com/sbbi">SBBI</a> | <span data-uk-icon="icon: future"></span> <?php echo reading_time(); ?>.</p>
	            <?php { $summary = get_post_meta ($post->ID, 'post_summary', $single = true); if($summary !== '') { ?>
	              <p class="uk-text-lead">
	                    <?php echo $summary; ?>                   
	              </p>
	            <?php } } ?> 
			</div>
			
			<!-- large image -->
			<!--<div class="uk-container uk-section">
				<div class="uk-position-relative uk-visible-toggle uk-light" data-uk-slideshow="ratio: 7:3; animation: push; min-height: 270; velocity: 3">
					<ul class="uk-slideshow-items">
						<li>
							<img data-src="<?php echo post_image('medium', 375, 250); ?>" data-uk-img="target: !.uk-slideshow-items" alt="<?php the_title();?>" data-uk-cover>
							<div class="uk-position-bottom uk-position-medium uk-text-center uk-light">
								<p class="uk-margin-remove uk-visible@s"><?php echo post_image_caption(); ?></p>
							</div>
						</li>
					</ul>
				</div>
			</div>-->
			<!-- /large image -->
			<!-- text -->
			<div class="uk-container uk-container-small">
				<?php the_content();?>
			</div>
			<!-- text -->
			
		</section>
		<?php endwhile; endif; wp_reset_query(); ?>

		<!-- LOGOS -->
		<!--div id="partner" class="uk-container uk-container-small uk-section uk-section-small uk-section-muted" tabindex="-1" uk-slider>
			<div>
			    <ul class="uk-slider-items uk-child-width-1-4 uk-child-width-1-3@s uk-child-width-1-4@m logos-grid">
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/mitsubishi.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/mandiri.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/mandiri-syariah.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/bank-bri.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/kiat-motor.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/sun-motor.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/prodia.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/sharp.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/indofood.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/pku-sejati.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/djarum-super.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/djarum-76.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/djarum-mld.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/yamaha.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/candi-elektronik.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/best-western.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/telkom.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/solo-paragon.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/ums.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/superindo.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/astra.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/lorin-hotel.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/syariah-hotel.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/raya-seluler.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/ilufa.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/ella-skincare.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/nasmoco.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/daihatsu.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/kopi-luwak.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/tolak-angin.jpg" data-uk-img alt="SBBI 2020">
					</li>					
			    </ul>
				
		    </div>
		</div>
		<!-- /LOGOS -->

<?php include(TEMPLATEPATH.'/sbbi/footer-sbbi.php'); ?>