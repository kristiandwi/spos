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
	<section class="featured-post-area no-padding">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-20">
				<div class="col-lg-8 col-md-12 pad-r">
					<div class="owl-carousel owl-theme featured-slider h2-feature-slider">					
		            <?php $hl_loop = 1;//while (have_posts()) : the_post(); ?>
		            <?php $breaking = simplexml_load_file(''.$path_xml_breaking.'/breaking-cekfakta.xml');
		            foreach($breaking->post as $posts) { if($posts->category == $cat): if($hl_loop <= 5):  ?>
					<div class="item post-overaly-style post-md" style="background-image:url(<?php echo $posts->images->thumbnail; ?>)">
						<div class="featured-post">
							<a class="image-link" href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=headline_desktop" title="<?php echo $posts->title; ?>">&nbsp;</a>
							<div class="overlay-post-content">
								<div class="post-content">
									<div class="grid-category">
										<a class="post-cat <?php echo $posts->category; ?>" href="https://www.solopos.com/<?php echo $posts->category; ?>"><?php echo $posts->category; ?></a>
									</div>

									<h2 class="post-title title-md">
										<a href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=headline_desktop" title="<?php echo $posts->title; ?>"><?php echo $posts->title; ?></a>
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
                    <?php endif; $hl_loop++; endif; } ?>           
					</div>
				</div><!-- Col 8 end -->
	            <?php $pc_loop = 1; ?>
	            <?php $breakingpc = simplexml_load_file(''.$path_xml_breaking.'/breaking-premium.xml'); ?>
	            <?php foreach($breakingpc->post as $posts) { if($posts->category == $cat): if($pc_loop <= 1): ?>
				<div class="col-lg-4 col-md-12">
					<div class="post-overaly-style post-md" style="background-image:url(<?php echo $posts->images->thumbnail; ?>)">
						<div class="featured-post">
							<a class="image-link" href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=premium_desktop" title="<?php echo $posts->title; ?>">&nbsp;</a>
							<div class="overlay-post-content">
								<div class="post-content">
									<div class="grid-category">
									<a class="post-cat premium" href="https://www.solopos.com/premium">Konten Premium</a>
									</div>

									<h2 class="post-title title-md">
										<a href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=premium_desktop" title="<?php echo $posts->title; ?>"><?php echo $posts->title; ?></a>
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
				<?php endif; $pc_loop++; endif; } ?>
				

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Feature post end -->

	<!-- Section Trending start-->
	<!--section class="trending-slider pb-0">
		<div class="container pl-0 pr-0">
			<div class="ts-grid-box">
				<h2 class="block-title">
					 <span class="title-angle-shap"> Editor's Choice </span>
				</h2>
				<div class="owl-carousel dot-style2" id="trending-slider">
					<?php $ec_loop = 1; ?>
		          	<?php $breakingec = simplexml_load_file(''.$path_xml_breaking.'/breaking-editor-choice.xml'); ?>
		          	<?php foreach($breakingec->post as $posts) { if($posts->category == $cat): if($ec_loop <= 5): ?>
					<div class="item post-overaly-style post-md" style="background-image:url(<?php echo $posts->images->thumbnail; ?>)">
						<a class="image-link" href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=editors_choice_desktop" title="<?php echo $posts->title; ?>">&nbsp;</a>
						<div class="overlay-post-content">
							<div class="post-content">
								<div class="grid-category">
									<a class="post-cat <?php echo $posts->category; ?>" href="https://www.solopos.com/<?php echo $posts->category; ?>"><?php echo $posts->category; ?></a>
								</div>

								<h2 class="post-title">
									<a href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=editors_choice_desktop" title="<?php echo $posts->title; ?>"><?php echo $posts->title; ?></a>
								</h2>
								<div class="post-meta">
									<ul>
										<li><a href="#"><i class="fa fa-user"></i><?php echo $posts->author; ?></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div><!-- Item 1 end -->
                    <?php endif; $ec_loop++; endif; } ?>
				<!--</div>
				<!-- most-populers end-->
			<!--</div>
			<!-- ts-populer-post-box end-->
		<!--</div>
		<!-- container end-->
	<!--</section>-->
	<!-- section trending End -->

	<!-- Section Terkini Start -->
	<section class="block-wrapper">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-30">
				<div class="col-lg-8 col-md-12">
					<h2 class="block-title">
						<span class="title-angle-shap"> Cek Fakta Terkini </span>
					</h2>
					<div class="row ts-gutter-20 loadmore-frame">
			          <?php $no=1; ?>
			          <?php $breaking = simplexml_load_file(''.$path_xml_breaking.'/breaking-'.$cat.'.xml'); ?>
			            <?php foreach($breaking->post as $posts) { ?>
						<div class="col-12 mb-10 content-box">
							<div class="post-block-style">
								<div class="row">
									<div class="col-md-5">
										<div class="post-thumb post-list_feed">
											<img src="<?php echo $posts->images->thumbnail; ?>" alt="<?php echo $posts->title; ?>" style="object-fit: cover; object-position: center; height: 167px; width: 250px;">
											<a class="post-cat-box <?php echo $posts->category; ?>" href="https://www.solopos.com/<?php echo $posts->category; ?>"><?php echo $posts->category; ?></a>
										</div>
									</div>
									<div class="col-md-7 pl-0">
										<div class="post-content">
											<h2 class="post-title title-md">
											<a href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=terkini_desktop" title="<?php echo $posts->title; ?>"><?php echo $posts->title; ?></a>
											</h2>
											<div class="post-meta mb-7">
												<span class="post-author"><a href="#"><i class="fa fa-user"></i><?php echo $posts->author; ?></a></span>
												<span class="post-date"><i class="fa fa-clock-o"></i> <?php echo human_time_diff( strtotime($posts->date), current_time( 'timestamp' ) ).' '.__( 'lalu' ); ?></span>
											</div>
											<p><?php echo htmlspecialchars_decode($posts->summary); ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php $no++; } ?>	
						<div class="col-12 mt-3 align-items-center" style="text-align: center;">
				            <a href="javascript:void(0)" class="btn btn-primary btn-sm load-more" title="Kumpulan Berita">Cek Berita Lainnya</a>
				            <a href="https://m.solopos.com/arsip" class="btn btn-primary btn-sm load-more-arsip" style="display: none;" title="Kumpulan Berita">Arsip Berita</a>
						</div><!-- col end -->
					</div>	

					<div class="block style1 text-light mb-20 mt-5">
						<h2 class="block-title">
							<span class="title-angle-shap"> Jawa Tengah </span>
						</h2>

						<div class="row">
				            <?php $pc_loop = 1; ?>
				            <?php $breakingpc = simplexml_load_file(''.$path_xml_breaking.'/breaking-jateng.xml'); ?>
				            <?php foreach($breakingpc->post as $posts) { if($pc_loop <= 5): ?>

				            <?php if($pc_loop==1) : ?>
							<div class="col-lg-6 col-md-6">
								<div class="post-block-style">
									<div class="post-thumb">
										<a href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=premium_desktop" title="<?php echo $posts->title; ?>">
											<img src="<?php echo $posts->images->thumbnail; ?>" alt="<?php echo $posts->title; ?>" style="object-fit: cover; object-position: center top; width: 266px; height: 178px;">
										</a>
										<div class="grid-cat">
											<a class="post-cat premium" href="https://www.solopos.com/premium">Premium</a>
										</div>
									</div>
									
									<div class="post-content mt-3">
										<h2 class="post-title title-md">
											<a href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=terkini_desktop" title="<?php echo $posts->title; ?>"><?php echo $posts->title; ?></a>
										</h2>
										<p><?php echo htmlspecialchars_decode($posts->summary); ?></p>
										<div class="post-meta mb-7">
											<span class="post-author"><a href="#"><i class="fa fa-user"></i><?php echo $posts->author; ?></a></span>
											<span class="post-date"><i class="fa fa-clock-o"></i> <?php echo human_time_diff( strtotime($posts->date), current_time( 'timestamp' ) ).' '.__( 'lalu' ); ?></span>
										</div>
									</div><!-- Post content end -->
								</div><!-- Post block a end -->
							</div><!-- Col 1 end -->

							<div class="col-lg-6 col-md-6">
								<div class="row ts-gutter-20">								
							<?php endif; ?>
							<?php if( $pc_loop > 1 && $pc_loop <= 5 ) : ?>

									<div class="col-md-6">
										<div class="post-block-style">
											<div class="post-thumb">
												<a href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=terkini_desktop" title="<?php echo $posts->title; ?>">
													<img src="<?php echo $posts->images->thumbnail; ?>" alt="<?php echo $posts->title; ?>" style="object-fit: cover; object-position: center; width: 118px; height: 84px;">
												</a>
											</div>
											
											<div class="post-content">
												<h2 class="post-title mb-2">
													<a href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=terkini_desktop" title="<?php echo $posts->title; ?>"><?php echo $posts->title; ?></a>
												</h2>
											</div><!-- Post content end -->
										</div><!-- Post block a end -->
									</div><!-- .col -->
								
							<?php endif; ?>
							<?php if($pc_loop == 5) : ?>
								</div><!-- .row -->
							</div><!-- Col 2 end -->
						<?php endif; endif; $pc_loop++; } ?>
						</div><!-- Row end -->
					</div><!-- Block Lifestyle end -->

				</div><!-- Content Col end -->

				<?php get_sidebar(); ?>
				<!-- Sidebar Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Section Terkini End -->

	<!-- ad banner start-->
	<div class="block-wrapper no-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="banner-img text-center">
						
						<?php include (TEMPLATEPATH . '/ads/ads-leaderboard-3.php'); ?>
						<!--<a href="#">
							<img class="img-fluid" src="<?php echo ASSETS_; ?>images/banner-image/image3.png" alt="">
						</a>-->
					</div>
				</div>
				<!-- col end -->
			</div>
			<!-- row  end -->
		</div>
		<!-- container end -->
	</div>
	<!-- ad banner end-->

	<!-- card block start -->
	<section class="block-wrapper">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-30">
				<div class="col-lg-8 col-md-12">
					<h2 class="block-title">
						<span class="title-angle-shap"> #Espospedia / Info Grafis  </span>
					</h2>
						<div class="row text-light ts-gutter-30">
				          <?php $ep_loop = 1; ?>
				          <?php $breakingep = simplexml_load_file(''.$path_xml_breaking.'/breaking-espospedia.xml'); ?>
				          <?php foreach($breakingep->post as $posts) { if($ep_loop <=6): ?>							
						<div class="col-md-4">
							<div class="post-overaly-style post-sm" style="background-image:url(<?php echo $posts->images->thumbnail; ?>)">
								<a href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=headline_desktop" title="<?php echo $posts->title; ?>">&nbsp;</a>
								<div class="overlay-post-content">
									<div class="post-content">
										<div class="grid-category">
											<a class="post-cat espospedia>" href="https://www.solopos.com/espospedia"><?php echo $posts->title; ?></a>
										</div>
									</div>
								</div>
							</div><!-- post end -->
						</div><!-- end col -->
						<?php endif; $ep_loop++; } ?>
					</div><!-- end row -->
					
				</div><!-- Content Col end -->
				<div class="col-lg-4 col-md-12">
					<h2 class="block-title block-title-dark">
						<span class="title-angle-shap"> Sepakbola </span>
					</h2>
					<div class="list-post-block">
						<ul class="list-post">
				          <?php $kl_loop = 1; ?>
				          <?php $breakingkl = simplexml_load_file(''.$path_xml_breaking.'/breaking-bola.xml'); ?>
				          <?php foreach($breakingkl->post as $posts) { if($kl_loop <=4): ?>	
							<li>
								<div class="post-block-style media">
									<div class="post-thumb">
										<a href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=terpopular_desktop" title="<?php echo $posts->title; ?>">
											<img class="img-fluid" src="<?php echo $posts->images->thumbnail; ?>" alt="<?php echo $posts->title; ?>" style="object-fit: cover; object-position: center center; width: 130px; height: 96px;">
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
							<?php endif; $kl_loop++; } ?>
						</ul><!-- List post end -->
					</div>
				</div><!-- Sidebar Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- card block end -->
<?php get_footer(); ?>