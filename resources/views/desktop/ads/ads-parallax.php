<style>
/*parallax ads */
.paralax-article {width: 650px;}
.img-paralax-ad iframe {width: 600px !important;height: 600px; background-color: #000;}
.GoogleActiveViewElement img {width: 600px !important;height: 600px;}
.paralax-ad {
    height: 600px;
    margin: 20px auto;
    position: relative;
    width: 650px;
}

.paralax-ad .inner-paralax-ad {
    clip: rect(auto, auto, auto, auto);
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 650px;
    margin-right: -1px;
    margin-left: -1px;
}

.paralax-ad .img-paralax-ad {
    height: 100%;
    margin: 12px auto 0 auto;
    position: fixed;
    top: 0px;
    -webkit-transform: translateZ(0px);
    transform: translateZ(0px);
    width: 100%;
    text-align: left;
}
.img-paralax-ad img {
    border: medium none;
    height: 100%;
    width: 650px;
}
.paralax-ad .link-paralax-artikel {
    background-color: white;
    cursor: pointer;
    display: block;
    height: 100%;
    left: 0;
    opacity: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 11;
}
.paralax-ad .label-ad{
  background-color: #fff;
    top: 0;
    color: #767676;
    font-family: Arial,sans-serif;
    font-size: 10px;
    left: 0;
    position: absolute;
    text-align: left;
    width: 650px;
}
/*kanal-read*/
.read__content .paralax-artikel--kanal .img-paralax-ad{
    width: 950px;
}
.paralax-artikel--kanal .img-paralax-ad img {
    border: medium none;
    height: auto;
    width: 650px;
}
/*end read*/ 
</style> 
  
  <?php if( date('Y-m-d') >= '2021-01-01' && date('Y-m-d') <= '2021-05-05' ) { ?>
   
  <div style="margin-top: -17px;">
      <div class="clearfix">
          <!--link type="text/css" rel="stylesheet" href="https://www.solopos.com/assets/tema/mobile/css/ads-parallax.css"-->
          <div class="paralax-artikel">
              <div class="paralax-ad">    
                <div class="inner-paralax-ad">
                  <div class="img-paralax-ad" style="top: 25px !important;">
                    <img src="<?php echo ASSETS_MOBILE; ?>images/parallax.jpg" alt="Skin Ads Solopos">
                  </div>
                </div>
                <a class="link-paralax-artikel" href="https://jeda.id/stories/triliuner-yang-jadi-calon-menteri-di-kabinet-jokowi-maruf-2325" title="Triliuner yang Jadi Calon Menteri di Kabinet Jokowi-Ma'ruf" target="_blank"></a>
              </div>
          </div>
      </div>
  </div>
  <?php } else if ( date('Y-m-d') >= '2021-04-01' && date('Y-m-d') <= '2021-04-05' ) { ?>
  <!--div class="flying_desktop"-->
    <div style="margin-top: -17px;">
        <div class="clearfix">
            <!--link type="text/css" rel="stylesheet" href="<?php bloginfo('url');?>/assets/tema/mobile/css/ads-parallax.css">-->
			<!--link type="text/css" rel="stylesheet" href="<?php echo ASSETS_MOBILE; ?>css/ads-parallax.css"-->
            <div class="paralax-artikel">
                <div class="paralax-ad">    
                  <div class="inner-paralax-ad">
                    <div class="img-paralax-ad" style="top: 25px !important;">
                      <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
                      <script>
                        window.googletag = window.googletag || {cmd: []};
                        googletag.cmd.push(function() {
                          googletag.defineSlot('/54058497/dscx_solopos_skin_ad_mobile', [650, 600], 'div-gpt-ad-1572176483571-0').addService(googletag.pubads());
                          googletag.pubads().enableSingleRequest();
                          googletag.enableServices();
                        });
                      </script>
                      <!-- /54058497/dscx_solopos_skin_ad_mobile -->
                      <div id='div-gpt-ad-1572176483571-0' style='width: 650px; height: 600px;'>
                        <script>
                          googletag.cmd.push(function() { googletag.display('div-gpt-ad-1572176483571-0'); });
                        </script>
                      </div> 
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
  <!--/div--> 
  <?php } else { ?>
  <?php } ?>