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
							<a href="https://cmsx.solopos.com/"><i class="fa fa-home"></i></a>
							<i class="fa fa-angle-right"></i>
						</li>

						<li style="text-transform: capitalize;">
						Author
						</li>
					</ol>		
				</div>
			</div><!-- row end -->
		</div><!-- container end -->
	</div>
	<!-- breadcrumb end -->

    <?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>        
    <?php $avatar_url = get_avatar_url($curauth->ID, array("size"=>150)); ?> 

	<section class="main-content pt-0">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-30">
				<div class="col-lg-8">

					<div class="row">
						<div class="col-12">
							<div class="author-box d-flex mt-0">
								<div class="author-img flex-grow-1">
									<img src="<?php echo $avatar_url; ?>" alt="<?php echo $curauth->display_name; ?>">
								</div>
								<div class="author-info">
									<h3><?php echo $curauth->display_name; ?></h3>
									<div class="author-counter pull-right d-none d-md-block">
										<span>Tulisan</span>
										<span>Komentar</span>
									</div>
									<p class="author-url">
										<a href="#"><?php echo $curauth->user_email; ?></a>
									</p>
									<?php if ($curauth->user_description == '') { ?>
										<p>Jurnalis di Solopos Group. Menulis konten di Solopos Group yaitu Harian Umum Solopos, Koran Solo, Solopos.com.</p>
									<?php } else { ?>
										<p><?php echo $curauth->user_description; ?></p>
									<?php } ?>
									<div class="author-social">
										<span>Follow Me: </span>
										<a href="<?php echo $curauth->twitter; ?>"><i class="fa fa-twitter"></i></a>
										<a href="<?php echo $curauth->facebook; ?>"><i class="fa fa-facebook"></i></a>
										<a href="<?php echo $curauth->instagram; ?>"><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
									</div>
								</div>
							</div><!-- author box end -->
						</div><!-- col end -->
					</div><!-- row end -->
					<div class="gap-50"></div>

					<h2 class="block-title">
						<span class="title-angle-shap"> Daftar Tulisan <em><?php echo $curauth->display_name; ?></em> </span>
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
											<a class="post-cat-box <?php echo parent_category_slug(); ?>" href="https://cmsx.solopos.com/<?php echo parent_category_slug(); ?>"><?php echo parent_category_slug(); ?></a>
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