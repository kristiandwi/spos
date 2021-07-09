    <style type="text/css">
        .fixfloatingads {
          width: 996px;
          height: 500px;
          display: block;
          left: 0;
          right: 0;
          margin:0px auto 0 auto;
          position: fixed;
          z-index: 998;
        }
        .closeads {
          padding: 5px 10px;
          font-size: 13px;
          background: rgba(0,0,0,0.9);
          float: right;
          color: #fff;
          text-transform: uppercase;
          font-weight: bold;
          cursor: pointer;
          position: absolute;
          top: 0;
          right: 0px;
          z-index: 999;
        }
        .clickarea {
          width: 100%;
          min-height: 280px;
          cursor: pointer;
          position: absolute;
          /*top: 40px;*/
          right: 0;
          z-index: 999;
        }
    </style>
	<?php if( date('Y-m-d H:i:s') >= '2021-05-16 17:00:00' && date('Y-m-d H:i:s') <= '2021-06-30 17:00:00' ) { ?>
		<div class="fixfloatingads" id="fixfloatingads" style="margin-top: 5px;">
			<span class="closeads" onclick="closeads();">Tutup Iklan</span>
			<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
			<script>
			  window.googletag = window.googletag || {cmd: []};
			  googletag.cmd.push(function() {
				googletag.defineSlot('/54058497/indofood-996x498', [996, 498], 'div-gpt-ad-1620792795078-0').addService(googletag.pubads());
				googletag.pubads().enableSingleRequest();
				googletag.enableServices();
			  });
			</script>
			<!-- /54058497/indofood-996x498 -->
			<div id='div-gpt-ad-1620792795078-0' style='width: 996px; height: 498px;'>
			  <script>
				googletag.cmd.push(function() { googletag.display('div-gpt-ad-1620792795078-0'); });
			  </script>
			</div>
			
		</div>

        <script>
           function closeads()
            {
                var element = document.getElementById("fixfloatingads");
                element.parentNode.removeChild(element);
            }
            //var delay = 10000;
            //setTimeout(closeads, delay);           
        </script>
	<?php } ?>