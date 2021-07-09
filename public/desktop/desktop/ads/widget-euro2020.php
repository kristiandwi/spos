                            <?php if( date('Y-m-d H:i:s') >= '2021-06-06 17:00:01' && date('Y-m-d H:i:s') <= '2021-07-15 17:00:00' ) { ?>
							<style type="text/css">
							.euro-widget ul {
								list-style: none;
								margin: 0;
								padding: 0;
								border: solid 1px #FFA500;
								max-height: 325px;
								overflow-y: scroll;
								overflow-x: hidden;        
							}
							.euro-widget ul li {
								list-style: none;
								/*margin-bottom: 10px;*/
								display: block;
								color: blue;
								font-weight: bold;
								font-family: arial;
								border-bottom: solid 1px rgb(253, 194, 86);
								padding: 10px;
								line-height: 17px;
							}
							.euro-widget ul li:last-child {
								border: none;
							}
							.euro-widget ul li a {
								text-decoration: none;
								color: #1EBAC4;
								font-size: 12px;
							}
							.euro-widget ul li a:hover {
								text-decoration: none;
								color: #FFA500;     
							}
							.euro-widget ul li img {
								width: 80px;
								height: 60px;
								float: left;
								margin-right: 10px;
								vertical-align: center;
							}
							.euro-widget-title {
								height: 60px;
								background: #FFA500;
							}
							.euro-widget-title img {
								height: 50px;
								padding: 5px 20px;
								float: left;
							}
							.euro-copy {
								border-top: none;
							}   
							</style>
							<!-- Widget EURO 2020 Start -->
                            <div class="euro-widget"> 
                                <a href="https://www.solopos.com/tag/euro-2020" style="display: inline-block; width: 100%;"><img src="https://www.solopos.com/assets/ads/euro2020_atas.png" class="visible animated" width="100%"></a>
                                <ul>
                                <?php query_posts('tag=euro-2020&showposts=10&orderby=date&order=desc');  ?>
		                        <?php if (have_posts()) : ?>
			                        <?php while (have_posts()) : the_post(); ?>
                                    <li> 
                                        <a href="<?php the_permalink(); ?>"> 
                                            <img src="<?php echo get_the_post_thumbnail_url( null, 'mthumb' );//echo post_image('thumbnail', 100, 100); ?>" style="object-fit: none; object-position: center; height: 60px; width: 80px;" alt="<?php the_title(); ?>"> 
                                            <?php the_title(); ?>
                                        </a> 
                                        <div style="clear:both;"></div>
                                    </li>
                                <?php endwhile; endif; wp_reset_query(); ?>
                                </ul>
                                <div class="euro-copy">
                                    <a href="https://www.solopos.com/tag/euro-2020">
                                        <img src="https://www.solopos.com/assets/ads/euro2020_bawah.png" class="visible animated" width="100%">
                                    </a>
                                </div>
                            </div>     
                            <!-- Widget EURO 2020 End --> <br>
							<?php }?>