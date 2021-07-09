<?php 
/*
Template Name: UKSW HOME
*/
?>
<?php include(TEMPLATEPATH.'/part/uksw/header.php'); ?>
	<div class="gap-50"></div>
	<section class="featured-post-area no-padding">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-20">
				<div class="col-lg-8 col-md-12 pad-r">
					<div class="owl-carousel owl-theme featured-slider h2-feature-slider">

					<?php
					//$latest = new WP_Query('cat=76259&posts_per_page=15&order=DESC');
					query_posts('author=-200&no_found_rows=true&showposts=4&tag=uksw,uksw-salatiga,prestasi-uksw,prestasi-uksw-sakatiga');
                    $loop_no = 1;
                    if (have_posts()) : while (have_posts()) : the_post();
						$cat = get_the_category();
                        $cat_name = $cat[0]->cat_name;
                        $cat_slug =  $cat[0]->slug;
						$cat_link = get_term_link($cat_slug, 'category');
						$loop_no++;
                	?>

						<div class="item post-overaly-style post-md" style="background-image:url(<?php echo post_image('medium', 800, 600); ?>)">
							<div class="featured-post">
								<a href="<?php the_permalink(); ?>" class="image-link">&nbsp;</a>
								<div class="overlay-post-content">
									<div class="post-content">
										<div class="grid-category">
											<a class="post-cat <?php echo parent_category_slug(); ?>" href="https://www.solopos.com/<?php echo parent_category_slug(); ?>"><?php echo parent_category_slug(); ?></a>
											<!--<a class="post-cat lifestyle" href="#">Data</a>-->
										</div>
	
										<h2 class="post-title title-md">
											<a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
										</h2>
										<div class="post-meta">
											<ul>
												<li><a href="#"><i class="fa fa-user"></i> <?php echo author_name(); ?></a></li>
												<li><a href="#"><i class="icon icon-clock"></i> <?php the_time('j F Y H:i'); ?> WIB</a></li>
												<!--<li><a href="#" class="view"><i class="icon icon-fire"></i> 354k</a></li>-->
											</ul>
										</div>
									</div>
								</div>
							</div><!--/ Featured post end -->
						</div><!-- Item 1 end -->
                        
                        <?php //} ?>
                    <?php if($loop_no >= 5) {   ?>
                               
					</div>
				</div><!-- Col 8 end -->
				<div class="col-lg-4 col-md-12">
					<div class="post-overaly-style post-md" style="background-image:url(<?php echo post_image('medium', 800, 600); ?>)">
						<div class="featured-post">
							<a href="<?php the_permalink(); ?>" class="image-link">&nbsp;</a>
							<div class="overlay-post-content">
								<div class="post-content">
									<div class="grid-category">
									<a class="post-cat <?php echo parent_category_slug(); ?>" href="https://www.solopos.com/<?php echo parent_category_slug(); ?>"><?php echo parent_category_slug(); ?></a>
									</div>

									<h2 class="post-title title-md">
										<a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
									</h2>
									<div class="post-meta">
										<ul>
										<li><a href="#"><i class="fa fa-user"></i> <?php echo author_name(); ?></a></li>
										<li><a href="#"><i class="icon icon-clock"></i> <?php the_time('j F Y H:i'); ?> WIB</a></li>
										<!--<li><a href="#" class="view"><i class="icon icon-fire"></i> 354k</a></li>-->
										</ul>
									</div>
								</div>
							</div>
						</div><!--/ Featured post end -->
					</div><!-- Item 2 end -->
				</div><!-- Col 4 end -->
				<?php } ?>
				<?php endwhile; endif; ?>

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Feature post end -->

	<!-- Section Trending start-->
	<section class="trending-slider pb-0">
		<div class="container pl-0 pr-0">
			<div class="ts-grid-box">
				<h2 class="block-title">
					 <span class="title-angle-shap"> Fokus </span>
				</h2>
				<div class="owl-carousel dot-style2" id="trending-slider">

				<?php query_posts(array('meta_key' => 'post_feature',
                                        'meta_value' => 'editor_choice',
                                        'showposts' => 8,
                                        'no_found_rows' => true,
										'orderby' => 'date',
										//'cat' => 2088,
										'tag' => 'uksw,uksw-salatiga,prestasi-uksw,prestasi-uksw-sakatiga'
                                        //'offset' => 4,
                                        //'post__not_in' => $do_not_duplicate // check IDs to display posts ...
                                        ));  
                            ?>
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<div class="item post-overaly-style post-md" style="background-image:url(<?php echo post_image('medium', 285, 315); ?>)">
									<a href="<?php the_permalink(); ?>" class="image-link">&nbsp;</a>
									<div class="overlay-post-content">
										<div class="post-content">
											<div class="grid-category">
												<a class="post-cat <?php echo parent_category_slug(); ?>" href="https://www.solopos.com/<?php echo parent_category_slug(); ?>"><?php echo parent_category_slug(); ?></a>
											</div>

											<h2 class="post-title">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h2>
											<div class="post-meta">
												<ul>
													<li><a href="#"><i class="fa fa-user"></i> <?php echo author_name(); ?></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div><!-- Item 1 end -->
                                <?php endwhile; endif; wp_reset_query(); ?>
				</div>
				<!-- most-populers end-->
			</div>
			<!-- ts-populer-post-box end-->
		</div>
		<!-- container end-->
	</section>
	<!-- section trending End -->

	<!-- ad banner start-->
	<div class="block-wrapper no-padding mt-5">
		<div class="container pl-0 pr-0">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="banner-img">
						<?php include(TEMPLATEPATH.'/part/perilakubaru/ads/ads-leaderboard-top.php'); ?>
					</div>
				</div>
				<!-- col end -->
			</div>
			<!-- row  end -->
		</div>
		<!-- container end -->
	</div>
	<!-- ad banner end-->

	<!-- Section Terkini Start -->
	<section class="block-wrapper">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-30">
				<div class="col-lg-8 col-md-12">
					<h2 class="block-title">
						<span class="title-angle-shap"> Berita Terkini </span>
					</h2>
					<div class="row ts-gutter-20 align-items-center">
					<?php
						//$latest = new WP_Query('cat=76259&posts_per_page=15&order=DESC');
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						query_posts('author=-200&posts_per_page=16&tag=uksw,uksw-salatiga,prestasi-uksw,prestasi-uksw-sakatiga&offset=4&paged='.$paged);
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

				<?php include(TEMPLATEPATH.'/sidebar.php'); ?>
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