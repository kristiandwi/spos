<?php get_header(); ?>	
	<?php $path_xml_breaking = $path_xml_breaking = $_SERVER["DOCUMENT_ROOT"] . '/xml-data/breaking/'; ?>
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
						<li><a href="https://www.solopos.com/<?php echo parent_category_slug(); ?>"><?php echo parent_category_slug(); ?></a></li>
						<li><i class="fa fa-angle-right"></i><?php the_title(); ?></li>
					</ol>		
				</div>
			</div><!-- row end -->
		</div><!-- container end -->
	</div>
	<!-- breadcrumb end -->
	<!-- mfunc setPostViews(get_the_ID()); --><?php setPostViews((string)$post_id); ?> <!--/mfunc-->
	<section class="main-content pt-0">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-30">
				<div class="col-lg-8">
					<div class="single-post">
						<div class="post-header-area">
							<h1 class="post-title title-lg"><?php echo $title;?></h1>
							<p><?php echo stripslashes($summary); ?></p>
							<ul class="post-meta">
								<li>
									<a class="post-cat <?php echo parent_category_slug(); ?>" href="<?php echo BASE_URL;?><?php echo parent_category_slug(); ?>"><?php echo parent_category_slug(); ?></a>
								</li>
								<li class="post-author">
									<a href="#"><strong><?php echo $author; ?></strong></a>
								</li>
								<li><a href="#"><i class="fa fa-clock-o"></i><?php echo date_i18n('l, j/m/Y - H:i', strtotime($post_date)); ?> WIB</a></li>
								<li><a href="#"><i class="fa fa-eye"></i><?php echo reading_time(); ?></a></li>
								<li class="social-share">
									<i class="shareicon fa fa-share"></i>
									<ul class="social-list">
										<li><a data-social="facebook" class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink;?>" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a></li>
										<li><a data-social="twitter" class="twitter" href="https://twitter.com/home?status=<?php echo $permalink;?>" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a></li>
										<li><a data-social="whatsapp" class="whatsapp" href="whatsapp://send?text=*<?php echo $title;//echo clean_char($title); ?>* | <?php echo $summary; ?> |  _selengkapnya baca di sini_ <?php echo $permalink;?>"><i class="fa fa-whatsapp"></i></a></li>
										<li><a data-social="email" class="email" href="mailto:?subject=Artikel Menarik dari Solopos.com tentang <?php echo $title;?>&amp;body=Artikel ini sangat berguna bagi Anda, silahkan klik link berikut ini <?php echo $permalink;?>"><i class="fa fa-envelope"></i></a></li>
									</ul>
								</li>
							</ul>
						</div><!-- post-header-area end -->
						<div class="post-content-area">
							<div class="post-media mb-20">
								<a href="<?php echo $image_content ?>" class="gallery-popup cboxElement">
									<img src="<?php echo $image_content ?>" alt="<?php echo $title;?>" class="img-fluid">
								</a>
								<span><p>SOLOPOS.COM - <?php echo $image_caption; ?></p></span>
							</div>
					          <div id="promosi">
					              <?php echo $summary; ?>
					              <div class="alert alert-info alert-dismissable" style="display: inline-block;">              
					                  <div class="col-md-12 col-md-offset-2">
					                      <div class="page--title mt-20 text-center">
					                          <img src="https://solopos.com/files/tema/desktop/images/premium.png" height="50%" width="50%">
											  <div class="gap-20"></div>
					                          <div class="content">
					                              <p>Klik tombol Baca Selengkapnya untuk membaca Espos Premium. Konten Espos Premium merupakan layanan khusus dari Solopos.com yang lebih relevan dan memiliki diferensiasi dibandingkan free content. Selamat menikmati Espos Premium!</p>
					                          </div>
					                          <div class="action">
					                              <button id="button" href="#" class="btn btn-primary">Baca Selengkapnya</button>
					                          </div>
					                      </div>
					                  </div> 
					              </div>                                            
					          </div>
					          <div id="konten-premium" class="premium" style="display: none">
					              <?php echo $content; ?>
					          </div>
						</div><!-- post-content-area end -->
						<style type="text/css">
						.premium {
						    -webkit-animation: fadein 4s; /* Safari, Chrome and Opera > 12.1 */
						       -moz-animation: fadein 4s; /* Firefox < 16 */
						        -ms-animation: fadein 4s; /* Internet Explorer */
						         -o-animation: fadein 4s; /* Opera < 12.1 */
						            animation: fadein 4s;
						}

						@keyframes fadein {
						    from { opacity: 0; }
						    to   { opacity: 1; }
						}

						/* Firefox < 16 */
						@-moz-keyframes fadein {
						    from { opacity: 0; }
						    to   { opacity: 1; }
						}

						/* Safari, Chrome and Opera > 12.1 */
						@-webkit-keyframes fadein {
						    from { opacity: 0; }
						    to   { opacity: 1; }
						}

						/* Internet Explorer */
						@-ms-keyframes fadein {
						    from { opacity: 0; }
						    to   { opacity: 1; }
						}

						/* Opera < 12.1 */
						@-o-keyframes fadein {
						    from { opacity: 0; }
						    to   { opacity: 1; }
						}	
						</style>
						
				        <div class="container social-share-btn d-flex align-items-center flex-wrap">
				          SHARE : 
				          <a class="btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink;?>" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a>
				          <a class="btn-twitter" href="https://twitter.com/home?status=<?php echo $permalink;?>" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a>
				          <a class="btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
				          <a class="btn-whatsapp" href="whatsapp://send?text=*<?php echo clean_char($title);//echo clean_char($title); ?>* | <?php echo $summary; ?> |  _selengkapnya baca di sini_ <?php echo $permalink;?>"><i class="fa fa-whatsapp"></i></a>
				          <a class="btn-quora" href="mailto:?subject=Artikel Menarik dari Solopos.com tentang <?php echo $title;?>&amp;body=Artikel ini sangat berguna bagi Anda, silahkan klik link berikut ini <?php echo $permalink;?>"><i class="fa fa-envelope"></i></a>
				        </div> 

						<div class="post-footer">
							
							<div class="author-box d-flex">
								<div class="author-img">
					              <?php if($avatar !== ''): ?>
					                  <img src="<?php echo $avatar; ?>" alt="Profile">
					              <?php else: ?>
					                  <img src="<?php echo ASSETS_MOBILE; ?>img/bg-img/3.jpg" alt="Profile">
					              <?php endif; ?> 									
								</div>
					            <?php  
					              $url = 'user_login';
					              $fb = 'facebook';
					              $ig = 'instagram';
					              $tw = 'twitter';
					              $authordesc = get_the_author_meta( 'description' );
					            ?>   									
								<div class="author-info">
									<h3><a href="https://www.solopos.com/author/<?php the_author_meta($url); ?>" target="_blank"><?php echo $editor; ?></a></h3>									
									<?php if ($authordesc == '') { ?>
									<p>Jurnalis di Solopos Group. Menulis konten di Solopos Group yaitu Harian Umum Solopos, Koran Solo, Solopos.com.</p>
									<?php } else { ?>
									<p><?php echo wpautop( $authordesc ); ?></p>
									<?php } ?>
						            <div class="post-list">
						               <a href="https://www.solopos.com/author/<?php the_author_meta($url); ?>" target="_blank">Lihat Artikel Saya Lainnya</a>
						            </div>									
									<div class="author-social">
										<span>Follow Me: </span>
						                <a href="<?php the_author_meta($tw); ?>"><i class="fa fa-twitter"></i></a>
						                <a href="<?php the_author_meta($fb); ?>"><i class="fa fa-facebook"></i></a>
						                <a href="<?php the_author_meta($ig); ?>"><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
									</div>									
								</div>
							</div><!-- author box -->
							<div class="gap-30"></div>	
							<div class="tag-lists">
								<span>Tags: </span>
				                <?php 
				                if(isset($tags)) {
				                    foreach($tags as $tag) {
				                        $tag_name = $tag;
				                        $tag_slug = str_replace(' ', '-',$tag) ;
				                        echo '<a href="https://www.solopos.com/tag/'.$tag_slug.'">#'.$tag_name.'</a> ';
				                    }
				                } ?> 
							</div><!-- tag lists -->											
						</div>
						
					</div><!-- single-post end -->

					<div class="gap-30"></div>

					<div class="row">
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
					</div><!-- row end -->
					<!-- realted post end -->

					<div class="gap-30 d-none d-md-block"></div>

					<div class="gap-50 d-none d-md-block"></div>
					<div>
						<h2 class="block-title">
							<span class="title-angle-shap"> Fokus </span>
						</h2>
						<div class="row ts-gutter-20 loadmore-frame">
				          <?php $no = 0; ?>
				          <?php $breakingec = simplexml_load_file(''.$path_xml_breaking.'/breaking-editor-choice.xml'); ?>
				          <?php foreach($breakingec->post as $posts) { ?>
				          <?php $no++ ?>							
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
					            <a href="javascript:void(0)" class="btn btn-primary btn-sm load-more" title="Kumpulan Berita">Espos Premium Lainnya</a>
					            <a href="https://m.solopos.com/arsip" class="btn btn-primary btn-sm load-more-arsip" style="display: none;" title="Kumpulan Berita">Arsip Berita</a>
							</div><!-- col end -->
						</div>	
					</div><!-- Content Col end -->					
				</div><!-- col-lg-8 -->

				<!-- sidebar start -->
				<?php include (TEMPLATEPATH . '/sidebar-premium.php'); ?>
				<!-- sidebar end -->
			</div><!-- row end -->
		</div><!-- container end -->
	</section><!-- category-layout end -->

<?php get_footer(); ?>