<?php 
/*
Template Name: SBBI 2020
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
	</head>
	<body>
		<!-- TOP -->
		<div class="top-wrap uk-position-relative uk-light uk-background-secondary">
			
			<!-- NAV -->
			<div class="nav" data-uk-sticky="cls-active: uk-background-secondary uk-box-shadow-medium; top: 100vh; animation: uk-animation-slide-top">
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
			
			<div class="uk-cover-container uk-light uk-flex uk-flex-middle top-wrap-height">
				
				<!-- TOP CONTAINER 
				<div class="uk-container uk-flex-auto top-container uk-position-relative uk-margin-medium-top" data-uk-parallax="y: 0,50; easing:0; opacity:0.2">
					<div class="uk-width-1-2@s" data-uk-scrollspy="cls: uk-animation-slide-right-medium; target: > *; delay: 150">
						<h1 class="uk-margin-remove-top">
							<a href="https://www.solopos.com/sbbi/tentang-sbbi-award-2020" >
							SBBI - Innovation Awards
							</a>
						</h1>
					</div>
				</div>
				 /TOP CONTAINER -->
				<!-- TOP IMAGE -->
				
				<video autoplay loop allowfullscreen uk-cover>
				    <source src="https://solopos.com/assets/ads/sbbi/sbbi-desktop.mp4" type='video/webm'>
				</video>
				<!--
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="<?php bloginfo('template_url');?>/sbbi/img/bg.jpg"
				data-sizes="12vw"
				data-src="https://picsum.photos/1200/900/?image=816" alt="" data-uk-cover data-uk-img data-uk-parallax="opacity: 1,0.1; easing:0"
				>
				-->				

				 <!-- /TOP IMAGE -->
			</div>
			<div class="uk-position-bottom-center uk-position-medium uk-position-z-index uk-text-center">
				<a href="#sejarah" data-uk-scroll="duration: 500" data-uk-icon="icon: arrow-down; ratio: 2"></a>
			</div>
		</div>
		<!-- /TOP -->

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

		<section id="sejarah" class="uk-section uk-section-default">
			<div class="uk-container">
				<div class="uk-section uk-section-small uk-padding-remove-top">
					<ul class="uk-subnav uk-subnav-pill uk-flex uk-flex-center" data-uk-switcher="connect: .uk-switcher; animation: uk-animation-fade">
						<li><a class="uk-border-pill" href="#">Tentang SBBI</a></li>
						<!--li><a class="uk-border-pill" href="#">Ruang Lingkup</a></li-->
						<li><a class="uk-border-pill" href="#">Kilas Balik</a></li>
					</ul>
				</div>

				<ul class="uk-switcher uk-margin">
					<li>
						<div class="uk-grid uk-child-width-1-2@l uk-flex-middle" data-uk-grid data-uk-scrollspy="target: > div; cls: uk-animation-slide-left-medium">
							<div>
								<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://images.solopos.com/2021/05/thumbnail-microsite-SBBI-01.png" alt="" data-uk-img>
								
								<!--img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php bloginfo('template_url');?>/sbbi/img/tentang-sbbi.png" alt="" data-uk-img-->
							</div>
							<div data-uk-scrollspy-class="uk-animation-slide-right-medium">
								<h6 class="uk-text-primary">SBBI AWARD 2021</h6>
								<h2 class="uk-margin-small-top">Solo Best Brand & Innovation Award 2021</h2>
								<p class="subtitle-text">
									Merek atau brand merupakan kekayaan penting bagi sebuah perusahaan. Oleh karena itu diperlukan strategi khusus untuk mengelolanya. Merek juga menjadi dasar untuk menyusun strategi pemasaran produk. 
								</p>
								<div class="uk-grid uk-child-width-1-2@s" data-uk-grid>
									<div>
										<h4>Tujuan</h4>
										<p>SBBI Award 2021 diharapkan dapat bermanfaat bagi... <a href="https://www.solopos.com/sbbi/tentang-sbbi-award-2021">Selengkapnya.</a></p>
									</div>
									<div>
										<h4>Kategori</h4>
										<p>SBBI Award 2021 dibagi menjadi 4 kategori... <a href="https://www.solopos.com/sbbi/tentang-sbbi-award-2021">Selengkapnya.</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<!--li>
						<div class="uk-grid uk-child-width-1-2@l uk-flex-middle" data-uk-grid data-uk-scrollspy="target: > div; cls: uk-animation-slide-left-medium">
							<div>
								<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php bloginfo('template_url');?>/sbbi/img/marketing-8.svg" alt="" data-uk-img>
							</div>
							<div data-uk-scrollspy-class="uk-animation-slide-right-medium">
								<h2 class="uk-margin-small-top">RUANG LINGKUP PENGHARGAAN</h2>
								<p class="subtitle-text">
									Solo Best Brand & Innovation Award 2020 terdiri dari beberapa kategori diantaranya adalah sebagai berikut: Kategori Best Brand, Kategori Prestigious Brand, Kategori Innovation Brand, Kategori Potential Brand, dan Penghargaan Khusus.
								</p>
								<div class="uk-grid uk-child-width-1-2@s" data-uk-grid>
									<div>
										<h4>Best Brand</h4>
										<p>Untuk melihat kategori apa saja silakah klik <a href="https://www.solopos.com/sbbi/ruang-lingkup-penghargaan">Selengkapnya.</a></p>
									</div>
									<div>
										<h4>Innovation Brand</h4>
										<p>Untuk melihat kategori apa saja silakah klik <a href="https://www.solopos.com/sbbi/ruang-lingkup-penghargaan">Selengkapnya.</a></p>
									</div>
								</div>
							</div>
						</div>
					</li-->
					<li>
						<div class="uk-grid uk-child-width-1-2@l uk-flex-middle" data-uk-grid data-uk-scrollspy="target: > div; cls: uk-animation-slide-left-medium">
							<div>
								<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php bloginfo('template_url');?>/sbbi/img/marketing-9.svg" alt="" data-uk-img>
							</div>
							<div data-uk-scrollspy-class="uk-animation-slide-right-medium">
								<h2 class="uk-margin-small-top">KILAS BALIK </h2>
								<p class="subtitle-text">
									SBBI lahir dari kepedulian Harian Umum Solopos terhadap belum adanya survei merek terbaik di kawasan Solo dan sekitarnya. Setiap tahun ada survei yang menilai merek terbaik secara Nasional, namun tidak ada yang menilai secara khusus pasar Soloraya.
								</p>
								<p class="subtitle-text">
									Padahal, kawasan Soloraya telah berkembang pesat dan memiliki karakter yang besar kemungkinan berbeda dengan Nasional.
								</p>

								<p class="subtitle-text">
									SBBI berawal pada 2000. Saat itu, survei merek terbaik ini masih menyandang nama Solo Customer Satisfaction Index (SCSI). SCSI berjalan selama enam tahun, 2000-2006. <a href="https://www.solopos.com/sbbi/kilas-balik">Selengkapnya.</a>
								</p>
							</div>
						</div>
					</li>
				</ul>
				
				
			</div>
		</section>

		
		<section id="angka" class="uk-section uk-section-secondary uk-section-large" style="background-color: #35c1f1">
			<div class="uk-container uk-container-xsmall uk-text-center uk-section uk-padding-remove-top">
				<h2 class="uk-margin-remove uk-h1">Video Pemenang SBBI 2020</h2>
			</div>	
					
			<div class="uk-container">
				<?php if( date('Y-m-d') >= '2020-06-16'){ ?>

					<?php include(TEMPLATEPATH.'/sbbi/yt-testimoni.php'); ?>
			
				<?php } ?>
			</div>
		</section>
		

		<section id="news" class="uk-section uk-section-default">
			
			<div class="uk-container uk-container-xsmall uk-text-center uk-section uk-padding-remove-top">
				<h2 class="uk-margin-remove uk-h1">Informasi Terbaru</h2>
			</div>
			<div class="uk-container">

				<div class="uk-child-width-1-3@m" uk-grid>
                      <?php query_posts(array('showposts' => 12,
                      		'tag' => 'sbbi-2021',
                            'no_found_rows' => true,
                            'orderby' => 'date',
                            'order' => 'desc'
                            ));  
                        ?>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>						
				        <div class="uk-card uk-card-default">
				        	<div class="uk-card-badge uk-label"><?php the_time('j F Y'); ?></div>
				            <div class="uk-card-media-top">
				            	<a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
				                	<img src="<?php echo post_image('medium', 562, 562); ?>" alt="<?php the_title(); ?>">
				                </a>
				            </div>
				            <div class="uk-card-body">
				            	<a href="<?php the_permalink();?>" title="<?php the_title(); ?>" target="_blank">
				                	<h3 class="uk-card-title"><?php the_title(); ?></h3>
				            	</a>
				            </div>
				        </div>
                 		<?php endwhile; endif; wp_reset_query(); ?>
				</div>

			</div>
		</section>
		<!--
		<section id="testimoni" class="uk-cover-container overlay-wrap">
			<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="<?php bloginfo('template_url');?>/sbbi/img/bg.jpg"
			data-sizes="100vw"
			data-src="<?php bloginfo('template_url');?>/sbbi/img/bg.jpg" alt="" data-uk-cover data-uk-img
			>
			<div class="uk-container uk-position-z-index uk-position-relative uk-section uk-section-xlarge uk-light">
				<div class="uk-grid uk-flex-right">
					
					<div class="uk-width-2-5@m" data-uk-parallax="y: 50,-50; easing: 0; media:@l">
						<h6>TESTIMONIALS</h6>
						<div class="uk-position-relative uk-visible-toggle uk-light" data-uk-slider="easing: cubic-bezier(.16,.75,.47,1)">
							<ul class="uk-slider-items uk-child-width-1-1">
								<li>
									<div data-uk-slider-parallax="opacity: 0.2,1,0.2">
										<h2 class="uk-margin-small-top">"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur"</h2>
										<p class="uk-text-meta">Lorena Smith, founder of Some Cool Startup</p>
									</div>
								</li>
								<li>
									<div data-uk-slider-parallax="opacity: 0.2,1,0.2">
										<h2 class="uk-margin-small-top">"Aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur"</h2>
										<p class="uk-text-meta">Lorena Smith, founder of Some Cool Startup</p>
									</div>
								</li>
								<li>
									<div data-uk-slider-parallax="opacity: 0.2,1,0.2">
										<h2 class="uk-margin-small-top">"Irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur"</h2>
										<p class="uk-text-meta">Lorena Smith, founder of Some Cool Startup</p>
									</div>
								</li>
							</ul>
							<ul class="uk-slider-nav uk-dotnav uk-margin-top"><li></li></ul>
							
						</div>
					</div>
					
				</div>
			</div>
		</section> -->

<?php include(TEMPLATEPATH.'/sbbi/footer-sbbi.php'); ?>