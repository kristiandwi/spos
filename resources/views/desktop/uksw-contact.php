<?php 
/*
Template Name: UKSW CONTACT
*/
?>
<?php include(TEMPLATEPATH.'/part/uksw/header.php'); ?>
	<div class="gap-30"></div>
	<!-- breadcrumb -->
	<div class="breadcrumb-section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<ol class="breadcrumb">
						<li>
							<i class="fa fa-home"></i>
								<a href="https://www.solopos.com">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li><a href="https://www.solopos.com/uksw">UKSW Salatiga</a></li>
						<li><i class="fa fa-angle-right"></i>Kontak</li>
					</ol>		
				</div>
			</div><!-- row end -->
		</div><!-- container end -->
	</div>
	<!-- breadcrumb end -->	
	<section class="main-content pt-0">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<img style="max-width: 100%; margin-bottom: 30px;" src="https://www.uksw.edu/public/upload/2019/11/30/USER120191130112455.jpg">
					<h3>Kontak Kami</h3>
					<p>Universitas Kristen Satya Wacana dapat mewujudkan citra dirinya seperti sekarang ini setelah melalui tahap-tahap perkembangan kelembagaan yang dalam garis besarnya adalah sebagai berikut: diujung tahun 1954 Ds Basoeki Probowinoto dan Ds Tan Ik Hay dan beberapa orang sebagai pendidik Kristen menggagas berdirinya suatu Perguruan Tinggi Pendidikan Guru Kristen. <a href="https://www.uksw.edu/pages/sejarah-uksw" target="_blank">Selengkapnya...</a></p>
					<div class="widget contact-info">
						<div class="contact-info-box">
							<div class="contact-info-box-content">
								<h4>UKSW Salatiga</h4>
								<p>Jl. Diponegoro 52-60 Salatiga - Indonesia 50711</p>
							</div>
						</div>

						<div class="contact-info-box">
							<div class="contact-info-box-content">
								<h4>Alamat Eamil</h4>
								<p>humas@adm.uksw.edu</p>
							</div>
						</div>

						<div class="contact-info-box">
							<div class="contact-info-box-content">
								<h4>Nomor Telepon</h4>
								<p>+(0298) 321212</p>
								<p>08112700049 (Admisi)</p>
								<p>0811262080 (Humas)</p>
							</div>
						</div>

					</div><!-- Widget end -->

					<h3>Kontak Form</h3>
					<form id="contact-form" action="http://demo.themewinter.com/html/digiqole/contact-form.php" method="post">
						<div class="error-container"></div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Nama</label>
								<input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control form-control-email" name="email" id="email" 
									placeholder="" type="email" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Tentang</label>
									<input class="form-control form-control-subject" name="subject" id="subject" 
									placeholder="" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Pesan</label>
							<textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
						</div>
						<div>
							<button class="btn btn-submit" type="submit">Kirim Pesan</button> 
						</div>
					</form>

				</div><!-- col-lg-8 -->
			</div><!-- row end -->
		</div><!-- container end -->
	</section><!-- category-layout end -->

<?php include(TEMPLATEPATH.'/part/uksw/footer.php'); ?>