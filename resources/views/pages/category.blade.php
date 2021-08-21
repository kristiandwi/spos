@extends('layouts.app')
@section('content')
    <section class="featured-post-area no-padding">
        <div class="container pl-0 pr-0">
            <div class="row ts-gutter-20">
                <div class="col-lg-8 col-md-12 pad-r">
                    <div class="owl-carousel owl-theme featured-slider h2-feature-slider">					
                    @php $hl_loop = 1; @endphp
                    @foreach($headline as $hl) 
                        @if($hl['category'] == $category)
                        @if($hl_loop <=5)
                        <div class="item post-overaly-style post-md" style="background-image:url({{ $hl['images']['thumbnail'] }})">
                            <div class="featured-post">
                                <a class="image-link" href="{{ url("/{$hl['slug']}-{$hl['id']}") }}" title="{{ $hl['title'] }}">&nbsp;</a>
                                <div class="overlay-post-content">
                                    <div class="post-content">
                                        <div class="grid-category">
                                            <a class="post-cat {{ $hl['category'] }}" href="{{ url("/{$hl['category']}") }}">{{ $hl['category'] }}</a>
                                        </div>

                                        <h2 class="post-title title-md">
                                            <a href="{{ url("/{$hl['slug']}-{$hl['id']}") }}" title="{{ $hl['title'] }}">{{ $hl['title'] }}</a>
                                        </h2>
                                        <div class="post-meta">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-user"></i> @if($hl['author']) {!! $hl['author'] !!} @endif</a></li>
                                                <li><a href="#"><i class="icon icon-clock"></i> {{ Helper::time_ago($hl['date']) }}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/ Featured post end -->
                        </div><!-- Item 1 end -->
                        
                    @endif @php $hl_loop++; @endphp @endif @endforeach   
                    </div>
                </div><!-- Col 8 end -->
                @php $pc_loop = 1; @endphp
                @foreach($premium as $pc) 
                @if($pc_loop == 5)
                <div class="col-lg-4 col-md-12">
                    <div class="post-overaly-style post-md" style="background-image:url({{ $pc['images']['thumbnail'] }})">
                        <div class="featured-post">
                            <a class="image-link" href="{{ url("/{$pc['slug']}-{$pc['id']}") }}" title="{{ $pc['title'] }}">&nbsp;</a>
                            <div class="overlay-post-content">
                                <div class="post-content">
                                    <div class="grid-category">
                                    <a class="post-cat premium" href="{{ url('/premium') }}">Espos Premium</a>
                                    </div>

                                    <h2 class="post-title title-md">
                                        <a href="{{ url("/{$pc['slug']}-{$pc['id']}") }}" title="{{ $pc['title'] }}">{{ $pc['title'] }}</a>
                                    </h2>
                                    <div class="post-meta">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i> @if($pc['author']) {!! $pc['author'] !!} @endif</a></li>
                                            <li><a href="#"><i class="icon icon-clock"></i>{{ Helper::time_ago($pc['date']) }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!--/ Featured post end -->
                    </div><!-- Item 2 end -->
                </div><!-- Col 4 end -->
                @endif @php $pc_loop++; @endphp @endforeach


            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Feature post end -->
    <div class="gap-20"></div>
    <!-- ads top leaderboard -->
	
    <!-- Section Trending start-->
	<section class="trending-slider pb-0">
		<div class="container pl-0 pr-0">
			<div class="ts-grid-box">
				<h2 class="block-title">
					 <span class="title-angle-shap"> Fokus </span>
				</h2>
				<div class="owl-carousel dot-style2" id="trending-slider">
					@php $ec_loop = 1; @endphp
		          	@foreach($editorchoice as $ec) 
                        @if($ec['category'] == $category)
                        @if($ec_loop <= 5)
					<div class="item post-overaly-style post-md" style="background-image:url({{ $ec['images']['thumbnail'] }})">
						<a class="image-link" href="{{ url("/{$ec['slug']}-{$ec['id']}") }}?utm_source=editors_choice_desktop" title="{{ $ec['title'] }}">&nbsp;</a>
						<div class="overlay-post-content">
							<div class="post-content">
								<div class="grid-category">
									<a class="post-cat {{ $ec['category'] }}" href="{{ url("/{$ec['category']}") }}">{{ $ec['category'] }}</a>
								</div>

								<h2 class="post-title">
									<a href="{{ url("/{$ec['slug']}-{$ec['id']}") }}?utm_source=editors_choice_desktop" title="{{ $ec['title'] }}">{{ $ec['title'] }}</a>
								</h2>
								<div class="post-meta">
									<ul>
										<li><a href="#"><i class="fa fa-user"></i>@if($ec['author']) {!! $ec['author'] !!} @endif</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div><!-- Item 1 end -->
                    @endif @php $ec_loop++; @endphp @endif @endforeach
				</div>
				<!-- most-populers end-->
			</div>
			<!-- ts-populer-post-box end-->
		</div>
		<!-- container end-->
	</section>
	<!-- section trending End -->

    <!-- Section Terkini Start -->
	<section class="block-wrapper">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-30">
				<div class="col-lg-8 col-md-12">
					<h2 class="block-title">
						<span class="title-angle-shap"> Berita Terkini </span>
					</h2>
					<div class="row ts-gutter-20 align-items-center">
			          @php $no = 1; @endphp
			          @foreach($breakingcat as $post) @if($no <= 3 )

			          @if($no==3)
			          <!-- ads advertorial -->
			          @endif
						<div class="col-12 mb-10">
							<div class="post-block-style">
								<div class="row">
									<div class="col-md-5">
										<div class="post-thumb post-list_feed">
											<img src="{{ $post['images']['thumbnail'] }}" alt="{{ $post['title'] }}" style="object-fit: cover; height: 167px; width: 250px;">
											<a class="post-cat-box {{ $post['category'] }}" href="{{ url("/{$post['category']}") }}">{{ $post['category'] }}</a>
										</div>
									</div>
									<div class="col-md-7 pl-0">
										<div class="post-content">
											<h2 class="post-title title-md">
											<a href="{{ url("/{$post['slug']}-{$post['id']}") }}?utm_source=terkini_desktop" title="{{ $post['title'] }}">{{ $post['title'] }}</a>
											</h2>
											<div class="post-meta mb-7">
												<span class="post-author"><a href="#"><i class="fa fa-user"></i> @if($post['author']) {!! $post['author'] !!} @endif</a></span>
												<span class="post-date"><i class="fa fa-clock-o"></i> {{ Helper::time_ago($post['date']) }}</span>
											</div>
											<p>@if($post['summary']) {!! $post['summary'] !!} @endif</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					  @endif @php $no++; @endphp @endforeach 	
					</div>

					<!-- Block Konten Premium -->
					<div class="block style2 text-light mb-20 mt-10">
						<h2 class="block-title">
							<span class="title-angle-shap"> Espos Premium</span>
						</h2>

						<div class="row">
				            @php $pc_loop = 1; @endphp
				            @foreach($premium as $pc) @if($pc_loop <= 5)

				            @if($pc_loop == 1)
							<div class="col-lg-6 col-md-6">
								<div class="post-block-style">
									<div class="post-thumb">
										<a href="{{ url("/{$pc['slug']}-{$pc['id']}") }}?utm_source=premium_desktop" title="{{ $pc['title'] }}">
											<img src="{{ $pc['images']['thumbnail'] }}" alt="{{ $pc['title'] }}" style="object-fit: cover; width: 266px; height: 178px;">
										</a>
										<div class="grid-cat">
											<a class="post-cat premium" href="{{ url("/premium") }}">Premium</a>
										</div>
									</div>
									
									<div class="post-content mt-3">
										<h2 class="post-title title-md">
											<a href="{{ url("/{$pc['slug']}-{$pc['id']}") }}?utm_source=terkini_desktop" title="{{ $pc['title'] }}">{{ $pc['title'] }}</a>
										</h2>
										<p>@if($pc['summary']) {!! $pc['summary'] !!} @endif</p>
										<div class="post-meta mb-7">
											<span class="post-author"><a href="#"><i class="fa fa-user"></i> @if($pc['author']) {!! $pc['author'] !!} @endif</a></span>
											<span class="post-date"><i class="fa fa-clock-o"></i> {{ Helper::time_ago($pc['date']) }}</span>
										</div>
									</div><!-- Post content end -->
								</div><!-- Post block a end -->
							</div><!-- Col 1 end -->

							<div class="col-lg-6 col-md-6">
								<div class="row ts-gutter-20">								
							@endif

							@if( $pc_loop > 1 && $pc_loop <= 5 )

									<div class="col-md-6">
										<div class="post-block-style">
											<div class="post-thumb">
												<a href="{{ url("/{$pc['slug']}-{$pc['id']}") }}?utm_source=terkini_desktop" title="{{ $pc['title'] }}">
													<img src="{{ $pc['images']['thumbnail'] }}" alt="{{ $pc['title'] }}" style="object-fit: cover; width: 118px; height: 84px;">
												</a>
											</div>
											
											<div class="post-content">
												<h2 class="post-title mb-2">
													<a href="{{ url("/{$pc['slug']}-{$pc['id']}") }}?utm_source=terkini_desktop" title="{{ $pc['title'] }}">{{ $pc['title'] }}</a>
												</h2>
											</div><!-- Post content end -->
										</div><!-- Post block a end -->
									</div><!-- .col -->
								
							@endif
							@if($pc_loop == 5)
								</div><!-- .row -->
							</div><!-- Col 2 end -->
						@endif
                        @endif
                        @php $pc_loop++; @endphp
                    @endforeach
						</div><!-- Row end -->
					</div><!-- Block Konten Premium end -->	

					<div class="row ts-gutter-20 loadmore-frame">
			          @php $no = 1; @endphp
			          @foreach($breakingcat as $post) @if($no > 3)
						<div class="col-12 mb-10 content-box">
							<div class="post-block-style">
								<div class="row">
									<div class="col-md-5">
										<div class="post-thumb post-list_feed">
											<img src="{{ $post['images']['thumbnail'] }}" alt="{{ $post['title'] }}" style="object-fit: cover; height: 167px; width: 250px;">
											<a class="post-cat-box {{ $post['category'] }}" href="{{ url("/{$post['category']}") }}">{{ $post['category'] }}</a>
										</div>
									</div>
									<div class="col-md-7 pl-0">
										<div class="post-content">
											<h2 class="post-title title-md">
											<a href="{{ url("/{$post['slug']}-{$post['id']}") }}?utm_source=terkini_desktop" title="{{ $post['title'] }}">{{ $post['title'] }}</a>
											</h2>
											<div class="post-meta mb-7">
												<span class="post-author"><a href="#"><i class="fa fa-user"></i> @if($post['author']) {!! $post['author'] !!} @endif</a></span>
												<span class="post-date"><i class="fa fa-clock-o"></i> {{ Helper::time_ago($post['date']) }}</span>
											</div>
											<p>@if($post['summary']) {!! $post['summary'] !!} @endif</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endif
                        @php $no++; @endphp
                        @endforeach	
						<div class="col-12 mt-3 align-items-center" style="text-align: center;">
				            <a href="javascript:void(0)" class="btn btn-primary btn-sm load-more" title="Kumpulan Berita">Lihat Berita Lainnya</a>
				            <a href="https://m.solopos.com/arsip" class="btn btn-primary btn-sm load-more-arsip" style="display: none;" title="Kumpulan Berita">Arsip Berita</a>
						</div><!-- col end -->
					</div>									
				</div><!-- Content Col end -->

				<!-- sidebar home -->
				@include('includes.sidebar')

				<!-- Sidebar Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section>
    <!-- Section Terkini End -->

    <!-- ad banner start-->
	<div class="block-wrapper no-padding">
		<div class="container pl-0 pr-0">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="banner-img">
						<!-- ads leaderboard 2 -->
					</div>
				</div>
				<!-- col end -->
			</div>
			<!-- row  end -->
		</div>
		<!-- container end -->
	</div>
	<!-- ad banner end-->

	<!-- block slider start -->
	<section class="block-slider">
		<div class="container pl-0 pr-0">
			<div class="ts-grid-box">
				<div class="owl-carousel dot-style2" id="post-block-slider">
					@php $kl_loop = 1; @endphp
		          	@foreach($kolom as $kl) @if($kl_loop <= 8)				
					<div class="item">
						<div class="post-block-style">
							<div class="post-thumb post-list_slides">
								<a href="#">
									<img class="img-fluid" src="{{ $kl['images']['thumbnail'] }}" alt="{{ $kl['title'] }}" style="object-fit: cover; height: 148px; width: 222px;">
								</a>
								<div class="grid-cat">
									<a class="post-cat {{ $kl['category'] }}" href="https://www.solopos.com/{{ $kl['category'] }}">{{ $kl['category'] }}</a>
								</div>
							</div>
							
							<div class="post-content">
								<h2 class="post-title">
									<a href="{{ url("/{$kl['slug']}-{$kl['id']}") }}?utm_source=terkini_desktop" title="{{ $kl['title'] }}">{{ $kl['title'] }}</a>
								</h2>
								<div class="post-meta mb-7">
									<span class="post-date"><i class="fa fa-clock-o"></i> {{ Helper::time_ago($kl['date']) }}</span>
								</div>
							</div><!-- Post content end -->
						</div><!-- Post Block style end -->
					</div><!-- slide-item end -->
					@endif
                    @php $kl_loop++; @endphp
                    @endforeach
				</div>
			</div>
			<!-- ts-populer-post-box end-->
		</div>
		<!-- container end-->
	</section>
	<!-- block slider end -->

    <!-- black section start -->
	<section class="block-wrapper">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-30">
				<div class="col-lg-8 col-md-12">

					<div class="block style1 text-light mb-20 mt-10">
						<h2 class="block-title">
							<span class="title-angle-shap"> Jawa Tengah </span>
						</h2>

						<div class="row">
				            @php $jtg_loop = 1; @endphp
				            @foreach($jateng as $jtg) @if($jtg_loop <= 5)

				            @if($jtg_loop == 1)
							<div class="col-lg-6 col-md-6">
								<div class="post-block-style">
									<div class="post-thumb">
										<a href="{{ url("/{$jtg['slug']}-{$jtg['id']}") }}?utm_source=premium_desktop" title="{{ $jtg['title'] }}">
											<img src="{{ $jtg['images']['thumbnail'] }}" alt="{{ $jtg['title'] }}" style="object-fit: cover; width: 266px; height: 178px;">
										</a>
										<div class="grid-cat">
											<a class="post-cat premium" href="https://www.solopos.com/premium">Premium</a>
										</div>
									</div>
									
									<div class="post-content mt-3">
										<h2 class="post-title title-md">
											<a href="{{ url("/{$jtg['slug']}-{$jtg['id']}") }}?utm_source=terkini_desktop" title="{{ $jtg['title'] }}">{{ $jtg['title'] }}</a>
										</h2>
										<p></p>
										<div class="post-meta mb-7">
											<span class="post-author"><a href="#"><i class="fa fa-user"></i> @if($jtg['author']) {!! $jtg['author'] !!} @endif</a></span>
											<span class="post-date"><i class="fa fa-clock-o"></i> {{ Helper::time_ago($jtg['date']) }}</span>
										</div>
									</div><!-- Post content end -->
								</div><!-- Post block a end -->
							</div><!-- Col 1 end -->

							<div class="col-lg-6 col-md-6">
								<div class="row ts-gutter-20">								
							@endif
							@if( $jtg_loop > 1 && $jtg_loop <= 5 )
									<div class="col-md-6">
										<div class="post-block-style">
											<div class="post-thumb">
												<a href="{{ url("/{$jtg['slug']}-{$jtg['id']}") }}?utm_source=terkini_desktop" title="{{ $jtg['title'] }}">
													<img src="{{ $jtg['images']['thumbnail'] }}" alt="{{ $jtg['title'] }}" style="object-fit: cover; width: 118px; height: 84px;">
												</a>
											</div>
											
											<div class="post-content">
												<h2 class="post-title mb-2">
													<a href="{{ url("/{$jtg['slug']}-{$jtg['id']}") }}?utm_source=terkini_desktop" title="{{ $jtg['title'] }}">{{ $jtg['title'] }}</a>
												</h2>
											</div><!-- Post content end -->
										</div><!-- Post block a end -->
									</div><!-- .col -->
								
							@endif
							@if($jtg_loop == 5)
								</div><!-- .row -->
							</div><!-- Col 2 end -->
						@endif
                        @endif
                        @php $jtg_loop++; @endphp
                        @endforeach
						</div><!-- Row end -->
					</div><!-- Block Lifestyle end -->


				</div><!-- Content Col end -->
				<div class="col-lg-4 col-md-12">
					<h2 class="block-title block-title-dark">
						<span class="title-angle-shap"> Otomotif </span>
					</h2>
					<div class="list-post-block">
						<ul class="list-post">
				          <?php $oto_loop = 1; ?>
				          @foreach($otomotif as $oto) @if($oto_loop <= 4)	
							<li>
								<div class="post-block-style media">
									<div class="post-thumb">
										<a href="{{ url("/{$oto['slug']}-{$oto['id']}") }}?utm_source=terpopular_desktop" title="{{ $oto['title'] }}">
											<img class="img-fluid" src="{{ $oto['images']['thumbnail'] }}" alt="{{ $oto['title'] }}" style="object-fit: cover; width: 130px; height: 96px;">
										</a>
									</div><!-- Post thumb end -->

									<div class="post-content media-body">
										<h2 class="post-title">
											<a href="{{ url("/{$oto['slug']}-{$oto['id']}") }}?utm_source=terpopular_desktop" title="{{ $oto['title'] }}">{{ $oto['title'] }}</a>
										</h2>
										<div class="post-meta mb-7">
											<span class="post-date"><i class="fa fa-clock-o"></i> {{ Helper::time_ago($oto['date']) }}</span>
										</div>
									</div><!-- Post content end -->
								</div><!-- Post block style end -->
							</li><!-- Li 1 end -->		          				
							@endif
                            @php $oto_loop++; @endphp
                            @endforeach
						</ul><!-- List post end -->
					</div>
				</div><!-- Sidebar Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section>
	<!-- black section end -->

    <!-- ad banner start-->
	<div class="block-wrapper no-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="banner-img text-center">
						<!-- ads leaderboard 3 -->
					</div>
				</div>
				<!-- col end -->
			</div>
			<!-- row  end -->
		</div>
		<!-- container end -->
	</div>
	<!-- ad banner end-->

	<!-- card block start -->
	<section class="block-wrapper">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-30">
				<div class="col-lg-8 col-md-12">
					<h2 class="block-title">
						<span class="title-angle-shap"> #Espospedia / Info Grafis  </span>
					</h2>
					<div class="row text-light ts-gutter-30">
						@php $ep_loop = 1; @endphp
						@foreach($espospedia as $ep) @if($ep_loop <= 6)						
						<div class="col-md-4">
							<div class="post-overaly-style post-sm" style="background-image:url({{ $ep['images']['thumbnail']}})">
								<a href="{{ url("/{$ep['slug']}-{$ep['id']}") }}?utm_source=headline_desktop" title="{{ $ep['title'] }}">&nbsp;</a>
								<div class="overlay-post-content">
									<div class="post-content">
										<div class="grid-category">
											<a class="post-cat espospedia>" href="https://www.solopos.com/espospedia">{{ $ep['title'] }}</a>
										</div>
									</div>
								</div>
							</div><!-- post end -->
						</div><!-- end col -->
						@endif
						@php $ep_loop++; @endphp
						@endforeach
					</div><!-- end row -->

					<div class="gap-30"></div>

					<div class="block style3 text-light mb-20 mt-20">
						<h2 class="block-title">
							<span class="title-angle-shap"> Berita Video </span>
						</h2>
						@php $v_loop = 1; @endphp
						@foreach($video as $vid) @if($v_loop <= 5)
						@if($v_loop == 1)					
						<div class="post-block-style">
							<div class="row align-items-center">
								<div class="col-md-6">
									<div class="post-thumb">
										<img src="{{ $vid['images']['thumbnail'] }}" alt="{{ $vid['title'] }}" style="object-fit: cover; width: 296px; height: 195px;">
										<div class="video-icon">
											<i class="fa fa-play"></i>
										</div>									
									</div>
								</div>
								<div class="col-md-6">
									<div class="post-content">
										<h2 class="post-title title-md">
											<a href="{{ url("/{$vid['slug']}-{$vid['id']}") }}?utm_source=video_desktop" title="{{ $vid['title'] }}">{{ $vid['title'] }}</a>
										</h2>
										<div class="post-meta mb-7">
											<span class="post-author"><a href="#"><i class="fa fa-user"></i> @if($vid['author']) {!! $vid['author'] !!} @endif</a></span>
											<span class="post-date"><i class="fa fa-clock-o"></i> {{ Helper::time_ago($vid['date']) }} </span>
										</div>
										<p>@if($vid['summary']) {!! $vid['summary'] !!} @endif</p>
									</div>
								</div>
							</div>
						</div>
						
						<div class="gap-30"></div>

						<div class="row">
							<div class="col-md-6">
								<div class="list-post-block">
									<ul class="list-post">
										@endif
										@if( $v_loop > 1 && $v_loop <= 3 )
										<li>
											<div class="post-block-style media">
												<div class="post-thumb">
													<a href="{{ url("/{$vid['slug']}-{$vid['id']}") }}?utm_source=video_desktop" title="{{ $vid['title'] }}">
														<img src="{{ $vid['images']['thumbnail'] }}" alt="{{ $vid['title'] }}" style="object-fit: cover; width: 130px; height: 86px;">
														<div class="video-icon">
															<i class="fa fa-play"></i>
														</div>													
													</a>
												</div><!-- Post thumb end -->
		
												<div class="post-content media-body">
													<h2 class="post-title">
														<a href="{{ url("/{$vid['slug']}-{$vid['id']}") }}?utm_source=video_desktop" title="{{ $vid['title'] }}">{{ $vid['title'] }}</a>
													</h2>
													<div class="post-meta mb-7">
														<span class="post-date"><i class="fa fa-clock-o"></i> {{ Helper::time_ago($vid['date']) }}</span>
													</div>
												</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 1 end -->
										@endif
										@if( $v_loop == 3 )		
									</ul><!-- list-post end -->
								</div>
							</div><!-- col end -->
							<div class="col-md-6">
								<div class="list-post-block">
									<ul class="list-post">
										@endif
										@if( $v_loop > 3 && $v_loop <= 5 )
										<li>
											<div class="post-block-style media">
												<div class="post-thumb">
													<a href="{{ url("/{$vid['slug']}-{$vid['id']}") }}?utm_source=video_desktop" title="{{ $vid['title'] }}">
														<img src="{{ $vid['images']['thumbnail'] }}" alt="{{ $vid['title'] }}" style="object-fit: cover; width: 130px; height: 86px;">
														<div class="video-icon">
															<i class="fa fa-play"></i>
														</div>													
													</a>
												</div><!-- Post thumb end -->
		
												<div class="post-content media-body">
													<h2 class="post-title">
														<a href="{{ url("/{$vid['slug']}-{$vid['id']}") }}?utm_source=video_desktop" title="{{ $vid['title'] }}">{{ $vid['title'] }}</a>
													</h2>
													<div class="post-meta mb-7">
														<span class="post-date"><i class="fa fa-clock-o"></i> {{ Helper::time_ago($vid['date']) }}</span>
													</div>
												</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 1 end -->
										@endif
										@if($v_loop == 5)
									</ul><!-- list-post end -->
								</div>
							</div><!-- col end -->
							
						</div>
						@endif
						@endif
						@php $v_loop++; @endphp
						@endforeach
					</div>

				</div><!-- Content Col end -->

				<div class="col-lg-4 col-md-12">
					<h2 class="block-title block-title-dark">
						<span class="title-angle-shap"> Sepakbola </span>
					</h2>
					<div class="list-post-block">
						<ul class="list-post">
				          @php $bl_loop = 1; @endphp
				          @foreach($bola as $bl) @if($bl_loop <= 10 )
							<li>
								<div class="post-block-style media">
									<div class="post-thumb">
										<a href="{{ url("/{$bl['slug']}-{$bl['id']}") }}?utm_source=terpopular_desktop" title="{{ $bl['title'] }}">
											<img class="img-fluid" src="{{ $bl['images']['thumbnail'] }}" alt="{{ $bl['title'] }}" style="object-fit: cover; width: 130px; height: 96px;">
										</a>
									</div><!-- Post thumb end -->

									<div class="post-content media-body">
										<h2 class="post-title">
											<a href="{{ url("/{$bl['slug']}-{$bl['id']}") }}?utm_source=terpopular_desktop" title="{{ $bl['title'] }}">{{ $bl['title'] }}</a>
										</h2>
										<div class="post-meta mb-7">
											<span class="post-date"><i class="fa fa-clock-o"></i> {{ Helper::time_ago($bl['date']) }}</span>
										</div>
									</div><!-- Post content end -->
								</div><!-- Post block style end -->
							</li><!-- Li 1 end -->		          				
							@endif
							@php $bl_loop++; @endphp
							@endforeach
						</ul><!-- List post end -->
					</div>
				</div><!-- Sidebar Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section>
	<!-- card block end -->

@endsection