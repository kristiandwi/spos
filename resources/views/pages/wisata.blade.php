@extends('layouts.app')
@section('content')
	
	<section class="featured-post-area no-padding">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-20">
				<div class="col-lg-12 col-md-12">
					<div class="owl-carousel owl-theme featured-slider h2-feature-slider">
						@php $a_loop = 1; @endphp
						@foreach($headline as $h)
						@if($a_loop <=5)
						<div class="item post-overaly-style post-md" style="background-image:url({{ $h['images']['thumbnail'] }}); height: 475px;">
							<div class="featured-post">
								<a class="image-link" href="{{ url("/{$h['slug']}-{$h['id']}") }}" title="{{ $h['title'] }}">&nbsp;</a>
								<div class="overlay-post-content">
									<div class="post-content">
										<div class="grid-category">
											<a class="post-cat {{ $h['category'] }}" href="{{ url("/{$h['category']}") }}">{{ $h['category'] }}</a>
										</div>
	
										<h2 class="post-title title-md">
											<a href="{{ url("/{$h['slug']}-{$h['id']}") }}" title="{{ $h['title'] }}">{{ $h['title'] }}</a>
										</h2>
										<div class="post-meta">
											<ul>
												<li><a href="#"><i class="fa fa-user"></i>@if($h['author']) {!! $h['author'] !!} @endif</a></li>
												<li><a href="#"><i class="icon icon-clock"></i> {{ Helper::time_ago($h['date']) }}</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div><!--/ Featured post end -->
						</div><!-- Item 1 end -->
                        
						@endif 
						@php $a_loop++; @endphp 
						@endforeach  
                               
					</div>
				</div><!-- Col 8 end -->


			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Feature post end -->

	<!-- Section Trending start-->
	<section class="trending-slider pb-0">
		<div class="container pl-0 pr-0">
			<div class="ts-grid-box">
				<h2 class="block-title">
					 <span class="title-angle-shap"> Fokus </span>
				</h2>
				<div class="owl-carousel dot-style2" id="trending-slider">
					@php $p_loop = 1; @endphp
					@foreach($artikel as $posts) 
					@if($p_loop <=5)
				
					<div class="item post-overaly-style post-md" style="background-image:url({{ $posts['images']['thumbnail'] }})">
						<a class="image-link" href="{{ url("/{$posts['slug']}-{$posts['id']}") }}" title="{{ $posts['title'] }}">&nbsp;</a>
						<div class="overlay-post-content">
							<div class="post-content">
								<div class="grid-category">
									<a class="post-cat {{ $posts['category'] }}" href="{{ url("/{$posts['category']}") }}">{{ $posts['category'] }}</a>
								</div>

								<h2 class="post-title">
									<a href="{{ url("/{$posts['slug']}-{$posts['id']}") }}" title="{{ $posts['title'] }}">{{ $posts['title'] }}</a>
								</h2>
								<div class="post-meta">
									<ul>
										<li><a href="#"><i class="fa fa-user"></i>@if($posts['author']) {!! $posts['author'] !!} @endif</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div><!-- Item 1 end -->
                    @endif
                    @php $p_loop++; @endphp
                    @endforeach
				</div>
				<!-- most-populers end-->
			</div>
			<!-- ts-populer-post-box end-->
		</div>
		<!-- container end-->
	</section>
	<!-- section trending End -->

	<section class="block-wrapper">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-30">
				<div class="col-lg-8 col-md-12">
					<h2 class="block-title">
						<span class="title-angle-shap"> Berita Terkini </span>
					</h2>
					<div class="row ts-gutter-20 align-items-center">
						@php $b_loop = 1; @endphp
						@foreach($artikel as $ar)
						@if($b_loop <= 5)
						<div class="col-12 mb-10">
							<div class="post-block-style">
								<div class="row">
									<div class="col-md-5">
										<div class="post-thumb post-list_feed">
											<img src="{{ $ar['images']['thumbnail'] }}" alt="{{ $ar['title'] }}" style="object-fit: cover; height: 167px; width: 250px;">
											<a class="post-cat-box {{ $ar['category'] }}" href="{{ url("/{$ar['category']}") }}">{{ $ar['category'] }}</a>
										</div>
									</div>
									<div class="col-md-7 pl-0">
										<div class="post-content">
											<h2 class="post-title title-md">
											<a href="{{ url("/{$ar['slug']}-{$ar['id']}") }}" title="{{ $ar['title'] }}">{{ $ar['title'] }}</a>
											</h2>
											<div class="post-meta mb-7">
												<span class="post-author"><a href="#"><i class="fa fa-user"></i>@if($ar['author']) {!! $ar['author'] !!} @endif</a></span>
												<span class="post-date"><i class="fa fa-clock-o"></i> {{ Helper::time_ago($ar['date']) }}</span>
											</div>
											<p>@if($ar['summary']) {!! $ar['summary'] !!} @endif</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endif
						@php $b_loop++; @endphp 
						@endforeach	
					</div>
					<div class="gap-30"></div>
					<div class="block style3 text-light mb-20 mt-20">
						<h2 class="block-title">
							<span class="title-angle-shap"> #Espospedia / Info Grafis  </span>
						</h2>
						<div class="row text-light ts-gutter-30">
							@php $gr_loop = 1; @endphp
							@foreach($grafis as $gr)
							@if($gr_loop <=6)						
							<div class="col-md-6">
								<div class="post-overaly-style post-sm" style="background-image:url({{ $gr['images']['thumbnail'] }})">
									<a href="{{ url("/{$gr['slug']}-{$gr['id']}") }}" title="{{ $posts['title'] }}">&nbsp;</a>
									<div class="overlay-post-content">
										<div class="post-content">
											<div class="grid-category">
												<a class="post-cat espospedia>" href="{{ url("/{$posts['category']}") }}">{{ $posts['title'] }}</a>
											</div>
										</div>
									</div>
								</div><!-- post end -->
							</div><!-- end col -->
							@endif
							@php $gr_loop++; @endphp
							@endforeach	
						</div><!-- end row -->
					</div>

					<div class="gap-30"></div>

					<div class="row ts-gutter-20 loadmore-frame">
						@php $c_loop = 1; @endphp
						@foreach($artikel as $art)
						@if($c_loop >5)
						<div class="col-12 mb-10 content-box">
							<div class="post-block-style">
								<div class="row">
									<div class="col-md-5">
										<div class="post-thumb post-list_feed">
											<img src="{{ $art['images']['thumbnail'] }}" alt="{{ $art['title'] }}" style="object-fit: cover; height: 167px; width: 250px;">
											<a class="post-cat-box {{ $art['category'] }}" href="{{ url("/{$art['category']}") }}">{{ $art['category'] }}</a>
										</div>
									</div>
									<div class="col-md-7 pl-0">
										<div class="post-content">
											<h2 class="post-title title-md">
											<a href="{{ url("/{$art['slug']}-{$ar['id']}") }}" title="{{ $art['title'] }}">{{ $art['title'] }}</a>
											</h2>
											<div class="post-meta mb-7">
												<span class="post-author"><a href="#"><i class="fa fa-user"></i>@if($art['author']) {!! $art['author'] !!} @endif</a></span>
												<span class="post-date"><i class="fa fa-clock-o"></i> {{ Helper::time_ago($art['date']) }}</span>
											</div>
											<p>@if($art['summary']) {!! $art['summary'] !!} @endif</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endif
						@php $c_loop++; @endphp
                    	@endforeach	
						<div class="col-12 mt-3 align-items-center" style="text-align: center;">
				            <a href="javascript:void(0)" class="btn btn-primary btn-sm load-more" title="Kumpulan Berita">Lihat Berita Lainnya</a>
				            <a href="https://solopos.com/arsip" class="btn btn-primary btn-sm load-more-arsip" style="display: none;" title="Kumpulan Berita">Arsip Berita</a>
						</div><!-- col end -->
					</div>									
				</div><!-- Content Col end -->

				@include('includes.sidebar-bob')

	
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Section Terkini End -->

@endsection