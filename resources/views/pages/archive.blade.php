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
							<i class="fa fa-angle-right"></i> {{ $header['title'] }}
						</li>
						{{-- <li style="text-transform: capitalize;">
						    <i class="fa fa-angle-right"></i> 
						</li> --}}
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
						<span class="title-angle-shap"> News Feed "{{ $header['title'] }}" </span>
					</h2>
					<div class="row ts-gutter-20 align-items-center">
						@php
	                        $loop_no = 1;
	                    @endphp
                        @foreach ($data as $posts)
                            <div class="col-12 mb-10">
                                <div class="post-block-style">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="post-thumb post-list_feed">
                                                <img src="{{ $posts['images']['thumbnail'] }}" alt="{{ $posts['title'] }}">
                                                <a class="post-cat-box {{ $posts['category'] }}" href="https://www.solopos.com/{{ $posts['category'] }}">{{ $posts['category'] }}</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 pl-0">
                                            <div class="post-content">
                                                <h2 class="post-title title-md">
                                                <a href="{{ url("/{$posts['slug']}-{$posts['id']}") }}">{{ $posts['title'] }}</a>
                                                </h2>
                                                <div class="post-meta mb-7">
                                                    <span class="post-author"><a href="#"><i class="fa fa-user"></i> @if($posts['author']) {!! $posts['author'] !!} @endif</a></span>
                                                    <span class="post-date"><i class="fa fa-clock-o"></i> {{ $posts['date'] }} WIB</span>
                                                </div>
                                                <p>@if($posts['summary']) {!! htmlspecialchars_decode($posts['summary']) !!} @endif</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						@endforeach
					</div>					
				</div><!-- col-lg-8 -->

				<!-- sidebar start -->
				@include('includes.sidebar')
				<!-- sidebar end -->
			</div><!-- row end -->
		</div><!-- container end -->
	</section><!-- category-layout end -->
@endsection