@extends('layouts.app')
@section('content')
	<div class="gap-50"></div>
	<section class="main-content category-layout-1 pt-0">
		<div class="container">
			<div class="post-header-area" align="center">
				<h2 class="post-title title-lg">{{ $header['title'] }}</h2>
			</div>	
			<div class="gap-30"></div>		
			<div class="row ts-gutter-30">
				<div class="col-lg-12">
					<div class="row ts-gutter-30">
						@php 
                            $vid_loop = 1;
                         @endphp
			            @foreach($video as $vid)
                        @if($vid_loop == 1)
						<div class="col-lg-8 col-md-12 pad-r">
							<div class="owl-carousel owl-theme featured-slider h2-feature-slider">			            
								<div class="item post-overaly-style post-md" style="background-image:url({{ $vid['images']['thumbnail'] }})">
									<div class="featured-post">
										<a class="image-link" href="{{ url("/{$vid['slug']}-{$vid['id']}") }}?utm_source=video_desktop" title="{{ $vid['title'] }}">
											<div class="video-icon">
												<i class="fa fa-play"></i>
											</div>
										</a>
										<div class="overlay-post-content">
											<div class="post-content">
												<div class="grid-category">
													<a class="post-cat {{ $vid['category'] }}" href="https://www.solopos.com/{{ $vid['category'] }}">{{ $vid['category'] }}</a>
												</div>

												<h2 class="post-title title-md">
													<a href="{{ url("/{$vid['slug']}-{$vid['id']}") }}?utm_source=video_desktop" title="{{ $vid['title'] }}">{{ $vid['title'] }}</a>
												</h2>
												<div class="post-meta">
													<ul>
														<li><a href="#"><i class="fa fa-user"></i> @if($vid['author']) {!! $vid['author'] !!} @endif</a></li>
														<li><a href="#"><i class="icon icon-clock"></i> {{ Helper::time_ago($vid['date']) }}</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div><!--/ Featured post end -->
								</div><!-- Item 1 end -->
							</div>
						</div>
						@elseif($vid_loop == 2)
						<div class="col-lg-4 col-md-12">
							<div class="post-overaly-style post-md" style="background-image:url({{ $vid['images']['thumbnail'] }})">
								<div class="featured-post">
									<a class="image-link" href="{{ url("/{$vid['slug']}-{$vid['id']}") }}?utm_source=video_desktop" title="{{ $vid['title'] }}">
										<div class="video-icon">
												<i class="fa fa-play"></i>
										</div>
									</a>
									<div class="overlay-post-content">
										<div class="post-content">
											<div class="grid-category">
											<a class="post-cat video" href="{{ url('/videos') }}">Video</a>
											</div>

											<h2 class="post-title title-md">
												<a href="{{ url("/{$vid['slug']}-{$vid['id']}") }}?utm_source=video_desktop" title="{{ $vid['title'] }}">{{ $vid['title'] }}</a>
											</h2>
											<div class="post-meta">
												<ul>
													<li><a href="#"><i class="fa fa-user"></i> @if($vid['author']) {!! $vid['author'] !!} @endif</a></li>
													<li><a href="#"><i class="icon icon-clock"></i> {{ Helper::time_ago($vid['date']) }}</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div><!--/ Featured post end -->
							</div><!-- Item 2 end -->
						</div><!-- Col 4 end -->
						@else						
						<div class="col-lg-4 col-md-4">
				      		<div class="post-block-style clearfix">
								<div class="post-thumb">
									<img class="img-fluid" src="{{ $vid['images']['thumbnail'] }}" alt="Thumbnail" style="object-fit: cover; width: 297px; height: 223px;">
									<a href="{{ url("/{$vid['slug']}-{$vid['id']}") }}?utm_source=video_desktop" title="{{ $vid['title'] }}">
										<div class="video-icon">
											<i class="fa fa-play"></i>
										</div>
									</a>
								</div><!-- Post thumb end -->
								<div class="post-content">
									<h2 class="post-title title-small">
										<a href="{{ url("/{$vid['slug']}-{$vid['id']}") }}?utm_source=video_desktop" title="{{ $vid['title'] }}">{{ $vid['title'] }}</a>
									</h2>
								</div><!-- Post content end -->
							</div><!-- Post Block style end -->
			      		</div>							

                        @endif
                        @php $vid_loop++; @endphp
                        @endforeach												
					</div><!-- row end -->
				</div><!-- col-lg-8 -->
			</div><!-- row end -->
			<div class="gap-50"></div>
			<div class="col-12 mt-3">
				<div class="load-more-btn text-center">
						<a class="btn" href="https://www.youtube.com/SoloposTV" target="_blank"> Load More ... </a>
				</div>
			</div><!-- col end -->			
		</div><!-- container end -->
	</section><!-- category-layout end -->

@endsection