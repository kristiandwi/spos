<!-- sidebar start -->
<div class="col-lg-4">
	<div class="sidebar">
		<div class="sidebar-widget ads-widget">
			<div class="ads-image">
				<!-- ads sidebar 1 -->
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
		
		<!-- widget euro 2020 -->
		
		<!-- ads streaming radio --><br>

		<div class="sidebar-widget ads-widget">
			<div class="ads-image">
			<!-- ads sidebar 2 -->
				<!--a href="#">
					<img class="img-fluid" src="images/banner-image/image2.png" alt="">
				</a-->
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
				<!--a href="#">
					<img class="img-fluid" src="images/banner-image/image2.png" alt="">
				</a-->
				<!-- ads sidebar 3 -->
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