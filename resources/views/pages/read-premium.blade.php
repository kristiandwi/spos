@extends('layouts.app')
@section('content')
	<!-- breadcrumb -->
	<div class="breadcrumb-section">
		<div class="container ">
			<div class="row">
				<div class="col-12">
					<ol class="breadcrumb">
						<li>
							<a href="https://www.solopos.com/"><i class="fa fa-home"></i></a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li><a href="{{ url('/premium') }}">Espos Premium</a></li>
						<li><i class="fa fa-angle-right"></i>{{ $content['title'] }}</li>
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
							<p>@if($content['summary']) {{ $content['summary'] }} @endif</p>
							<ul class="post-meta">
								<li>
									<a class="post-cat {{ $content['category'] }}" href="">{{ $content['category'] }}</a>
								</li>
								<li class="post-author">
									<a href="#"><strong> @if($content['author']) {{ $content['author'] }} @endif</strong></a>
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
							<div class="post-media mb-20">
								<a href="{{ $content['image']}}" class="gallery-popup cboxElement">
									<img src="{{ $content['image']}}" alt="@if(!empty($content['caption'])) {{ htmlentities($content['caption']) }} @endif" class="img-fluid">
								</a>
								<span>
                                    @if(!empty($content['caption']))
                                        <p>SOLOPOS.COM - {{ htmlentities($content['caption']) }}</p>
                                    @else
                                        <p>SOLOPOS.COM - Panduan Informasi dan Inspirasi</p>
                                    @endif    
                                </span>
							</div>
					          <div id="promosi">
					              {{ $content['summary'] }}
					              <div class="alert alert-info alert-dismissable" style="display: inline-block;">              
					                  <div class="col-md-12 col-md-offset-2">
					                      <div class="page--title mt-20 text-center">
					                          <img src="{{ url('images/premium.png') }}" height="50%" width="50%">
											  <div class="gap-20"></div>
					                          <div class="content">
					                              <p>Klik tombol Baca Selengkapnya untuk membaca Espos Premium. Konten Espos Premium merupakan layanan khusus dari Solopos.com yang lebih relevan dan memiliki diferensiasi dibandingkan free content. Selamat menikmati Espos Premium!</p>
					                          </div>
					                          <div class="action">
					                              <button id="button" href="#" class="btn btn-primary">Baca Selengkapnya</button>
					                          </div>
					                      </div>
					                  </div> 
					              </div>                                            
					          </div>
					          <div id="konten-premium" class="premium" style="display: none">
                                    {!! htmlspecialchars_decode($data['content']['content']) !!}
					          </div>
						</div><!-- post-content-area end -->
						<style type="text/css">
						.premium {
						    -webkit-animation: fadein 4s; /* Safari, Chrome and Opera > 12.1 */
						       -moz-animation: fadein 4s; /* Firefox < 16 */
						        -ms-animation: fadein 4s; /* Internet Explorer */
						         -o-animation: fadein 4s; /* Opera < 12.1 */
						            animation: fadein 4s;
						}

						@keyframes fadein {
						    from { opacity: 0; }
						    to   { opacity: 1; }
						}

						/* Firefox < 16 */
						@-moz-keyframes fadein {
						    from { opacity: 0; }
						    to   { opacity: 1; }
						}

						/* Safari, Chrome and Opera > 12.1 */
						@-webkit-keyframes fadein {
						    from { opacity: 0; }
						    to   { opacity: 1; }
						}

						/* Internet Explorer */
						@-ms-keyframes fadein {
						    from { opacity: 0; }
						    to   { opacity: 1; }
						}

						/* Opera < 12.1 */
						@-o-keyframes fadein {
						    from { opacity: 0; }
						    to   { opacity: 1; }
						}	
						</style>
						
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
									<a href="@if(!empty($content['editor_url'])){{ url('/')}}/author/{{ $content['editor_url'] }} @else https://index.solopos.com @endif">{{ $content['editor'] }}</a>
								</h6>
								
								<p>Jurnalis di Solopos Group. Menulis konten di Solopos Group yaitu Harian Umum Solopos, Koran Solo, Solopos.com.</p>
								
								<div class="post-list">
									<a href="@if(!empty($content['editor_url'])){{ url('/')}}/author/{{ $content['editor_url'] }} @else https://index.solopos.com @endif">Lihat Artikel Saya Lainnya</a>
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

					<div class="gap-30"></div>

					<div class="row">
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
											<a href="{{ url("/{$pc['slug']}-{$pc['id']}") }}?utm_source=premium_desktop" title="{{ $pc['title']}}">
												<img src="{{ $pc['images']['thumbnail'] }}" alt="{{ $pc['title'] }}" style="object-fit: cover; object-position: center; width: 266px; height: 178px;">
											</a>
											<div class="grid-cat">
												<a class="post-cat premium" href="{{ url('/premium') }}">Premium</a>
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
                                
                                @if( $pc_loop > 1 && $pc_loop <= 5 )

										<div class="col-md-6">
											<div class="post-block-style">
												<div class="post-thumb">
													<a href="{{ url("/{$pc['slug']}-{$pc['id']}") }}?utm_source=terkini_desktop" title="{{ $pc['title'] }}">
														<img src="{{ $pc['images']['thumbnail'] }}" alt="{{ $pc['title'] }}" style="object-fit: cover; object-position: center; width: 118px; height: 84px;">
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
								@if($pc_loop == 5)
									</div><!-- .row -->
								</div><!-- Col 2 end -->
							@endif
                            @endif
                            @php $pc_loop++; @endphp
                            @endforeach
							</div><!-- Row end -->
						</div><!-- Block Konten Premium end -->									
					</div><!-- row end -->
					<!-- realted post end -->

					<div class="gap-30 d-none d-md-block"></div>

					<div class="gap-50 d-none d-md-block"></div>
					<div>
						<h2 class="block-title">
							<span class="title-angle-shap"> Fokus </span>
						</h2>
						<div class="row ts-gutter-20 loadmore-frame">
				          @php $no = 0; @endphp
				          @foreach($editorchoice as $ec)
				          @php $no++; @endphp						
							<div class="col-12 mb-10 content-box">
								<div class="post-block-style">
									<div class="row">
										<div class="col-md-5">
											<div class="post-thumb post-list_feed">
												<img src="{{ $ec['images']['thumbnail'] }}" alt="{{ $ec['title'] }}" style="object-fit: cover; object-position: center; height: 167px; width: 250px;">
												<a class="post-cat-box {{ $ec['category'] }}" href="{{ url("/{$ec['category']}") }}">{{ $ec['category'] }}</a>
											</div>
										</div>
										<div class="col-md-7 pl-0">
											<div class="post-content">
												<h2 class="post-title title-md">
												<a href="{{ url("/{$ec['slug']}-{$ec['id']}") }}?utm_source=terkini_desktop" title="{{ $ec['title'] }}">{{ $ec['title'] }}</a>
												</h2>
												<div class="post-meta mb-7">
													<span class="post-author"><a href="#"><i class="fa fa-user"></i> @if($ec['author']) {!! $ec['author'] !!} @endif</a></span>
													<span class="post-date"><i class="fa fa-clock-o"></i> {{ Helper::time_ago($ec['date']) }}</span>
												</div>
												<p>@if($ec['summary']) {!! $ec['summary'] !!} @endif</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						    @php $no++; @endphp
                            @endforeach	
							<div class="col-12 mt-3 align-items-center" style="text-align: center;">
					            <a href="javascript:void(0)" class="btn btn-primary btn-sm load-more" title="Kumpulan Berita">Espos Premium Lainnya</a>
					            <a href="https://m.solopos.com/arsip" class="btn btn-primary btn-sm load-more-arsip" style="display: none;" title="Kumpulan Berita">Arsip Berita</a>
							</div><!-- col end -->
						</div>	
					</div><!-- Content Col end -->					
				</div><!-- col-lg-8 -->

				<!-- sidebar start -->
				@include('includes.sidebar-premium')
				<!-- sidebar end -->
			</div><!-- row end -->
		</div><!-- container end -->
	</section><!-- category-layout end -->
	
	<iframe src="https://cms.solopos.com/set-view?id={{ $content['id'] }}" style="position: absolute;width:0;height:0;border:0;bottom:0;"></iframe>
    @push('custom-scripts')
    <script>
      $(window).load(function() {
        $.ajax({
            type: "GET",
            url: 'https://cms.solopos.com/set-view?id={{ $content['id'] }}',
        });
    });
    </script>
    @endpush

@endsection