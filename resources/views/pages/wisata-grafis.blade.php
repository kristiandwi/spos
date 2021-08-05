@extends('layouts.app')
@section('content')
	<section class="main-content category-layout-1 pt-0">
		<div class="container">
			<div class="post-header-area" align="center">
				<h2 class="post-title title-lg">Info Grafis Wisata Joglosemar</h2>
			</div>	
			
			<div class="gap-50"></div>
			
			<div class="row ts-gutter-30">
				@php $f_loop = 1; @endphp
				@foreach($grafis as $post)				
				<div class="col-lg-4 col-md-4">
					<div class="post-block-style post-overaly-style post-md" style="background-image:url({{ $post['images']['thumbnail'] }})">
						<div class="featured-post">
							<a href="{{ url("/{$post['slug']}-{$post['id']}") }}" title="{{ $post['title'] }}" class="image-link">&nbsp;</a>
							<div class="overlay-post-content">
								<div class="post-content">
									<div class="grid-category">
										<a class="post-cat lifestyle" href="{{ url("/{$post['category']}") }}">Galeri Foto</a>
									</div>
		
									<h2 class="post-title title-md">
										<a href="{{ url("/{$post['slug']}-{$post['id']}") }}" title="{{ $post['title'] }}">{{ $post['title'] }}</a>
									</h2>
									<div class="post-meta">
										<ul>
											<li><a href="#"><i class="fa fa-user"></i> @if($post['author']) {!! $post['author'] !!} @endif </a></li>
											<li><a href="#"><i class="icon icon-clock"></i> {{ Helper::time_ago($post['date']) }} </a></li>
										</ul>
									</div>
								</div>
							</div>
						</div><!--/ Featured post end -->
					</div><!-- Post block a end -->
				</div><!-- Col 1 end -->	
				@php $f_loop++; @endphp @endforeach 																
			</div><!-- row end -->
			
			<div class="gap-30 d-none d-md-block"></div>
			<div class="row">
				<div class="col-12" align="center">
					<ul class="ts-pagination">
						<li><a href="#" class="active">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
					</ul>
				</div>
			</div>
		</div><!-- container end -->
	</section><!-- category-layout end -->

@endsection