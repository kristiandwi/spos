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
						<li>{{ $content['category'] }}</li>
						<li><i class="fa fa-angle-right"></i> {{ $content['title'] }}</li>
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
							<h1 class="post-title title-lg">{{ $content['title'] }}</h1>
							<p>@if($content['summary']) {!! $content['summary'] !!} @endif</p>
							<ul class="post-meta">
								<li>
									<a class="post-cat {{ $content['category'] }}" href="{{ $content['category'] }}">{{ $content['category'] }}</a>
								</li>
								<li class="post-author">
									<a href="#"><strong>{{ $content['author'] }}</strong></a>
								</li>
								<li><a href="#"><i class="fa fa-clock-o"></i>{{ Helper::indo_datetime($content['date']) }} WIB</a></li>
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

                             {!! htmlspecialchars_decode($content['content']) !!}
							
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
                                    @if(!empty($content['avatar']))
                                        <img src="{{ htmlentities($content['avatar']) }}" alt="Profile">
                                    @else
                                        <img src="{{ asset('img/bg-img/3.jpg') }}" alt="Profile">
                                    @endif 									
								</div>  								
								<div class="author-info">
									<h3><a href="https://www.solopos.com/author/" target="_blank">{{ $content['editor'] }}</a></h3>									
									
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
                                @if(isset($content['tag']) AND empty($content['tag'][0]['term_id']))
									@foreach($content['tag'] as $tag)
									@php
										$tag_name = $tag;
										$tag_slug = str_replace(' ', '-',$tag)
									@endphp
										<a href="{{ url("/tag/{$tag_slug}") }}">{{ $tag_name }}</a>
									@endforeach
								@else
									@foreach($content['tag'] as $tag)
										<a href="{{ url("/tag/{$tag['slug']}") }}">{{ $tag['name'] }}</a>
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
				@include('includes.sidebar-uksw')
				<!-- sidebar end -->
			</div><!-- row end -->
		</div><!-- container end -->
	</section><!-- category-layout end -->

@endsection