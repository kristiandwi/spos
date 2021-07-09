<?php
/*
Template Name: Premium Konten
*/
get_header(); ?>	
	<?php $path_xml_breaking = $_SERVER["DOCUMENT_ROOT"] . '/xml-data/breaking/'; ?>
	<section class="featured-post-area no-padding">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-20">
				<div class="col-lg-8 col-md-12 pad-r">
					<div class="owl-carousel owl-theme featured-slider h2-feature-slider">					
		            <?php $hl_loop = 1;//while (have_posts()) : the_post(); ?>
		            <?php $breaking = simplexml_load_file(''.$path_xml_breaking.'/breaking-premium.xml');
		            foreach($breaking->post as $posts) { if($hl_loop <= 5):  ?>
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
                    <?php endif; $hl_loop++; } ?>           
					</div>
				</div><!-- Col 8 end -->
	            <?php $pc_loop = 1; ?>
	            <?php $breakingpc = simplexml_load_file(''.$path_xml_breaking.'/breaking-premium.xml'); ?>
	            <?php foreach($breakingpc->post as $posts) { if($pc_loop <= 1): ?>
				<div class="col-lg-4 col-md-12">
					<div class="post-overaly-style post-md" style="background-image:url(<?php echo $posts->images->thumbnail; ?>)">
						<div class="featured-post">
							<a class="image-link" href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=premium_desktop" title="<?php echo $posts->title; ?>">&nbsp;</a>
							<div class="overlay-post-content">
								<div class="post-content">
									<div class="grid-category">
									<a class="post-cat premium" href="https://www.solopos.com/premium">Espos Premium</a>
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
				<?php endif; $pc_loop++; } ?>
				

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Feature post end -->	
	
	<div class="gap-50"></div>
	
	<section class="main-content pt-0">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-30">			
				<div class="col-lg-8 col-md-12 pad-r">

					<!-- Block Konten Premium -->
					<div class="block style2 text-light mb-20 mt-10">
						<h2 class="block-title">
							<span class="title-angle-shap"> Espos Premium</span>
						</h2>

						<div class="row">
				            <?php $pc_loop = 1; ?>
				            <?php $breakingpc = simplexml_load_file(''.$path_xml_breaking.'/breaking-premium.xml'); ?>
				            <?php foreach($breakingpc->post as $posts) { if($pc_loop <= 5): ?>

				            <?php if($pc_loop==1) : ?>
							<div class="col-lg-6 col-md-6">
								<div class="post-block-style">
									<div class="post-thumb">
										<a href="https://www.solopos.com/<?php echo $posts->slug; ?>-<?php echo $posts->id; ?>?utm_source=premium_desktop" title="<?php echo $posts->title; ?>">
											<img src="<?php echo $posts->images->thumbnail; ?>" alt="<?php echo $posts->title; ?>" style="object-fit: cover; object-position: center; width: 266px; height: 178px;">
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
					</div><!-- Block Konten Premium end -->	

					<h2 class="block-title">
						<span class="title-angle-shap"> News Feed Premium </span>
					</h2>
					<div class="row ts-gutter-20 loadmore-frame">
			          <?php $no=1; ?>
			          <?php $breaking = simplexml_load_file(''.$path_xml_breaking.'/breaking-premium.xml'); ?>
			          <?php foreach($breaking->post as $posts) { ?>

			          <?php if ($no==3) { ?>       
			          <?php include (TEMPLATEPATH . '/ads/ads-advertorial.php'); ?>
			          <?php //feed_jeda('https://jeda.id/feed'); ?> 
			          <?php } ?>
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
					
				</div><!-- col-lg-8 -->

				<!-- sidebar start -->
				<?php include (TEMPLATEPATH . '/sidebar-premium.php'); ?>
				<!-- sidebar end -->
			</div><!-- row end -->
		</div><!-- container end -->
	</section><!-- category-layout end -->

<?php get_footer(); ?>