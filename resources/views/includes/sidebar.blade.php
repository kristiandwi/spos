<!-- sidebar start -->
<div class="col-lg-4">
	<div class="sidebar">
		<div class="sidebar-widget ads-widget">
			<div class="ads-image">
				@if( date('Y-m-d H:i:s') >= '2021-08-23 00:00:01' && date('Y-m-d H:i:s') <= '2021-09-20 23:59:59')
				<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
					<script>
					window.googletag = window.googletag || {cmd: []};
					googletag.cmd.push(function() {
						googletag.defineSlot('/54058497/DSC-300x250', [300, 250], 'div-gpt-ad-1629452878469-0').addService(googletag.pubads());
						googletag.pubads().enableSingleRequest();
						googletag.enableServices();
					});
					</script>
					<!-- /54058497/DSC-300x250 -->
					<div id='div-gpt-ad-1629452878469-0' style='min-width: 300px; min-height: 250px;'>
						<script>
						googletag.cmd.push(function() { googletag.display('div-gpt-ad-1629452878469-0'); });
						</script>
					</div>
				@else
				<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- Iklan Responsif -->
				<ins class="adsbygoogle"
					style="display:block"
					data-ad-client="ca-pub-4969077794908710"
					data-ad-slot="2921244965"
					data-ad-format="rectangle"></ins>
				<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				@endif
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
					            @php $pop_loop = 1; @endphp
					            @foreach($popular as $pop) @if($pop_loop <=5)
									<li>
										<div class="post-block-style media">
											<div class="post-thumb">
												<a href="{{ url("/{$pop['slug']}-{$pop['id']}") }}?utm_source=terpopular_desktop" title="{{ $pop['title'] }}">
													<img class="img-fluid" src="{{ $pop['images']['thumbnail'] }}" alt="{{ $pop['title'] }}" style="object-fit: cover; object-position: center; height: 85px; width: 85px;">
												</a>
											</div><!-- Post thumb end -->
		
											<div class="post-content media-body">
												<h2 class="post-title">
													<a href="{{ url("/{$pop['slug']}-{$pop['id']}") }}?utm_source=terpopular_desktop" title="{{ $pop['title'] }}">{{ $pop['title'] }}</a>
												</h2>
												<div class="post-meta mb-7">
													<span class="post-date"><i class="fa fa-clock-o"></i> {{ Helper::time_ago($pop['date']) }}</span>
												</div>
											</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 1 end -->
									@endif @php $pop_loop++; @endphp @endforeach   
								</ul><!-- List post end -->
							</div>
						</div><!-- Tab pane 2 end -->
					</div><!-- tab content -->
				</div>
			</div>
		</div><!-- widget end -->
		
		@if( date('Y-m-d H:i:s') <= '2021-09-10 23:59:59')
		@include('includes.widget-energi')
		@endif
		<!-- ads streaming radio --><br>

		<div class="sidebar-widget ads-widget">
			<div class="ads-image">
				@if( date('Y-m-d H:i:s') >= '2021-08-20 00:00:01' && date('Y-m-d H:i:s') <= '2021-09-06 23:59:59')
				<a href="https://www.sekatenfesyar.com/" target="_blank"><img src="{{ url('images/banner/sekaten-festival.gif') }}"></a> <br>
				@endif
				
				@if( date('Y-m-d H:i:s') <= '2021-12-31 23:59:59')
				<br><a href="{{ url("/uksw") }}" target="_blank"><img src="{{ url('images/banner/UKSW-MR.jpg') }}"></a>  <br>
				@else 
					<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- Iklan Responsif -->
					<ins class="adsbygoogle"
						style="display:block"
						data-ad-client="ca-pub-4969077794908710"
						data-ad-slot="2921244965"
						data-ad-format="rectangle"></ins>
					<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				@endif 
			</div>
		</div><!-- widget end -->	
		<div class="sidebar-widget">
			<h2 class="block-title block-title-dark">
				<span class="title-angle-shap"> News </span>
			</h2>
			<div class="list-post-block">
				<ul class="list-post">
		          @php $bn_loop = 1; @endphp
		          @foreach($news as $bn) @if($bn_loop <= 3)
					<li>
						<div class="post-block-style media">
							<div class="post-thumb">
								<a href="{{ url("/{$bn['slug']}-{$bn['id']}") }}?utm_source=sidebar_desktop" title="{{ $bn['title'] }}">
									<img class="img-fluid" src="{{ $bn['images']['thumbnail'] }}" alt="{{ $bn['title'] }}" style="object-fit: cover; object-position: center; height: 85px; width: 85px;">
								</a>
							</div><!-- Post thumb end -->

							<div class="post-content media-body">
								<h2 class="post-title">
									<a href="{{ url("/{$bn['slug']}-{$bn['id']}") }}?utm_source=sidebar_desktop" title="{{ $bn['title'] }}">{{ $bn['title'] }}</a>
								</h2>
								<div class="post-meta mb-7">
									<span class="post-date"><i class="fa fa-clock-o"></i> {{ Helper::time_ago($bn['date']) }}</span>
								</div>
							</div><!-- Post content end -->
						</div><!-- Post block style end -->
					</li><!-- Li 1 end -->	          				
					@endif @php $bn_loop++; @endphp @endforeach
				</ul><!-- List post end -->
			</div>
		</div>

		<div class="sidebar-widget ads-widget">
			<div class="ads-image">
				<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- Iklan Responsif -->
				<ins class="adsbygoogle"
					style="display:block"
					data-ad-client="ca-pub-4969077794908710"
					data-ad-slot="2921244965"
					data-ad-format="rectangle"></ins>
				<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
		</div><!-- widget end -->	

		<div class="sidebar-widget">
			<h2 class="block-title block-title-dark">
				<span class="title-angle-shap"> Lifestyle </span>
			</h2>
			<div class="list-post-block">
				<ul class="list-post">
		          @php $ls_loop = 1; @endphp
		          @foreach($lifestyle as $ls) @if($ls_loop <= 3)
					<li>
						<div class="post-block-style media">
							<div class="post-thumb">
								<a href="{{ url("/{$ls['slug']}-{$ls['id']}") }}?utm_source=sidebar_desktop" title="{{ $ls['title'] }}">
									<img class="img-fluid" src="{{ $ls['images']['thumbnail'] }}" alt="{{ $ls['title'] }}" style="object-fit: cover; object-position: center; height: 85px; width: 85px;">
								</a>
							</div><!-- Post thumb end -->

							<div class="post-content media-body">
								<h2 class="post-title">
									<a href="{{ url("/{$ls['slug']}-{$ls['id']}") }}?utm_source=sidebar_desktop" title="{{ $ls['title'] }}">{{ $ls['title'] }}</a>
								</h2>
								<div class="post-meta mb-7">
									<span class="post-date"><i class="fa fa-clock-o"></i> {{ Helper::time_ago($ls['date']) }}</span>
								</div>
							</div><!-- Post content end -->
						</div><!-- Post block style end -->
					</li><!-- Li 1 end -->	          				
					@endif @php $ls_loop++; @endphp @endforeach
				</ul><!-- List post end -->
			</div>
		</div>
		
		<div class="sidebar-widget">
			<h2 class="block-title block-title-dark">
				<span class="title-angle-shap"> Kolom </span>
			</h2>
			<div class="list-post-block">
				<ul class="list-post">
		          @php $kl_loop = 1; @endphp
		          @foreach($kolom as $kl) @if($kl_loop <= 3)
					<li>
						<div class="post-block-style media">
							<div class="post-thumb">
								<a href="{{ url("/{$kl['slug']}-{$kl['id']}") }}?utm_source=sidebar_desktop" title="{{ $kl['title'] }}">
									<img class="img-fluid" src="{{ $kl['images']['thumbnail'] }}" alt="{{ $kl['title'] }}" style="object-fit: cover; object-position: center; height: 85px; width: 85px;">
								</a>
							</div><!-- Post thumb end -->

							<div class="post-content media-body">
								<h2 class="post-title">
									<a href="{{ url("/{$kl['slug']}-{$kl['id']}") }}?utm_source=sidebar_desktop" title="{{ $kl['title'] }}">{{ $kl['title'] }}</a>
								</h2>
								<div class="post-meta mb-7">
									<span class="post-date"><i class="fa fa-clock-o"></i> {{ Helper::time_ago($kl['date']) }}</span>
								</div>
							</div><!-- Post content end -->
						</div><!-- Post block style end -->
					</li><!-- Li 1 end -->	          				
					@endif @php $kl_loop++; @endphp @endforeach
				</ul><!-- List post end -->
			</div>
		</div>

	</div>					
</div><!-- Sidebar Col end -->