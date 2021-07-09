<?php 
/*
Template Name: UKSW VIDEO
*/
?>
<?php include(TEMPLATEPATH.'/part/uksw/header.php'); ?>
	<div class="gap-50"></div>

	<section class="main-content category-layout-1 pt-0">
		<div class="container">
			<div class="post-header-area" align="center">
				<h2 class="post-title title-lg">Galeri Video UKSW Salatiga</h2>
			</div>	
			<div class="gap-30"></div>		
			<div class="row ts-gutter-30">
				<div class="col-lg-12">
					<div class="row ts-gutter-30">
                        <?php if(function_exists('fetch_feed')) {
                            include_once(ABSPATH . WPINC . '/feed.php');               // include the required file
                            $feed = fetch_feed('https://www.youtube.com/feeds/videos.xml?channel_id=UCSNKgXlbQ7x0dMQ0UsPi3gw'); // specify the source feed
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
                        //if ($limit == 0) echo '<div>The feed is either empty or unavailable.</div>';                  
                        //else 
                            $yt_no = 1;
                            foreach ($items as $item) : ?>
                        <?php
                            $yt_url= $item->get_permalink();
                        ?>
                        <?php if($yt_no == 1): ?>				
						<div class="col-lg-8 col-md-8">
							<div class="post-block-style post-overaly-style post-md" style="background-image:url(https://i1.ytimg.com/vi/<?php echo youtube_id($yt_url); ?>/hqdefault.jpg)">

								<div class="featured-post">
									<a href="https://www.youtube.com/embed/<?php echo youtube_id($yt_url); ?>" class="popup cboxElement">
										<div class="video-icon">
											<i class="fa fa-play"></i>
										</div>
									</a>
									<div class="overlay-post-content">
										<div class="post-content">
											<div class="grid-category">
												<a class="post-cat lifestyle" href="https://www.solopos.com/uksw/video">Galeri Video</a>
											</div>
		
											<h2 class="post-title title-md">
												<a href="https://www.youtube.com/watch?v=<?php echo youtube_id($yt_url); ?>" target="_blank"><?php echo $item->get_title(); ?></a>
											</h2>
										</div>
									</div>
								</div><!--/ Featured post end -->
							</div><!-- Post block a end -->
						</div><!-- Col 1 end -->
						<?php else: ?>
						<div class="col-lg-4 col-md-4">
				      		<div class="post-block-style clearfix">
								<div class="post-thumb">
									<img class="img-fluid" src="https://i1.ytimg.com/vi/<?php echo youtube_id($yt_url); ?>/mqdefault.jpg" alt="Thumbnail" style="object-fit: cover; width: 297px; height: 223px;">
									<a class="popup cboxElement" href="https://www.youtube.com/embed/<?php echo youtube_id($yt_url); ?>">
										<div class="video-icon">
											<i class="fa fa-play"></i>
										</div>
									</a>
								</div><!-- Post thumb end -->
								<div class="post-content">
									<h2 class="post-title title-small">
										<a href="https://www.youtube.com/embed/<?php echo youtube_id($yt_url); ?>?rel=0&vq=hd1080&autoplay=1&amp;loop=1" title="<?php echo $item->get_title(); ?>"><?php echo $item->get_title(); ?></a>
									</h2>
								</div><!-- Post content end -->
							</div><!-- Post Block style end -->
			      		</div>							

                        <?php endif; ?>
                        <?php $yt_no++; ?>
                        <?php endforeach; ?>												
					</div><!-- row end -->
				</div><!-- col-lg-8 -->
			</div><!-- row end -->
			<div class="gap-50"></div>
			<div class="col-12 mt-3">
				<div class="load-more-btn text-center">
						<a class="btn" href="https://www.youtube.com/channel/UCSNKgXlbQ7x0dMQ0UsPi3gw" target="_blank"> Load More ... </a>
				</div>
			</div><!-- col end -->			
		</div><!-- container end -->
	</section><!-- category-layout end -->

<?php include(TEMPLATEPATH.'/part/uksw/footer.php'); ?>