
	<?php 
	  $m1   = '2020-03-25';
	  $a1   = '2020-07-23';
	  $m2   = '2019-05-18';
	  $a2   = '2019-05-25';   
	  $m3   = '2019-05-26';
	  $a3   = '2019-05-31';               
	?>

	<?php if( date('Y-m-d') >= $m1 && date('Y-m-d') <= $a1 ) { ?>
	
	<?php } else { ?>
		<img src="<?php echo ASSETS_PILKADA; ?>images/banner-ubahlaku.jpg" alt="Banner Ubah Laku">
	<?php } ?>