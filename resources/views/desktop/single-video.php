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
		$video = $xml->posts->properties->post_url_video;
		$post_url = BASE_URL.'/'.$slug.'-'.$post_id;
	}

?>

<?php get_header(); ?>
	<div class="gap-30"></div>
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
						<li><a href="https://www.solopos.com/video">Video</a></li>
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
						<div class="post-media mb-20">
							<iframe id="ytplayer" type="text/html" width="640" height="360" src="https://www.youtube.com/embed/<?php echo $video;?>?autoplay=1&origin=https://solopos.com" frameborder="0"></iframe>
						</div>						
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
								<li><a href="#"><i class="fa fa-clock-o"></i><?php echo date_i18n('l, j F Y - H:i', strtotime($post_date)); ?> WIB</a></li>
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
				            <?php
			                $contents = explode('</p>', $content);
			                $total_p = count(array_filter($contents));
		                    // many paragraph
		                    $p_iklan_1  = array_slice($contents, 0, 5);
		                    //$first_p  = array_slice($contents, 2, 1);
		                    $p_iklan_2  = array_slice($contents, 5, 4);
		                    //$terkait = array_slice($contents, 2,6);
		                    $last_p  = array_slice($contents, 9);

		                    echo implode('</p>', $p_iklan_1);
		                        //iklan_1
		                        $ads_code = '<div class="iklan" align="center" style="margin-bottom: 30px;">
		                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		                                <ins class="adsbygoogle"
		                                    style="display:block; text-align:center;"
		                                    data-ad-layout="in-article"
		                                    data-ad-format="fluid"
		                                    data-ad-client="ca-pub-4969077794908710"
		                                    data-ad-slot="6460499125"></ins>
		                                <script>
		                                    (adsbygoogle = window.adsbygoogle || []).push({});
		                                </script>
		                                    </div>';
		                        $ads_code_ = '<div><img src="https://www.solopos.com/assets/ads/sukiyat.png"></div>';
		                        $ads_code__ = "<div align='center'><script async src='https://securepubads.g.doubleclick.net/tag/js/gpt.js'></script>
		                            <script>
		                            window.googletag = window.googletag || {cmd: []};
		                            googletag.cmd.push(function() {
										googletag.defineSlot('/54058497/Citilink-336x280-solopos', [336, 280], 'div-gpt-ad-1609687279966-0').addService(googletag.pubads());
										googletag.defineSlot('/54058497/Indaco_solopos_320x250', [320, 250], 'div-gpt-ad-1611654971776-0').addService(googletag.pubads());
		                                googletag.pubads().enableSingleRequest();
		                                googletag.enableServices();
		                            });
		                            </script>

									 <!-- /54058497/Indaco_solopos_320x250 -->
									<div id='div-gpt-ad-1611654971776-0' style='width: 320px; height: 250px;  margin-right: auto; margin-left: auto;'>
									  <script>
										googletag.cmd.push(function() { googletag.display('div-gpt-ad-1611654971776-0'); });
									  </script>
									</div>
									
									</div>
		                        ";
		                       
		                        echo $ads_code;
		                    ?>                    

		                    <?php
		                    if(findTag("properti", $tags) == 1 && date('Y-m-d H:i:s') <= '2021-03-28 17:00:00') { ?>
		                    <div class="flying_desktop">
		                        <div style="margin-top: 0;">
		                            <div class="clearfix">
		                                <link type="text/css" rel="stylesheet" href="<?php bloginfo('url');?>/assets/tema/mobile/css/ads-parallax.css">
		                                <div class="paralax-artikel">
		                                    <div class="paralax-ad">    
		                                    <div class="inner-paralax-ad">
		                                        <div class="img-paralax-ad" style="top: 50px !important; width: 336px;">
		                                            <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
		                                            <script>
		                                            window.googletag = window.googletag || {cmd: []};
		                                            googletag.cmd.push(function() {
		                                                googletag.defineSlot('/54058497/indaco-320x600', [320, 600], 'div-gpt-ad-1586579541415-0').addService(googletag.pubads());
		                                                googletag.pubads().enableSingleRequest();
		                                                googletag.enableServices();
		                                            });
		                                            </script>
		                                            <!-- /54058497/indaco-320x600 -->
		                                            <div id='div-gpt-ad-1586579541415-0' style='width: 336px; height: 600px;'>
		                                            <script>
		                                                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1586579541415-0'); });
		                                            </script>
		                                            </div>
		                                        </div>
		                                    </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <?php } else { ?>
		                    <?php if(date("Y-m-d") <= "2021-02-24") { ?>
		                    <div class="flying_desktop">
		                        <div style="margin-top: 0;">
		                            <div class="clearfix">
		                                <link type="text/css" rel="stylesheet" href="<?php bloginfo('url');?>/assets/tema/mobile/css/ads-parallax.css">
		                                <div class="paralax-artikel">
		                                    <div class="paralax-ad">    
		                                    <div class="inner-paralax-ad">
		                                        <div class="img-paralax-ad" style="top: 50px !important; width: 360px;">
		                                            <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
													<script>
													  window.googletag = window.googletag || {cmd: []};
													  googletag.cmd.push(function() {
														googletag.defineSlot('/54058497/mitsubishi-320x640', [320, 640], 'div-gpt-ad-1613551701010-0').addService(googletag.pubads());
														googletag.pubads().enableSingleRequest();
														googletag.enableServices();
													  });
													</script>
													<!-- /54058497/mitsubishi-320x640 -->
													<div id='div-gpt-ad-1613551701010-0' style='width: 360px; height: 640px; margin-right: auto; margin-left: auto;'>
													  <script>
														googletag.cmd.push(function() { googletag.display('div-gpt-ad-1613551701010-0'); });
													  </script>
													</div>
		                                        </div>
		                                    </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <?php } ?>
		                    <?php } ?>

		                    <?php                
		                    echo implode('</p>', $p_iklan_2);
		                        //iklan 2
		                        $ad_code_ = '<div class="iklan" align="center" style="margin-bottom: 30px;">
		                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		                                <ins class="adsbygoogle"
		                                    style="display:block; text-align:center;"
		                                    data-ad-layout="in-article"
		                                    data-ad-format="fluid"
		                                    data-ad-client="ca-pub-4969077794908710"
		                                    data-ad-slot="6460499125"></ins>
		                                <script>
		                                    (adsbygoogle = window.adsbygoogle || []).push({});
		                                </script>
		                                    </div>';

		                        $ad_code = '<a href="https://m.solopos.com/assets/ads/menu-dapur1.jpg" title="Menu Dapur Solopos" target="_blank"><img src="https://m.solopos.com/assets/ads/dapur-solopos.jpg"></a>';
								$ad_code_mitsubisi = '<div align="center"><script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
                                    <script>
                                    window.googletag = window.googletag || {cmd: []};
                                    googletag.cmd.push(function() {
										googletag.defineSlot("/54058497/KPU-GROBOGAN-320*320", [320, 320], "div-gpt-ad-1597305624375-0").addService(googletag.pubads());
										googletag.defineSlot("/54058497/unwidha-300x250", [300, 250], "div-gpt-ad-1597722570303-0").addService(googletag.pubads());
										googletag.defineSlot("/54058497/mitsubishi300x300", [300, 300], "div-gpt-ad-1615799713032-0").addService(googletag.pubads());
                                        googletag.pubads().enableSingleRequest();
                                        googletag.enableServices();
                                    });
                                    </script>
                                    <!-- /54058497/mitsubishi300x300 -->
									<div id="div-gpt-ad-1615799713032-0" style="width: 300px; height: 300px; margin-right: auto; margin-left: auto;">
									  <script>
										googletag.cmd.push(function() { googletag.display("div-gpt-ad-1615799713032-0"); });
									  </script>
									</div>
									</div>';
								 $ads_kemenpora = "<div align='center'><script async src='https://securepubads.g.doubleclick.net/tag/js/gpt.js'></script>
		                            <script>
		                            window.googletag = window.googletag || {cmd: []};
		                            googletag.cmd.push(function() {
		                            googletag.defineSlot('/54058497/dscxi-solopos-mobile-300x250', [300, 250], 'div-gpt-ad-1597939432127-0').addService(googletag.pubads());
										googletag.defineSlot('/54058497/Citilink-336x280-solopos', [336, 280], 'div-gpt-ad-1609687279966-0').addService(googletag.pubads());
										googletag.defineSlot('/54058497/mitsubishi300x300', [300, 300], 'div-gpt-ad-1615799713032-0').addService(googletag.pubads());
		                                googletag.pubads().enableSingleRequest();
		                                googletag.enableServices();
		                            });
		                            </script>
									<!-- /54058497/mitsubishi300x300 -->
										<div id='div-gpt-ad-1615799713032-0' style='width: 300px; height: 300px; margin-right: auto; margin-left: auto;'>
										<script>
											googletag.cmd.push(function() { googletag.display('div-gpt-ad-1615799713032-0'); });
										</script>
										</div>
										</div>
		                        ";
		                        echo $ad_code_;
		                    echo implode('</p>',$last_p) ;                   
		            ?>           

            			<?php //include (TEMPLATEPATH . '/ads/ads-detail-1.php'); ?>
							
						</div><!-- post-content-area end -->
						<div style="margin: 20px 0;">
                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <ins class="adsbygoogle"
                                    style="display:block; text-align:center;"
                                    data-ad-layout="in-article"
                                    data-ad-format="fluid"
                                    data-ad-client="ca-pub-4969077794908710"
									data-ad-slot="6460499125"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                        </div>

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
					                  <img src="<?php echo $avatar; ?>" alt="Profile" style="object-fit: cover; height: 125px; width: 125px;">
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
					<?php include (TEMPLATEPATH . '/ads/ads-under-articel.php'); ?>
					<div class="gap-50 d-none d-md-block"></div>

					<!-- realted post start -->
					<div class="related-post">
						<h2 class="block-title">
							<span class="title-angle-shap"> Berita Terkait </span>
						</h2>
						<div class="row">
				          <?php  //Menampilkan 5 buah judul berita terkait
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
				          <?php  while ($my_query->have_posts()) : $my_query->the_post(); ?> 

							<div class="col-md-4">
								<div class="post-block-style">
									<div class="post-thumb">
										<a class="post-title" href="<?php the_permalink(); ?>?utm_source=bacajuga_desktop" title="<?php the_title(); ?>">
											<img src="<?php echo get_the_post_thumbnail_url( null, 'mthumb' );?>" alt="<?php the_title(); ?>" style="object-fit: cover; width: 195px; height: 128px;">
										</a>
										<div class="grid-cat">
											<a class="post-cat <?php echo parent_category_slug(); ?>" href="https://m.solopos.com/<?php echo parent_category_slug(); ?>"><?php echo parent_category_slug(); ?></a>
										</div>
									</div>
									
									<div class="post-content">
										<h2 class="post-title">
											<a class="post-title" href="<?php the_permalink(); ?>?utm_source=bacajuga_desktop" title="<?php the_title(); ?>"><?php the_title(); ?></a>
										</h2>
										<div class="post-meta mb-7 p-0">
											
										</div>
									</div><!-- Post content end -->
								</div>
							</div><!-- col end -->	
				          <?php endwhile; ?>
				          <?php
				              }
				            }
				            $post = $backup;  // copy it back
				            wp_reset_query(); // to use the original query again
				          ?> 															
						</div><!-- row end -->
					</div>
					<!-- realted post end -->

					<div class="gap-50 d-none d-md-block"></div>

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
					
					<!-- Composite Start -->
					<div id="M628318ScriptRootC990853"></div>
					<script src="https://jsc.mgid.com/s/o/solopos.com.990853.js" async></script>
					<!-- Composite End  -->  
					
					<div class="gap-50 d-none d-md-block"></div>

					<!-- Begin Dable bottom_new / For inquiries, visit http://dable.io -->
                    <div id="dablewidget_x7y0b0o6" data-widget_id="x7y0b0o6">
                    <script>
                    (function(d,a,b,l,e,_) {
						if(d[b]&&d[b].q)return;d[b]=function(){(d[b].q=d[b].q||[]).push(arguments)};e=a.createElement(l);
						e.async=1;e.charset='utf-8';e.src='//static.dable.io/dist/plugin.min.js';
                         _=a.getElementsByTagName(l)[0];_.parentNode.insertBefore(e,_);
                        })(window,document,'dable','script');
                        dable('setService', 'solopos.com');
                        dable('sendLogOnce');
                        dable('renderWidget', 'dablewidget_x7y0b0o6');
                    </script>
                    </div>
                    <!-- End bottom_new / For inquiries, visit http://dable.io -->

					<div class="gap-50 d-none d-md-block"></div>
					
					<div>
						<h2 class="block-title">
							<span class="title-angle-shap"> Berita Terkini </span>
						</h2>
						<div class="row ts-gutter-20 loadmore-frame">
				          <?php $cat = get_the_category($post->ID);
				              $cat_parent = $cat[0]->category_parent;
				              if($cat_parent) { $cat = get_category($cat_parent);
				              $cat = $cat->slug; }
				              else { $cat = $cat[0]->slug; } 
				          ?>

				          <?php $no = 0; ?>
				          <?php $breaking = simplexml_load_file(''.$path_xml_breaking.'/breaking-'.$cat.'.xml'); ?>
				          <?php foreach($breaking->post as $posts) { ?>
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
					            <a href="javascript:void(0)" class="btn btn-primary btn-sm load-more" title="Kumpulan Berita">Cek Berita Lainnya</a>
					            <a href="https://m.solopos.com/arsip" class="btn btn-primary btn-sm load-more-arsip" style="display: none;" title="Kumpulan Berita">Arsip Berita</a>
							</div><!-- col end -->
						</div>	
					</div><!-- Content Col end -->					
				</div><!-- col-lg-8 -->

				<!-- sidebar start -->
				<?php get_sidebar(); ?>
				<!-- sidebar end -->
			</div><!-- row end -->
		</div><!-- container end -->
	</section><!-- category-layout end -->

<?php get_footer(); ?>

<?php get_footer(); ?>