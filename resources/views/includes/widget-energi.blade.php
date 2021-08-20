		<!-- Widget Euro -->
		<a href="{{ url('tag/Ekspedisi-Energi-2021') }}" style="display: inline-block; width: 100%;">
		<img src="{{ url('images/banner/energi-widget-atas.gif') }}" class="visible animated" width="100%"></a>
		<div class="energi-widget">
		  <ul>
			@php $eu_loop = 1; @endphp
			@foreach ($widget as $item)
			@if($eu_loop <=10) 
			<li> 
				<a href="{{ url("/{$item['slug']}-{$item['id']}") }}"> 
					<img src="{{ $item['images']['thumbnail'] }}" style="object-fit: none; object-position: center; height: 60px; width: 80px;" alt="{{ $item['title'] }}"> 
					{{ $item['title'] }}
				</a> 
				<div style="clear:both;"></div>
			</li>
            @endif
            @php $eu_loop++ @endphp
            @endforeach 
		  </ul>                                   
        </div>
		<div class="mb-3"></div>
		<div class="energi-copy">
              <a href="{{ url('tag/Ekspedisi-Energi-2021') }}">
                <img src="{{ url('images/banner/energi-widget-bawah.gif') }}" class="visible animated" width="100%">
              </a>
        </div>


      <style type="text/css">
    	.energi-widget ul {
			list-style: none;
			margin: 0;
			padding: 0;
			max-height: 270px;
			overflow-y: scroll;
			overflow-x: hidden;        
		}
		.energi-widget ul li {
			list-style: none;
			/*margin-bottom: 10px;*/
			display: block;
			color: blue;
			font-weight: bold;
			font-family: arial;
			padding: 10px;
			line-height: 17px;
		}
		.energi-widget ul li:last-child {
			border: none;
		}
		.energi-widget ul li a {
			text-decoration: none;
			color: #1EBAC4;
			font-size: 12px;
		}
		.energi-widget ul li a:hover {
			text-decoration: none;
			color: #FFA500;     
		}
		.energi-widget ul li img {
			width: 80px;
			height: 60px;
			float: left;
			margin-right: 10px;
			vertical-align: center;
		}
		.energi-widget-title {
			height: 60px;
			background: #FFA500;
		}
		.energi-widget-title img {
			height: 50px;
			padding: 5px 20px;
			float: left;
		}
		.energi-copy {
		border-top: none;
		}     
      </style>