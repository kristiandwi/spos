<?php 
/*
Template Name: UKSW FOTO
*/
?>
<?php include(TEMPLATEPATH.'/part/uksw/header.php'); ?>
	<div class="gap-50"></div>

	<section class="main-content category-layout-1 pt-0">
		<div class="container">
			<div class="post-header-area" align="center">
				<h2 class="post-title title-lg">Galeri Foto UKSW Salatiga</h2>
			</div>	
			<div class="gap-30"></div>		
			<div class="row ts-gutter-30">
				<div class="col-lg-12">
					<div class="row">
						<?php
						$no=0;
						query_posts('author=-200&no_found_rows=true&showposts=2&tag=foto-uksw-salatiga');
	                    if (have_posts()) : while (have_posts()) : the_post();
						$no++;
	                	?>	
	                	<?php if($no == 1) { ?>					
						<div class="col-lg-8 col-md-8">
							<div class="post-block-style post-overaly-style post-md" style="background-image:url(<?php echo post_image('medium', 800, 600); ?>)">
								<div class="featured-post">
									<a href="<?php the_permalink();?>" title="<?php the_title(); ?>" class="image-link">&nbsp;</a>
									<div class="overlay-post-content">
										<div class="post-content">
											<div class="grid-category">
												<a class="post-cat lifestyle" href="https://www.solopos.com/uksw/foto">Galeri Foto</a>
											</div>
		
											<h2 class="post-title title-md">
												<a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
											</h2>
											<div class="post-meta">
												<ul>
													<li><a href="#"><i class="fa fa-user"></i> <?php echo author_name(); ?> </a></li>
													<li><a href="#"><i class="icon icon-clock"></i> <?php the_time('j F Y H:i'); ?> WIB </a></li>
												</ul>
											</div>
										</div>
									</div>
								</div><!--/ Featured post end -->
							</div><!-- Post block a end -->
						</div><!-- Col 1 end -->
						<?php } else { ?>
						<div class="col-lg-4 col-md-4">
							<div class="post-block-style post-overaly-style post-md" style="background-image:url(<?php echo post_image('medium', 800, 600); ?>)">
								<div class="featured-post">
									<a href="<?php the_permalink();?>" title="<?php the_title(); ?>" class="image-link">&nbsp;</a>
									<div class="overlay-post-content">
										<div class="post-content">
											<div class="grid-category">
												<a class="post-cat lifestyle" href="https://www.solopos.com/uksw/foto">Galeri Foto</a>
											</div>
		
											<h2 class="post-title title-md">
												<a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
											</h2>
										</div>
									</div>
								</div><!--/ Featured post end -->
							</div><!-- Post block a end -->
						</div><!-- Col 1 end -->
						<?php } endwhile; endif; ?>							
					</div><!-- row end -->
					<div class="gap-30"></div>
					<div class="row ts-gutter-10">
						<?php
						query_posts('author=-200&no_found_rows=true&offset=2&tag=foto-uksw-salatiga');
	                    if (have_posts()) : while (have_posts()) : the_post();
							$cat = get_the_category();
	                        $cat_name = $cat[0]->cat_name;
	                        $cat_slug =  $cat[0]->slug;
							$cat_link = get_term_link($cat_slug, 'category');
	                	?>						
						<div class="col-lg-4 col-md-4">
							<div class="post-block-style post-overaly-style post-md" style="background-image:url(<?php echo post_image('medium', 800, 600); ?>)">
								<div class="featured-post">
									<a href="<?php the_permalink();?>" title="<?php the_title(); ?>" class="image-link">&nbsp;</a>
									<div class="overlay-post-content">
										<div class="post-content">
											<div class="grid-category">
												<a class="post-cat lifestyle" href="https://www.solopos.com/uksw/foto">Galeri Foto</a>
											</div>
		
											<h2 class="post-title title-md">
												<a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
											</h2>
											<div class="post-meta">
												<ul>
													<li><a href="#"><i class="fa fa-user"></i> <?php echo author_name(); ?> </a></li>
													<li><a href="#"><i class="icon icon-clock"></i> <?php the_time('j F Y H:i'); ?> WIB </a></li>
												</ul>
											</div>
										</div>
									</div>
								</div><!--/ Featured post end -->
							</div><!-- Post block a end -->
						</div><!-- Col 1 end -->	
						<?php endwhile; endif; ?>																
					</div><!-- row end -->
					<div class="gap-30 d-none d-md-block"></div>
					<div class="row">
						<div class="col-12" align="center">
							<ul class="ts-pagination">
								<li><a href="#">1</a></li>
								<li><a href="#" class="active">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
					</div>
				</div><!-- col-lg-8 -->
			</div><!-- row end -->
		</div><!-- container end -->
	</section><!-- category-layout end -->

<?php include(TEMPLATEPATH.'/part/uksw/footer.php'); ?>