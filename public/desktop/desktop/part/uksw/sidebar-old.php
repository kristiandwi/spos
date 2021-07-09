                <!-- sidebar start -->
                <div class="col-lg-4">
					<div class="sidebar">
						<div class="sidebar-widget ads-widget">
							<div class="ads-image">
								<?php include(TEMPLATEPATH.'/part/uksw/ads/ads-sidebar-top.php'); ?>
							</div>
						</div><!-- widget end -->
						<div class="sidebar-widget featured-tab post-tab"><!-- style="position: -webkit-sticky; position: sticky; top: 130px;" -->
							<ul class="nav nav-tabs">
								<!--<li class="nav-item">
									<a class="nav-link animated active fadeIn" href="#post_tab_a" data-toggle="tab">
										<span class="tab-head">
											<span class="tab-text-title">Recent</span>					
										</span>
									</a>
								</li>-->
								<li class="nav-item">
									<a class="nav-link animated active fadeIn" href="#post_tab_b" data-toggle="tab">
										<span class="tab-head">
											<span class="tab-text-title">Popular</span>					
										</span>
									</a>
								</li>
							</ul>
							<div class="gap-50 d-none d-md-block"></div>
							<div class="row">
								<div class="col-12">
									<div class="tab-content">
										<div class="tab-pane animated fadeInRight" id="post_tab_a">
											<div class="list-post-block">
												<ul class="list-post">
												<?php
												$recent_num = 0;
                                                query_posts('author=-200&no_found_rows=true&showposts=5');
                                                if( have_posts() ) :
                                                    // run the loop
                                                    while( have_posts() ): the_post();
                                                    $cat = get_the_category();
                                                    $cat_name = $cat[0]->cat_name;
                                                    $cat_slug =  $cat[0]->slug;
													$cat_link = get_term_link($cat_slug, 'category');
													$recent_num++;
                                                ?>
													<li>
														<div class="post-block-style media">
															<div class="post-thumb">
																<a href="#">
																	<img class="img-fluid" src="<?php echo post_image('thumbnail', 280, 190); ?>" alt="<?php the_title(); ?>">
																</a>
																<!--span class="tab-post-count"> <?php //echo $recent_num; ?></span -->
																
															</div><!-- Post thumb end -->
						
															<div class="post-content media-body">
																<a class="post-cat <?php echo parent_category_slug(); ?>" href="https://www.solopos.com/<?php echo parent_category_slug(); ?>"><?php echo parent_category_slug(); ?></a>
																<h2 class="post-title">
																	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
																</h2>
																<!--div class="post-meta mb-7">
																	<span class="post-date"><i class="fa fa-clock-o"></i> <?php the_time('j F Y H:i'); ?> WIB</span>
																</div -->
															</div><!-- Post content end -->
														</div><!-- Post block style end -->
													</li><!-- Li 1 end -->
												<?php endwhile; endif; ?>
												</ul><!-- List post end -->
											</div>
										</div><!-- Tab pane 1 end -->
										<div class="tab-pane active animated fadeInRight" id="post_tab_b">
											<div class="list-post-block">
												<ul class="list-post">

												<?php
														$_args = array(
															'showposts' => 5,
															'meta_key' => 'post_views_count',
															'orderby' => 'meta_value_num',
															'order' => 'DESC',
															'no_found_rows' => true, // untuk fast loading
															//'cat' => 2088,
															'tax_query'  => array(
																array(
																	'taxonomy'  => 'post_tag',
																	'field'     => 'slug',
																	'terms'     =>  array(
																		'uksw',
																		'prestasi-uksw',
																		'uksw-salatiga',
																		'prestasi-uksw-salatiga'
																	),
																),
															),
															'date_query' => array(
																array(
																	'after' => '-24 hours',
																	//'day' => date('d'),
																	//'monthnum' => date('m'),
																	//'year' => date('Y'),
																),
															),
														);
													$pop_num = 0;
													$loop = new WP_Query($_args);
													if ($loop->have_posts()) :
													while ($loop->have_posts()) : $loop->the_post(); $pop_num++; ?>
													<li>
														<div class="post-block-style media">
															<div class="post-thumb">
																<a href="#">
																	<img class="img-fluid" src="<?php echo post_image('thumbnail', 280, 190); ?>" alt="<?php the_title(); ?>">
																</a>
																<!--span class="tab-post-count"> <?php //echo $recent_num; ?></span -->
															</div><!-- Post thumb end -->
						
															<div class="post-content media-body">
																<a class="post-cat <?php echo parent_category_slug(); ?>" href="https://www.solopos.com/<?php echo parent_category_slug(); ?>"><?php echo parent_category_slug(); ?></a>																
																<h2 class="post-title">
																	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
																</h2>
																<!--div class="post-meta mb-7">
																	<span class="post-date"><i class="fa fa-clock-o"></i> <?php the_time('j F Y H:i'); ?> WIB</span>
																</div -->
															</div><!-- Post content end -->
														</div><!-- Post block style end -->
													</li><!-- Li 1 end -->
													<?php endwhile; endif; wp_reset_query(); ?>    
												</ul><!-- List post end -->
											</div>
										</div><!-- Tab pane 2 end -->
									</div><!-- tab content -->
								</div>
							</div>
						</div><!-- widget end -->

						<div class="sidebar-widget ads-widget">
								<?php include(TEMPLATEPATH.'/part/uksw/ads/ads-sidebar-bottom.php'); ?>
						</div><!-- widget end -->
						
						<div class="sidebar-widget">
						</div><!-- widget end -->
						<div class="sidebar-widget ads-widget">
							<div class="ads-image">
								<?php include(TEMPLATEPATH.'/part/uksw/ads/ads-sidebar-top.php'); ?>
							</div>
						</div><!-- widget end -->						
					</div>
				</div><!-- Sidebar Col end -->