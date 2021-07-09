<?php 
/*
Template Name: Page Pemenang
*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php the_title(); ?> - SBBI - Solopos.com</title>
		<?php wp_head();?>
		<link rel="icon" href="<?php bloginfo('template_url');?>/sbbi/img/faviconsbbi.png">
		<!-- CSS FILES -->
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@latest/dist/css/uikit.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/sbbi/css/style.css">
		<style type="text/css">
			.top-wrap::before, .overlay-wrap::before {background-color: rgba(0,0,0,0.5) !important;}
		</style>		
	</head>
	<body>
		<!-- TOP -->
		<div class="top-wrap uk-position-relative uk-light uk-background-secondary">
			
			<!-- NAV -->
			<div class="nav" data-uk-sticky="cls-active: uk-background-secondary uk-box-shadow-medium; top: 20vh; animation: uk-animation-slide-top">
				<div class="uk-container">
					<nav class="uk-navbar uk-navbar-container uk-navbar-transparent" data-uk-navbar>
						<div class="uk-navbar-left">
							<div class="uk-navbar-item uk-padding-remove-horizontal">
								<a class="uk-logo" title="Logo" href="https://www.solopos.com/sbbi"><img src="<?php bloginfo('template_url');?>/sbbi/img/logo.png" alt="Logo"></a>
							</div>
						</div>
						<div class="uk-navbar-right">
							<ul class="uk-navbar-nav uk-visible@s">
								<li class="uk-active uk-visible@m"><a href="https://www.solopos.com/sbbi/" data-uk-icon="home"></a></li>
								<li><a href="https://www.solopos.com/sbbi/tentang-sbbi-award-2021">Tentang SBBI</a></li>
								<li><a href="https://www.solopos.com/sbbi/event">Event</a></li>
								<li><a href="https://www.solopos.com/sbbi#news">Informasi</a></li>
								<li><a href="https://www.solopos.com/sbbi/pemenang-2021">Pemenang</a></li>
								<!--li><a href="https://www.solopos.com/sbbi/partner">Partner</a></li-->
							</ul>
							<a class="uk-navbar-toggle uk-navbar-item uk-hidden@s" data-uk-toggle data-uk-navbar-toggle-icon href="#offcanvas-nav"></a>
						</div>
					</nav>
				</div>
			</div>
			<!-- /NAV -->
			
			<div class="uk-cover-container uk-light uk-flex uk-flex-middle" style="height: 23vw">				
				<!-- TOP CONTAINER -->
				<div class="uk-container uk-flex-auto top-container uk-position-relative uk-margin-medium-top" data-uk-parallax="y: 0,50; easing:0; opacity:0.9">
					<div class="uk-width-1-1@s" data-uk-scrollspy="cls: uk-animation-slide-right-medium; target: > *; delay: 150">

					</div>
				</div>
				<!-- /TOP CONTAINER -->
				<!-- TOP IMAGE -->

				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="https://www.solopos.com/assets/ads/sbbi/2021/Banner_SBBI_2021.gif"
				data-sizes="12vw"
				data-src="https://picsum.photos/1200/900/?image=816" alt="" data-uk-cover data-uk-img data-uk-parallax="opacity: 1,0.1; easing:0"
				>
				 <!-- /TOP IMAGE -->
			</div>
		</div>

		<section class="uk-section uk-article">
			<div class="uk-container uk-container-small">
				<h1 class="uk-text-bold uk-h1 uk-margin-remove-adjacent uk-margin-remove-top uk-text-center">
					Daftar Pemenang Solo Best Brand & Innovation Awards 2020
				</h1>
			</div>
			
			<br><br>
			<!-- text -->
			<div class="uk-container uk-container-small">
				  <ul class="uk-tab uk-flex-center" data-uk-tab="{connect:'#my-id'}">
				    <li><a href="">Best Brand</a></li>
				    <li><a href="">Prestigious</a></li>
				    <li><a href="">Innovation</a></li>
				    <li><a href="">Potential Brand</a></li>
				    <li><a href="">Penghargaan Khusus</a></li>
				  </ul>
				  <ul id="my-id" class="uk-switcher uk-margin">
				    <li>
						<table class="uk-table uk-table-small uk-table-divider">
						    <thead>
						        <tr>
						            <th>No</th>
						            <th>Kategori Best Brand</th>
						            <th>Pemenang</th>
						        </tr>
						    </thead>
						    <tbody>
						        <tr>
						            <td>1</td>
						            <td>Mobil – MPV</td>
						            <td>Toyota New Avanza</td>
						        </tr>
						        <tr>
						            <td>2</td>
						            <td>Mobil - Niaga</td>
						            <td>Mitsubishi L300</td>
						        </tr>
						        <tr>
						            <td>3</td>
						            <td>Mobil - Hatch Back</td>
						            <td>Honda Jazz</td>
						        </tr>
						        <tr>
						            <td>4</td>
						            <td>Mobil - Hatch Back</td>
						            <td>Honda Jazz</td>
						        </tr>
						        <tr>
						            <td>5</td>
						            <td>Mobil - LCGC</td>
						            <td>Honda Brio Satya</td>
						        </tr>
						        <tr>
						            <td>6</td>
						            <td>Mobil - Van</td>
						            <td>Daihatsu Gran Max</td>
						        </tr>
						        <tr>
						            <td>7</td>
						            <td>Truk</td>
						            <td>Mitsubishi Fuso</td>
						        </tr>
						        <tr>
						            <td>8</td>
						            <td>Oli Mobil</td>
						            <td>Shell Helix</td>
						        </tr>
						        <tr>
						            <td>9</td>
						            <td>Dealer Mobil</td>
						            <td>Toyota Nasmoco Slamet Riyadi</td>
						        </tr>
						        <tr>
						            <td>10</td>
						            <td>Leasing Mobil</td>
						            <td>Adira Finance</td>
						        </tr>
						        <tr>
						            <td>11</td>
						            <td>Asuransi Mobil</td>
						            <td>Garda Oto</td>
						        </tr>
						        <tr>
						            <td>12</td>
						            <td>Motor Manual</td>
						            <td>Honda Supra X</td>
						        </tr>
						        <tr>
						            <td>13</td>
						            <td>Motor Sport</td>
						            <td>Kawasaki Ninja 250</td>
						        </tr>
						        <tr>
						            <td>14</td>
						            <td>Motor Sport Road Bike</td>
						            <td>Yamaha Vixion</td>
						        </tr>
						        <tr>
						            <td>15</td>
						            <td>Motor Matic</td>
						            <td>Regular	Honda Vario</td>
						        </tr>
						        <tr>
						            <td>16</td>
						            <td>Motor Matic Sport</td>
						            <td>Yamaha NMAX</td>
						        </tr>
						        <tr>
						            <td>17</td>
						            <td>Oli Motor</td>
						            <td>Pertamina Enduro</td>
						        </tr>
						        <tr>
						            <td>18</td>
						            <td>Dealer Motor</td>
						            <td>Pratama Kurnia Kasih Purwosari</td>
						        </tr>
						        <tr>
						            <td>19</td>
						            <td>Sepeda</td>
						            <td>Polygon</td>
						        </tr>
						        <tr>
						            <td>20</td>
						            <td>Rokok Kretek</td>
						            <td>Djarum 76</td>
						        </tr>
						        <tr>
						            <td>21</td>
						            <td>Rokok Kretek Filter</td>
						            <td>Djarum Super</td>
						        </tr>
						        <tr>
						            <td>22</td>
						            <td>Mall</td>
						            <td>Solo Grand Mall (SGM)</td>
						        </tr>
						        <tr>
						            <td>23</td>
						            <td>Hypermarket</td>
						            <td>Hypermart</td>
						        </tr>
						        <tr>
						            <td>24</td>
						            <td>Supermarket</td>
						            <td>Luwes</td>
						        </tr>
						        <tr>
						            <td>25</td>
						            <td>Minimarket</td>
						            <td>Indomaret</td>
						        </tr>
						        <tr>
						            <td>26</td>
						            <td>Toko Akesoris HP</td>
						            <td>Ilufa</td>
						        </tr>
						        <tr>
						            <td>27</td>
						            <td>Toko Handphone Lokal</td>
						            <td>Raya Seluler</td>
						        </tr>
						        <tr>
						            <td>28</td>
						            <td>Toko Elektronik Lokal</td>
						            <td>Candi Elektronik</td>
						        </tr>
						        <tr>
						            <td>29</td>
						            <td>Toko Perkakas Rumah Tangga Modern</td>
						            <td>ACE Hardware</td>
						        </tr>
						        <tr>
						            <td>30</td>
						            <td>Toko Furniture Modern</td>
						            <td>Informa</td>
						        </tr>
						        <tr>
						            <td>31</td>
						            <td>Tabungan Bank</td>
						            <td>BRI Britama</td>
						        </tr>
						        <tr>
						            <td>32</td>
						            <td>Bank Syariah</td>
						            <td>Mandiri Syariah</td>
						        </tr>
						        <tr>
						            <td>33</td>
						            <td>Tabungan Anak</td>
						            <td>BRI Junio</td>
						        </tr>
						        <tr>
						            <td>34</td>
						            <td>KPR</td>
						            <td>BTN</td>
						        </tr>
						        <tr>
						            <td>35</td>
						            <td>Kartu Kredit</td>
						            <td>BCA</td>
						        </tr>
						        <tr>
						            <td>36</td>
						            <td>Internet Banking</td>
						            <td>BRI</td>
						        </tr>						        
						        <tr>
						            <td>37</td>
						            <td>Kartu Bayar Digital</td>
						            <td>Mandiri e-money</td>
						        </tr>
						        <tr>
						            <td>38</td>
						            <td>Semen</td>
						            <td>Gresik</td>
						        </tr>
						        <tr>
						            <td>39</td>
						            <td>Cat Tembok</td>
						            <td>Dulux Catylac</td>
						        </tr>
						        <tr>
						            <td>40</td>
						            <td>Cat Pelapis anti Bocor</td>
						            <td>No Drop</td>
						        </tr>
						        <tr>
						            <td>41</td>
						            <td>Cat Besi dan Kayu</td>
						            <td>Avian High Gloss Enamel</td>
						        </tr>
						        <tr>
						            <td>42</td>
						            <td>Kamera</td>
						            <td>Canon</td>
						        </tr>
						        <tr>
						            <td>43</td>
						            <td>Printer</td>
						            <td>Canon</td>
						        </tr>
						        <tr>
						            <td>44</td>
						            <td>Lemari Es</td>
						            <td>Sharp</td>
						        </tr>
						        <tr>
						            <td>45</td>
						            <td>Mesin Cuci</td>
						            <td>LG</td>
						        </tr>
						        <tr>
						            <td>46</td>
						            <td>TV</td>
						            <td>Polytron</td>
						        </tr>
						        <tr>
						            <td>47</td>
						            <td>AC</td>
						            <td>LG</td>
						        </tr>
						        <tr>
						            <td>48</td>
						            <td>Smartphone</td>
						            <td>Samsung</td>
						        </tr>
						        <tr>
						            <td>49</td>
						            <td>GSM Pra Bayar</td>
						            <td>Simpati</td>
						        </tr>
						        <tr>
						            <td>50</td>
						            <td>Mobile Internet Provider</td>
						            <td>Simpati</td>
						        </tr>
						        <tr>
						            <td>51</td>
						            <td>Penyedia Jasa Bandwith</td>
						            <td>IndiHome</td>
						        </tr>
						        <tr>
						            <td>52</td>
						            <td>Mie Instan</td>
						            <td>Indomie</td>
						        </tr>
						        <tr>
						            <td>53</td>
						            <td>Kopi White & Mixed Combination</td>
						            <td>Luwak White Koffie</td>
						        </tr>
						        <tr>
						            <td>54</td>
						            <td>Obat Masuk Angin Herbal Berstandar</td>
						            <td>Tolak Angin</td>
						        </tr>
						        <tr>
						            <td>55</td>
						            <td>Perguruan Tinggi Swasta (PTS)</td>
						            <td>Universitas Muhammadiyah Surakarta (UMS)</td>
						        </tr>
						        <tr>
						            <td>56</td>
						            <td>Rumah Sakit swasta</td>
						            <td>PKU Muhammadiyah Surakarta</td>
						        </tr>
						        <tr>
						            <td>57</td>
						            <td>Lab Diagnostik</td>
						            <td>Prodia</td>
						        </tr>
						        <tr>
						            <td>58</td>
						            <td>Skin Care</td>
						            <td>Ella</td>
						        </tr>
						        <tr>
						            <td>59</td>
						            <td>Batik</td>
						            <td>Danar Hadi</td>
						        </tr>
						        <tr>
						            <td>60</td>
						            <td>Hotel Berbintang</td>
						            <td>Lorin</td>
						        </tr>
						        <tr>
						            <td>61</td>
						            <td>Hotel Syariah</td>
						            <td>Syariah Hotel Solo</td>
						        </tr>
						        <tr>
						            <td>62</td>
						            <td>Jasa Pengiriman</td>
						            <td>JNE</td>
						        </tr>
						        <tr>
						            <td>63</td>
						            <td>Biro umrah</td>
						            <td>Hajar Aswad</td>
						        </tr>
						        <tr>
						            <td>64</td>
						            <td>Transportasi online</td>
						            <td>Gojek</td>
						        </tr>
						        <tr>
						            <td>65</td>
						            <td>Restoran</td>
						            <td>Double Decker</td>
						        </tr>
						        <tr>
						            <td>66</td>
						            <td>Financial Technology</td>
						            <td>OVO</td>
						        </tr>
						    </tbody>
						</table>				    	


				    </li>
				    <li>
						<table class="uk-table uk-table-small uk-table-divider">
						    <thead>
						        <tr>
						            <th>No</th>
						            <th>Kategori Prestigious</th>
						            <th>Pemenang</th>
						        </tr>
						    </thead>
						    <tbody>
						        <tr>
						            <td>1</td>
						            <td>Mall</td>
						            <td>The Park</td>
						        </tr>
						        <tr>
						            <td>2</td>
						            <td>Department Store</td>
						            <td>Metro</td>
						        </tr>
						        <tr>
						            <td>3</td>
						            <td>Hotel berbintang</td>
						            <td>Alila</td>
						        </tr>
						        <tr>
						            <td>4</td>
						            <td>Rumah sakit swasta</td>
						            <td>JIH Solo</td>
						        </tr>
						        <tr>
						            <td>5</td>
						            <td>Supermarket</td>
						            <td>Superindo</td>
						        </tr>
						    </tbody>
						</table>
				    </li>
				    <li>
						<table class="uk-table uk-table-small uk-table-divider">
						    <thead>
						        <tr>
						            <th>No</th>
						            <th>Kategori Innovation</th>
						            <th>Pemenang</th>
						        </tr>
						    </thead>
						    <tbody>
						        <tr>
						            <td>1</td>
						            <td>Wahana Wisata Keluarga</td>
						            <td>Saloka</td>
						        </tr>
						        <tr>
						            <td>2</td>
						            <td>Mobil MPV</td>
						            <td>Mitsubishi Xpander</td>
						        </tr>
						        <tr>
						            <td>3</td>
						            <td>Hotel berbintang</td>
						            <td>Best Western Premiere</td>
						        </tr>
						    </tbody>
						</table>
				    </li>
				    <li>
						<table class="uk-table uk-table-small uk-table-divider">
						    <thead>
						        <tr>
						            <th>No</th>
						            <th>Kategori Potential Brand</th>
						            <th>Pemenang</th>
						        </tr>
						    </thead>
						    <tbody>
						        <tr>
						            <td>1</td>
						            <td>Toko aksesoris HP</td>
						            <td>Kartika</td>
						        </tr>
						        <tr>
						            <td>2</td>
						            <td>Mall</td>
						            <td>Solo Paragon Mall</td>
						        </tr>
						        <tr>
						            <td>3</td>
						            <td>Rumah Sakit Swasta</td>
						            <td>RS Indriati</td>
						        </tr>
						        <tr>
						            <td>4</td>
						            <td>Oli Motor</td>
						            <td>Top One Action</td>
						        </tr>
						    </tbody>
						</table>
				    </li>
				    <li>
						<table class="uk-table uk-table-small uk-table-divider">
						    <thead>
						        <tr>
						            <th>No</th>
						            <th>Penghargaan Khusus Inovasi</th>
						            <th>Pemenang</th>
						        </tr>
						    </thead>
						    <tbody>
						        <tr>
						            <td>1</td>
						            <td>Bidang Otomotif</td>
						            <td>H. Sukiyat</td>
						        </tr>
						        <tr>
						            <td>2</td>
						            <td>Produk Ramah Lingkungan</td>
						            <td>Indaco</td>
						        </tr>
						        <tr>
						            <td>3</td>
						            <td>Bidang Seni</td>
						            <td>Didi Kempot</td>
						        </tr>
						    </tbody>
						</table>
				    </li>
				  </ul>				
			</div>
			<!-- text -->
			
		</section>
		

		<!-- LOGOS -->
		<!--div id="partner" class="uk-container uk-container-small uk-section uk-section-small uk-section-muted" tabindex="-1" uk-slider>
			<div>
			    <ul class="uk-slider-items uk-child-width-1-4 uk-child-width-1-3@s uk-child-width-1-4@m logos-grid">
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/mitsubishi.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/mandiri.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/mandiri-syariah.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/bank-bri.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/kiat-motor.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/sun-motor.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/prodia.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/sharp.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/indofood.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/pku-sejati.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/djarum-super.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/djarum-76.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/djarum-mld.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/yamaha.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/candi-elektronik.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/best-western.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/telkom.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/solo-paragon.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/ums.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/superindo.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/astra.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/lorin-hotel.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/syariah-hotel.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/raya-seluler.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/ilufa.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/ella-skincare.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/nasmoco.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/daihatsu.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/kopi-luwak.jpg" data-uk-img alt="SBBI 2020">
					</li>
					<li>
						<img src="https://solopos.com/assets/ads/sbbi/tolak-angin.jpg" data-uk-img alt="SBBI 2020">
					</li>					
			    </ul>
				
		    </div>
		</div>
		<!-- /LOGOS -->

<?php include(TEMPLATEPATH.'/sbbi/footer-sbbi.php'); ?>