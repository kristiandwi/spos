@extends('layouts.app')
@section('content')
	<!-- breadcrumb -->
	<div class="breadcrumb-section">
		<div class="container ">
			<div class="row">
				<div class="col-12">
					<ol class="breadcrumb">
						<li>
							<a href="{{ url('/') }}"><i class="fa fa-home"></i></a> 
							<i class="fa fa-angle-right"></i> {{ $category }}
						</li>
						<li style="text-transform: capitalize;">
						    <i class="fa fa-angle-right"></i> {{ $subcategory }}
						</li>
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
					<h2 class="block-title">
						<span class="title-angle-shap"> News Feed "{{ $category }} &raquo; {{ $subcategory }}" </span>
					</h2>
					<div class="row ts-gutter-20 align-items-center loadmore-frame">
						@php
	                        $loop_no = 1;
	                    @endphp
                        @foreach ($breakingcat as $posts)
                            @if($posts['subcategory'] == $subcategory)
                            <div class="col-12 mb-10 content-box">
                                <div class="post-block-style">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="post-thumb post-list_feed">
                                                <img src="{{ $posts['images']['thumbnail'] }}" alt="{{ $posts['title'] }}">
                                                <a class="post-cat-box {{ $category }}" href="https://www.solopos.com/{{ $category }}">{{ $subcategory }}</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 pl-0">
                                            <div class="post-content">
                                                <h2 class="post-title title-md">
                                                <a href="{{ url("/{$posts['slug']}-{$posts['id']}") }}">{{ $posts['title'] }}</a>
                                                </h2>
                                                <div class="post-meta mb-7">
                                                    <span class="post-author"><a href="#"><i class="fa fa-user"></i> @if($posts['author']) {!! $posts['author'] !!} @endif</a></span>
                                                    <span class="post-date"><i class="fa fa-clock-o"></i> {{ Helper::time_ago($posts['date']) }}</span>
                                                </div>
                                                <p>@if($posts['summary']) {!! $posts['summary'] !!} @endif</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
						@endforeach

						<div class="col-12 mt-3 align-items-center" style="text-align: center;">
				            <a href="javascript:void(0)" class="btn btn-primary btn-sm load-more" title="Kumpulan Berita">Lihat Berita Lainnya</a>
				            <a href="https://m.solopos.com/arsip" class="btn btn-primary btn-sm load-more-arsip" style="display: none;" title="Kumpulan Berita">Arsip Berita</a>
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