                <?php $path_xml_breaking = $path_xml_breaking = $_SERVER["DOCUMENT_ROOT"] . '/xml-data/breaking/'; ?>
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
								<li class="nav-item">
									<a class="nav-link animated active fadeIn" href="#post_tab_b" data-toggle="tab">
										<span class="tab-head">
											<span class="tab-text-title">Terpopuler</span>					
										</span>
									</a>
								</li>
							</ul>
							<div class="gap-50 d-none d-md-block"></div>
							<div class="row">
								<div class="col-12">
									<div class="tab-content">
										<div class="tab-pane active animated fadeInRight" id="post_tab_b">
											<div class="list-post-block">
												<ul class="list-post">
												<?php $pop_loop = 1; ?>
												<?php $pop = simplexml_load_file(''.$path_xml_breaking.'/breaking-popular.xml'); ?>
												<?php foreach($pop->post as $posts) { if($pop_loop <=5): ?>
													<li>
														<div class="post-block-style media">
															<div class="post-thumb">
																<a href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=terpopular_desktop" title="<?php echo $posts->title; ?>">
																	<img class="img-fluid" src="<?php echo $posts->images->thumbnail; ?>" alt="<?php echo $posts->title; ?>" style="object-fit: cover; object-position: center; height: 85px; width: 85px;">
																</a>
															</div><!-- Post thumb end -->
						
															<div class="post-content media-body">
																<h2 class="post-title">
																	<a href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=terpopular_desktop" title="<?php echo $posts->title; ?>"><?php echo $posts->title; ?></a>
																</h2>
																<div class="post-meta mb-7">
																	<span class="post-date"><i class="fa fa-clock-o"></i> <?php echo human_time_diff( strtotime($posts->date), current_time( 'timestamp' ) ).' '.__( 'lalu' ); ?></span>
																</div>
															</div><!-- Post content end -->
														</div><!-- Post block style end -->
													</li><!-- Li 1 end -->
													<?php endif; $pop_loop++; } ?>   
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
							<h2 class="block-title block-title-dark">
								<span class="title-angle-shap"> Jawa Tengah </span>
							</h2>
							<div class="list-post-block">
								<ul class="list-post">
								  <?php $kl_loop = 1; ?>
								  <?php $breakingkl = simplexml_load_file(''.$path_xml_breaking.'/breaking-jateng.xml'); ?>
								  <?php foreach($breakingkl->post as $posts) { if($kl_loop <=5): ?>	
									<li>
										<div class="post-block-style media">
											<div class="post-thumb">
												<a href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=sidebar_desktop" title="<?php echo $posts->title; ?>">
													<img class="img-fluid" src="<?php echo $posts->images->thumbnail; ?>" alt="<?php echo $posts->title; ?>" style="object-fit: cover; object-position: center; height: 85px; width: 85px;">
												</a>
											</div><!-- Post thumb end -->

											<div class="post-content media-body">
												<h2 class="post-title">
													<a href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=sidebar_desktop" title="<?php echo $posts->title; ?>"><?php echo $posts->title; ?></a>
												</h2>
												<div class="post-meta mb-7">
													<span class="post-date"><i class="fa fa-clock-o"></i> <?php echo human_time_diff( strtotime($posts->date), current_time( 'timestamp' ) ).' '.__( 'lalu' ); ?></span>
												</div>
											</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 1 end -->			          				
									<?php endif; $kl_loop++; } ?>
								</ul><!-- List post end -->
							</div>
						</div>
		
						<div class="sidebar-widget">
						</div><!-- widget end -->
						<div class="sidebar-widget ads-widget">
							<div class="ads-image">
								<?php include(TEMPLATEPATH.'/part/uksw/ads/ads-sidebar-top.php'); ?>
							</div>
						</div><!-- widget end -->						
					</div>
				</div><!-- Sidebar Col end -->