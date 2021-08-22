@extends('layouts.app')
@section('content')
	
	<!-- breadcrumb -->
	<div class="breadcrumb-section">
		<div class="container ">
			<div class="row">
				<div class="col-12">
					<ol class="breadcrumb">
						<li>
							<a href="{{ url("") }}"><i class="fa fa-home"></i></a>
						</li>
						<li><i class="fa fa-angle-right"></i>Arsip Berita</li>
					</ol>		
				</div>
			</div><!-- row end -->
		</div><!-- container end -->
	</div>
	<!-- breadcrumb end -->
	

    <!-- Section Terkini Start -->
	<section class="main-content pt-0">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-30">
				<div class="col-lg-8">
					<h1 class="post-title title-lg">Halaman Arsip Berita Solopos.com</h1>
					<div class="gap-30 d-none d-md-block"></div>
					<div class="container">
						<div class="row">
							<form class="form-inline" action="{{ route('arsip') }}" method="post" name="sortindeks"> {{ csrf_field() }}
								<div class="form-group col-md-3">{!! Form::select('tgl', array('01'=>'01','02'=>'02','03'=>'03','04'=>'04','05'=>'05','06'=>'06','07'=>'07','08'=>'08','09'=>'09','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28','29'=>'29','30'=>'30','31'=>'31'), $tgl );  !!}</div>
								<div class="form-group col-md-4">{!! Form::select('bln', array('1' => 'Januari', '2' => 'Februari','3'=>'Maret','4'=>'April','5'=>'Mei','6'=>'Juni','7'=>'Juli','8'=>'Agustus','9'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember'), $bln); !!}</div>
								<div class="form-group col-md-3">{!! Form::selectRange('thn', 2009, 2021, $thn); !!}</div>
								<div class="form-group col-md-2"><input name="submit" type="submit" id="submit" value="GO" class="btn btn-primary btn-sm" style="padding: 7px;margin-left: 7px;margin-bottom: 7px;"/></div>
							</form>
						</div>
					</div> 
					<div class="gap-30 d-none d-md-block"></div>

					<div class="row ts-gutter-20 loadmore-frame">
			          @php $no = 1; @endphp
			          @foreach ($breaking as $item)
						@php           
						$image = $item['featured_image']['thumbnail'] ?? '{{ url("/images/no-thumb.jpg") }}'; 
						$title = html_entity_decode($item['title']);
						@endphp 
						<div class="col-12 mb-10 content-box">
							<div class="post-block-style">
								<div class="row">
									<div class="col-md-5">
										<div class="post-thumb post-list_feed">
											<img src="{{ $image }}" alt="{{ $title }}" style="object-fit: cover; height: 167px; width: 250px;">
											<a class="post-cat-box {{ $item['catsname'] }}" href="">{{ $item['catsname'] }}</a>
										</div>
									</div>
									<div class="col-md-7 pl-0">
										<div class="post-content">
											<h2 class="post-title title-md">
											<a href="{{ url("/{$item['slug']}-{$item['id']}") }}?utm_source=arsip_desktop" title="{{ $title }}">{{ $title }}</a>
											</h2>
											<div class="post-meta mb-7">
												<span class="post-author"><a href="#"><i class="fa fa-user"></i> @if($item['author']) {!! $item['author'] !!} @endif</a></span>
												<span class="post-date"><i class="fa fa-clock-o"></i> {{ Carbon\Carbon::parse($item['date'])->translatedFormat('j M Y - H:i') }} WIB</span>
											</div>
											<p>@if($item['summary']) {!! $item['summary'] !!} @endif</p>
										</div>
									</div>
								</div>
							</div>
						</div>
                        @php $no++; @endphp
                        @endforeach	
						<div class="col-12 mt-3 align-items-center" style="text-align: center;">
				            <a href="javascript:void(0)" class="btn btn-primary btn-sm load-more" title="Kumpulan Berita">Lihat Berita Lainnya</a>
				            <a href="https://m.solopos.com/arsip" class="btn btn-primary btn-sm load-more-arsip" style="display: none;" title="Kumpulan Berita">Arsip Berita</a>
						</div><!-- col end -->
					</div>									
				</div><!-- Content Col end -->

				<!-- sidebar home -->
				@include('includes.sidebar')

				<!-- Sidebar Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section>
    <!-- Section Terkini End -->

@endsection