<?php get_header(); ?>	
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
						<li><a href="https://www.solopos.com/<?php echo parent_category_slug(); ?>"><?php echo parent_category_slug(); ?></a></li>
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
						<?php if (have_posts()) : while (have_posts()) : the_post(); 
							$cat = get_the_category();
                            $cat_name = $cat[0]->cat_name;
                            $cat_slug =  $cat[0]->slug;
                        	$cat_link = get_term_link($cat_slug, 'category');
						?>
						<div class="post-header-area">
							<h1 class="post-title title-lg"><?php the_title(); ?></h1>
							<p><?php $post_summary = get_post_meta( $post->ID, 'post_summary', true ); if($post_summary !== '') { echo $post_summary; } ?></p>
							<ul class="post-meta">
								<li>
									<a class="post-cat <?php echo parent_category_slug(); ?>" href="https://www.solopos.com/<?php echo parent_category_slug(); ?>"><?php echo parent_category_slug(); ?></a>
								</li>
								<li class="post-author">
									<a href="#"><strong><?php echo author_name(); ?></strong></a>
								</li>
								<li><a href="#"><i class="fa fa-clock-o"></i><?php the_time('l, j F Y');?></a></li>
								<li><a href="#"><i class="fa fa-eye"></i>3 menit baca</a></li>
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
							<div class="tag-lists">
								<span>Tags: </span>
				               <?php
				                global $post;
				                $postTags = get_the_tags($post->ID);
				                if ( ! empty( $postTags ) ) {
				                    foreach( $postTags as $postTags ) {
				                        echo '<a href="' . get_tag_link( $postTags ) . '" rel="tag">' . $postTags->name . '</a>';
				                    }
				                } 
				                ?>
							</div><!-- tag lists -->
							
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

					<div class="gap-30"></div>
					<!-- realted post start -->
					<div class="related-post">
						<h2 class="block-title">
							<span class="title-angle-shap"> Berita Terkait </span>
						</h2>
						<div class="row">
							<div class="col-md-4">
								<div class="post-block-style">
									<div class="post-thumb">
										<a href="#">
											<img class="img-fluid" src="<?php echo ASSETS_; ?>images/news/tech/tech1.png" alt="">
										</a>
										<div class="grid-cat">
											<a class="post-cat tech" href="#">Tech</a>
										</div>
									</div>
									
									<div class="post-content">
										<h2 class="post-title">
											<a href="#">Zhang social media pop star also known innocent</a>
										</h2>
										<div class="post-meta mb-7 p-0">
											<span class="post-date"><i class="fa fa-clock-o"></i> 29 July, 2020</span>
										</div>
									</div><!-- Post content end -->
								</div>
							</div><!-- col end -->
							<div class="col-md-4">
								<div class="post-block-style">
									<div class="post-thumb">
										<a href="#">
											<img class="img-fluid" src="<?php echo ASSETS_; ?>images/news/health/image2.png" alt="">
										</a>
										<div class="grid-cat">
											<a class="post-cat tech" href="#">Tech</a>
										</div>
									</div>
									
									<div class="post-content">
										<h2 class="post-title">
											<a href="#">Zhang social media pop star also known innocent</a>
										</h2>
										<div class="post-meta mb-7 p-0">
											<span class="post-date"><i class="fa fa-clock-o"></i> 29 July, 2020</span>
										</div>
									</div><!-- Post content end -->
								</div>
							</div><!-- col end -->
							<div class="col-md-4">
								<div class="post-block-style">
									<div class="post-thumb">
										<a href="#">
											<img class="img-fluid" src="<?php echo ASSETS_; ?>images/news/fashion/image4.png" alt="">
										</a>
										<div class="grid-cat">
											<a class="post-cat tech" href="#">Tech</a>
										</div>
									</div>
									
									<div class="post-content">
										<h2 class="post-title">
											<a href="#">Zhang social media pop star also known innocent</a>
										</h2>
										<div class="post-meta mb-7 p-0">
											<span class="post-date"><i class="fa fa-clock-o"></i> 29 July, 2020</span>
										</div>
									</div><!-- Post content end -->
								</div>
							</div><!-- col end -->
							<div class="col-md-4">
								<div class="post-block-style">
									<div class="post-thumb">
										<a href="#">
											<img class="img-fluid" src="<?php echo ASSETS_; ?>images/news/tech/tech1.png" alt="">
										</a>
										<div class="grid-cat">
											<a class="post-cat tech" href="#">Tech</a>
										</div>
									</div>
									
									<div class="post-content">
										<h2 class="post-title">
											<a href="#">Zhang social media pop star also known innocent</a>
										</h2>
										<div class="post-meta mb-7 p-0">
											<span class="post-date"><i class="fa fa-clock-o"></i> 29 July, 2020</span>
										</div>
									</div><!-- Post content end -->
								</div>
							</div><!-- col end -->
							<div class="col-md-4">
								<div class="post-block-style">
									<div class="post-thumb">
										<a href="#">
											<img class="img-fluid" src="<?php echo ASSETS_; ?>images/news/health/image2.png" alt="">
										</a>
										<div class="grid-cat">
											<a class="post-cat tech" href="#">Tech</a>
										</div>
									</div>
									
									<div class="post-content">
										<h2 class="post-title">
											<a href="#">Zhang social media pop star also known innocent</a>
										</h2>
										<div class="post-meta mb-7 p-0">
											<span class="post-date"><i class="fa fa-clock-o"></i> 29 July, 2020</span>
										</div>
									</div><!-- Post content end -->
								</div>
							</div><!-- col end -->
							<div class="col-md-4">
								<div class="post-block-style">
									<div class="post-thumb">
										<a href="#">
											<img class="img-fluid" src="<?php echo ASSETS_; ?>images/news/fashion/image4.png" alt="">
										</a>
										<div class="grid-cat">
											<a class="post-cat tech" href="#">Tech</a>
										</div>
									</div>
									
									<div class="post-content">
										<h2 class="post-title">
											<a href="#">Zhang social media pop star also known innocent</a>
										</h2>
										<div class="post-meta mb-7 p-0">
											<span class="post-date"><i class="fa fa-clock-o"></i> 29 July, 2020</span>
										</div>
									</div><!-- Post content end -->
								</div>
							</div><!-- col end -->									
						</div><!-- row end -->
					</div>
					<!-- realted post end -->

					<div class="gap-50 d-none d-md-block"></div>
					<div>
						<h2 class="block-title">
							<span class="title-angle-shap"> Berita Terkini </span>
						</h2>
						<div class="row ts-gutter-20 align-items-center">
						<?php
							query_posts('showposts=12');
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
											<div class="post-thumb post-list_feed">
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
												<p><?php $post_summary = get_post_meta( $post->ID, 'post_summary', true ); if($post_summary !== '') { echo $post_summary; } ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; endif; ?>						
						</div>
					</div><!-- Content Col end -->					
				</div><!-- col-lg-8 -->

				<!-- sidebar start -->
				<?php get_sidebar(); ?>
				<!-- sidebar end -->
			</div><!-- row end -->
		</div><!-- container end -->
	</section><!-- category-layout end -->

<?php get_footer(); ?>