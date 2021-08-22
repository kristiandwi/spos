@extends('layouts.app')
@section('content')
    <div class="page-content-wrapper">
    <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb" style="text-transform: capitalize;font-size:13px;font-weight:600;">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Index Berita</li>
          </ol>
        </nav>
      </div>
      <!-- Terkini Wrapper -->
      <div class="terkini-wrapper loadmore-frame">
        <!-- <div class="container">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0 pl-1 spos-title">Indek Berita Solopos.com</h5>
          </div>
        </div> -->
        <div class="container mb-5">
            <div class="row col-sm-12" align="center">
                <form class="form-inline" action="{{ route('arsip') }}" method="post" name="sortindeks"> {{ csrf_field() }}
                    <div class="form-group mb-3">{!! Form::select('tgl', array('01'=>'01','02'=>'02','03'=>'03','04'=>'04','05'=>'05','06'=>'06','07'=>'07','08'=>'08','09'=>'09','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28','29'=>'29','30'=>'30','31'=>'31'), $tgl ); !!}</div>
                    <div class="form-group mb-3">{!! Form::select('bln', array('1' => 'Januari', '2' => 'Februari','3'=>'Maret','4'=>'April','5'=>'Mei','6'=>'Juni','7'=>'Juli','8'=>'Agustus','9'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember'), $bln); !!}</div>
                    <div class="form-group mb-3">{!! Form::selectRange('thn', 2009, 2021, $thn); !!}</div>
                    <!-- {!! Form::select('cat', array('664067' => 'News', '94686' => 'Soloraya','669739'=>'Ekonomi Bisnis','83'=>'Sport','8467'=>'Lifestyle','152076'=>'Entertainment','76212'=>'Otomotif','15783'=>'Teknologi','636'=>'Jawa Tengah','4175'=>'Jawa Timur','47665'=>'Jogjakarta','74227'=>'Video','54'=>'Foto','670832'=>'Cek Fakta','734344'=>'Writing Contest','669740'=>'Fiksi','18499'=>'Jagad Jawa','15420'=>'Kolom','11091'=>'Lowongan Kerja','655246'=>'Espospedia'), '2021'); !!}                                       -->
                    <div class="form-group mb-2"><input name="submit" type="submit" id="submit" value="GO" class="btn btn-primary btn-sm" style="padding: 7px;margin-left: 7px;margin-bottom: 7px;"/></div>
                </form>
            </div>
        </div>  

        <div class="container">
          @php $b_loop = 1; @endphp
          @foreach ($breaking as $item)
            @php           
            $image = $item['featured_image']['thumbnail'] ?? 'https://m.solopos.com/images/no-thumb.jpg'; 
            $title = html_entity_decode($item['title']);
            @endphp          
            @if ($b_loop == 1)
            <div class="card mb-3 content-box">
                <a href="{{ url("/{$item['slug']}-{$item['id']}") }}" title="{{ $title }}">
                <img class="card-img-top" src="{{ $image }}" alt="{{ $title }}">
                </a>
                <div class="card-body">
                <a class="post-title" href="{{ url("/{$item['slug']}-{$item['id']}") }}" title="{{ $title }}">{{ $title }}</a>
                </div>
            </div>

            <div class="mt-3 mb-3" align="center">
              <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4969077794908710" crossorigin="anonymous"></script>
              <!-- Iklan Responsif -->
              <ins class="adsbygoogle"
                  style="display:block"
                  data-ad-client="ca-pub-4969077794908710"
                  data-ad-slot="2921244965"
                  data-ad-format="auto"
                  data-full-width-responsive="true"></ins>
              <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
              </script>  
            </div>

            @else          
            <!-- Terkini Post-->
            <div class="terkini-post content-box">
              <div class="d-flex">
                <div class="post-thumbnail">
                  <a href="{{ url("/{$item['slug']}-{$item['id']}") }}" title="{{ $title }}">
                    <img src="{{ $image }}" alt="" style="object-fit: cover; height: 100px; width: 100px;">
                  </a>
                </div>
                <div class="post-content">
                  <a class="post-title" href="{{ url("/{$item['slug']}-{$item['id']}") }}" title="{{ $title }}">{{ $title }}</a>
                  <div class="post-meta d-flex align-items-center">
                    <a href="https://m.solopos.com/">@if($item['catparent'] ==''){{ $item['catsname'] }} @else {{ $item['catparent'] }} @endif</a>|<a href="#" style="padding-left:7px;">{{ Carbon\Carbon::parse($item['date'])->translatedFormat('j M Y - H:i') }}</a>
                  </div>
                </div>
              </div>
            </div>
            @endif
            @php $b_loop++ @endphp
            @endforeach
            <div class="text-center mt-3">
              <a href="javascript:void(0)" class="btn btn-primary load-more" title="Kumpulan Berita">
                Cek Berita Lainnya
              </a>
              <a href="https://m.solopos.com/arsip" class="btn btn-primary load-more-arsip" style="display: none;" title="Kumpulan Berita">
                Arsip Berita
              </a>
            </div>                               
        </div>
      </div>

      <!-- Ads Breaking -->
      <div class="iklan mt-3">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4969077794908710" crossorigin="anonymous"></script>
        <!-- Iklan Responsif -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-4969077794908710"
            data-ad-slot="2921244965"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>  
      </div>

      <!-- widget Berit Video -->
      @include('includes.widget-video')      
   
      <div class="container">
        <div class="border-top"></div>
      </div>
    <style>
        select,input{display:block;width:100%;border:1px solid #cecece;padding:3px;}
    </style>
    </div>
@endsection