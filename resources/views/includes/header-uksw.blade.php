	<!-- Header start -->
	<header id="header" class="header">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-md-3 col-sm-12">
					<div class="logo">
						 <a href="{{ url('/uksw') }}">
							<img src="{{ asset('/images/uksw/logo-uksw.png') }}" alt="Logo" style="width:250px;">
						 </a>
					</div>
				</div><!-- logo col end -->

				<div class="col-md-8 col-sm-12 p-0 header-right">
					<div class="ad-banner float-right">
						<img src="{{ asset('/images/uksw/uksw-banner.jpg') }}">
					</div>
				</div><!-- header right end -->
			</div><!-- Row end -->
		</div><!-- Logo and banner area end -->
	</header><!--/ Header end -->

	<div class="main-nav clearfix is-ts-sticky">
		<div class="container">
			<div class="row justify-content-between">
				<nav class="navbar navbar-expand-lg col-lg-0">
					<div class="site-nav-inner float-left">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
						<span class="fa fa-bars"></span>
					</button>
					   <!-- End of Navbar toggler -->
					   <div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
							<ul class="nav navbar-nav">
								<li class="sticky">
									<img src="{{ asset('/images/uksw/logo-uksw.png') }}" alt="Logo">
								</li>
								<li>
									<a href="{{ url('/uksw') }}">Home</a>
								</li>
								<li>
									<a href="{{ url('/uksw/berita') }}">Berita</a>
								</li>
								<li>
									<a href="{{ url('/uksw/prestasi') }}">Prestasi</a>
								</li>
								<li>
									<a href="{{ url('/uksw/foto') }}">Galeri Foto</a>
								</li>																
								<li>
									<a href="{{ url('/uksw/video') }}">Galeri Video</a>
								</li>
								<li>
									<a href="{{ url('/uksw/tanya-jawab') }}">Tanya Jawab</a>
								</li>
								<li>
									<a href="{{ url('/uksw/kontak') }}">Kontak</a>
								</li>
				
							</ul><!--/ Nav ul end -->
						</div><!--/ Collapse end -->

					</div><!-- Site Navbar inner end -->
				</nav><!--/ Navigation end -->

				<div class="col-lg-3 pr-0 text-right nav-social-wrap">
					<a href="#" onclick="window.location.href='https://www.solopos.com'">
					<img src="{{ asset('/images/uksw/logo-solopos.png') }}"></a>

					<div class="nav-search">
						<a href="#search-popup" class="xs-modal-popup">
							<i class="icon icon-search1"></i>
						</a>
					</div><!-- Search end -->
						
					<div class="zoom-anim-dialog mfp-hide modal-searchPanel ts-search-form" id="search-popup">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="xs-search-panel">
									<form class="ts-search-group">
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
					</div><!-- End xs modal -->
				</div>
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
