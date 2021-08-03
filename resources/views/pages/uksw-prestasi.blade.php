@extends('layouts.app')
@section('content')
    <!-- Section Terkini Start -->
	<section class="block-wrapper">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-30">
				<div class="col-lg-8 col-md-12">
					<h2 class="block-title">
						<span class="title-angle-shap"> Prestasi UKSW</span>
					</h2>
					<div class="row ts-gutter-20 align-items-center">
			          @php $no = 1; @endphp
			          @foreach($prestasi as $post) 
						<div class="col-12 mb-10 content-box">
							<div class="post-block-style">
								<div class="row">
									<div class="col-md-5">
										<div class="post-thumb post-list_feed">
											<img src="{{ $post['images']['thumbnail'] }}" alt="{{ $post['title'] }}" style="object-fit: cover; height: 167px; width: 250px;">
											<a class="post-cat-box {{ $post['category'] }}" href="https://www.solopos.com/{{ $post['category'] }}">{{ $post['category'] }}</a>
										</div>
									</div>
									<div class="col-md-7 pl-0">
										<div class="post-content">
											<h2 class="post-title title-md">
											<a href="{{ url("/{$post['slug']}-{$post['id']}") }}?utm_source=terkini_desktop" title="{{ $post['title'] }}">{{ $post['title'] }}</a>
											</h2>
											<div class="post-meta mb-7">
												<span class="post-author"><a href="#"><i class="fa fa-user"></i>@if($post['author']) {!! $post['author'] !!} @endif</a></span>
												<span class="post-date"><i class="fa fa-clock-o"></i> {{ Helper::time_ago($post['date']) }}</span>
											</div>
											<p>@if($post['summary']) {!! $post['summary'] !!} @endif</p>
										</div>
									</div>
								</div>
							</div>
						</div>
                        @php $no++; @endphp
                        @endforeach	
						<div class="col-12 mt-3 align-items-center" style="text-align: center;">
				            <a href="javascript:void(0)" class="btn btn-primary btn-sm load-more" title="Kumpulan Berita">Lihat Berita Lainnya</a>
				            <a href="https://www.solopos.com/arsip" class="btn btn-primary btn-sm load-more-arsip" style="display: none;" title="Kumpulan Berita">Arsip Berita</a>
						</div><!-- col end -->
					</div>									
				</div><!-- Content Col end -->

				<!-- sidebar home -->
				@include('includes.sidebar-uksw')

				<!-- Sidebar Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section>
    <!-- Section Terkini End -->


@endsection