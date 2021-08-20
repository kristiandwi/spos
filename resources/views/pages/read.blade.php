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
							@if(empty($video))
							<div class="post-media mb-20">
								<a href="{{ $content['image'] }}" class="gallery-popup cboxElement">
									<img src="{{ $content['image'] }}" alt="@if(!empty($content['caption'])) {{ htmlentities($content['caption']) }} @endif" class="img-fluid">
								</a>
								<span>
                                    @if(!empty($content['caption']))
                                        <p>SOLOPOS.COM - {{ htmlentities($content['caption']) }}</p>
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

							 @php
							$konten = htmlspecialchars_decode($content['content']) ;
							$contents = explode('</p>', $konten);
							$total_p = count(array_filter($contents)); 

							// many paragraph
							$p_iklan_1  = array_slice($contents, 0, 2);
							//$first_p  = array_slice($contents, 2, 1);
							$p_iklan_2  = array_slice($contents, 2, 5);
							//$terkait = array_slice($contents, 2,6);
							$last_p  = array_slice($contents, 7);
							@endphp         
						<!-- ads top -->

						<!-- ads parallax -->
						
						{!! implode('</p>', $p_iklan_1) !!}

						<div class="iklan mt-3 mb-3" align="center">
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

						{!! implode('</p>', $p_iklan_2) !!}

						<div class="iklan mt-3 mb-3" align="center">
							@if( date('Y-m-d H:i:s') >= '2021-08-19 00:00:01' && date('Y-m-d H:i:s') <= '2021-08-19 23:59:59') 
							<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
							<script>
								window.googletag = window.googletag || {cmd: []};
								googletag.cmd.push(function() {
								googletag.defineSlot('/54058497/STTWARGA336x280', [336, 280], 'div-gpt-ad-1629373411236-0').addService(googletag.pubads());
								googletag.pubads().enableSingleRequest();
								googletag.enableServices();
								});
							</script>
							<!-- /54058497/STTWARGA336x280 -->
							<div id='div-gpt-ad-1629373411236-0' style='min-width: 336px; min-height: 280px;'>
								<script>
								googletag.cmd.push(function() { googletag.display('div-gpt-ad-1629373411236-0'); });
								</script>
							</div>
							@else
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
							@endif 
						</div>

						{!! implode('</p>', $last_p) !!}

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
								<!-- User Thumbnail-->
									@if(!empty($content['avatar']))
									<img src="{{ htmlentities($content['avatar']) }}" alt="Profile">
									@else
									<img src="https://images.solopos.com/2019/10/avatar-solopos-370x370.jpg" alt="Profile">
									@endif      
								</div>
								<!-- User Content-->             
								<div class="author-info">
								<h6>
									<a href="@if(!empty($data['authors']['editor_url'])){{ url('/')}}/author/{{ $data['authors']['editor_url'] }} @else https://index.solopos.com @endif">{{ $content['editor'] }}</a>
								</h6>
								
								<p>Jurnalis di Solopos Group. Menulis konten di Solopos Group yaitu Harian Umum Solopos, Koran Solo, Solopos.com.</p>
								
								<div class="post-list">
									<a href="@if(!empty($data['authors']['editor_url'])){{ url('/')}}/author/{{ $data['authors']['editor_url'] }} @else https://index.solopos.com @endif">Lihat Artikel Saya Lainnya</a>
								</div>
								<div class="author-social">
									<span>Follow Me: </span>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</div>              
							</div>
						</div>

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
							<span class="title-angle-shap"> {{$relatedtitle}} </span>
						</h2>
						<div class="row">
						@php $rel_loop = 1; @endphp
						@foreach($related as $rel) @if($rel_loop <= 5)  
						
						@php 
						$image = $rel['one_call']['featured_list']['source_url'] ?? 'https://m.solopos.com/images/solopos.jpg'; 
						$title = html_entity_decode($rel['title']['rendered']);
						@endphp
						<!-- related Post--> 
						@if ($rel_loop==1)
						<div class="col-md-4">
                            <div class="post-block-style">
                                <div class="post-thumb">
                                    <a class="post-title" href="{{ url("/{$rel['slug']}-{$rel['id']}") }}?utm_source=bacajuga_desktop" title="{{ $rel['title']['rendered'] }}">
                                        <img src="{{$image }}" alt=""{{ $rel['title']['rendered'] }}" style="object-fit: cover; width: 195px; height: 128px;">
                                    </a>
                                    <div class="grid-cat">
                                        <a class="post-cat {{ $rel['one_call']['categories_list'][0]['slug'] }}" href="#">{{ $rel['one_call']['categories_list'][0]['name'] }}</a>
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

						@else 
						<div class="col-md-4">
                            <div class="post-block-style">
                                <div class="post-thumb">
                                    <a class="post-title" href="{{ url("/{$rel['slug']}-{$rel['id']}") }}?utm_source=bacajuga_desktop" title="{{ $rel['title']['rendered'] }}">
                                        <img src="{{$image }}" alt=""{{ $rel['title']['rendered'] }}" style="object-fit: cover; width: 195px; height: 128px;">
                                    </a>
                                    <div class="grid-cat">
                                        <a class="post-cat {{ $rel['one_call']['categories_list'][0]['slug'] }}" href="#">{{ $rel['one_call']['categories_list'][0]['name'] }}</a>
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
						@endif @endif
						@php $rel_loop++; @endphp
						@endforeach  
						</div>
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
												<a class="post-cat-box {{ $posts['category'] }}" href="{{ url("/{$posts['category']}") }}">{{ $posts['category'] }}</a>
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
	
	<iframe src="https://www.solopos.com/set-view?id={{ $content['id'] }}" style="position: absolute;width:0;height:0;border:0;bottom:0;"></iframe>
    @push('custom-scripts')
    <script>
      $(window).load(function() {
        $.ajax({
            type: "GET",
            url: 'https://www.solopos.com/set-view?id={{ $content['id'] }}',
        });
    });
    </script>
    @endpush


@endsection