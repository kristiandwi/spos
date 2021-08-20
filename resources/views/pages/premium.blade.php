@extends('layouts.app')
@section('content')
    <section class="featured-post-area no-padding">
        <div class="container pl-0 pr-0">
            <div class="row ts-gutter-20">
                <div class="col-lg-8 col-md-12 pad-r">
                    <div class="owl-carousel owl-theme featured-slider h2-feature-slider">					
                    @php $hl_loop = 1; @endphp
                    @foreach($premium as $hl) 
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
                        
                    @endif 
                    @php $hl_loop++; @endphp 
                    @endforeach   
                    </div>
                </div><!-- Col 8 end -->
                @php $pc_loop = 1; @endphp
                @foreach($premium as $pc) 
                @if($pc_loop == 6)
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

    <!-- Section Terkini Start -->
	<section class="block-wrapper">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-30">
				<div class="col-lg-8 col-md-12">
                    					<!-- Block Konten Premium -->
					<div class="block style2 text-light mb-20 mt-10">
						<h2 class="block-title">
							<span class="title-angle-shap"> Espos Premium</span>
						</h2>

						<div class="row">
				            @php $pc_loop = 1; @endphp
				            @foreach($premium as $pc) @if($pc_loop <= 12)

				            @if($pc_loop == 7)
							<div class="col-lg-6 col-md-6">
								<div class="post-block-style">
									<div class="post-thumb">
										<a href="{{ url("/{$pc['slug']}-{$pc['id']}") }}?utm_source=premium_desktop" title="{{ $pc['title'] }}">
											<img src="{{ $pc['images']['thumbnail'] }}" alt="{{ $pc['title'] }}" style="object-fit: cover; width: 266px; height: 178px;">
										</a>
										<div class="grid-cat">
											<a class="post-cat premium" href="https://www.solopos.com/premium">Premium</a>
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

							@if( $pc_loop > 7 && $pc_loop <= 12 )

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
							@if($pc_loop == 12)
								</div><!-- .row -->
							</div><!-- Col 2 end -->
						@endif
                        @endif
                        @php $pc_loop++; @endphp
                    @endforeach
					</div><!-- Row end -->
					</div>
                    <!-- Block Konten Premium end -->	
                    
					<h2 class="block-title">
						<span class="title-angle-shap"> News Feed Premium </span>
					</h2>
					<div class="row ts-gutter-20 loadmore-frame">
			          @php $no = 1; @endphp
			          @foreach($premium as $post)
                        @if($no > 12)
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
                        @php $no++ @endphp
                        @endforeach	
						<div class="col-12 mt-3 align-items-center" style="text-align: center;">
				            <a href="javascript:void(0)" class="btn btn-primary btn-sm load-more" title="Kumpulan Berita">Lihat Berita Lainnya</a>
				            <a href="https://m.solopos.com/arsip" class="btn btn-primary btn-sm load-more-arsip" style="display: none;" title="Kumpulan Berita">Arsip Berita</a>
						</div><!-- col end -->
					</div>									
				</div><!-- Content Col end -->

				<!-- sidebar home -->
				@include('includes.sidebar-premium')

				<!-- Sidebar Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section>
    <!-- Section Terkini End -->

@endsection