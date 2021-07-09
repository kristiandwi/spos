                            <?php if( date('Y-m-d') <= '2021-05-28' ) { ?>
							<!-- Widget JELAJAHTOL Start -->
                            <div class="jelajah-widget"> 
                                <h3>
                                    <a href="https://www.solopos.com/tag/Ekspedisi-Tol-Trans-Jawa" style="display: inline-block; width: 100%;"><img src="https://www.solopos.com/assets/ads/JelajahTol-Atas.png" class="visible animated" width="100%"></a>
                                </h3>
                                <ul>
                                <?php query_posts('tag=ekspedisi-tol-trans-jawa&showposts=10&orderby=date&order=desc');  ?>
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
                                <div class="jelajah-copy">
                                    <a href="https://www.solopos.com/tag/Ekspedisi-Tol-Trans-Jawa">
                                        <img src="https://www.solopos.com/assets/ads/JelajahTol-Bawah.png" class="visible animated" width="100%">
                                    </a>
                                </div>
                            </div>     
                            <!-- Widget JELAJAHTOL End --> 
							<?php }?>