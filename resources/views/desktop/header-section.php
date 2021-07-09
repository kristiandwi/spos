	<!-- Header start -->
	<header id="header" class="header">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-md-3 col-sm-12">
					<div class="header-nav">
						<a href="https://www.solopos.com/lawan-covid-19">Lawan Covid-19</a> | <a href="https://www.solopos.com/ubahlaku">Ubah Laku</a> <a href="https://www.solopos.com/espospedia">Espospedia</a> | <a href="https://www.solopos.com/cekfakta">Cek Fakta</a>
					</div>
				</div><!-- logo col end -->		

				<div class="col-md-6 col-sm-12">
                    <div class="logo">
                    	<?php if (in_array($cat_id, $datacat)) : ?>                    
                        <a href="<?php echo esc_url($cat_link); ?>"> 
                            <img src="<?php echo ASSETS_; ?>/images/logo-<?php echo $cat_slug; ?>.png" alt="Logo">
                        </a>                        
                    	<?php else: ?>
						<a href="<?php echo BASE_URL;?>">
							<img src="<?php echo ASSETS_; ?>/images/logo.png" alt="Logo">
						</a>
	                    <?php endif; ?>
                    </div>
				</div><!-- logo col end -->
				<div class="col-md-3 col-sm-12">
					<div style="text-align: center;">
						<div class="top-social">
							<ul class="social list-unstyled">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div><!-- logo col end -->

			</div><!-- Row end -->
		</div><!-- Logo and banner area end -->
	</header><!--/ Header end -->

	<div class="main-nav clearfix is-ts-sticky">
		<div class="container">
			<div class="row justify-content-between">
				<nav class="navbar navbar-expand-lg col-lg-12">
					<div class="site-nav-inner float-left">
					   	<!-- End of Navbar toggler -->
					   	<div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
							<ul class="nav navbar-nav">
								<li class="sticky">
			                    	<?php if (in_array($cat_id, $datacat)) : ?>                    
			                        <img src="<?php echo ASSETS_; ?>/images/logo-<?php echo $cat_slug; ?>.png" alt="Logo">
			                    	<?php else: ?>
										<img src="<?php echo ASSETS_; ?>/images/logo.png" alt="Logo">
				                    <?php endif; ?>
								</li>							
								<li><a href="<?php echo BASE_URL;?>"><i class="fa fa-home"></i></a></li>
								<li class="dropdown">
									<a href="#" onclick="window.location.href='<?php echo BASE_URL;?>news'" class="dropdown-toggle menu-dropdown" data-toggle="dropdown">News<i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li class="dropdown-submenu">
											<a href="<?php echo BASE_URL;?>news/pendidikan" class="menu-dropdown" data-toggle="dropdown">Pendidikan</a>
											<ul class="dropdown-menu">
												<li><a href="<?php echo BASE_URL;?>news/pendidikan/uns">UNS</a></li>
												<li><a href="<?php echo BASE_URL;?>uksw">UKSW</a></li>
											</ul>
										</li>										
										<li><a href="<?php echo BASE_URL;?>news/nasional">Nasional</a></li>
										<li><a href="<?php echo BASE_URL;?>news/internasional">Internasional</a></li>
									</ul>
								</li><!-- Features menu end -->									
								<li><a href="<?php echo BASE_URL;?>bisnis">Ekbis</a></li>
								<li class="dropdown">
									<a href="#" onclick="window.location.href='<?php echo BASE_URL;?>soloraya'" class="dropdown-toggle menu-dropdown" data-toggle="dropdown">Soloraya<i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="<?php echo BASE_URL;?>soloraya/solo">Solo</a></li>
										<li><a href="<?php echo BASE_URL;?>soloraya/sukoharjo">Sukoharjo</a></li>
										<li><a href="<?php echo BASE_URL;?>soloraya/karanganyar">Karanganyar</a></li>
										<li><a href="<?php echo BASE_URL;?>soloraya/sragen">Sragen</a></li>
										<li><a href="<?php echo BASE_URL;?>soloraya/wonogiri">Wonogiri</a></li>
										<li><a href="<?php echo BASE_URL;?>soloraya/klaten">Klaten</a></li>
										<li><a href="<?php echo BASE_URL;?>soloraya/boyolali">Boyolali</a></li>
									</ul>
								</li><!-- Features menu end -->	
								<li class="dropdown">
									<a href="#" onclick="window.location.href='<?php echo BASE_URL;?>sport'" class="dropdown-toggle menu-dropdown" data-toggle="dropdown">Sport<i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="<?php echo BASE_URL;?>sport/bola">Bola</a></li>
										<li><a href="<?php echo BASE_URL;?>sport/arena">Arena</a></li>
									</ul>
								</li><!-- Features menu end -->	
								<li class="dropdown">
									<a href="#" onclick="window.location.href='<?php echo BASE_URL;?>lifestyle'" class="dropdown-toggle menu-dropdown" data-toggle="dropdown">Lifestyle<i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="<?php echo BASE_URL;?>lifestyle/leisure">Leisure</a></li>
										<li><a href="<?php echo BASE_URL;?>lifestyle/viral">Viral</a></li>
									</ul>
								</li><!-- Features menu end -->	
								<li class="dropdown">
									<a href="#" class="dropdown-toggle menu-dropdown" data-toggle="dropdown">Regional<i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li class="dropdown-submenu">
											<a href="#" onclick="window.location.href='<?php echo BASE_URL;?>jateng'" class="menu-dropdown" data-toggle="dropdown">Jateng</a>
											<ul class="dropdown-menu">
												<li><a href="<?php echo BASE_URL;?>jateng/semarang">Semarang</a></li>
												<li><a href="<?php echo BASE_URL;?>jateng/magelang">Magelang</a></li>
												<li><a href="<?php echo BASE_URL;?>jateng/kudus">Kudus</a></li>
												<li><a href="<?php echo BASE_URL;?>jateng/grobogan">Grobogan</a></li>
												<li><a href="<?php echo BASE_URL;?>jateng/pemalang">Pemalang</a></li>
												<li><a href="<?php echo BASE_URL;?>jateng/salatiga">Salatiga</a></li>
												<li><a href="<?php echo BASE_URL;?>jateng/blora">blora</a></li>
												<li><a href="<?php echo BASE_URL;?>jateng/pati">Pati</a></li>
												<li><a href="<?php echo BASE_URL;?>jateng/banyumas">Banyumas</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#" onclick="window.location.href='<?php echo BASE_URL;?>jogja'" class="menu-dropdown" data-toggle="dropdown">Jogja</a>
											<ul class="dropdown-menu">
												<li><a href="<?php echo BASE_URL;?>jogja/bantul">Bantul</a></li>
												<li><a href="<?php echo BASE_URL;?>jogja/gunungkidul">Gunung Kidul</a></li>
												<li><a href="<?php echo BASE_URL;?>jogja/kota-jogja">Kota Jogja</a></li>
												<li><a href="<?php echo BASE_URL;?>jogja/kulonprogo">Kulon Progo</a></li>
												<li><a href="<?php echo BASE_URL;?>jogja/sleman">Sleman</a></li>
											</ul>
										</li>
										<li><a href="<?php echo BASE_URL;?>jatim">Jatim</a></li>
									</ul>
								</li><!-- Features menu end -->	
								<li><a href="<?php echo BASE_URL;?>otomotif">Otomotif</a></li>
								<li><a href="<?php echo BASE_URL;?>teknologi">Teknologi</a></li>
								<li class="dropdown">
									<a href="#" onclick="window.location.href='<?php echo BASE_URL;?>entertainment'" class="dropdown-toggle menu-dropdown" data-toggle="dropdown">Entertainment<i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="<?php echo BASE_URL;?>entertainment/artis">Artis</a></li>
										<li><a href="<?php echo BASE_URL;?>entertainment/hiburan">Hiburan</a></li>
									</ul>
								</li><!-- Features menu end -->	
								<li><a href="<?php echo BASE_URL;?>premium">Premium</a></li>
								<li><a href="<?php echo BASE_URL;?>arsip">Indeks</a></li>
								<!--<li class="dropdown">
									<a href="#" class="dropdown-toggle menu-dropdown" data-toggle="dropdown">Ragam<i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="<?php echo BASE_URL;?>">Lowongan Kerja</a></li>
										<li><a href="<?php echo BASE_URL;?>">Titip Jual</a></li>
									</ul>
								</li> 
								<li class="dropdown">
									<a href="#" class="dropdown-toggle menu-dropdown" data-toggle="dropdown">Rehat<i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="<?php echo BASE_URL;?>">Fiksi</a></li>
										<li><a href="<?php echo BASE_URL;?>">Jagad Jawa</a></li>
										<li><a href="<?php echo BASE_URL;?>">Kolom</a></li>
									</ul>
								</li>
								Features menu end -->									

							</ul><!--/ Nav ul end -->
						</div><!--/ Collapse end -->
					</div><!-- Site Navbar inner end -->
					<div class="text-right" style="min-width: 65px; ">
						<ul class="nav navbar-nav" style="float: left;">				
							<li class="dropdown mega-dropdown">
								<a style="font-size:18px;" href="#" class="dropdown-toggle menu-dropdown" data-toggle="dropdown"><i class="icon icon-menu"></i></a>
								<ul class="dropdown-menu" role="menu">
								<!-- responsive dropdown end -->
								<div class="ts-footer">
									<div class="container">
										<div class="row ts-gutter-30 justify-content-lg-between justify-content-center">
											<div class="col-lg-7 col-md-7">
												<div class="footer-widget">
													<div class="footer-logo">
														<img src="<?php echo ASSETS_; ?>/images/logo.png" alt="Footer Logo">
													</div>
													<div class="widget-content">
														<ul class="ts-footer-nav">
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="<?php echo BASE_URL;?>page/kontak">KONTAK</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="<?php echo BASE_URL;?>page/copyright">COPYRIGHT</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="<?php echo BASE_URL;?>writing-contest">WRITING CONTEST</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="<?php echo BASE_URL;?>page/about-us">REDAKSI</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="<?php echo BASE_URL;?>page/about-us">TENTANG KAMI</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="<?php echo BASE_URL;?>video">VIDEO</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="<?php echo BASE_URL;?>loker">KARIR</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="<?php echo BASE_URL;?>page/kode-etik">KODE ETIK</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="<?php echo BASE_URL;?>cekfakta">CEK FAKTA</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="<?php echo BASE_URL;?>page/privacy-policy">PRIVACY POLICY</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="<?php echo BASE_URL;?>page/code-of-conduct">PEDOMAN MEDIA SIBER</a></li>
														</ul>
													</div>
												</div>
											</div><!-- col end -->
											<div class="col-lg-5 col-md-5">
												<div class="footer-widtet post-widget">
													<h3 class="widget-title"><span>Jaringan</span></h3>
													<div class="widget-content">

														<ul class="ts-footer-nav">
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="https://bisnis.com">BISNIS.COM</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="https://rumah190.com">RUMAH190.COM</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="https://griya190.com">GRIYA190.COM</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="https://iklan.solopos.com">IKLAN</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="https://semarangpos.com">SEMARANGPOS.COM</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="https://madiunpos.com">MADIUNPOS.COM</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="https://jeda.id">JEDA.ID</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="https://harianjogja.com">HARIANJOGJA.COM</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="https://pasangbaliho.com">PASANGBALIHO.COM</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="https://tokosolopos.com">TOKO</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="https://ibukotakita.com">IBUKOTAKITA.COM</a></li>
														</ul>							

													</div>
												</div>
											</div><!-- col end -->
										</div><!-- row end -->
									</div><!-- container end -->
								</div>										
								</ul><!-- End dropdown -->
							</li><!-- Features menu end -->
						</ul><!--/ Nav ul end -->
						<div class="nav-search">
							<a href="#search-popup" class="xs-modal-popup">
								<i class="icon icon-search1"></i>
							</a>
						</div>
						<div class="zoom-anim-dialog mfp-hide modal-searchPanel ts-search-form" id="search-popup">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="xs-search-panel">
										<form action="<?php bloginfo('url');?>" method="get" class="ts-search-group">
											<div class="input-group">
												<input type="search" class="form-control" name="s" placeholder="Search" value="">
												<button class="input-group-btn search-button">
													<i class="icon icon-search1"></i>
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>						
					</div>					
				</nav><!--/ Navigation end -->
				
			</div><!--/ Row end -->
		</div><!--/ Container end -->	
		<div class="trending-bar trending-light d-md-block">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-md-9 text-center text-md-left">
						<p class="trending-title"><i class="tsicon fa fa-bolt"></i> STORY </p>
						<div id="trending-slide" class="owl-carousel owl-theme trending-slide">
					    <?php 
					      $no = 1;
					      $arg=array(
					              //'cat' => $listcat->term_id,
					              'post_type' => 'post',
					              'meta_key'  => 'post_feature',
					              'meta_value' => 'story',
					              'post_status' => 'publish',
					              'posts_per_page' => 7,
					            );
					            
					      $my_query = new WP_Query($arg);
					      if( $my_query->have_posts() ) :
					      while ($my_query->have_posts()) : $my_query->the_post(); ?>							
							<div class="item">
							   <div class="post-content">
							      <h2 class="post-title title-small">
							         <a href="<?php  the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							      </h2>
							   </div>
							</div>
					      <?php endwhile; endif; wp_reset_query(); ?>							
						</div>
					</div><!-- Col end -->
					<div class="col-md-3 text-md-right text-center">
						<div class="ts-date">
							<i class="fa fa-calendar-check-o"></i><?php echo date("j F Y");?>
						</div>
					</div><!-- Col end -->
				</div><!--/ Row end -->
			</div><!--/ Container end -->
		</div><!--/ Trending end -->			
	</div><!-- Menu wrapper end -->
	<?php include(TEMPLATEPATH.'/ads/ads-floating.php'); ?>
	<div class="gap-50"></div>
	<?php //include(TEMPLATEPATH.'/ads/ads-top-leaderboard.php'); ?>
