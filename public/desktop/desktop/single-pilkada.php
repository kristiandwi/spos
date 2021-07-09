<?php
    $path_to_file = $_SERVER["DOCUMENT_ROOT"] . '/xml-data/posts/';
    $path_xml_breaking = $_SERVER["DOCUMENT_ROOT"] . '/xml-data/breaking/';
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(strpos($actual_link, '?') !== false) {
        $pecah = explode('?', $actual_link);
        $pecah_link = explode('-', $pecah[0]);
        $get_id = end($pecah_link);
    } else {
        $pecah_link = explode('-', $actual_link);
        $get_id = end($pecah_link);
    }
            
	if (file_exists(''.$path_to_file.$get_id.'.xml')) {
        $xml = simplexml_load_file(''.$path_to_file.$get_id.'.xml');
            
        $post_id = $xml->posts->properties->post_id;
        $post_date = $xml->posts->created;
        $category_parent = $xml->posts->properties->category->parent;
        $category_parent_id = $xml->posts->properties->category->parent['id'];
		$title = htmlentities($xml->posts->content->title);
		$slug = $xml->posts->content->slug;
        $summary = $xml->posts->content->summary;
        $content = htmlspecialchars_decode($xml->posts->content->content);
        $author = $xml->posts->authors->author;
        $editor = $xml->posts->authors->editor;
        $avatar = $xml->posts->authors->avatar;
        $image_content = $xml->posts->images->content;
        $image_caption = $xml->posts->images->caption;
        $tags = $xml->posts->tags->tag;
		$source = $xml->posts->properties->post_source;
		$post_url = BASE_URL.'/'.$slug.'-'.$post_id;
	}

	include(TEMPLATEPATH.'/part/pilkada/header.php');
?>
	<div class="gap-30"></div>
	<!-- breadcrumb -->
	<div class="breadcrumb-section">
		<div class="container ">
			<div class="row">
				<div class="col-12">
					<ol class="breadcrumb">
						<li>
							<i class="fa fa-home"></i>
								<a href="https://www.solopos.com/">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>							
							<a href="https://www.solopos.com/pilkada">Pilkada</a>
							<i class="fa fa-angle-right"></i>
						</li>						
						<li><?php echo $title; ?></li>
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
						<div class="post-header-area">
							<h1 class="post-title title-lg"><?php echo $title; ?></h1>
							<p><?php echo $summary; ?></p>
							<ul class="post-meta">
								<li>
									<a href="<?php echo BASE_URL; ?>/<?php echo $category_parent; ?>" class="post-cat fashion"><?php echo $category_parent; ?></a>
								</li>
								<li class="post-author">
									<i class="fa fa-user"></i> <strong><?php echo $author; ?></strong>
								</li>
								<li><i class="fa fa-clock-o"></i> <?php echo date_i18n('l, j F Y | H:i', strtotime($post_date)); ?></a>
								<!--<li><a href="#"><i class="fa fa-comments"></i>5 Comments</a></li>
								<li><a href="#" class="view"><i class="icon icon-fire"></i> 354k</a></li>-->
								<li><i class="fa fa-eye"></i><?php echo readingtime($content); ?></li>
								<li class="social-share">
									<i class="shareicon fa fa-share"></i>
									<ul class="social-list">
										<li><a data-social="facebook" class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url; ?>" title="<?php echo $title; ?>"><i class="fa fa-facebook"></i></a></li>
										<li><a data-social="twitter" class="twitter" href="http://twitter.com/share?text=<?php echo $title; ?>&url=<?php echo $post_url; ?>" title="<?php echo $title; ?>"><i class="fa fa-twitter"></i></a></li>
										<li><a data-social="linkedin" class="linkedin" href="<?php echo $post_url; ?>" title="<?php echo $title; ?>"><i class="fa fa-linkedin"></i></a></li>
										<li><a data-social="pinterest" class="pinterest" href="<?php echo $post_url; ?>" title="<?php echo $title; ?>"><i class="fa fa-pinterest-p"></i></a></li>
									</ul>
								</li>
							</ul>
						</div><!-- post-header-area end -->
						<div class="post-content-area">
							<div class="post-media mb-20">
								<a href="<?php echo $image_content; ?>" class="gallery-popup cboxElement">
									<img src="<?php echo $image_content; ?>" class="img-fluid" alt="">
								</a>
								<span><p>SOLOPOS.COM - <?php echo $image_caption; ?></p></span>
							</div>
							<?php echo $content; ?>
						</div><!-- post-content-area end -->
						<div class="post-footer">
							<div class="tag-lists">
								<span>Tags: </span>
								<?php
								foreach($tags as $tag) {
                                        $tag_id = $tag['id'];
                                        $tag_name = $tag;
                                        $tag_slug = str_replace(' ', '-',$tag);
                                        echo '<a href="https://www.solopos.com/tag/'.$tag_slug.'" title="'.$tag_name.'">' . $tag_name . '</a>';
									}
								?>
							</div><!-- tag lists -->
							<div class="author-box d-flex">
								<div class="author-img">
									<img src="<?php echo $avatar; ?>" alt="<?php echo $editor; ?>">
								</div>
								<div class="author-info">
									<h3><?php echo $editor; ?></h3>
									<p>Solopos.com - Creative Information Network</p>
								</div>
							</div><!-- author box -->
							<!--<div class="post-navigation clearfix">
								<div class="post-previous float-left">
									<a href="#">
										<img src="images/news/travel/image3.png" alt="">
										<span>Read Previous</span>
										<p>
											Lopez has reportedly added to her real estate
										</p>
									</a>
								</div>
								<div class="post-next float-right">
									<a href="#">
										<img src="images/news/tech/tech1.png" alt="">
										<span>Read Next</span>
										<p>
											Bel-Air anchored by a multi-level mansion
										</p>
									</a>
								</div>
							</div>--><!-- post navigation -->
							<div class="gap-30"></div>
							<!-- realted post start -->
							<div class="related-post">
								<h2 class="block-title">
									<span class="title-angle-shap"> Berita Terkait </span>
								</h2>
								<div class="row">
								<?php /* //Menampilkan 5 buah judul berita terkait
									$backup = $post;  // backup the current object
									$tags = wp_get_post_tags($post->ID);
									$tagIDs = array();
									if ($tags) {
										$tagcount = count($tags);
										for ($i = 0; $i < $tagcount; $i++) {
										$tagIDs[$i] = $tags[$i]->term_id;
										}
										$args=array(
										'tag__in' => $tagIDs,
										'post__not_in' => array($post->ID),
										'showposts'=>6,
										'ignore_sticky_posts'=>1,
											'date_query' => array(
															array(
																'after' => '-30 days',
															),
														),                   
										); 
									
									$my_query = new WP_Query($args);
									if( $my_query->have_posts() ) { ?>
									<?php  while ($my_query->have_posts()) : $my_query->the_post(); 
										$cat = get_the_category();
										$cat_name = $cat[0]->cat_name;
										$cat_slug =  $cat[0]->slug;
										$cat_link = get_term_link($cat_slug, 'category');
									?>
                                
									<div class="col-md-4">
										<div class="post-block-style">
											<div class="post-thumb">
												<a href="<?php the_permalink(); ?>">
													<img class="img-fluid" src="<?php echo post_image('thumbnail', 280, 280); ?>" alt="">
												</a>
												<div class="grid-cat">
													<a class="post-cat <?php echo parent_category_slug(); ?>" href="https://www.solopos.com/<?php echo parent_category_slug(); ?>"><?php echo parent_category_slug(); ?></a>
												</div>
											</div>
											
											<div class="post-content">
												<h2 class="post-title">
													<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												</h2>
												<div class="post-meta mb-7 p-0">
													<span class="post-date"><i class="fa fa-clock-o"></i> <?php the_time('j F Y'); ?></span>
												</div>
											</div><!-- Post content end -->
										</div>
									</div><!-- col end -->

                                <?php endwhile; ?>
                                <?php
                                    }
                                  }
                                  $post = $backup;  // copy it back
                                  wp_reset_query(); // to use the original query again */
                                ?> 								
								</div><!-- row end -->
							</div>
							<!-- realted post end -->
							<div class="gap-30"></div>
	
							<!--<div class="gap-50 d-none d-md-block"></div>
							<div class="comments-form">
								<h2 class="block-title">
									<span class="title-angle-shap"> Komentar </span>
								</h2>
							</div>--><!-- comment form end -->
						</div>
					</div><!-- single-post end -->

					<div>
						<h2 class="block-title">
							<span class="title-angle-shap"> Berita Terbaru </span>
						</h2>
						<div class="row ts-gutter-20 align-items-center">
						<?php
						query_posts('author=-200&no_found_rows=true&showposts=10&cat=2088');
						if (have_posts()) : while (have_posts()) : the_post();
							$cat = get_the_category();
                            $cat_name = $cat[0]->cat_name;
                            $cat_slug =  $cat[0]->slug;
							$cat_link = get_term_link($cat_slug, 'category');
							if($post->ID != $post_id):
                    	?>
							<div class="col-12 mb-10">
								<div class="post-block-style">
									<div class="row align-items-center">
										<div class="col-md-5">
											<div class="post-thumb">
												<img src="<?php echo post_image('thumbnail', 280, 280); ?>" alt="">
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
													<span class="post-date"><i class="fa fa-clock-o"></i> <?php the_time('j F Y'); ?></span>
												</div>
												<p><?php echo excerpt(20); ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endif; endwhile; endif; ?>					

							<div class="col-12 mt-3">
								<div class="load-more-btn text-center">
										<a class="btn" href="<?php echo BASE_URL; ?>/arsip"> Indek Berita </a>
								</div>
							</div><!-- col end -->
						</div>
					</div><!-- Content Col end -->					
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