                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>    
                    <ul class="uk-slider-items uk-child-width-1-3 uk-child-width-1-3@m uk-grid">
                        <?php if(function_exists('fetch_feed')) {
                            include_once(ABSPATH . WPINC . '/feed.php'); // include the required file
                            $feed = fetch_feed('https://www.youtube.com/feeds/videos.xml?playlist_id=PLMNxf31imllFdcAqvNZ_k9TxPqmSI-2zi'); // specify the source feed
                            $limit = $feed->get_item_quantity(20); // specify number of items
                            $items = $feed->get_items(0, $limit); // create an array of items
                            }           

                            function youtube_id($url)
                            {
                                @preg_match('/(https:|http:|):(\/\/www\.|\/\/|)(.*?)\/(embed\/|watch.*?v=|)([a-z_A-Z0-9\-]{11})/i', $url, $IDD); return $IDD[5]; 
                            }
                            foreach ($items as $item) :
                            $yt_url= $item->get_permalink();
                             
                        ?>     
                        <li>
                            <div class="uk-panel">
                                <a href="#modal-media-youtube" uk-toggle>
                                    <img src="https://i1.ytimg.com/vi/<?php echo youtube_id($yt_url); ?>/mqdefault.jpg" alt="Thumbnail" style="width: 100%; height: auto;">
                                    <div class="uk-position-center uk-panel"><div uk-icon="icon: youtube; ratio: 3.5;"></div></div>
                                </a>
                            </div>
                        </li>                                                                   

                        <div id="modal-media-youtube" class="uk-flex-top" uk-modal>
                            <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
                                <button class="uk-modal-close-outside" type="button" uk-close></button>
                                <iframe src="https://www.youtube-nocookie.com/embed/<?php echo youtube_id($yt_url); ?>?rel=0&vq=hd1080" width="1100" height="619" frameborder="0" uk-video uk-responsive></iframe>
                            </div>
                        </div>                          
                        <?php endforeach; ?>
                    </ul>
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a> 
                </div>                   