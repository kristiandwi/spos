<?php 
/*
Template Name: Page Perilaku Baru Video
*/
?>
<?php include(TEMPLATEPATH.'/part/perilakubaru/header.php'); ?>
	<div class="gap-10"></div>
	
	<!-- Section Terkini Start -->
	<section class="block-wrapper">
		<div class="container">
		<div class="gap-20"></div>
			<div class="row ts-gutter-30">
				<div class="col-lg-8 col-md-12">
					<div class="row ts-gutter-20 align-items-center">

			            <?php if(function_exists('fetch_feed')) {
			                include_once(ABSPATH . WPINC . '/feed.php');               // include the required file
			                $feed = fetch_feed('https://www.youtube.com/feeds/videos.xml?playlist_id=PLMNxf31imllG4UzyrB8vSakTZ980IJV8G'); // specify the source feed
			                $limit = $feed->get_item_quantity(14); // specify number of items
			                $items = $feed->get_items(0, $limit); // create an array of items
			            }
			            ?>
			            <?php               

			                function youtube_id($url)
			                {
			                        @preg_match('/(https:|http:|):(\/\/www\.|\/\/|)(.*?)\/(embed\/|watch.*?v=|)([a-z_A-Z0-9\-]{11})/i', $url, $IDD); return $IDD[5]; 
			                }
			            ?>                  
			            <?php
			                foreach ($items as $item) : ?>
			            <?php
			                $yt_url= $item->get_permalink();
			            ?> 
			      		<div class="post-block-style clearfix">
							<div class="post-thumb">
								<img class="img-fluid" src="https://i1.ytimg.com/vi/<?php echo youtube_id($yt_url); ?>/maxresdefault.jpg" alt="<?php the_title();?>" />
								<a class="popup" href="https://www.youtube.com/embed/<?php echo youtube_id($yt_url); ?>?autoplay=1&amp;loop=1&amp;rel=0&vq=hd1080" title="<?php echo $item->get_title(); ?>">
								<div class="video-icon">
								<i class="fa fa-play"></i>
							</div>
							</a>
							</div><!-- Post thumb end -->
							<div class="post-content">
								<h2 class="post-title title-medium">
									<a class="popup" href="https://www.youtube.com/embed/<?php echo youtube_id($yt_url); ?>?autoplay=1&amp;loop=1" title="<?php echo $item->get_title(); ?>"><?php echo $item->get_title(); ?></a>
								</h2>
							</div><!-- Post content end -->
						</div><!-- Post Block style end -->			            

						
			            <?php endforeach; ?> 

				        <div class="button-o">
				            <a href="https://www.youtube.com/user/SoloposTV" title="Solopos TV">Cek Video lainnya</a>
				        </div>
					</div>  

					<h2 class="block-title">
						<span class="title-angle-shap"> Berita Terbaru </span>
					</h2>
					<div class="row ts-gutter-20 align-items-center">
						<?php
							//$latest = new WP_Query('cat=76259&posts_per_page=15&order=DESC');
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							query_posts('author=-200&posts_per_page=10&tag=perilaku-baru,setop-penularan-covid-19,ingat-pesan-ibu,solopos-lawan-covid-19,setop-penularan-covid-19&paged='.$paged);
	                        $loop_no = 1;
	                        if (have_posts()) : while (have_posts()) : the_post();
								
								$cat = get_the_category();
	                            $cat_name = $cat[0]->cat_name;
	                            $cat_slug =  $cat[0]->slug;
	                        	$cat_link = get_term_link($cat_slug, 'category');
	                    ?>
							<div class="col-12 mb-10">
								<div class="post-block-style">
									<div class="row align-items-center">
										<div class="col-md-5">
											<div class="post-thumb">
												<img src="<?php echo post_image('thumbnail', 280, 190); ?>" alt="<?php the_title(); ?>">
												<a class="post-cat-box <?php echo parent_category_slug(); ?>" href="https://www.solopos.com/<?php echo parent_category_slug(); ?>"><?php echo parent_category_slug(); ?></a>
											</div>
										</div>
										<div class="col-md-7 pl-0">
											<div class="post-content">
												<h2 class="post-title title-md">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												</h2>
												<div class="post-meta mb-7">
													<span class="post-author"><a href="#"><i class="fa fa-user"></i> <?php echo author_name(); ?></a></span>
													<span class="post-date"><i class="fa fa-clock-o"></i> <?php the_time('j F Y H:i'); ?> WIB</span>
												</div>
												<p><?php echo excerpt(25); ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; endif; ?>	
						<div class="col-12 mt-3">
						<?php posts_nav_link(' — ', __('&laquo; Sebelumnya'), __('Berikutnya &raquo;')); ?>
							<!--<div class="load-more-btn text-center">
									<a href="<?php echo BASE_URL; ?>/arsip" class="btn" title="Indeks Berita"> Indek Berita </a>
							</div>-->
						</div><!-- col end -->
					</div>
				</div><!-- Content Col end -->
                <!-- sidebar start -->
                <div class="col-lg-4">
					<div style="margin-top: -10px;">

							<?php echo do_shortcode( '[tiktok-feed id="1"]' ); ?>

					</div>
				</div>
				<?php //include(TEMPLATEPATH.'/part/perilakubaru/sidebar.php'); ?>
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Section Terkini End -->

	<!-- ad banner start-->
	<div class="block-wrapper no-padding">
		<div class="container pl-0 pr-0">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="banner-img">
						<?php include(TEMPLATEPATH.'/part/perilakubaru/ads/ads-leaderboard-bottom.php'); ?>
					</div>
				</div>
				<!-- col end -->
			</div>
			<!-- row  end -->
		</div>
		<!-- container end -->
	</div>
	<!-- ad banner end-->

	<!-- newsletter start -->
	<div class="newsletter-area">
		<div class="container">
			<div class="row ts-gutter-30 justify-content-center align-items-center">
				<div class="col-lg-7 col-md-6">
					<div class="footer-loto">
						<a href="#">
							<img src="https://www.solopos.com/assets/tema/mobile/img/logo-putih.png" width=150 alt="">
						</a>
					</div>
				</div>
				<!-- col end -->
				<div class="col-lg-5 col-md-6">
					<div class="footer-newsletter">
						<form action="#" method="post">
							<div class="email-form-group">
								<i class="news-icon fa fa-paper-plane" aria-hidden="true"></i>
								<input type="email" name="EMAIL" class="newsletter-email" placeholder="Your email" required>
								<input type="submit" class="newsletter-submit" value="Subscribe">
							</div>
							
						</form>
					</div>
				</div>
				<!-- col end -->
			</div>
			<!-- row  end -->
		</div>
		<!-- container end -->
	</div>
	<!-- newsletter end-->

<?php include(TEMPLATEPATH.'/part/perilakubaru/footer.php'); ?>