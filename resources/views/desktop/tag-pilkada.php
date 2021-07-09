<?php
	include(TEMPLATEPATH.'/part/pilkada/header.php');
		
		// deteksi kanal
		$cat = get_the_category($post->ID);
		$cat_parent = $cat[0]->category_parent;
		if($cat_parent) { $cat = get_category($cat_parent);
			$cat = $cat->slug;
		} else { 
			$cat = $cat[0]->slug;
		} 
?>
	
	<div class="gap-30"></div>

	<!-- breadcrumb -->
	<div class="breadcrumb-section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<ol class="breadcrumb">
						<li>
							<i class="fa fa-home"></i>
								<a href="<?php echo BASE_URL; ?>/pilkada">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>Kumpulan Berita <?php single_tag_title('#'); ?></li>
					</ol>		
				</div>
			</div><!-- row end -->
		</div><!-- container end -->
	</div>
	<!-- breadcrumb end -->

	<section class="main-content category-layout-1 pt-0">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-30">
				<div class="col-lg-8">
					<?php
                        $loop_no = 1;
                        if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <?php
                            $cat = get_the_category();
                            $cat_name = $cat[0]->cat_name;
                            $cat_slug =  $cat[0]->slug;
							$cat_link = get_term_link($cat_slug, 'category');
							
							if($loop_no == 1) {
						?>
					<div class="row">
						<div class="col-12">
							<h2 class="block-title">
								<span class="title-angle-shap"> Kumpulan Berita <?php single_tag_title('#'); ?> </span>
							</h2>
							
							<div class="post-block-style">
								<div class="post-thumb">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<img class="img-fluid" src="<?php echo post_image('medium', 800, 800); ?>" alt="<?php the_title(); ?>">
									</a>
									<div class="grid-cat">
										<a class="post-cat fashion" href="https://www.solopos.com/<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></a>
									</div>
								</div>
								
								<div class="post-content">
									<h2 class="post-title title-lg">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h2>
									<div class="post-meta mb-7">
										<span class="post-author"><i class="fa fa-user"></i> <?php echo author_name(); ?></span>
										<span class="post-date"><i class="fa fa-clock-o"></i> <?php the_time('j F Y H:i'); ?> WIB</span>
									</div>
									<p><?php echo excerpt(25); ?></p>
								</div><!-- Post content end -->
							</div>
						</div><!-- col end -->
					</div><!-- row end -->
					<div class="gap-30"></div>

					<div class="row ts-gutter-20 align-items-center">
					<?php } else { ?>
						<div class="col-12 mb-10">
							<div class="post-block-style">
								<div class="row align-items-center">
									<div class="col-md-5">
										<div class="post-thumb">
											<img src="<?php echo post_image('thumbnail', 280, 190); ?>" alt="<?php the_title(); ?>">
											<a class="post-cat-box tech" href="https://www.solopos.com/<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></a>
										</div>
									</div>
									<div class="col-md-7 pl-0">
										<div class="post-content">
											<h2 class="post-title title-md">
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
											</h2>
											<div class="post-meta mb-7">
												<span class="post-author"><a href="#"><i class="fa fa-user"></i> <?php echo author_name(); ?></a></span>
												<span class="post-date"><i class="fa fa-clock-o"></i> <?php the_time('j F Y H:i'); ?> WIB</span>
											</div>
											<p><?php echo excerpt(20); ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
					<?php $loop_no++; ?>
					<?php endwhile; endif; ?>	
					</div>

					<div class="gap-30 d-none d-md-block"></div>
					<div class="row">
						<div class="col-12">
							<!--<ul class="ts-pagination">
								<li><a href="#">1</a></li>
								<li><a href="#" class="active">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>-->
							<?php posts_nav_link(' — ', __('&laquo; Sebelumnya'), __('Berikutnya &raquo;')); ?>
						</div>
					</div>
				</div><!-- col-lg-8 -->

				<?php include(TEMPLATEPATH.'/part/pilkada/sidebar.php'); ?>

			</div><!-- row end -->
		</div><!-- container end -->
	</section><!-- category-layout end -->

	<!-- ad banner start-->
	<div class="block-wrapper no-padding">
		<div class="container pl-0 pr-0">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="banner-img">
						<?php include(TEMPLATEPATH.'/part/pilkada/ads/ads-leaderboard-bottom.php'); ?>
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

<?php include(TEMPLATEPATH.'/part/pilkada/footer.php'); ?>