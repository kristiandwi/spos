<?php 
      $m1   = '2020-12-16';
      $a1   = '2020-12-18';
      $m2   = '2019-05-18';
      $a2   = '2019-05-25';   
      $m3   = '2019-05-26';
      $a3   = '2019-05-31';
	  $m1t   = '2021-03-27 17:00:00';
      $a1t   = '2021-04-05 17:00:00'; //jam 00.00 server	 = jam 7 pagi H:i:s
	  $m2t   = '2020-12-20 17:00:01';
      $a2t   = '2020-12-22 17:00:00'; //jam 00.00 server	 = jam 7 pagi 	  
    ?>
    <?php if( date('Y-m-d H:i:s') >= $m1t && date('Y-m-d H:i:s') <= $a1t ) { ?>
        <div class="fixfloatingads" id="fixfloatingads" style="margin-top: 75px; " align="center">
            <span class="closeads" onclick="closeads();">Tutup Iklan</span>

            <!--<a href="https://www.solopos.com/virtualcycling20" target="_blank"><img src="https://www.solopos.com/assets/ads/svc-floating-desktop.jpg"></a>-->
			<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
			<script>
			  window.googletag = window.googletag || {cmd: []};
			  googletag.cmd.push(function() {
				googletag.defineSlot('/54058497/BI-800x600-solopos', [800, 600], 'div-gpt-ad-1608121161824-0').addService(googletag.pubads());
				googletag.defineSlot('/54058497/UMKM-800x500-Desktop', [800, 500], 'div-gpt-ad-1613899694869-0').addService(googletag.pubads());
				googletag.defineSlot('/54058497/Diplomat-1100x500', [1100, 500], 'div-gpt-ad-1615900423117-0').addService(googletag.pubads());
				googletag.pubads().enableSingleRequest();
				googletag.enableServices();
			  });
			</script>
			<!-- /54058497/Diplomat-1100x500 -->
			<div id='div-gpt-ad-1615900423117-0' style='width: 1100px; height: 500px; margin-right: auto; margin-left: auto;' >
			  <script>
				googletag.cmd.push(function() { googletag.display('div-gpt-ad-1615900423117-0'); });
			  </script>
			</div>
        </div>

        <script>
           function closeads()
            {
                var element = document.getElementById("fixfloatingads");
                element.parentNode.removeChild(element);
            }
            var delay = 30000;
            setTimeout(closeads, delay);           
        </script>	 
	<?php } else if( date('Y-m-d H:i:s') >= $m2t && date('Y-m-d H:i:s') <= $a2t ) { ?>
        <div class="fixfloatingads" id="fixfloatingads" style="margin-top: 45px;">
            <span class="closeads" onclick="closeads();">Tutup Iklan</span>

			<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
			<script>
			  window.googletag = window.googletag || {cmd: []};
			  googletag.cmd.push(function() {
				googletag.defineSlot('/54058497/BI-800x600-solopos', [800, 600], 'div-gpt-ad-1608121161824-0').addService(googletag.pubads());
				googletag.pubads().enableSingleRequest();
				googletag.enableServices();
			  });
			</script>
			<!-- /54058497/BI-800x600-solopos -->
			<div id='div-gpt-ad-1608121161824-0' style='width: 800px; height: 600px;'>
			  <script>
				googletag.cmd.push(function() { googletag.display('div-gpt-ad-1608121161824-0'); });
			  </script>
			</div>
        </div>

        <script>
           function closeads()
            {
                var element = document.getElementById("fixfloatingads");
                element.parentNode.removeChild(element);
            }
            var delay = 1000;
            setTimeout(closeads, delay);           
        </script>
		<?php } else { ?>

    <?php } ?>        