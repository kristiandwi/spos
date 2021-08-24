	<header>
		<button class="header-icon-2" on='tap:sidebar.toggle'><i class="fa fa-navicon"></i></button>
		<a href="{{ url('/') }}/amp" class="header-logo"><amp-img src="{{ url('images/logo.png') }}" alt="Solopos.com" layout="responsive" width="175" height="30"></amp-img></a>
        
        <a href="{{ url('/') }}/page/about-us" class="header-icon-1"><i class="fa fa-info-circle"></i></a>
	</header>
	<div class="header-clear"></div>
    <amp-sidebar id="sidebar" layout="nodisplay" side="left">
        <p class="sidebar-divider"><i class="fa fa-th-large"></i> CATEGORY</p>
        <div class="sidebar-menu">
            <a href="{{ url('/') }}/news/amp" class="sidebar-item"><i class="fa fa-newspaper-o"></i>News<i class="fa fa-circle"></i></a>
            <a href="{{ url('/') }}/soloraya/amp" class="sidebar-item"><i class="fa fa-lastfm"></i>Soloraya<i class="fa fa-circle"></i></a>
            <a href="{{ url('/') }}/bisnis/amp" class="sidebar-item"><i class="fa fa-briefcase"></i>Ekonomi Bisnis<i class="fa fa-circle"></i></a>
            <a href="{{ url('/') }}/sport/amp" class="sidebar-item"><i class="fa fa-futbol-o"></i>Sport<i class="fa fa-circle"></i></a>
            <a href="{{ url('/') }}/lifestyle/amp" class="sidebar-item"><i class="fa fa-map-signs"></i>Lifestyle<i class="fa fa-circle"></i></a>
            <a href="{{ url('/') }}/entertainment/amp" class="sidebar-item"><i class="fa fa-tv"></i>Entertainment<i class="fa fa-circle"></i></a>
            <a href="{{ url('/') }}/otomotif/amp" class="sidebar-item"><i class="fa fa-car"></i>Otomotif<i class="fa fa-circle"></i></a>
            <a href="{{ url('/') }}/teknologi/amp" class="sidebar-item"><i class="fa fa-cogs"></i>Teknologi<i class="fa fa-circle"></i></a>
            <a href="{{ url('/') }}/jateng/amp" class="sidebar-item"><i class="fa fa-bookmark"></i>Jawa Tengah<i class="fa fa-circle"></i></a>
            <a href="{{ url('/') }}/jatim/amp" class="sidebar-item"><i class="fa fa-bookmark"></i>Jawa Timur<i class="fa fa-circle"></i></a>
            <a href="{{ url('/') }}/jogja/amp" class="sidebar-item"><i class="fa fa-bookmark"></i>Jogjakarta<i class="fa fa-circle"></i></a>
            <a href="{{ url('/') }}/espospedia/amp" class="sidebar-item"><i class="fa fa-line-chart"></i>Espospedia<i class="fa fa-circle"></i></a>
            <a href="{{ url('/') }}/foto/amp" class="sidebar-item"><i class="fa fa-camera"></i>Berita Foto<i class="fa fa-circle"></i></a>
            <a href="{{ url('/') }}/videos/amp" class="sidebar-item"><i class="fa fa-video-camera"></i>Berita Video<i class="fa fa-circle"></i></a>          
            <a href="{{ url('/') }}/terpopuler/amp" class="sidebar-item"><i class="fa fa-flash"></i>Terpopuler<i class="fa fa-circle"></i></a>
            <a href="{{ url('/') }}/cekfakta/amp" class="sidebar-item"><i class="fa fa-check-circle"></i>Cek Fakta<i class="fa fa-circle"></i></a>
            <a href="{{ url('/') }}/jagad-jawa/amp" class="sidebar-item"><i class="fa fa-globe"></i>Jagad Jawa<i class="fa fa-circle"></i></a>
            <a href="{{ url('/') }}/writing-contest/amp" class="sidebar-item"><i class="fa fa-edit"></i>Writing Contest<i class="fa fa-circle"></i></a>
            <a href="{{ url('/') }}/loker/amp" class="sidebar-item"><i class="fa fa-bullhorn"></i>Lowongan Kerja<i class="fa fa-circle"></i></a>                     
        </div>
    </amp-sidebar>