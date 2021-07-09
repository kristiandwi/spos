<?php 
/*
Template Name: Landing Page Covid 19
*/
?>
<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Lawan Covid-19 - Solopos.com</title>
	<?php wp_head(); ?>
		
	<script src="https://api.mapbox.com/mapbox-gl-js/v1.9.0/mapbox-gl.js"></script>
	<link href="https://api.mapbox.com/mapbox-gl-js/v1.9.0/mapbox-gl.css" rel="stylesheet" />
	<script src="https://www.solopos.com/assets/covid19-data.php"></script>
	<link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
	<style>
		#map { position: relative; height: 550px; width: 100%; }
		@media (max-width: 768px) { #map {  height: 250px; width: 100%; } }	
	    .mapboxgl-popup {
			max-width: 200px;
			font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
		}			
	</style>

</style>
</head>

<body class="leading-normal tracking-normal text-black gradient" style="font-family: 'Source Sans Pro', sans-serif;">

<!--Nav-->
<nav id="header" class="bg-blue-400 fixed w-full z-30 top-0 text-white">

	<div class="container bg-blue-800 max-w-5xl mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
			
		<div class="pl-4 flex items-center">
			<a class="text-white no-underline hover:no-underline font-bold text-1xl lg:text-2xl"  href="https://www.solopos.com"> 
				<img src="https://www.solopos.com/elements/themes/new2019/img/logocovid.png" style="width: 350px;">
			</a>
		</div>

		<div class="block lg:hidden pr-4">
			<button id="nav-toggle" class="flex items-center p-1 text-orange-300 hover:text-gray-100">
				<svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
			</button>
		</div>

		<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-blue lg:bg-transparent text-white p-4 lg:p-0 z-20" id="nav-content">
			<ul class="list-reset lg:flex justify-end flex-1 items-center">
				<li class="mr-1">
					<a class="inline-block py-2 px-2 text-white font-bold no-underline" href="#top">Peta</a>
				</li>
				<li class="mr-1">
					<a class="inline-block py-2 px-2 text-white font-bold no-underline" href="#data">Data</a>
				</li>
				<li class="mr-1">
					<a class="inline-block py-2 px-2 text-white font-bold no-underline" href="#news">Berita</a>
				</li>	
				<li class="mr-1">
					<a class="inline-block py-2 px-2 text-white font-bold no-underline" href="#infografis">Info Grafis</a>
				</li>				
				<li class="mr-1">
					<a class="inline-block py-2 px-2 text-white font-bold no-underline" href="#cekfakta">Cek Fakta</a>
				</li>	
				<li class="mr-1">
					<a class="inline-block py-2 px-2 text-white font-bold no-underline" href="#faq">Tanya Jawab</a>
				</li>				
				<li>
					<a class="inline-block py-2 px-2 text-white font-bold no-underline" href="#rujukan">RS Rujukan</a>
				</li>												
			</ul>
		</div>
	</div>
	
	<hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>
<!--Hero-->
<div id="top" class="pt-20">
	<div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
		<div id="map"></div>
		<script src="https://www.solopos.com/assets/covid19.js"></script>	
	</div>

</div>

<section class="bg-grey-100 border-b">
	<div class="container max-w-5xl mx-auto">	
		<div class="flex flex-wrap">
			<div class="w-6/6 sm:w-2/2 p-12">
				<h3 class="text-gray-800 font-bold leading-none mb-3">Keterangan</h3>
				<p>Untuk melihat data kasus penyebaran virus corona covid 19 silahkan klik marker pada tiap kabupaten<br /><br />
				<ul>
					<li class="text-gray-600 mb-8">
						<strong>Orang dalam Pemantauan (ODP):</strong> orang dengan gejala demam (>38°C) atau ada riwayat demam atau ISPA TANPA Pneumonia dan memiliki riwayat perjalanan ke Negara yang terjangkit pada 14 hari terakhir sebelum timbul gejala.
					</li>
					<li class="text-gray-600">
					<strong>Pasien dalam Pengawasan (PDP):</strong> orang yang mengalami gejala demam (>38°C) atau riwayat demam, ISPA DAN Pneumonia ringan hingga berat serta memiliki riwayat perjalanan ke Negara terjangkit atau kontak dengan orang yang terkonfirmasi positif COVID-19 dalam 14 hari terakhir.
					</li>											
				</ul>
				
			</div>
		</div>
	</div>
</section>

<section id="data" class="bg-gray-100 py-8">
    <?php
        $jateng = file_get_contents('https://covid19.solopos.com/api/city/Jawa Tengah');
        $d_jateng = json_decode($jateng, true);
        $id = file_get_contents('https://covid19.mathdro.id/api/countries/ID');
        $d_id = json_decode($id, true);
        $global = file_get_contents('https://covid19.mathdro.id/api');
        $d_global = json_decode($global, true);
    ?>

	<div class="container max-w-5xl mx-auto flex flex-wrap text-center">
		<h2 class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-800">Data Statistik Covid 19</h2>
		<div class="w-full my-2 text-center">
			<?php echo gmdate('d-M-Y H:i:s', time() + (60 * 60 * 7)); //echo date('d-M-Y h:i:s', strtotime($id_data['lastUpdate'])); ?>
		</div>
		<div class="w-full mb-4">	
			<div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
		</div>
		<h3 class="w-full my-2 text-2xl font-bold leading-tight text-center text-gray-800">Jawa Tengah</h3>		
		<div class="w-full md:w-1/3 p-3 flex flex-col flex-grow flex-shrink">
			<div role="alert">
			  <div class="bg-blue-800 text-4xl text-white font-bold rounded-t">
			    <?php echo number_format($d_jateng[0]['confirmed']); ?>
			  </div>
			  <div class="border border-t-0 border-blue-700 rounded-b bg-blue-100 text-blue-700">
			    <p>Positif Covid 19</p>
			  </div>
			</div>
		</div>
		<div class="w-full md:w-1/3 p-3 flex flex-col flex-grow flex-shrink">
			<div role="alert">
			  <div class="bg-red-600 text-4xl text-white font-bold rounded-t">
			    <?php echo number_format($d_jateng[0]['death']); ?>
			  </div>
			  <div class="border border-t-0 border-red-500 rounded-b bg-red-100 text-red-700">
			    <p>Meninggal Dunia</p>
			  </div>
			</div>
		</div>			
		<div class="w-full md:w-1/3 p-3 flex flex-col flex-grow flex-shrink">
			<div role="alert">
			  <div class="bg-green-500 text-4xl text-white font-bold rounded-t">
			    <?php echo number_format($d_jateng[0]['recovered']); ?>
			  </div>
			  <div class="border border-t-0 border-green-400 rounded-b bg-green-100 text-green-700">
			    <p>Penderita Sembuh</p>
			  </div>
			</div>
		</div>
			
		<div class="w-full mb-4">	
			<div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
		</div>

		<h3 class="w-full my-2 text-2xl font-bold leading-tight text-center text-gray-800">Indonesia</h3>
		<div class="w-full md:w-1/3 p-3 flex flex-col flex-grow flex-shrink">
			<div role="alert">
			  <div class="bg-blue-800 text-4xl text-white font-bold rounded-t">
			    <?php echo number_format($d_id['confirmed']['value']); ?>
			  </div>
			  <div class="border border-t-0 border-blue-700 rounded-b bg-blue-100 text-blue-700">
			    <p>Positif Covid 19</p>
			  </div>
			</div>
		</div>
		<div class="w-full md:w-1/3 p-3 flex flex-col flex-grow flex-shrink">
			<div role="alert">
			  <div class="bg-red-600 text-4xl text-white font-bold rounded-t">
			    <?php echo number_format($d_id['deaths']['value']); ?>
			  </div>
			  <div class="border border-t-0 border-red-500 rounded-b bg-red-100 text-red-700">
			    <p>Meninggal Dunia</p>
			  </div>
			</div>
		</div>
		<div class="w-full md:w-1/3 p-3 flex flex-col flex-grow flex-shrink">
			<div role="alert">
			  <div class="bg-green-500 text-4xl text-white font-bold rounded-t">
			    <?php echo number_format($d_id['recovered']['value']); ?>
			  </div>
			  <div class="border border-t-0 border-green-400 rounded-b bg-green-100 text-green-700">
			    <p>Penderita Sembuh</p>
			  </div>
			</div>
		</div>				

		<div class="w-full mb-4">	
			<div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
		</div>

		<h3 class="w-full my-2 text-2xl font-bold leading-tight text-center text-gray-800">Global</h3>
	
		<div class="w-full md:w-1/3 p-3 flex flex-col flex-grow flex-shrink">
			<div role="alert">
			  <div class="bg-blue-800 text-4xl text-white font-bold rounded-t">
			    <?php echo number_format($d_global['confirmed']['value']); ?>
			  </div>
			  <div class="border border-t-0 border-blue-700 rounded-b bg-blue-100 text-blue-700">
			    <p>Positif Covid 19</p>
			  </div>
			</div>
		</div>
		
		<div class="w-full md:w-1/3 p-3 flex flex-col flex-grow flex-shrink">
			<div role="alert">
			  <div class="bg-red-600 text-4xl text-white font-bold rounded-t">
			    <?php echo number_format($d_global['deaths']['value']); ?>
			  </div>
			  <div class="border border-t-0 border-red-500 rounded-b bg-red-100 text-red-700">
			    <p>Meninggal Dunia</p>
			  </div>
			</div>
		</div>

		<div class="w-full md:w-1/3 p-3 flex flex-col flex-grow flex-shrink">
			<div role="alert">
			  <div class="bg-green-500 text-4xl text-white font-bold rounded-t">
			    <?php echo number_format($d_global['recovered']['value']); ?>
			  </div>
			  <div class="border border-t-0 border-green-400 rounded-b bg-green-100 text-green-700">
			    <p>Penderita Sembuh</p>
			  </div>
			</div>
		</div>

	</div>

</section>

<section id="news" class="bg-blue-100 border-b py-8">
	<h1 class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-800">Update Berita Terbaru</h1>
	<div class="w-full mb-4">	
		<div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
	</div>	
	<!--Posts Container-->
	<div class="max-w-5xl mx-auto flex flex-wrap">
        <?php
            $coronanews = new WP_Query('no_found_rows=true&tag=virus-corona&posts_per_page=12&order=DESC');
            while($coronanews->have_posts()) : $coronanews->the_post();
        ?>
		<!--1/3 col -->
		<div class="w-full md:w-1/3 p-3 flex flex-col flex-grow flex-shrink">
			<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
				<a href="<?php the_permalink(); ?>" target="_blank" class="flex flex-wrap no-underline hover:no-underline">
					<img src="<?php echo post_image('thumbnail', 273, 100); ?>" class="h-64 w-full rounded-t pb-6">
					<p class="w-full text-gray-600 text-xs md:text-sm px-6">#virusCorona</p>
					<div class="w-full font-bold text-xl text-gray-900 px-6"><?php the_title(); ?></div>
				</a>
			</div>
			<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
				<div class="flex items-center justify-between">
					<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="https://images.solopos.com/2019/10/avatar-solopos-370x370.jpg" alt="Avatar of Author">
					<p class="text-gray-600 text-xs md:text-sm"><?php echo reading_time(); ?></p>
				</div>
			</div>
		</div>        

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

	</div>
	<!--/ Post Content-->
</section>

<section id="infografis" class="bg-red-100 border-b py-8">
	<h1 class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-800">Info Grafis Corona</h1>
	<div class="w-full mb-4">	
		<div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
	</div>	
	<!--Posts Container-->
	<div class="max-w-5xl mx-auto flex flex-wrap">
        <?php
            $coronanews = new WP_Query('no_found_rows=true&tag=grafis-corona&posts_per_page=8&order=DESC');
            while($coronanews->have_posts()) : $coronanews->the_post();
        ?>
		<!--1/3 col -->
		<div class="w-full md:w-1/2 p-3 flex flex-col flex-grow flex-shrink">
			<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
				<a href="<?php the_permalink(); ?>" target="_blank" class="flex flex-wrap no-underline hover:no-underline">
					<img src="<?php echo post_image('thumbnail', 273, 100); ?>" class="h-100 w-full rounded-t pb-6">
					<p class="w-full text-gray-600 text-xs md:text-sm px-6">#grafisCorona</p>
					<div class="w-full font-bold text-xl text-gray-900 px-6 pb-10"><?php the_title(); ?></div>
				</a>
			</div>
		</div>        

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

	</div>
	<!--/ Post Content-->
</section>

<section id="cekfakta" class="bg-blue-100 border-b py-8">
	<h1 class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-800">Cek Fakta</h1>
	<div class="w-full mb-4">	
		<div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
	</div>	
	<!--Posts Container-->
	<div class="max-w-5xl mx-auto flex flex-wrap">
        <?php
            $coronanews = new WP_Query('no_found_rows=true&tag=cek-fakta-corona&posts_per_page=8&order=DESC');
            while($coronanews->have_posts()) : $coronanews->the_post();
        ?>
		<!--1/3 col -->
		<div class="w-full md:w-1/2 p-3 flex flex-col flex-grow flex-shrink">
			<div class="max-w-sm w-full lg:max-w-full lg:flex">
			  <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('<?php echo post_image('thumbnail', 273, 100); ?>')" title="<?php the_title(); ?>">
			  </div>
			  <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
			    <div class="mb-8">
			      <p class="text-sm text-gray-600 flex items-center">
			        <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
			          <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
			        </svg>
			        Cek Fakta
			      </p>
			      <div class="text-gray-900 font-bold text-xl mb-2">
			      	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank">
			      		<?php the_title(); ?>
			      	</a>
			      		
			      </div>
			    </div>
			    <div class="flex items-center">
			      <img class="w-10 h-10 rounded-full mr-4" src="<?php bloginfo('template_url');?>/img/hoax.png" alt="Hoax">
			      <div class="text-sm">
			        <p class="text-gray-900 leading-none"><a href="https://www.solopos.com/tag/cek-fakta-corona" title="Cek Fakta Corona" target="_blank">#cekFaktaCorona</a></p>
			        <p class="text-gray-600"><?php the_time('j F Y'); ?></p>
			      </div>
			    </div>
			  </div>
			</div>		

		</div>        

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

	</div>
	<!--/ Post Content-->
</section>

<section id="faq" class="bg-red-100 border-b">
	<div class="container max-w-5xl mx-auto">	
		<div class="flex flex-wrap">
			<div class="w-6/6 sm:w-2/2 p-12 text-center">
				<h3 class="text-gray-800 text-3xl font-bold leading-none mb-3">Tanya Jawab</h3>
				<br /><br />
				<strong>Apa itu COVID-19?</strong><br>
				<p>Corona Virus Disease 2019 atau yang biasa disingkat COVID-19 adalah penyakit menular yang disebabkan oleh SARS-CoV-2, salah satu jenis koronavirus. Penderita COVID-19 dapat mengalami demam, batuk kering, dan kesulitan bernafas.</p><br />

				<strong>Apakah COVID-19 Menular?</strong>
				<p>YA. Infeksi menyebar dari satu orang ke orang lain melalui percikan (droplet) dari saluran pernapasan yang sering dihasilkan saat batuk atau bersin. Jarak jangkauan droplet biasanya hingga 1 meter. Droplet bisa menempel di benda, namun tidak akan bertahan lama di udara. Waktu dari paparan virus hingga timbulnya gejala klinis antara 1-14 hari dengan rata-rata 5 hari. Maka, orang yang sedang sakit diwajibkan memakai masker guna meminimalisir penyebaran droplet.</p><br />

				<strong>Apa Penyebab COVID-19?</strong>
				<p>Sampai saat ini belum diketahui penyebab dari virus Corona, tetapi diketahui virus ini disebarkan oleh hewan dan mampu menjangkit dari satu spesies ke spesies lainnya, termasuk manusia. Diketahui virus Corona berasal dari Kota Wuhan di China dan muncul pada Desember 2019.</p><br />

				<strong>Bagaimana Gejala COVID-19?</strong>
				<p>Orang yang terinfeksi memiliki gejala ringan seperti demam, batuk, dan kesulitan bernafas. Gejala dapat berkembang menjadi pneumonia berat.</p><br />

				<strong>Bagaimana Cara Mencegah COVID-19?</strong>
				<p>Tindakan pencegahan untuk mengurangi kemungkinan infeksi antara lain tetap berada di rumah, menghindari bepergian dan beraktivitas di tempat umum, sering mencuci tangan dengan sabun dan air, tidak menyentuh mata, hidung, atau mulut dengan tangan yang tidak dicuci. Segera hubungi Hotline jika Anda mengalami gejala atau memiliki riwayat perjalanan/berpergian dari Negara yang terjangkit.</p><br />

				<strong>Yuk, Lindungi Diri!</strong>
				<p>
				- Terapkan etika batuk atau bersin (dengan menutup mulut dan hidung). Jangan meludah sembarangan.<br />
				- Bersihkan benda yang sering disentuh.<br />
				- Gunakan masker jika Anda sakit dan segera ke fasilitas kesehatan terdekat<br />
				- Cuci tangan dengan sabun<br />
				- Konsumsi makanan bergizi dan olahraga<br />
				- Hindari menyentuh mata, hidung, dan mulut dengan tangan yang belum dicuci<br />
				</p><br />

				<strong>Apa yang Harus Dilakukan Jika Mengalami Gejala Mirip COVID-19?</strong>
				<p>
				- Hubungi nomor layanan Jateng Tanggap COVID-19 di 024-3580713<br />
				- Gunakan masker dan ganti secara berkala.<br />
				- Batasi kontak dengan orang lain dan tetap tinggal di rumah.<br />
				</p>
				
			</div>
		</div>
	</div>
</section>

<section id="rujukan" class="bg-white border-b py-8">
	<div class="container max-w-5xl mx-auto m-8">
		<h2 class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-800">RS Rujukan Covid-19 Soloraya</h2>
		<div class="w-full mb-4">	
			<div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
		</div>

	
		<div class="flex flex-wrap">
			<div class="w-5/6 sm:w-2/3 p-6">
				<p class="text-gray-600 mb-8 pt-10">

				 - Kenakan masker (tipe masker bedah), dan ganti secara berkala, agar tidak menular ke orang lain<br />
				 - Batasi menerima tamu di rumah, hindari kontak langsung dengan tamu untuk mencegah penyebaran virus yang lebih luas<br />
				 - Tinggal di rumah dan jaga jarak dengan orang lain<br />
				 - Minta bantuan teman, anggota keluarga, atau layanan jasa lain untuk menyelesaikan urusan di luar rumah<br />
				 - Lakukan ini semua selama 14 hari untuk membantu mengurangi penyebaran virus<br />

				</p>
				
			</div>
			<div class="w-full sm:w-1/3 p-6">
				<img src="<?php bloginfo('template_url');?>/img/gratis-tes-indikasi-corona.jpeg">
			</div>
		</div>

		<div class="flex flex-wrap">
			<div class="w-full sm:w-1/3 p-6">
				<img src="<?php bloginfo('template_url');?>/img/posko-corona-jateng.png">
			</div>

			<div class="w-5/6 sm:w-2/3 p-6">
				<h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">Layanan Telepon Darurat COVID-19</h3>
				<p class="text-gray-600 mb-8 pt-10">
					 Anda mengalami gejala COVID-19 <br>
					 Anda baru-baru ini berkunjung ke suatu negara atau daerah dengan risiko tinggi coronavirus <br>
					 Anda telah melakukan kontak dekat dengan seseorang dengan coronavirus<br><br>
					<strong>Untuk refrensi lebih lanjut kunjungi:</strong>
					Kementerian Kesehatan
					<a href="https://infeksiemerging.kemkes.go.id">https://infeksiemerging.kemkes.go.id</a> 

					World Health Organization
					<a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/events-as-they-happen"> https://www.who.int/emergencies/diseases/novel-coronavirus-2019/events-as-they-happen</a>
				</p>
				
			</div>
		</div>
		</div>
	</div>
</section>

<!--Footer-->
<footer class="bg-blue-200">
	<div class="container mx-auto  px-8">

        <div class="w-full flex flex-col md:flex-row py-6">
				
			<div class="flex-1 mb-6">
			
				<a class="text-blue-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"  href="https://www.solopos.com"> 
					<img src="https://www.solopos.com/elements/themes/new2019/img/logo.png" width="200" align="Logo Solopos">
				</a>
			</div>
		
		
            <div class="flex-1">
                <p class="uppercase text-gray-500 md:mb-6">Links</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://www.solopos.com/mediakit" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Mediakit</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://www.solopos.com" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Kontak Kami</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://www.solopos.com" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Tentang Kami</a>
                    </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-500 md:mb-6">Legal</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://www.solopos.com/" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Terms</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://www.solopos.com/" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Privacy</a>
                    </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-500 md:mb-6">Social</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://www.facebookc.com/soloposcom" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Facebook</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://www.instagram.com/koransolopos" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Instagram</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://www.youtube.com/solopostv" class="no-underline hover:underline text-gray-800 hover:text-orange-500">YouTube</a>
                    </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-500 md:mb-6">Jaringan</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://www.harianjogja.com" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Harian Jogja</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://www.semarangpos.com" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Semarang Pos</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="https://www.madiunpos.com" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Madiun Pos</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</footer>




  <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->

<script>

	var scrollpos = window.scrollY;
	var header = document.getElementById("header");
	var navcontent = document.getElementById("nav-content");
	var navaction = document.getElementById("navAction");
	var brandname = document.getElementById("brandname");
	var toToggle = document.querySelectorAll(".toggleColour");

	document.addEventListener('scroll', function() {

	/*Apply classes for slide in bar*/
	scrollpos = window.scrollY;

    if(scrollpos > 10){
      header.classList.add("bg-white");
	  navaction.classList.remove("bg-white");
	  navaction.classList.add("gradient");
	  navaction.classList.remove("text-gray-800");
	  navaction.classList.add("text-white");
	  //Use to switch toggleColour colours
  	  for (var i = 0; i < toToggle.length; i++) {
	     toToggle[i].classList.add("text-gray-800");
		 toToggle[i].classList.remove("text-white");
	  }
	  header.classList.add("shadow");
	  navcontent.classList.remove("bg-gray-100");
	  navcontent.classList.add("bg-white");
    }
    else {
	  header.classList.remove("bg-white");
	  navaction.classList.remove("gradient");
	  navaction.classList.add("bg-white");
	  navaction.classList.remove("text-white");
	  navaction.classList.add("text-gray-800");
	  //Use to switch toggleColour colours
  	  for (var i = 0; i < toToggle.length; i++) {
	     toToggle[i].classList.add("text-white");
		 toToggle[i].classList.remove("text-gray-800");
	  }
	  
	  header.classList.remove("shadow");
	  navcontent.classList.remove("bg-white");
	  navcontent.classList.add("bg-gray-100");
	  
    }

	});

	
</script>

<script>
	
	
	/*Toggle dropdown list*/
	/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/
	
	var navMenuDiv = document.getElementById("nav-content");
	var navMenu = document.getElementById("nav-toggle");
	
	document.onclick = check;
	function check(e){
	  var target = (e && e.target) || (event && event.srcElement);
	  
	  //Nav Menu
	  if (!checkParent(target, navMenuDiv)) {
		// click NOT on the menu
		if (checkParent(target, navMenu)) {
		  // click on the link
		  if (navMenuDiv.classList.contains("hidden")) {
			navMenuDiv.classList.remove("hidden");
		  } else {navMenuDiv.classList.add("hidden");}
		} else {
		  // click both outside link and outside menu, hide menu
		  navMenuDiv.classList.add("hidden");
		}
	  }
	  
	}
	function checkParent(t, elm) {
	  while(t.parentNode) {
		if( t == elm ) {return true;}
		t = t.parentNode;
	  }
	  return false;
	}
</script>


</body>

</html>
