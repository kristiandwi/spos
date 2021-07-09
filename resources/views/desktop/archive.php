<?php get_header(); ?>	
	<?php
	    // deteksi kanal
	    $cat = get_the_category($post->ID);
	    $cat_parent = $cat[0]->category_parent;
	    if($cat_parent) { 
	        $cat = get_category($cat_parent);
	        $cat = $cat->slug;
	    } else { 
	        $cat = $cat[0]->slug;
	    } 
	?>
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

						<li style="text-transform: capitalize;">
						<?php if($cat_parent != 0) { echo $cat.' <i class="fa fa-angle-right"></i> '; } ?><?php single_cat_title(); ?>
						</li>
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
					<h2 class="block-title">
						<span class="title-angle-shap"> News Feed "<?php if($cat_parent != 0) { echo $cat.' &raquo; '; } ?><?php single_cat_title(); ?>" </span>
					</h2>
					<div class="row ts-gutter-20 align-items-center">
						<?php
	                        $loop_no = 1;
	                        if (have_posts()) : while (have_posts()) : the_post();
	                    ?>
						<div class="col-12 mb-10">
							<div class="post-block-style">
								<div class="row">
									<div class="col-md-5">
										<div class="post-thumb post-list_feed">
											<img src="<?php echo post_image('thumbnail', 280, 190); ?>" alt="<?php the_title(); ?>">
											<a class="post-cat-box <?php echo parent_category_slug(); ?>" href="https://www.solopos.com/<?php echo parent_category_slug(); ?>"><?php single_cat_title(); ?></a>
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
				</div><!-- col-lg-8 -->

				<!-- sidebar start -->
				<?php get_sidebar(); ?>
				<!-- sidebar end -->
			</div><!-- row end -->
		</div><!-- container end -->
	</section><!-- category-layout end -->

<?php get_footer(); ?>