<?php //if( !is_category(118237) && !in_category(118237) ):?>

    <?php 
      $m1   = '2020-11-19';
      $a1   = '2020-11-20';
      $m2   = '2019-05-18';
      $a2   = '2019-05-25';   
      $m3   = '2019-05-26';
      $a3   = '2019-05-31';  
	  $m1t   = '2021-01-18 19:00:00';
	  $a1t   = '2021-01-25 19:00:00'; //jam 00.00 server	 = jam 7 pagi  	  
    ?>

    <?php if( date('Y-m-d') >= $m1t && date('Y-m-d') <= $a1t ) { ?>
    	<div style="margin-top: 30px; ">
			   <img src="https://solopos.com/assets/ads/DataUtama.jpg" alt="DataUtama">
    	</div>

    <?php } else { ?>

      <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
      <script>
        window.googletag = window.googletag || {cmd: []};
        googletag.cmd.push(function() {
          googletag.defineSlot('/54058497/indaco-728x90', [728, 90], 'div-gpt-ad-1596623293619-0').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>


      <!-- /54058497/indaco-728x90 -->
      <div id='div-gpt-ad-1596623293619-0' style='width: 728px; height: 90px;'>
        <script>
          googletag.cmd.push(function() { googletag.display('div-gpt-ad-1596623293619-0'); });
        </script>
      </div>       

    <?php } ?>

<?php //endif;?> 
