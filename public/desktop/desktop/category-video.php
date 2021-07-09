<?php get_header(); ?>
	<?php $path_xml_breaking = $_SERVER["DOCUMENT_ROOT"] . '/xml-data/breaking/'; ?>
	<?php //include (TEMPLATEPATH . '/ads/ads-top-under-nav.php'); ?>
	<?php
	  // deteksi kanal
	  $cat = get_the_category($post->ID);
	  $cat_parent = $cat[0]->category_parent;
	  if($cat_parent) { $cat = get_category($cat_parent);
	      $cat = $cat->slug;
	  } else { 
	      $cat = $cat[0]->slug;
	  } 
	?>
	<div class="gap-50"></div>

	<section class="main-content category-layout-1 pt-0">
		<div class="container">
			<div class="post-header-area" align="center">
				<h2 class="post-title title-lg">Berita Video Solopos.com</h2>
			</div>	
			<div class="gap-30"></div>		
			<div class="row ts-gutter-30">
				<div class="col-lg-12">
					<div class="row ts-gutter-30">
						<?php $loop = 1;//while (have_posts()) : the_post(); ?>
			            <?php $breaking = simplexml_load_file(''.$path_xml_breaking.'/breaking-video.xml');
			            foreach($breaking->post as $posts) { if($posts->category == $cat): if($loop == 1):  ?>
						<div class="col-lg-8 col-md-12 pad-r">
							<div class="owl-carousel owl-theme featured-slider h2-feature-slider">			            
								<div class="item post-overaly-style post-md" style="background-image:url(<?php echo $posts->images->thumbnail; ?>)">
									<div class="featured-post">
										<a class="image-link" href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=video_desktop" title="<?php echo $posts->title; ?>">&nbsp;</a>
										<div class="overlay-post-content">
											<div class="post-content">
												<div class="grid-category">
													<a class="post-cat <?php echo $posts->category; ?>" href="https://www.solopos.com/<?php echo $posts->category; ?>"><?php echo $posts->category; ?></a>
												</div>

												<h2 class="post-title title-md">
													<a href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=video_desktop" title="<?php echo $posts->title; ?>"><?php echo $posts->title; ?></a>
												</h2>
												<div class="post-meta">
													<ul>
														<li><a href="#"><i class="fa fa-user"></i><?php echo $posts->author; ?></a></li>
														<li><a href="#"><i class="icon icon-clock"></i> <?php echo human_time_diff( strtotime($posts->date), current_time( 'timestamp' ) ).' '.__( 'yang lalu' ); ?></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div><!--/ Featured post end -->
								</div><!-- Item 1 end -->
							</div>
						</div>
						<?php elseif($loop == 2): ?>
						<div class="col-lg-4 col-md-12">
							<div class="post-overaly-style post-md" style="background-image:url(<?php echo $posts->images->thumbnail; ?>)">
								<div class="featured-post">
									<a class="image-link" href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=video_desktop" title="<?php echo $posts->title; ?>">&nbsp;</a>
									<div class="overlay-post-content">
										<div class="post-content">
											<div class="grid-category">
											<a class="post-cat video" href="https://www.solopos.com/video">Video</a>
											</div>

											<h2 class="post-title title-md">
												<a href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=video_desktop" title="<?php echo $posts->title; ?>"><?php echo $posts->title; ?></a>
											</h2>
											<div class="post-meta">
												<ul>
													<li><a href="#"><i class="fa fa-user"></i><?php echo $posts->author; ?></a></li>
													<li><a href="#"><i class="icon icon-clock"></i> <?php echo human_time_diff( strtotime($posts->date), current_time( 'timestamp' ) ).' '.__( 'lalu' ); ?></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div><!--/ Featured post end -->
							</div><!-- Item 2 end -->
						</div><!-- Col 4 end -->
						<?php else: ?>							
						<div class="col-lg-4 col-md-4">
				      		<div class="post-block-style clearfix">
								<div class="post-thumb">
									<img class="img-fluid" src="<?php echo $posts->images->thumbnail; ?>" alt="Thumbnail" style="object-fit: cover; width: 297px; height: 223px;">
									<a href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=video_desktop" title="<?php echo $posts->title; ?>">
										<div class="video-icon">
											<i class="fa fa-play"></i>
										</div>
									</a>
								</div><!-- Post thumb end -->
								<div class="post-content">
									<h2 class="post-title title-small">
										<a href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=video_desktop" title="<?php echo $posts->title; ?>"><?php echo $posts->title; ?></a>
									</h2>
								</div><!-- Post content end -->
							</div><!-- Post Block style end -->
			      		</div>							

                        <?php endif; $loop++; endif; } ?>												
					</div><!-- row end -->
				</div><!-- col-lg-8 -->
			</div><!-- row end -->
			<div class="gap-50"></div>
			<div class="col-12 mt-3">
				<div class="load-more-btn text-center">
						<a class="btn" href="https://www.youtube.com/SoloposTV" target="_blank"> Load More ... </a>
				</div>
			</div><!-- col end -->			
		</div><!-- container end -->
	</section><!-- category-layout end -->

<?php get_footer(); ?>