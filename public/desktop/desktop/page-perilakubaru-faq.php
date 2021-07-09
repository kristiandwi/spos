<?php 
/*
Template Name: Page Perilaku Baru FAQ
*/
?>
<?php
	include(TEMPLATEPATH.'/part/perilakubaru/header.php');
?>
	<div class="gap-30"></div>
	<!-- breadcrumb -->
	<div class="breadcrumb-section">
		<div class="container ">
			<div class="row">
				<div class="col-12">
					<ol class="breadcrumb">
						<li>
							<i class="fa fa-home"></i>
								<a href="https://www.solopos.com/">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>							
							<a href="https://www.solopos.com/ubahlaku">Ubah Laku</a>
							<i class="fa fa-angle-right"></i>
						</li>						
						<li><?php the_title(); ?></li>
					</ol>		
				</div>
			</div><!-- row end -->
		</div><!-- container end -->
	</div>
	<!-- breadcrumb end -->

	<section class="main-content pt-0">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-30">
				<div class="col-lg-8">
					<div class="single-post">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php setPostViews(get_the_ID()); ?>
						<div class="post-header-area">
							<h1 class="post-title title-lg"><?php the_title(); ?></h1>
							<p><?php $post_summary = get_post_meta( $post->ID, 'post_summary', true ); if($post_summary !== '') { echo $post_summary; } ?></p>
							<ul class="post-meta">
								<li class="social-share">
									<i class="shareicon fa fa-share"></i>
									<ul class="social-list">
										<li><a data-social="facebook" class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="<?php the_title(); ?>"><i class="fa fa-facebook"></i></a></li>
										<li><a data-social="twitter" class="twitter" href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" title="<?php the_title(); ?>"><i class="fa fa-twitter"></i></a></li>
										<li><a data-social="linkedin" class="linkedin" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><i class="fa fa-linkedin"></i></a></li>
										<li><a data-social="pinterest" class="pinterest" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><i class="fa fa-pinterest-p"></i></a></li>
									</ul>
								</li>
							</ul>
						</div><!-- post-header-area end -->
						<style>.post-content-area figure { max-width: 600px !important; }</style>
						<div class="post-content-area">
							<style type="text/css">
								.faq-title {font-weight: 700; font-size: 14px; color: #272c76;}
								.accordion li {list-style: decimal; padding-left: 10px;}
								.accordion i {padding-right: 5px; color: #ff575a; font-size: 18px;}
								.card .card-header {padding-left: 10px 5px !important;}
								.accordion {margin-bottom: 60px;}
							</style>							
							<div class="accordion" id="faqubahlaku">

							  <div class="card">
							    <div class="card-header" id="heading1">
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
							          <i class="fa fa-question-circle"></i> Apa dan bagaimana cara physical distancing?
							        </a>
							    </div>

							    <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#faqubahlaku">
							      <div class="card-body">
							        Physical distancing adalah upaya yang dilakukan untuk mencegah penyebaran virus corona di masyarakat. Secara sederhana Physical Distancing adalah menjaga jarak lebih dari 1 meter dengan siapapun. Dengan kata lain: Tidak Berdekatan dan Tidak Berkumpul.

									Dengan menerapkan Physial Distancing penyebaran virus dapat dicegah. Ingat, virus tidak bergerak sendiri tapi oranglah yang membawanya ke mana-mana.
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading2">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
							          <i class="fa fa-question-circle"></i> Bagaimana cara melakukan Physical Distancing?
							        </a>
							      
							    </div>
							    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#faqubahlaku">
							      <div class="card-body">
									<ol>
									 	<li>Kita harus tetap berada di rumah sesuai panduan pemerintah.</li>
									 	<li>Bekerja, belajar dan beribadah di rumah.</li>
									 	<li>Keluar hanya untuk belanja hal yang penting atau pengobatan Itu pun seminimal mungkin. Gunakan masker kain saat di luar rumah.</li>
									 	<li>Dilarang berdekatan. Selalu menjaga jarak lebih dari 1 meter dengan orang lain.</li>
									 	<li>Sebisa mungkin hindari penggunaan kendaraan umum.</li>
									 	<li>Tunda atau batalkan acara keluarga atau teman, saling mengunjungi atau silaturahmi tatap muka ganti dengan komunikasi via telephon, internet, media sosial atau aplikasi komunikasi.</li>
									 	<li>Tunda atau batalkan kegiatan pertemuan, konser musik, pertandingan olahraga, kegiatan keagamaan atau kegiatan lain yang mengundang orang banyak.</li>
									 	<li>Gunakan telepon atau layanan online untuk menghubungi dokter atau fasilitas lainnnya.</li>
									 	<li>Kalau kamu mengalami demam, merasa lelah dan batuk kering, lakukan isolasi diri.</li>
									</ol>
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading3">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
							          <i class="fa fa-question-circle"></i> Siapa yang harus melakukan Physical Distancing?
							        </a>
							      
							    </div>
							    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#faqubahlaku">
							      <div class="card-body">
									Semua orang harus melakukannya untuk mencegah meluasnya penyebaran virus corona.

									Kamu harus lebih ketat melakukannya jika untuk melindungi orang yang berisiko, yaitu:
									<ol>
									 	<li>Orang berusia 60 tahun ke atas.</li>
									 	<li>Mereka yang memiliki masalah kesehatan seperti penyakit jantung, tekanan darah tinggi, diabetes, kanker, asma atau paru.</li>
									 	<li>Ibu hamil.</li>
									</ol>
									Bagaimana cara isolasi diri?

									Isolasi diri dilakukan untuk memantau kondisi kesehatan diri dan menghindari penularan pada orang-orang sekitar termasuk keluarga.

									Mereka yang melakukan isolasi diri perlu melaporkan kondisi kesehatannya kepada fasilitasi layanan terdekat.

									Yang dilakukan saat isolasi diri:
									<ol>
									 	<li>Tinggal di rumah dan tidak boleh berinteraksi dengan masyarakat.</li>
									 	<li>Menggunakan kamar terpisah dari anggota keluarga lain.</li>
									 	<li>Jaga jarak lebih dari 1 meter dari anggota keluarga lainnya.</li>
									 	<li>Menggunakan masker selama isolasi diri.</li>
									 	<li>Ukur suhu tubuh setiap hari dan amati gejala yang dialami.</li>
									 	<li>Hindari pemakaian bersama peralatan makan, peralatan mandi dan linen/sprei.</li>
									 	<li>Sering cuci tangan pakai sabun dengan air mengalir.</li>
									 	<li>Berada di ruang terbuka dan berjemur di bawah sinar matahari setiap pagi.</li>
									 	<li>Bersihkan permukaan benda-benda yang sering disentuh dengan cairan disinfektan.</li>
									 	<li>Segera hubungi fasilitasi layanan kesehatan jika kondisi memburuk.</li>
									</ol>
									Apa yang dimaksud dengan Rapid Test atau Tes Cepat COVID-19?

									Rapid Test atau tes cepat COVID-19 bertujuan untuk mendeteksi kasus secara dini sehingga pemerintah dapat menyusun dan melakukan tindakan yang tepat untuk menghentikan penyebaran virus corona.

									<em>Tidak semua orang perlu mengikuti Rapid Test atau tes cepat.</em> Hanya mereka yang direkomendasikan oleh petugas kesehatan yang perlu menjalaninya.
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading4">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
							          <i class="fa fa-question-circle"></i> Rapid Test seperti apa dilakukan di Indonesia?
							        </a>
							      
							    </div>

							    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#faqubahlaku">
							      <div class="card-body">
							        Saat ini pemerintah melaksanakan kebijakan Rapid Test atau tes cepat. Rapid test dilakukan dengan mengambil tetes darah untuk melihat antibodi. Dengan dilakukannya Rapid Test di banyak daerah, akan ada lonjakan kasus positif. Mengetahui kasus positif penting bagi pemerintah untuk mengambil tindakan tepat dalam penanganan wabah COVID-19.

									Tidak ada aktivitas mobilisasi massa untuk pemeriksaan.

									Petugas akan mendatangi rumah ke rumah menelusuri riwayat kontak erat seseorang.
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading5">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
							          <i class="fa fa-question-circle"></i> Bagaimana Rapid Test bekerja?
							        </a>
							      
							    </div>

							    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#faqubahlaku">
							      <div class="card-body">
									Hasil Rapid Test dapat diperoleh dengan cepat, yaitu 2-15 menit.

									Perlu diingat:
									<ul>
									 	<li>Antibodi baru dihasilkan tubuh antara 8-10 hari setelah timbul gejala sehingga tetap ada kemungkinan <em>hasil negatif yang keliru</em></li>
									 	<li>Hasil positif bisa terjadi karena infeksi lain, seperti demam berdarah, sehingga tetap ada kemungkinan <em>hasil positif yang keliru</em></li>
									</ul>
							      </div>
							    </div>
							  </div> 


							  <div class="card">
							    <div class="card-header" id="heading6">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
							          <i class="fa fa-question-circle"></i> Rapid Test seperti apa dilakukan di Indonesia?
							        </a>
							      
							    </div>

							    <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#faqubahlaku">
							      <div class="card-body">
							        Saat ini pemerintah melaksanakan kebijakan Rapid Test atau tes cepat. Rapid test dilakukan dengan mengambil tetes darah untuk melihat antibodi. Dengan dilakukannya Rapid Test di banyak daerah, akan ada lonjakan kasus positif. Mengetahui kasus positif penting bagi pemerintah untuk mengambil tindakan tepat dalam penanganan wabah COVID-19.

									Tidak ada aktivitas mobilisasi massa untuk pemeriksaan.

									Petugas akan mendatangi rumah ke rumah menelusuri riwayat kontak erat seseorang.
							      </div>
							    </div>
							  </div>


							  <div class="card">
							    <div class="card-header" id="heading7">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
							          <i class="fa fa-question-circle"></i> Apa yang harus dilakukan setelah mendapat hasil Rapid Test?
							        </a>
							      
							    </div>

							    <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#faqubahlaku">
							      <div class="card-body">
									Hasil positif harus dikonfirmasi dengan pemeriksaan Laboratorium di Rumah Sakit Rujukan.

									Hasil negatif harus diulang pada hari ke-10. Sementara menunggu, <em>orang harus isolasi diri selama 14 hari.</em> Jika muncul demam tinggi dan sesak napas maka segera ke Rumah Sakit rujukan.
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading8">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
							          <i class="fa fa-question-circle"></i> Apakah kita perlu pakai masker?
							        </a>
							      
							    </div>

							    <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#faqubahlaku">
							      <div class="card-body">
									Semua orang harus menggunakan masker kain jika terpaksa beraktivitas di luar rumah.

									Kamu bisa menggunakan masker kain tiga lapis yang dapat dicuci dan digunakan berkali-kali, agar masker bedah dan N-95 tersedia bagi petugas medis dan mereka yang sakit.

									Jangan lupa untuk mencuci masker kain menggunakan air sabun agar tetap bersih.

									Penggunaan masker yang keliru justru meningkatkan risiko penularan. Jangan sentuh atau buka-tutup masker saat digunakan. Tetap jaga jarak minimal 1 meter dengan siapapun, jangan sentuh wajah dan cuci tangan pakai sabun sesering mungkin.
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading9">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
							          <i class="fa fa-question-circle"></i> Bagaimana cara melindungi orang lain?
							        </a>
							      
							    </div>

							    <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#faqubahlaku">
							      <div class="card-body">
							        Cara melindungi orang-orang terdekatmu dari COVID-19:
									<ul>
									 	<li>Bekerja, belajar dan beribadah di rumah</li>
									 	<li>Jaga jarak minimal 1 meter dengan siapapun disekitarmu</li>
									 	<li>Saat kamu batuk atau bersin: menjauh dan tutup mulut serta hidung kamu dengan tisu, saputangan atau lipatan siku. Segera buang tisu yang telah kamu pakai ke tempat sampah</li>
									 	<li>Kalau kamu demam, batuk atau tidak enak badan, pakai masker. Jangan lupa ikuti cara pakai masker yang benar</li>
									 	<li>Jika terpaksa beraktivitas di luar rumah, pakailah masker kain, jangan lupa cuci masker kain setiap hari</li>
									 	<li>Jangan pernah meludah sembarangan</li>
									 	<li>Sering cuci tangan pakai sabun dan air mengalir selama minimal 20 detik</li>
									 	<li>Segera hubungi call center 119 atau Rumah Sakit rujukan bila orang terdekatmu mengalami gejala COVID-19</li>
									</ul>
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading10">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
							          <i class="fa fa-question-circle"></i> Bagaimana cara melindungi diri?
							        </a>
							      
							    </div>

							    <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#faqubahlaku">
							      <div class="card-body">
							        Tunjukkan aksimu!

									Melindungi diri berarti melindungi sesama.

									Apa AKSI nyata yang dapat kamu lakukan?
									<ul>
									 	<li>Tetap di rumah. Bekerja, belajar dan beribadah di rumah</li>
									 	<li>Jika terpaksa keluar rumah karena kebutuhan penting, pakai masker kain, selalu jaga jarak minimal 1 meter dengan orang di lain dan sering cuci tangan pakai sabun atau cairan pembersih tangan (alkohol minimal 60%).</li>
									 	<li>Jangan kontak langsung dengan orang bergejala COVID-19. Lakukan komunikasi via telepon, chat atau video call</li>
									 	<li>Hindari kerumunan</li>
									 	<li>Jangan sentuh mata, hidung dan mulut yang merupakan pintu masuk virus</li>
									 	<li>Selalu cuci tangan pakai sabun dan air mengalir selama minimal 20 detik! Sebelum makan dan menyiapkan makanan, setelah dari toilet, setelah memegang binatang dan sehabis berpergian</li>
									 	<li>Ketika batuk atau bersin, tutup mulut dan hidung dengan siku terlipat atau tisu. Buang langsung tisu ke tempat sampah setelah digunakan dan segera cuci tangan pakai sabun</li>
									 	<li>Beritahu petugas kesehatan jika kamu mengalami gejala, pernah kontak erat dengan orang bergejala atau bepergian ke wilayah terjangkit COVID-19</li>
									 	<li>Jika petugas kesehatan menyatakan kamu harus isolasi diri, maka patuhi agar lekas sembuh dan tidak menulari orang lain</li>
									 	<li>Bersikaplah terbuka tentang statusmu pada orang lain di sekitar. Ini adalah bentuk nyata kepedulianmu pada diri sendiri dan sesama</li>
									</ul>
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading11">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse11" aria-expanded="true" aria-controls="collapse11">
							          <i class="fa fa-question-circle"></i> Apa saja gejala COVID-19?
							        </a>
							      
							    </div>

							    <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#faqubahlaku">
							      <div class="card-body">
									Gejala COVID-19 yang umum adalah demam, rasa lelah dan batuk kering. Ada juga yang mengalami rasa nyeri dan sakit, hidung tersumbat, pilek, sakit tenggorokan atau diare. Ada juga yang tidak merasakan apa-apa, seperti orang sehat.

									Jika kamu pernah berdekatan dengan orang yang memilliki gejala COVID-19 atau berpergian ke tempat terjangkiti, laporkan ke puskesmas terdekat dan lakukan monitoring mandiri. Bila dalam 1-14 hari kemudian mengalami gejala, lakukan isolasi diri.

									Karena orang yang merasa sehat pun bisa saja sedang kena COVID-19, kita semua harus tinggal di rumah.

									Bekerja, belajar dan beribadah di rumah.

									Kenapa? Untuk mencegah penyebaran COVID-19 lebih luas.

									Dari rumah, kamu bisa hubungi 119 untuk bantuan lebih lanjut.

									Kalau kondisi memburuk, seperti sesak napas, kontak Rumah Sakit rujukan dan segera periksakan diri.
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading12">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse12" aria-expanded="true" aria-controls="collapse12">
							          <i class="fa fa-question-circle"></i> Apa sebenarnya COVID-19?
							        </a>
							      
							    </div>

							    <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#faqubahlaku">
							      <div class="card-body">
									COVID-19 adalah penyakit menular yang disebabkan oleh jenis coronavirus yang baru ditemukan. Ini merupakan virus baru dan penyakit yang tidak dikenal sebelum terjadi wabah di Wuhan, Tiongkok, bulan Desember 2019.

									COVID-19 adalah singkatan dari CoronaVirus Disease-2019.
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading13">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse13" aria-expanded="true" aria-controls="collapse13">
							          <i class="fa fa-question-circle"></i> Cara mengenakan, menggunakan, melepas dan membuang masker
							        </a>
							      
							    </div>

							    <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#faqubahlaku">
							      <div class="card-body">
									<ul>
									 	<li>Ingat, masker sebaiknya hanya digunakan tenaga kesehatan, orang yang merawat orang sakit, dan orang-orang yang memiliki gejala-gejala pernapasan, seperti demam dan batuk.</li>
									 	<li>Sebelum menyentuh masker, cuci tangan dengan sabun dan air mengalir (minimal 20 detik) atau cairan pembersih berbahan alkohol (minimal 60%).</li>
									 	<li>Ambil masker dan periksa apakah ada sobekan atau lubang.</li>
									 	<li>Pastikan arah masker sudah benar (pita logam terletak di sisi atas).</li>
									 	<li>Pastikan sisi depan masker (sisi yang berwarna) menghadap depan Letakkan masker di wajah Anda.</li>
									 	<li>Tekan pita logam atau sisi masker yang kaku sampai menempel sempurna ke hidung Tarik sisi bawah masker sampai menutupi mulut, hidung dan dagu, pastikan tidak ada sela antara wajah dan masker.</li>
									 	<li>Setelah digunakan, lepas masker, lepas tali elastis dari daun telinga sambil tetap menjauhkan masker dari wajah dan pakaian, untuk menghindari permukaan masker yang mungkin terkontaminasi.</li>
									 	<li>Segera buang masker di tempat sampah tertutup setelah digunakan.</li>
									 	<li> Bersihkan tangan setelah menyentuh atau membuang masker/cuci tangan pakai sabun dan air mengalir (minimal 20 detik) atau bila tidak tersedia, cairan pembersih berbahan alkohol (minimal 60%).</li>
									</ul>
									sumber: WHO
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading14">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse14" aria-expanded="true" aria-controls="collapse14">
							          <i class="fa fa-question-circle"></i> Apa saja pengobatan infeksi virus corona (COVID-19) yang tersedia?
							        </a>
							      
							    </div>

							    <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#faqubahlaku">
							      <div class="card-body">
									Saat ini <strong>belum ada pengobatan khusus yang efektif</strong> untuk infeksi virus corona baru. Vaksin mungkin baru bisa tersedia 18 bulan ke depan (2021). Sementara ini, cara terbaik adalah melakukan tindakan pencegahan, yaitu:
									<ul>
									 	<li>Sering suci tangan pakai sabun dan air mengalir</li>
									 	<li>Hindari menyentuh muka</li>
									 	<li>Jauhi orang yang menunjukkan gejala (demam, batuk kering, kelelahan)</li>
									 	<li>Bila Anda mengalami demam, rasa lelah dan batuk kering, segera cari pengobatan</li>
									 	<li>Anda dapat menguatkan sistem kekebalan diri dengan melakukan perilaku sehat, seperti olah raga teratur, makan makanan bergizi seimbang, tidak merokok dan memastikan Anda dan anak Anda mendapat imunisasi lengkap.</li>
									</ul>
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading15">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse15" aria-expanded="true" aria-controls="collapse15">
							          <i class="fa fa-question-circle"></i> Apakah vaksin pneumonia melindungi Anda dari virus corona baru?
							        </a>
							      
							    </div>

							    <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#faqubahlaku">
							      <div class="card-body">
									Tidak. Vaksin pneumonia, seperti vaksin pneumokokus dan vaksin Haemophilus influenza tipe B (Hib), tidak memberi perlindungan terhadap virus corona baru. Virus ini sangat baru dan berbeda sehingga membutuhkan vaksin sendiri. Para peneliti sedang mencoba mengembangkan vaksin melawan COVID-19 dan WHO mendukung upaya mereka. Meskipun vaksin pneumonia tidak efektif terhadap COVID-19, vaksinasi terhadap penyakit pernapasan sangat dianjurkan untuk melindungi kesehatan Anda.

									sumber: WHO
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading16">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse16" aria-expanded="true" aria-controls="collapse16">
							          <i class="fa fa-question-circle"></i> Berapa lama virus ini bertahan di atas permukaan benda?
							        </a>
							      
							    </div>

							    <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#faqubahlaku">
							      <div class="card-body">
									Belum dipastikan berapa lama virus penyebab COVID-19 bertahan di atas permukaan benda, tetapi perilaku virus ini menyerupai jenis-jenis coronavirus lainnya. Penelitian coronavirus, dan juga informasi awal tentang virus penyebab penyakit COVID-19, mengindikasikan virus dapat bertahan di permukaan benda antara beberapa jam hingga beberapa hari. Lamanya virus bertahan mungkin dipengaruhi kondisi-kondisi yang berbeda (seperti jenis permukaan, suhu atau kelembaban lingkungan). Jika Anda merasa suatu permukaan mungkin terinfeksi, bersihkanlah dengan disinfektan sederhana untuk membunuh virus dan melindungi diri Anda dan orang lain. Cuci tangan Anda dengan sabun dan air mengalir atau bila tidak tersedia, cairan pembersih berbahan alkohol (minimal 60%). Hindari menyentuh mata, mulut, atau hidung Anda.

									sumber: WHO
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading17">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse17" aria-expanded="true" aria-controls="collapse17">
							          <i class="fa fa-question-circle"></i> Apa yang harus saya lakukan bila anggota keluarga menunjukkan gejala?
							        </a>
							      
							    </div>

							    <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#faqubahlaku">
							      <div class="card-body">
									Segera cari pertolongan kesehatan bila Anda atau anak mengalami demam, batuk dan kesulitan bernapas. Telepon sarana kesehatan terlebih dahulu untuk memberi tahu jika Anda telah melakukan perjalanan ke wilayah di mana dilaporkan ada kasus virus corona (COVID-19) atau bila Anda pernah bertemu dengan seseorang yang telah melakukan perjalanan ke wilayah itu dan menunjukkan gejala-gejalanya.
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading18">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse18" aria-expanded="true" aria-controls="collapse18">
							          <i class="fa fa-question-circle"></i> Dapatkah lampu ultraviolet membunuh virus corona baru?
							        </a>
							      
							    </div>

							    <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#faqubahlaku">
							      <div class="card-body">
									Lampu UV sebaiknya tidak digunakan untuk mensterilkan tangan atau area kulit lainnya karena radiasi UV dapat menyebabkan iritasi kulit.

									sumber: WHO
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading19">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse19" aria-expanded="true" aria-controls="collapse19">
							          <i class="fa fa-question-circle"></i> Apakah sebaiknya anak saya jangan bersekolah dulu?
							        </a>
							      
							    </div>

							    <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#faqubahlaku">
							      <div class="card-body">
									Bila anak Anda menunjukkan gejala demam, rasa lelah dan batuk kering, sebaiknya mencari pengobatan dan ikuti perintah dari tenaga kesehatan. Istirahatkan anak di rumah dan hindari tempat keramaian untuk mencegah penyebaran penyakit. Bila anak Anda tidak menunjukkan gejala sebaiknya anak Anda tetap bersekolah, kecuali ada pemberitahuan dari pihak berwenang yang menyatakan sebaliknya. Ajarkan anak perilaku bersih, termasuk perilaku sbb., <em>Sering cuci tangan pakai sabun dan air mengalir atau cairan pembersih berbahan alkohol (60%)</em><em> </em>Menutup mulut dan hidung saat batuk atau bersin dengan siku terlipat atau tisu, yang langsung dibuang ke tempat sampah tertutup setelah digunakan * Hindari menyentuh mata, mulut dan hidung saat tangan anak belum dicuci pakai sabun
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading20">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse20" aria-expanded="true" aria-controls="collapse1">
							          <i class="fa fa-question-circle"></i> Apakah virus corona baru mempengaruhi anak-anak atau ibu hamil?
							        </a>
							      
							    </div>

							    <div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#faqubahlaku">
							      <div class="card-body">
									Ini adalah virus baru dan kita belum memperoleh pengetahuan yang cukup tentang bagaimana virus mempengaruhi anak-anak atau ibu hamil. Yang telah diketahui: siapapun dari semua kelompok usia dapat terinfeksi virus. Yang kita tahu, sejauh ini jumlah kasus anak-anak terbilang sedikit. Pada sedikit kasus, infeksi virus corona baru dapat berakibat fatal dan kebanyakan itu terjadi di kelompok lansia (lanjut usia) dan mereka yang masalah kesehatan menahun (kronis), seperti tekanan darah tinggi, diabetes atau penyakit jantung.
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading21">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse21" aria-expanded="true" aria-controls="collapse21">
							          <i class="fa fa-question-circle"></i> Apakah virus corona baru bisa ditularkan melalui gigitan nyamyuk?
							        </a>
							      
							    </div>

							    <div id="collapse21" class="collapse" aria-labelledby="heading21" data-parent="#faqubahlaku">
							      <div class="card-body">
									Sampai saat ini belum ada bukti yang menunjukkan virus corona baru dapat ditularkan nyamuk. Virus corona baru adalah virus pernapasan yang menyebar terutama melalui percikan batuk atau napas orang yang sudah terinfeksi. Untuk melindungi diri Anda, sering-seringlah mencuci tangan pakai sabun dan air mengalir atau bila tidak tersedia, dengan cairan pembersih berbahan alkohol (minimal 60%). Selain itu, hindari kontak dekat dengan siapa pun yang batuk dan bersin. sumber: WHO
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading22">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse22" aria-expanded="true" aria-controls="collapse22">
							          <i class="fa fa-question-circle"></i> Mengapa orang yang dicurigai (suspek) tertular virus corona harus diisolasi setidaknya 14 hari?
							        </a>
							      
							    </div>

							    <div id="collapse22" class="collapse" aria-labelledby="heading22" data-parent="#faqubahlaku">
							      <div class="card-body">
							        Virus corona biasanya menunjukkan gejala-gejala dalam 1 – 14 hari. Karena itu, orang yang dicurigai harus diisolasi selama 14 hari, baik di rumah sakit, rumah atau lokasi lain dan dipantau gejala-gejala yang muncul seperti demam, batuk atau sesak napas. Untuk memastikan infeksi virus corona, suspek dapat mengikuti tes beberapa kali. Selama isolasi, suspek harus mengikuti semua perintah petugas kesehatan untuk mencegah penyebaran virus. Di lain pihak, petugas kesehatan dan kita bersama harus selalu menunjukkan empati dan kasih sayang. Mereka yang diisilolasi biasanya mengalami kesepian, kekhawatiran dan yang jelas, sakit yang mereka alami bukanlah kemauan mereka sendiri. Anda dapat mendukung mereka dengan mencari tahu kebutuhan-kebutahan mereka dan membantu sejauh yang Anda bisa.
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading23">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse23" aria-expanded="true" aria-controls="collapse23">
							          <i class="fa fa-question-circle"></i> Seberapa efektif pemindai termal mendeteksi orang yang terinfeksi virus corona baru?
							        </a>
							      
							    </div>

							    <div id="collapse23" class="collapse" aria-labelledby="heading23" data-parent="#faqubahlaku">
							      <div class="card-body">
							        Pemindai termal efektif mendeteksi orang yang mengalami demam (yaitu memiliki suhu tubuh lebih tinggi dari normal), yang bisa terjadi karena infeksi. Namun, pemindai termal tidak dapat mendeteksi orang yang terinfeksi tetapi belum menunjukkan demam. Ini karena dibutuhkan antara 1 dan 14 hari sebelum orang yang terinfeksi menjadi sakit dan mengalami demam.

									sumber: WHO
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading24">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse24" aria-expanded="true" aria-controls="collapse24">
							          <i class="fa fa-question-circle"></i> Bagaimana cara menjaga keluarga tetap sehat di perjalanan?
							        </a>
							      
							    </div>

							    <div id="collapse24" class="collapse" aria-labelledby="heading24" data-parent="#faqubahlaku">
							      <div class="card-body">
							        Seseorang yang merencanakan perjalanan ke luar negeri harus selalu memeriksa nasihat perjalanan (travel advisory) untuk negara tujuan termasuk pembatasan-pembatasan memasuki wilayah, syarat karantina saat masuk atau nasihat perjalan lainnya. Saat perjalanan, semua orang tua harus mengikuti standar perilaku bersih untuk mereka sendiri dan anak-anak. Perhatikan hal-hal berikut: <em>Sering cuci tangan pakai sabun dan air mengalir atau bila tidak tersedia, gunakan cairan pembersih tangan berbahan alkohol (minimal 60%)</em><em> </em>Saat batuk atau bersin, tutupi mulut dan hidung dengan siku terlipat atau tisu, yang langsung dibuang ke tempat sampah tertutp setelah digunakan * Jaga jarak minimal 1 dengan orang lain. Hindari orang yang batuk atau bersin Karena itu, orang tua harus menyiapkan perlengkapan cairan pembersih tangan, tisu pembersih/ pengering dan tisu atau lap disinfektan. Saran tambahan: di pesawat atau kendaraan lain, bersihkan kursi, sandaran tangan, layar LCD dan sebagainya dengan tisu disinfektan. Di hotel atau tempat akomodasi lain, gunakan tisu atau lap disinfektan untuk membersihkan permukaan bidang benda-benda yang tersentuh tangan, pegangan pintu, remote control dan lainnya.
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading25">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse25" aria-expanded="true" aria-controls="collapse25">
							          <i class="fa fa-question-circle"></i> Apakah mandi air panas bisa mencegah virus corona (COVID-19)?
							        </a>
							      
							    </div>

							    <div id="collapse25" class="collapse" aria-labelledby="heading25" data-parent="#faqubahlaku">
							      <div class="card-body">
							        Mandi air panas tidak dapat mencegah Anda dari COVID-19. Suhu tubuh normal Anda tetap di sekitar 36,5° C hingga 37° C terlepas dari suhu air. Sebenarnya, mandi dengan air yang sangat panas bisa berbahaya, karena bisa membakar kulit. Cara terbaik untuk melindungi diri dari COVID-19 adalah dengan sering mencuci tangan pakai sabun dan air mengalir atau bila tidak tersedia, cairan permbersih berbahan alkohol (60%). Dengan melakukan ini, Anda menghilangkan virus yang mungkin ada di tangan dan menghindari infeksi yang dapat terjadi karena menyentuh mata, mulut, dan hidung. sumber: WHO
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading26">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse26" aria-expanded="true" aria-controls="collapse26">
							          <i class="fa fa-question-circle"></i> Apakah manusia dapat terinfeksi COVID-19 dari hewan?
							        </a>
							      
							    </div>

							    <div id="collapse26" class="collapse" aria-labelledby="heading26" data-parent="#faqubahlaku">
							      <div class="card-body">
							        Coronavirus adalah kelompok virus yang biasanya terdapat pada binatang. Terkadang, orang terinfeksi virus-virus ini, yang kemudian menyebar ke orang lain, seperti SARS-CoV dan MERS-CoV. SARS-CoV dikaitkan dengan musang, sedangkan MERS-CoV ditularkan oleh unta. Hewan penular COVID-19 belum bisa dipastikan sampai saat ini. Untuk melindungi diri, misalnya saat mengunjungi pasar hewan hidup, hindari kontak langsung dengan hewan hidup dan permukaan yang bersentuhan dengan hewan. Pastikan kebersihan makanan selalu dijaga. Berhati-hatilah ketika memegang daging, susu atau organ hewan mentah untuk menghindari kontaminasi dengan makanan mentah dan hindari konsumsi produk-produk hewan yang mentah atau tidak matang sempurna. sumber: WHO
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading27">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse27" aria-expanded="true" aria-controls="collapse27">
							          <i class="fa fa-question-circle"></i> Bagaimana caranya agar rumah saya aman dari penularan virus corona?
							        </a>
							      
							    </div>

							    <div id="collapse27" class="collapse" aria-labelledby="heading27" data-parent="#faqubahlaku">
							      <div class="card-body">
							        Pastikan keluarga menerapkan perilaku bersih, yaitu sering cuci tangan pakai sabun dan air mengalir, di antaranya saat mereka tiba di rumah, sebelum makan dan setelah menggunakan kamar mandi. Secara teratur bersihkan permukaan benda-benda yang sering tersentuh tangan, seperti saklar lampu atau gagang pintu dengan lap, tisu atau carian disinfektan. Cuci baju yang telah terpakai dengan deterjen dengan takaran sesuai label.
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading28">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse28" aria-expanded="true" aria-controls="collapse28">
							          <i class="fa fa-question-circle"></i> Bagaimana cara terbaik mencuci tangan secara benar?
							        </a>
							      
							    </div>

							    <div id="collapse28" class="collapse" aria-labelledby="heading28" data-parent="#faqubahlaku">
							      <div class="card-body">
							        <strong>Langkah Mencuci Tangan :
									</strong>Langkah 1: basahkan tangan dengan air mengalir.
									Langkah 2: sabuni tangan.
									Langkah 3: gosok semua permukaan tangan, termasuk telapak dan punggung tangan, sela-sela jari dan kuku, selama minimal 20 detik.
									Langkah 4: bilas sampai bersih dengan air mengalir.
									Langkah 5: keringkan tangan dengan kain bersih atau tisu pengering tangan yang harus dibuang ke tempat sampah segera setelah digunakan.

									Seringlah cuci tangan pakai pakai sabun, seperti sebelum makan, setelah batuk atau bersin, sebelum menyiapkan makanan, saat ke kamar mandi. Jadikan kebiasaan untuk mencuci tangan pakai sabun setelah dari luar rumah atau sebelum memasuki sekolah atau tempat lain dengan anak. Bila sabun dan air mengalir tidak tersedia, gunakan cairan pembersih tangan yang berbahan alkohol (minimal 60%).
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading29">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse29" aria-expanded="true" aria-controls="collapse29">
							          <i class="fa fa-question-circle"></i> Apakah antibiotik efektif mencegah dan mengobati virus corona baru?
							        </a>
							      
							    </div>

							    <div id="collapse29" class="collapse" aria-labelledby="heading29" data-parent="#faqubahlaku">
							      <div class="card-body">
							        Tidak, antibiotik tidak bekerja melawan virus, hanya bakteri. Virus corona baru adalah virus dan oleh karena itu, antibiotik tidak boleh digunakan untuk pencegahan ataupun pengobatan. Antibiotik hanya digunakan sesuai arahan dokter untuk mengobati infeksi bakteri. sumber: WHO
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading30">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse30" aria-expanded="true" aria-controls="collapse30">
							          <i class="fa fa-question-circle"></i> Bagaimana virus corona baru menyebar?
							        </a>
							      
							    </div>

							    <div id="collapse30" class="collapse" aria-labelledby="heading30" data-parent="#faqubahlaku">
							      <div class="card-body">
							        Virus dapat berpindah secara langsung melalui percikan batuk dan napas orang terinfeksi yang kemudian terhirup orang sehat. Virus juga dapat menyebar secara tidak langsung melalui benda-benda yang tercemar virus akibat percikan atau sentuhan tangan yang tercemar virus. Virus bisa tertinggal di permukaan benda-benda dan hidup selama beberapa jam hingga beberapa hari, namun cairan disinfektan dapat membunuhnya. Jika tangan tercemar percikan, virus dapat menyebar melalui sentuhan antar-orang, karena itu penting untuk sering mencuci tangan pakai sabun dan air mengalir serta sementara waktu, menghindari bersalaman atau saling mencium pipi.
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading31">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse31" aria-expanded="true" aria-controls="collapse31">
							          <i class="fa fa-question-circle"></i> Bagaimana caranya supaya saya tetap aman saat berada di luar rumah?
							        </a>
							      
							    </div>

							    <div id="collapse31" class="collapse" aria-labelledby="heading31" data-parent="#faqubahlaku">
							      <div class="card-body">
							        Ingat bahwa Anda tidak disarankan menggunakan masker kecuali memiliki gejala seperti demam, rasa lelah dan batuk kering. Agar tetap aman, cuci tangan pakai sabun dan air mengalir atau bila tidak tersedia, cairan pembersih tangan berbahan alkohol (min 60%), jauhi orang yang menunjukkan gejala sakit dan bila Anda batuk atau bersin, tutup dengan siku terlipat atau tisu yang segera dibuang ke tempat sampah tertutup selesai digunakan. Sementara ini, jangan bersalaman dengan orang lain atau saling menyentuh muka tapi gunakan cara bersalaman lain yang aman atau tidak saling menyentuh. Dalam keramaian, semisal di pasar atau di dalam bis, jaga jarak dengan orang lain, minimal sejauh jangkauan lengan (1 meter). Selalu cuci tangan pakai sabun atau dengan cairan pembersih saat sampai di tempat kerja atau tujuan dan saat sampai kembali di rumah. Bila tersedia cairan pembersih gratis di tempat umum, gunakan untuk membersihkan tangan.
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading32">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse32" aria-expanded="true" aria-controls="collapse32">
							          <i class="fa fa-question-circle"></i> Apakah cuaca dingin dan salju bisa membunuh virus corona baru?
							        </a>
							      
							    </div>

							    <div id="collapse32" class="collapse" aria-labelledby="heading32" data-parent="#faqubahlaku">
							      <div class="card-body">
							        Tidak ada bukti yang menunjukkan cuaca dingin dapat membunuh virus corona baru atau penyakit lainnya. Terlepas dari suhu eksternal atau cuaca suhu tubuh manusia normal tetap sekitar 36,5° C hingga 37° C. Cara paling efektif untuk melindungi diri Anda dari virus corona (COVID-19) adalah dengan sering mencuci tangan pakai sabun dan air mengalir atau bila tidak tersedia, cairan pembersih berbahan alkohol (minimal 60%). sumber: WHO
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading33">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse33" aria-expanded="true" aria-controls="collapse33">
							          <i class="fa fa-question-circle"></i> Bagaimana saya melindungi orang lansia (lanjut usia) di keluarga atau lingkungan?
							        </a>
							      
							    </div>

							    <div id="collapse33" class="collapse" aria-labelledby="heading33" data-parent="#faqubahlaku">
							      <div class="card-body">
							        Orang lansia paling rentan terhadap infeksi virus corona, khususnya mereka yang memiliki sistem kekebalan tubuh lemah atau memiliki masalah pernapasan.
									<ul>
									 	<li>Anda dapat melindungi mereka dengan memotivasi mereka untuk sering mencuci tangan pakai sabun dan air mengalir. Saat mengunjungi mereka, Anda pun harus cuci tangan pakai sabun.</li>
									 	<li>Bila Anda demam, batuk atau sesak napas, jangan kunjungi lansia atau orang-orang yang fisiknya lemah. Sebagai pengganti, Anda dapat berkomunikasi via telepon atau cara lain.</li>
									 	<li>Orang lansia atau mereka yang memiliki masalah kesehatan sebaiknya menghindari keramaian seperti festival, pasar atau kegiatan lain yang mendatangkan keramaian.</li>
									 	<li>Anda dapat membantu mereka dengan mengerjakan tugas mereka sambil berhubungan via telep1.</li>
									 	<li>Bagi lansia, berada di rumah terus bisa membuat kesepian, namun Anda bisa menggembirakan mereka dengan membantu mereka tetap berhubungan dengan dunia luar dengan beragam teknologi komunikasi.</li>
									</ul>
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="heading34">
							      
							        <a href="#" class="faq-title" data-toggle="collapse" data-target="#collapse34" aria-expanded="true" aria-controls="collapse34">
							          <i class="fa fa-question-circle"></i> Apakah makan bawang putih bisa membantu mencegah infeksi virus corona baru?
							        </a>
							      
							    </div>

							    <div id="collapse34" class="collapse" aria-labelledby="heading34" data-parent="#faqubahlaku">
							      <div class="card-body">
							        Bawang putih adalah makanan sehat yang mungkin memiliki beberapa sifat antimikroba. Namun, tidak ada bukti bahwa makan bawang putih telah melindungi orang dari virus corona (COVID-19). sumber: WHO
							      </div>
							    </div>
							  </div>
							</div>	<!--end faq -->							
							<?php //the_content(); ?>
						</div><!-- post-content-area end -->
                    	<?php endwhile; endif;?>
					</div><!-- single-post end -->

					<div>
						<h2 class="block-title">
							<span class="title-angle-shap"> Berita Terbaru </span>
						</h2>
						<div class="row ts-gutter-20 align-items-center">
						<?php
						query_posts('author=-200&no_found_rows=true&showposts=10&tag=perilaku-baru,setop-penularan-covid-19,ingat-pesan-ibu,solopos-lawan-covid-19,setop-penularan-covid-19');
						if (have_posts()) : while (have_posts()) : the_post();
							$cat = get_the_category();
                            $cat_name = $cat[0]->cat_name;
                            $cat_slug =  $cat[0]->slug;
							$cat_link = get_term_link($cat_slug, 'category');
							if($post->ID != $post_id):
                    	?>
							<div class="col-12 mb-10">
								<div class="post-block-style">
									<div class="row align-items-center">
										<div class="col-md-5">
											<div class="post-thumb">
												<img src="<?php echo post_image('thumbnail', 280, 280); ?>" alt="">
												<a class="post-cat-box <?php echo parent_category_slug(); ?>" href="https://www.solopos.com/<?php echo parent_category_slug(); ?>"><?php echo parent_category_slug(); ?></a>
											</div>
										</div>
										<div class="col-md-7 pl-0">
											<div class="post-content">
												<h2 class="post-title title-md">
													<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												</h2>
												<div class="post-meta mb-7">
													<span class="post-author"><a href="#"><i class="fa fa-user"></i> <?php echo author_name(); ?></a></span>
													<span class="post-date"><i class="fa fa-clock-o"></i> <?php the_time('j F Y'); ?></span>
												</div>
												<p><?php echo excerpt(20); ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endif; endwhile; endif; ?>					

							<div class="col-12 mt-3">
								<div class="load-more-btn text-center">
										<a class="btn" href="<?php echo BASE_URL; ?>/arsip"> Indek Berita </a>
								</div>
							</div><!-- col end -->
						</div>
					</div><!-- Content Col end -->					
				</div><!-- col-lg-8 -->

				<?php include(TEMPLATEPATH.'/part/perilakubaru/sidebar.php'); ?>
			</div><!-- row end -->
		</div><!-- container end -->
	</section><!-- category-layout end -->

	<!-- ad banner start-->
	<div class="block-wrapper no-padding">
		<div class="container pl-0 pr-0">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="banner-img">
						<?php include(TEMPLATEPATH.'/part/perilakubaru/ads/ads-leaderboard-bottom.php'); ?>
					</div>
				</div>
				<!-- col end -->
			</div>
			<!-- row  end -->
		</div>
		<!-- container end -->
	</div>
	<!-- ad banner end-->

	<!-- newsletter start -->
	<div class="newsletter-area">
		<div class="container">
			<div class="row ts-gutter-30 justify-content-center align-items-center">
				<div class="col-lg-7 col-md-6">
					<div class="footer-loto">
						<a href="#">
							<img src="https://www.solopos.com/assets/tema/mobile/img/logo-putih.png" width=150 alt="">
						</a>
					</div>
				</div>
				<!-- col end -->
				<div class="col-lg-5 col-md-6">
					<div class="footer-newsletter">
						<form action="#" method="post">
							<div class="email-form-group">
								<i class="news-icon fa fa-paper-plane" aria-hidden="true"></i>
								<input type="email" name="EMAIL" class="newsletter-email" placeholder="Your email" required>
								<input type="submit" class="newsletter-submit" value="Subscribe">
							</div>
							
						</form>
					</div>
				</div>
				<!-- col end -->
			</div>
			<!-- row  end -->
		</div>
		<!-- container end -->
	</div>
	<!-- newsletter end-->

<?php include(TEMPLATEPATH.'/part/perilakubaru/footer.php'); ?>