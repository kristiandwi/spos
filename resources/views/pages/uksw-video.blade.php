@extends('layouts.app')
@section('content')
	<section class="main-content category-layout-1 pt-0">
		<div class="container">
			<div class="post-header-area" align="center">
				<h2 class="post-title title-lg">Galeri Video UKSW Salatiga</h2>
			</div>
			<div class="gap-30"></div>	
			<div class="col-lg-12">
				<div class="row ts-gutter-30">	
				@foreach($video as $item)
				@foreach(explode('yt:video:',$item['id']) as $ids)@endforeach
				<div class="col-lg-4 col-md-4">
					<div class="post-block-style clearfix">
						<div class="post-thumb">
							<img class="img-fluid" src="https://i1.ytimg.com/vi/{{ $ids }}/mqdefault.jpg" alt="Thumbnail" style="object-fit: cover; width: 297px; height: 223px;">
							<a class="popup cboxElement" href="https://www.youtube.com/embed/{{ $ids }}?rel=0&vq=hd1080&autoplay=1&amp;loop=1">
								<div class="video-icon">
									<i class="fa fa-play"></i>
								</div>
							</a>
						</div><!-- Post thumb end -->
						<div class="post-content">
							<h2 class="post-title title-small">
								<a href="https://www.youtube.com/embed/{{ $ids }}?rel=0&vq=hd1080&autoplay=1&amp;loop=1" title="{{$item['title']}}">{{$item['title']}}</a>
							</h2>
						</div><!-- Post content end -->
					</div><!-- Post Block style end -->
				</div>	
				@endforeach

				<div class="gap-50"></div>
				<div class="col-12 mt-3">
					<div class="load-more-btn text-center">
							<a class="btn" href="https://www.youtube.com/channel/UCSNKgXlbQ7x0dMQ0UsPi3gw" target="_blank"> Load More ... </a>
					</div>
				</div><!-- col end -->
		
			</div>
		</div><!-- container end -->
	</section><!-- category-layout end -->

@endsection