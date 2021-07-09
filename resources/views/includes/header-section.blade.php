	<!-- Header start -->
	<header id="header" class="header">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-md-3 col-sm-12">
					<div class="header-nav">
						<a href="{{ url('/lawan-covid-19') }}">Lawan Covid-19</a> | <a href="{{ url('/ubahlaku') }}">Ubah Laku</a> <a href="{{ url('/espospedia') }}">Espospedia</a> | <a href="{{ url('/cekfakta') }}">Cek Fakta</a>
					</div>
				</div><!-- logo col end -->		

				<div class="col-md-6 col-sm-12">
                    <div class="logo">
                    	                 
                        {{-- <a href=""> 
                            <img src="/images/logo-.png" alt="Logo">
                        </a>                         --}}
                    	
						<a href="{{ url('/') }}">
							<img src="{{ asset('/images/logo.png') }}" alt="Logo">
						</a>
	                    
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
			                    	                   
			                        {{-- <img src="/images/logo-.png" alt="Logo"> --}}
			                    	
									<img src="{{ asset('/images/logo.png') }}" alt="Logo">
				                    
								</li>							
								<li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
								<li class="dropdown">
									<a href="#" onclick="window.location.href='{{ url('/new') }}'" class="dropdown-toggle menu-dropdown" data-toggle="dropdown">News<i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li class="dropdown-submenu">
											<a href="{{ url('news/pendidikan') }}" class="menu-dropdown" data-toggle="dropdown">Pendidikan</a>
											<ul class="dropdown-menu">
												<li><a href="{{ url('/news/pendidikan/uns') }}">UNS</a></li>
												<li><a href="{{ url('uksw') }}">UKSW</a></li>
											</ul>
										</li>										
										<li><a href="{{ url('/news/nasional') }}">Nasional</a></li>
										<li><a href="{{ url('/news/internasional') }}">Internasional</a></li>
									</ul>
								</li><!-- Features menu end -->									
								<li><a href="{{ url('/bisnis') }}">Ekbis</a></li>
								<li class="dropdown">
									<a href="#" onclick="window.location.href='soloraya'" class="dropdown-toggle menu-dropdown" data-toggle="dropdown">Soloraya<i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="{{ url('/soloraya/solo') }}">Solo</a></li>
										<li><a href="{{ url('/soloraya/sukoharjo') }}">Sukoharjo</a></li>
										<li><a href="{{ url('/soloraya/karanganyar') }}">Karanganyar</a></li>
										<li><a href="{{ url('/soloraya/sragen') }}">Sragen</a></li>
										<li><a href="{{ url('/soloraya/wonogiri') }}">Wonogiri</a></li>
										<li><a href="{{ url('/soloraya/klaten') }}">Klaten</a></li>
										<li><a href="{{ url('/soloraya/boyolali') }}">Boyolali</a></li>
									</ul>
								</li><!-- Features menu end -->	
								<li class="dropdown">
									<a href="#" onclick="window.location.href='sport'" class="dropdown-toggle menu-dropdown" data-toggle="dropdown">Sport<i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="{{ url('/sport/bola') }}">Bola</a></li>
										<li><a href="{{ url('/sport/arena') }}">Arena</a></li>
									</ul>
								</li><!-- Features menu end -->	
								<li class="dropdown">
									<a href="#" onclick="window.location.href='lifestyle'" class="dropdown-toggle menu-dropdown" data-toggle="dropdown">Lifestyle<i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="{{ ('/lifestyle/leisure') }}">Leisure</a></li>
										<li><a href="{{ ('/lifestyle/viral') }}">Viral</a></li>
									</ul>
								</li><!-- Features menu end -->	
								<li class="dropdown">
									<a href="#" class="dropdown-toggle menu-dropdown" data-toggle="dropdown">Regional<i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li class="dropdown-submenu">
											<a href="#" onclick="window.location.href='jateng'" class="menu-dropdown" data-toggle="dropdown">Jateng</a>
											<ul class="dropdown-menu">
												<li><a href="{{ url('/jateng/semarang') }}">Semarang</a></li>
												<li><a href="{{ url('/jateng/magelang') }}">Magelang</a></li>
												<li><a href="{{ url('/jateng/kudus') }}">Kudus</a></li>
												<li><a href="{{ url('/jateng/grobogan') }}">Grobogan</a></li>
												<li><a href="{{ url('/jateng/pemalang') }}">Pemalang</a></li>
												<li><a href="{{ url('/jateng/salatiga') }}">Salatiga</a></li>
												<li><a href="{{ url('/jateng/blora') }}">blora</a></li>
												<li><a href="{{ url('/jateng/pati') }}">Pati</a></li>
												<li><a href="{{ url('/jateng/banyumas') }}">Banyumas</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#" onclick="window.location.href='jogja'" class="menu-dropdown" data-toggle="dropdown">Jogja</a>
											<ul class="dropdown-menu">
												<li><a href="{{ url('jogja/bantul') }}">Bantul</a></li>
												<li><a href="{{ url('jogja/gunungkidul') }}">Gunung Kidul</a></li>
												<li><a href="{{ url('jogja/kota-jogja') }}">Kota Jogja</a></li>
												<li><a href="{{ url('jogja/kulonprogo') }}">Kulon Progo</a></li>
												<li><a href="{{ url('jogja/sleman') }}">Sleman</a></li>
											</ul>
										</li>
										<li><a href="{{ url('/jatim') }}">Jatim</a></li>
									</ul>
								</li><!-- Features menu end -->	
								<li><a href="{{ url('/otomotif') }}">Otomotif</a></li>
								<li><a href="{{ url('/teknologi') }}">Teknologi</a></li>
								<li class="dropdown">
									<a href="#" onclick="window.location.href='entertainment'" class="dropdown-toggle menu-dropdown" data-toggle="dropdown">Entertainment<i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="{{ url('/entertainment/artis') }}">Artis</a></li>
										<li><a href="{{ url('/entertainment/hiburan') }}">Hiburan</a></li>
									</ul>
								</li><!-- Features menu end -->	
								<li><a href="{{ url('/premium') }}">Premium</a></li>
								<li><a href="arsip">Indeks</a></li>
								<!--<li class="dropdown">
									<a href="#" class="dropdown-toggle menu-dropdown" data-toggle="dropdown">Ragam<i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="">Lowongan Kerja</a></li>
										<li><a href="">Titip Jual</a></li>
									</ul>
								</li> 
								<li class="dropdown">
									<a href="#" class="dropdown-toggle menu-dropdown" data-toggle="dropdown">Rehat<i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="">Fiksi</a></li>
										<li><a href="">Jagad Jawa</a></li>
										<li><a href="">Kolom</a></li>
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
														<img src="{{ asset('/images/logo.png') }}" alt="Footer Logo">
													</div>
													<div class="widget-content">
														<ul class="ts-footer-nav">
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="page/kontak">KONTAK</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="page/copyright">COPYRIGHT</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="writing-contest">WRITING CONTEST</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="page/about-us">REDAKSI</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="page/about-us">TENTANG KAMI</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="video">VIDEO</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="loker">KARIR</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="page/kode-etik">KODE ETIK</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="cekfakta">CEK FAKTA</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="page/privacy-policy">PRIVACY POLICY</a></li>
															<li class="ts-footer-nav-item"><a class="ts-footer-nav-item-link" href="page/code-of-conduct">PEDOMAN MEDIA SIBER</a></li>
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
										<form action="{{ url('/') }}" method="get" class="ts-search-group">
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
							@php $sto_loop = 1; @endphp
							@foreach($story as $sto) @if($sto_loop <= 5)
							<div class="item">
							   <div class="post-content">
							      <h2 class="post-title title-small">
							         <a href="{{ url("/{$sto['slug']}-{$sto['id']}") }}" target="_blank" title="{{ $sto['title'] }}">{{ $sto['title'] }}</a>
							      </h2>
							   </div>
							</div>
					      	@endif
							@php $sto_loop++; @endphp
							@endforeach
						</div>
					</div><!-- Col end -->
					<div class="col-md-3 text-md-right text-center">
						<div class="ts-date">
							<i class="fa fa-calendar-check-o"></i>{{ date("j F Y") }}
						</div>
					</div><!-- Col end -->
				</div><!--/ Row end -->
			</div><!--/ Container end -->
		</div><!--/ Trending end -->			
	</div><!-- Menu wrapper end -->
	
    <!-- ads floating -->

	<div class="gap-50"></div>
	
    <!-- ads top leaderboar -->
