@extends('layouts.app')
@section('content')
	<!-- breadcrumb -->
	<div class="breadcrumb-section">
		<div class="container ">
			<div class="row">
				<div class="col-12">
				<ol class="breadcrumb">
					<li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a> 
					<i class="fa fa-angle-right"></i><a href="">Author</a>
				</ol>
				</div>
			</div><!-- row end -->
		</div><!-- container end -->
	</div>
	<!-- breadcrumb end -->

	


	<section class="main-content pt-0">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-30">
				<div class="col-lg-8">

					<div class="row">
						<div class="col-12">
							<div class="author-box d-flex mt-0">
								<div class="author-img d-flex">
									<img src="{{ $header['avatar'] }}" alt="{{ $header['name'] }}">
								</div>
								<div class="author-info">
									<h3>{{ $header['name'] }}</h3>
									<div class="author-counter pull-right d-none d-md-block">
										
									</div>
									<p class="author-url">
										<a href="#">{{ $header['website'] }}</a>
									</p>
									<p>{{ $header['deskripsi'] }}</p>
									<div class="author-social">
										<span>Follow Me: </span>
										<a href=""><i class="fa fa-twitter"></i></a>
										<a href=""><i class="fa fa-facebook"></i></a>
										<a href=""><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
									</div>
								</div>
							</div><!-- author box end -->
						</div><!-- col end -->
					</div><!-- row end -->
					<div class="gap-50"></div>

					<h2 class="block-title">
						<span class="title-angle-shap"> Daftar Tulisan <em>{{ $header['name'] }}</em> </span>
					</h2>

					<!-- Terkini Wrapper -->
					<div class="row ts-gutter-20 align-items-center loadmore-frame">
						@php $b_loop = 1; @endphp
						@foreach ($breaking as $item)
						@php           
						$thumb = $item['featured_image']['thumbnail'] ?? 'https://www.solopos.com/images/no-thumb.jpg'; 
            			$medium = $item['featured_image']['medium'] ?? 'https://www.solopos.com/images/no-medium.jpg';
						$title = html_entity_decode($item['title']);
						@endphp          
							  
						<!-- Terkini Post-->
						<div class="col-12 mb-10">
							<div class="post-block-style">
								<div class="row">
									<div class="col-md-5">
										<div class="post-thumb post-list_feed">
										<img src="{{ $thumb }}" >
										<a class="post-cat-box {{ $item['catsname'] }}" href="#">{{ $item['catsname'] }}</a>
										</div>
									</div>
									
									<div class="col-md-7 pl-0">
										<div class="post-content">
											<h2 class="post-title title-md">
											<a class="post-title" href="{{ url("/{$item['slug']}-{$item['id']}") }}" title="{{ $title }}">{{ $title }}</a></h2>
											<div class="post-meta mb-7">
											<span class="post-author"><a href="#"><i class="fa fa-user"></i> {{ $item['penulis'] ?? ''}} </a></span>
											<span class="post-date"><i class="fa fa-clock-o"></i> {{ Carbon\Carbon::parse($item['date'])->translatedFormat('l, j F Y') }}</span>
											</div>
											<p>{{$item['summary']}}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
							@php $b_loop++ @endphp
							@endforeach
							<div class="col-12 mt-3 align-items-center" style="text-align: center;">
				            <a href="javascript:void(0)" class="btn btn-primary btn-sm load-more" title="Kumpulan Berita">Lihat Berita Lainnya</a>
				            <a href="https://www.solopos.com/arsip" class="btn btn-primary btn-sm load-more-arsip" style="display: none;" title="Kumpulan Berita">Arsip Berita</a>
						</div><!-- col end -->
					</div>					
				</div><!-- col-lg-8 -->

				

				<!-- sidebar start -->
				@include('includes.sidebar')
				<!-- sidebar end -->
			</div><!-- row end -->
		</div><!-- container end -->
	</section><!-- category-layout end -->
@endsection