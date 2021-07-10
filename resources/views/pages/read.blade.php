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
							<i class="fa fa-angle-right"></i>
						</li>
						<li>{{ $data['properties']['category']['parent'] }}</li>
						<li><i class="fa fa-angle-right"></i> {{ $data['content']['title'] }}</li>
					</ol>		
				</div>
			</div><!-- row end -->
		</div><!-- container end -->
	</div>
	<!-- breadcrumb end -->
	<!-- mfunc setPostViews(get_the_ID()); --><!--/mfunc-->
	<section class="main-content pt-0">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-30">
				<div class="col-lg-8">
					<div class="single-post">
						<div class="post-header-area">
							<h1 class="post-title title-lg">{{ $data['content']['title'] }}</h1>
							<p>{{ $data['content']['summary'] }}</p>
							<ul class="post-meta">
								<li>
									<a class="post-cat {{ $data['properties']['category']['parent'] }}" href="{{ $data['properties']['category']['parent'] }}">{{ $data['properties']['category']['parent'] }}</a>
								</li>
								<li class="post-author">
									<a href="#"><strong>{{ $data['authors']['author'] }}</strong></a>
								</li>
								<li><a href="#"><i class="fa fa-clock-o"></i>{{ Helper::indo_datetime($data['created']) }} WIB</a></li>
								<li><a href="#"><i class="fa fa-eye"></i><!-- reading time --></a></li>
								<li class="social-share">
									<i class="shareicon fa fa-share"></i>
									<ul class="social-list">
										<li><a data-social="facebook" class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a></li>
										<li><a data-social="twitter" class="twitter" href="https://twitter.com/home?status=" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a></li>
										<li><a data-social="whatsapp" class="whatsapp" href="whatsapp://send?text=** |  |  _selengkapnya baca di sini_ "><i class="fa fa-whatsapp"></i></a></li>
										<li><a data-social="email" class="email" href="mailto:?subject=Artikel Menarik dari Solopos.com tentang &amp;body=Artikel ini sangat berguna bagi Anda, silahkan klik link berikut ini "><i class="fa fa-envelope"></i></a></li>
									</ul>
								</li>
							</ul>
						</div><!-- post-header-area end -->
						<div class="post-content-area">
							@if(empty($video))
							<div class="post-media mb-20">
								<a href="{{ $data['images']['content']}}" class="gallery-popup cboxElement">
									<img src="{{ $data['images']['content']}}" alt="@if(!empty($data['images']['caption'])) {{ htmlentities($data['images']['caption']) }} @endif" class="img-fluid">
								</a>
								<span>
                                    @if(!empty($data['images']['caption']))
                                        <p>SOLOPOS.COM - {{ htmlentities($data['images']['caption']) }}</p>
                                    @else
                                        <p>SOLOPOS.COM - Panduan Informasi dan Inspirasi</p>
                                    @endif    
                                </span>
							</div>
							@else
							<div class="post-media mb-20">
								<iframe id="ytplayer" type="text/html" width="640" height="360" src="https://www.youtube.com/embed/{{ $video }}?autoplay=1&origin=https://solopos.com" frameborder="0"></iframe>
							</div>
							@endif

                            <!-- ads parallax -->

                             {!! htmlspecialchars_decode($data['content']['content']) !!}

            			<?php //include (TEMPLATEPATH . '/ads/ads-detail-1.php'); ?>
							
						</div><!-- post-content-area end -->
						<div style="margin: 20px 0;">
                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <ins class="adsbygoogle"
                                    style="display:block; text-align:center;"
                                    data-ad-layout="in-article"
                                    data-ad-format="fluid"
                                    data-ad-client="ca-pub-4969077794908710"
									data-ad-slot="6460499125"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                        </div>

				        <div class="container social-share-btn d-flex align-items-center flex-wrap">
				          SHARE : 
				          <a class="btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a>
				          <a class="btn-twitter" href="https://twitter.com/home?status=" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a>
				          <a class="btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
				          <a class="btn-whatsapp" href="whatsapp://send?text=** |  |  _selengkapnya baca di sini_ "><i class="fa fa-whatsapp"></i></a>
				          <a class="btn-quora" href="mailto:?subject=Artikel Menarik dari Solopos.com tentang &amp;body=Artikel ini sangat berguna bagi Anda, silahkan klik link berikut ini "><i class="fa fa-envelope"></i></a>
				        </div> 

						<div class="post-footer">							
							<div class="author-box d-flex">
								<div class="author-img">
                                    @if(!empty($data['authors']['avatar']))
                                        <img src="{{ htmlentities($data['authors']['avatar']) }}" alt="Profile">
                                    @else
                                        <img src="{{ asset('img/bg-img/3.jpg') }}" alt="Profile">
                                    @endif 									
								</div>  								
								<div class="author-info">
									<h3><a href="https://www.solopos.com/author/" target="_blank">{{ $data['authors']['editor'] }}</a></h3>									
									
									<p>Jurnalis di Solopos Group. Menulis konten di Solopos Group yaitu Harian Umum Solopos, Koran Solo, Solopos.com.</p>
									
						            <div class="post-list">
						               <a href="https://www.solopos.com/author/" target="_blank">Lihat Artikel Saya Lainnya</a>
						            </div> 									
									<div class="author-social">
										<span>Follow Me: </span>
						                <a href=""><i class="fa fa-twitter"></i></a>
						                <a href=""><i class="fa fa-facebook"></i></a>
						                <a href=""><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
									</div>									
								</div>
							</div><!-- author box -->

							<div class="gap-30"></div>
							<div class="tag-lists">
								<span>Tags: </span>
                                @if(isset($data['tags']['tag']))
                                    @foreach($data['tags']['tag'] as $tag)
                                    @php
                                        $tag_name = $tag;
                                        $tag_slug = str_replace(' ', '-',$tag)
                                    @endphp
                                        <a href="{{ url("/tag/{$tag_slug}") }}">{{ $tag_name }}</a>
                                    @endforeach
                                @endif 
							</div><!-- tag lists -->

						</div>
						
					</div><!-- single-post end -->

					<!-- ads under article -->
					
                    <div class="gap-50 d-none d-md-block"></div>

					<!-- realted post start -->
					<div class="related-post">
						<h2 class="block-title">
							<span class="title-angle-shap"> Berita Terkait </span>
						</h2>
						<div class="row">
                        @foreach($related as $rel)
                                            
                        <!-- related Post-->
                        <div class="col-md-4">
                            <div class="post-block-style">
                                <div class="post-thumb">
                                    <a class="post-title" href="{{ url("/{$rel['slug']}-{$rel['id']}") }}?utm_source=bacajuga_desktop" title="{{ $rel['title']['rendered'] }}">
                                        <img src="{{ $rel['one_call']['featured_list']['source_url'] }}" alt="{{ $rel['one_call']['featured_list']['caption'] }}" style="object-fit: cover; width: 195px; height: 128px;">
                                    </a>
                                    <div class="grid-cat">
                                        <a class="post-cat {{ $rel['one_call']['categories_list'][0]['slug'] }}" href="https://m.solopos.com/{{ $rel['one_call']['categories_list'][0]['slug'] }}">{{ $rel['one_call']['categories_list'][0]['name'] }}</a>
                                    </div>
                                </div>
                                
                                <div class="post-content">
                                    <h2 class="post-title">
                                        <a class="post-title" href="{{ url("/{$rel['slug']}-{$rel['id']}") }}?utm_source=bacajuga_desktop" title="{{ $rel['title']['rendered'] }}">{{ $rel['title']['rendered'] }}</a>
                                    </h2>
                                    <div class="post-meta mb-7 p-0">
                                        
                                    </div>
                                </div><!-- Post content end -->
                            </div>
                        </div><!-- col end -->
                        
                        @endforeach												
						</div><!-- row end -->
					</div>
					<!-- realted post end -->

					<div class="gap-50 d-none d-md-block"></div>

					<!-- Block Konten Premium -->
					<div class="block style2 text-light mb-20 mt-10">
						<h2 class="block-title">
							<span class="title-angle-shap"> Espos Premium</span>
						</h2>

						<div class="row">
				            @php $pc_loop = 1; @endphp
				            @foreach($premium as $pc) @if($pc_loop <= 5)

				            @if($pc_loop == 1)
							<div class="col-lg-6 col-md-6">
								<div class="post-block-style">
									<div class="post-thumb">
										<a href="{{ url("/{$pc['slug']}-{$pc['id']}") }}" title="{{ $pc['title'] }}">
											<img src="{{ $pc['images']['thumbnail'] }}" alt="{{ $pc['title'] }}" style="object-fit: cover; object-position: center; width: 266px; height: 178px;">
										</a>
										<div class="grid-cat">
											<a class="post-cat premium" href="{{ url('/premium') }}">Premium</a>
										</div>
									</div>
									
									<div class="post-content mt-3">
										<h2 class="post-title title-md">
											<a href="{{ url("/{$pc['slug']}-{$pc['id']}") }}" title="{{ $pc['title'] }}">{{ $pc['title'] }}</a>
										</h2>
										<p>{{ $pc['summary'] }}</p>
										<div class="post-meta mb-7">
											<span class="post-author"><a href="#"><i class="fa fa-user"></i> @if($pc['author']) {!! $pc['author'] !!} @endif</a></span>
											<span class="post-date"><i class="fa fa-clock-o"></i>{{ Helper::time_ago($pc['date']) }}</span>
										</div>
									</div><!-- Post content end -->
								</div><!-- Post block a end -->
							</div><!-- Col 1 end -->

							<div class="col-lg-6 col-md-6">
								<div class="row ts-gutter-20">								
							@endif
							@if( $pc_loop > 1 && $pc_loop <= 5 )

									<div class="col-md-6">
										<div class="post-block-style">
											<div class="post-thumb">
												<a href="{{ url("/{$pc['slug']}-{$pc['id']}") }}" title="{{ $pc['title'] }}">
													<img src="{{ $pc['images']['thumbnail'] }}" alt="{{ $pc['title'] }}" style="object-fit: cover; object-position: center; width: 118px; height: 84px;">
												</a>
											</div>
											
											<div class="post-content">
												<h2 class="post-title mb-2">
													<a href="{{ url("/{$pc['slug']}-{$pc['id']}") }}" title="{{ $pc['title'] }}">{{ $pc['title'] }}</a>
												</h2>
											</div><!-- Post content end -->
										</div><!-- Post block a end -->
									</div><!-- .col -->
								
							@endif
							@if($pc_loop == 5)
								</div><!-- .row -->
							</div><!-- Col 2 end -->
						@endif @endif @php $pc_loop++; @endphp @endforeach
						</div><!-- Row end -->
					</div><!-- Block Konten Premium end -->	
					
					<!-- Composite Start -->
					<div id="M628318ScriptRootC990853"></div>
					<script src="https://jsc.mgid.com/s/o/solopos.com.990853.js" async></script>
					<!-- Composite End  -->  
					
					<div class="gap-50 d-none d-md-block"></div>

					<!-- Begin Dable bottom_new / For inquiries, visit http://dable.io -->
                    <div id="dablewidget_x7y0b0o6" data-widget_id="x7y0b0o6">
                    <script>
                    (function(d,a,b,l,e,_) {
						if(d[b]&&d[b].q)return;d[b]=function(){(d[b].q=d[b].q||[]).push(arguments)};e=a.createElement(l);
						e.async=1;e.charset='utf-8';e.src='//static.dable.io/dist/plugin.min.js';
                         _=a.getElementsByTagName(l)[0];_.parentNode.insertBefore(e,_);
                        })(window,document,'dable','script');
                        dable('setService', 'solopos.com');
                        dable('sendLogOnce');
                        dable('renderWidget', 'dablewidget_x7y0b0o6');
                    </script>
                    </div>
                    <!-- End bottom_new / For inquiries, visit http://dable.io -->

					<div class="gap-50 d-none d-md-block"></div>
					
					<div>
						<h2 class="block-title">
							<span class="title-angle-shap"> Berita Terkini </span>
						</h2>
						<div class="row ts-gutter-20 loadmore-frame">
				          @php $no = 0; @endphp
				          @foreach($breakingcat as $posts)
				          @php $no++ @endphp						
							<div class="col-12 mb-10 content-box">
								<div class="post-block-style">
									<div class="row">
										<div class="col-md-5">
											<div class="post-thumb post-list_feed">
												<img src="{{ $posts['images']['thumbnail'] }}" alt="{{ $posts['title'] }}" style="object-fit: cover; object-position: center; height: 167px; width: 250px;">
												<a class="post-cat-box {{ $posts['category'] }}" href="https://www.solopos.com/{{ $posts['category'] }}">{{ $posts['category'] }}</a>
											</div>
										</div>
										<div class="col-md-7 pl-0">
											<div class="post-content">
												<h2 class="post-title title-md">
												<a href="{{ url("/{$posts['slug']}-{$posts['id']}") }}" title="{{ $posts['title'] }}">{{ $posts['title'] }}</a>
												</h2>
												<div class="post-meta mb-7">
													<span class="post-author"><a href="#"><i class="fa fa-user"></i> @if($posts['author']) {!! $posts['author'] !!} @endif</a></span>
													<span class="post-date"><i class="fa fa-clock-o"></i> {{ Helper::time_ago($posts['date']) }}</span>
												</div>
												<p>@if($posts['summary']) {{ $posts['summary'] }} @endif</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						  @php $no++; @endphp @endforeach	
							<div class="col-12 mt-3 align-items-center" style="text-align: center;">
					            <a href="javascript:void(0)" class="btn btn-primary btn-sm load-more" title="Kumpulan Berita">Cek Berita Lainnya</a>
					            <a href="https://m.solopos.com/arsip" class="btn btn-primary btn-sm load-more-arsip" style="display: none;" title="Kumpulan Berita">Arsip Berita</a>
							</div><!-- col end -->
						</div>	
					</div><!-- Content Col end -->					
				</div><!-- col-lg-8 -->

				<!-- sidebar start -->
				@include('includes.sidebar')
				<!-- sidebar end -->
			</div><!-- row end -->
		</div><!-- container end -->
	</section><!-- category-layout end -->

@endsection