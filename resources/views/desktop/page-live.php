<?php
/*
Template Name: Page Live
*/
get_header(); ?>	
	<!-- breadcrumb -->
	<div class="breadcrumb-section">
		<div class="container ">
			<div class="row">
				<div class="col-12">
					<ol class="breadcrumb">
						<li>
							<a href="https://www.solopos.com/"><i class="fa fa-home"></i></a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li><i class="fa fa-angle-right"></i><?php the_title(); ?></li>
					</ol>		
				</div>
			</div><!-- row end -->
		</div><!-- container end -->
	</div>
	<!-- breadcrumb end -->

	<section class="main-content pt-0">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-30">
				<div class="col-lg-8">
					<div class="single-post">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="post-header-area">
							<h1 class="post-title title-lg"><?php the_title(); ?></h1>
							<ul class="post-meta">
								<li class="post-author">
									<a href="#"><strong><?php echo author_name(); ?></strong></a>
								</li>
								<li><a href="#"><i class="fa fa-clock-o"></i><?php the_time('l, j F Y');?></a></li>
								<li class="social-share">
									<i class="shareicon fa fa-share"></i>
									<ul class="social-list">
										<li><a data-social="facebook" class="facebook" href="#" title="The billionaire Philan thropist read to learn more and city"><i class="fa fa-facebook"></i></a></li>
										<li><a data-social="twitter" class="twitter" href="#" title="The billionaire Philan thropist read to learn more and city"><i class="fa fa-twitter"></i></a></li>
										<li><a data-social="linkedin" class="linkedin" href="#" title="The billionaire Philan thropist read to learn more and city"><i class="fa fa-linkedin"></i></a></li>
										<li><a data-social="pinterest" class="pinterest" href="#" title="The billionaire Philan thropist read to learn more and city"><i class="fa fa-pinterest-p"></i></a></li>
									</ul>
								</li>
							</ul>
						</div><!-- post-header-area end -->
						<div class="post-content-area">
							<div class="post-media mb-20">
								<a href="<?php echo post_image('full', 790, 790); ?>" class="gallery-popup cboxElement">
									<img src="<?php echo post_image('medium', 600, 400); ?>" alt="<?php the_title() ;?>" class="img-fluid">
								</a>
								<span><p>SOLOPOS.COM - <?php echo post_image_caption(); ?></p></span>
							</div>
							<?php the_content(); ?>
						</div><!-- post-content-area end -->
						<div class="post-footer">
							
							<div class="author-box d-flex">
								<div class="author-img flex-grow-1">
					              <?php if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE): ?>
					                  <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
					              <?php else: ?>
					                  <img src="<?php echo ASSETS_; ?>images/news/author.png" alt="">
					              <?php endif; ?>									
								</div>
								<div class="author-info">
									<h3><?php the_author_posts_link(); ?></h3>
									<p>Solopos.com merupakan bagian dari Harian Umum Solopos. Website Solopos.com diluncurkan pada 19 September 2007 bertepatan dengan HUT Ke-10 Harian Solopos. Selengkapnya <a href="#">Klik di sini</a></p>
								</div>
							</div><!-- author box -->				
						</div>
						<?php endwhile; endif; wp_reset_query(); ?>
					</div><!-- single-post end -->
					
				</div><!-- col-lg-8 -->

				<!-- sidebar start -->
				<?php get_sidebar(); ?>
				<!-- sidebar end -->
			</div><!-- row end -->
		</div><!-- container end -->
	</section><!-- category-layout end -->

<?php get_footer(); ?>