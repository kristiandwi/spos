@extends('layouts.app')
@section('content')
	
	<section class="block-wrapper">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-10">
				<div class="col-lg-8 col-md-12">
					<div class="owl-carousel owl-theme featured-slider h2-feature-slider">
						@php $a_loop = 1; @endphp
						@foreach($headline as $h)
						@if($a_loop <=5)
						<div class="item post-overaly-style post-md" style="background-image:url({{ $h['images']['thumbnail'] }}); height: 375px;">
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

					<div class="gap-10"></div>
					<img src="{{ asset('/images/bob/banner-2.png') }}">
					<div class="gap-10"></div>

					<h2 class="block-title">
						<span class="title-angle-shap"> Berita Terkini </span>
					</h2>
					<div class="row ts-gutter-20 align-items-center">
						@php $b_loop = 1; @endphp
						@foreach($artikel as $ar)
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
						@php $b_loop++; @endphp 
						@endforeach	
					</div>
					<div class="gap-30"></div>
					

				</div><!-- Content Col end -->

				@include('includes.sidebar-bob')

	
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Section Terkini End -->

@endsection