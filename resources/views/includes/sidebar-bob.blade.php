<!-- sidebar start -->
<div class="col-lg-4">
	<div class="sidebar">
		<div class="sidebar-widget ads-widget">
			<div class="ads-image">
				<!-- /54058497/soloposads/Sidebar-desktop-1 -->
				<div id='div-gpt-ad-1626428628354-0' style='min-width: 300px; min-height: 250px;'>
				  <script>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1626428628354-0'); });
				  </script>
				</div>
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
					            @foreach($popular as $pop) 
								@if($pop_loop <= 5)
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
									@endif
                                    @php $pop_loop++; @endphp
                                    @endforeach
								</ul><!-- List post end -->
							</div>
						</div><!-- Tab pane 2 end -->
					</div><!-- tab content -->
				</div>
			</div>
		</div><!-- widget end -->	
		
		<!-- widget euro2020 -->
		
		<!-- radio streaming --><br>
		<div class="sidebar-widget ads-widget">
			<div class="ads-image">
				<!-- /54058497/soloposads/Sidebar-desktop-2 -->
				<div id='div-gpt-ad-1626428634532-0' style='min-width: 300px; min-height: 250px;'>
				  <script>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1626428634532-0'); });
				  </script>
				</div>
			</div>
		</div><!-- widget end -->	
		<div class="sidebar-widget">
			<h2 class="block-title block-title-dark">
				<span class="title-angle-shap"> Jateng </span>
			</h2>
			<div class="list-post-block">
				<ul class="list-post">
		          @php $bn_loop = 1; @endphp
		          @foreach($jateng as $bn) @if($bn_loop <= 5)
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
					@endif 
                    @php $bn_loop++; @endphp
                    @endforeach
				</ul><!-- List post end -->
			</div>
		</div>

		<div class="sidebar-widget ads-widget">
			<div class="ads-image">
				<!-- /54058497/soloposads/Sidebar-desktop-3 -->
				<div id='div-gpt-ad-1626428643116-0' style='min-width: 300px; min-height: 250px;'>
				  <script>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1626428643116-0'); });
				  </script>
				</div>
			</div>
		</div><!-- widget end -->	

	</div>					
</div><!-- Sidebar Col end -->