<?php 
/*
Template Name: Page Solopos Virtual Cycling 2020
*/
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <title><?php single_post_title(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Hsoft">
    <meta name="MobileOptimized" content="320">
    <!-- favicon links-->
    <link rel="icon" type="image/icon" href="https://www.solopos.com/assets/tema/cycling/favicon.png">
    <!-- main css -->
    <link rel="stylesheet" href="https://www.solopos.com/assets/tema/cycling/css/bootstrap.css">
    <link rel="stylesheet" href="https://www.solopos.com/assets/tema/cycling/css/fonts.css">
    <link rel="stylesheet" href="https://www.solopos.com/assets/tema/cycling/css/font-awesome.css">
    <link rel="stylesheet" href="https://www.solopos.com/assets/tema/cycling/js/plugin/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="https://www.solopos.com/assets/tema/cycling/js/plugin/owl/owl.theme.css">
    <link rel="stylesheet" href="https://www.solopos.com/assets/tema/cycling/js/plugin/magnific/magnific-popup.css">
    <link rel="stylesheet" href="https://www.solopos.com/assets/tema/cycling/css/style.css">
</head>

<body>
    <!--Top bar start-->
    <div class="cy_top_wrapper">
        <div class="cy_top_info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="cy_top_detail">
                            <ul>
                                <li><a href="#">EMAIL: soloposvirtualcycling@gmail.com</a></li>
                                <li>PHONE: 0271 724811</li>
                                <li>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Banner section start-->
    <div class="cy_bread_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1><?php single_post_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!--Menus Start-->
    <div class="cy_menu_wrapper">
        <div class="cy_logo_box">
            <a href="https://www.solopos.com/virtualcycling20"><img src="https://www.solopos.com/assets/tema/cycling/images/logo-solopos-virtual-cycling.png" alt="logo" class="img-fluid"/></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <button class="cy_menu_btn">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</button>
                    <div class="cy_menu">
                        <nav>
                            <ul>
                                <li><a href="https://www.solopos.com/virtualcycling20">home</a></li>
                                <li><a href="https://www.solopos.com/virtualcycling20/about">about</a></li>
                                <li><a href="https://www.solopos.com/virtualcycling20/event">event</a></li>
                                <li><a href="https://www.solopos.com/virtualcycling20/news">news</a></li>
                                <li><a href="https://www.solopos.com/virtualcycling20/gallery">gallery</a></li>
                                <li><a href="https://www.solopos.com/virtualcycling20/contact">contact us</a></li>
                                <li><a href="https://epaper.solopos.com/cart/?add-to-cart=62482" class="active">Register</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Blog section start-->
    <div class="cy_blog_wrapper cy_section_padding  cy_blog_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="cy_blog_box">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php setPostViews(get_the_ID()); ?>
                        <!--<div class="cy_blog_img">
                            <img src="http://via.placeholder.com/750x551" alt="blog single" class="img-fluid" />
                            <div class="cy_blog_overlay"></div>
                            <div class="cy_blog_links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 15</a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 120</a></li>
                                    <li><a href="#" class="cy_relative"><i class="fa fa-share-alt" aria-hidden="true"></i> share</a>
                                        <ul class="cy_so_icons">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>-->
                        <div class="cy_blog_data">
                            <!--<ul class="cy_blog_info">
                                <li><a href="#">by maria</a></li>
                                <li><a href="#">14 apr, 2017</a></li>
                                <li><a href="#">cycling</a></li>
                            </ul>-->
                            <h2><?php the_title(); ?></h2>
                            <?php if(get_the_ID() == '1072559') { ?>
                                <div class="row">
                                    <?php ig_feed_by_hastag('solopos'); ?>
                                </div><?php } else { ?>
                            <?php the_content(); ?>
                                <?php } ?>
                        </div>
                        <?php endwhile; ?>

                        <?php else : ?>

                            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                <h1>Not Found</h1>
                            </div>

                        <?php endif; ?>
                    </div>
                </div>
                <!--Sidebar Start-->
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar cy_sidebar">
                        <!--Recent Post-->
                        <div class="widget widget_recent_entries">
                            <h3 class="widget-title">News</h3>
                            <ul>
                                <li>
                                    <div class="recent_cmnt_img">
                                        <img src="http://via.placeholder.com/70x70" alt="post" />
                                    </div>
                                    <div class="recent_cmnt_data">
                                        <h4><a href="#">Selecting The Proper Bicycle</a></h4>
                                        <span>14 Apr, 2017</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="recent_cmnt_img">
                                        <img src="http://via.placeholder.com/70x70" alt="post" />
                                    </div>
                                    <div class="recent_cmnt_data">
                                        <h4><a href="#">Selecting The Proper Bicycle</a></h4>
                                        <span>14 Apr, 2017</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--Sociallinks-->
                        <div class="widget widget_social_links">
                            <h3 class="widget-title">follow us</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer section start-->
    <!--<div class="cy_footer_wrapper cy_section_padding padder_bottom75">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget cy_footer_about">
                        <img src="https://www.solopos.com/assets/tema/cycling/images/logo.png" alt="logo" class="img-fluid"/>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>  
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                    <h1 class="widget-title">recent blog</h1>
                    <div class="cy_recent_post">
                        <div class="cy_post_img">
                            <a href="#"><img src="http://via.placeholder.com/70x70" alt="post"/></a>
                        </div>
                        <div class="cy_post_data">
                            <h3><a href="#">Selecting The Proper Bicycle</a></h3>
                            <p>14 Apr, 2017</p>
                        </div>  
                    </div>
                    <div class="cy_recent_post">
                        <div class="cy_post_img">
                            <a href="#"><img src="http://via.placeholder.com/70x70" alt="post"/></a>
                        </div>
                        <div class="cy_post_data">
                            <h3><a href="#">Selecting The Proper Bicycle</a></h3>
                            <div class="cy_post_info"><p>14 Apr, 2017</p></div>
                        </div>  
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h1 class="widget-title">contact info</h1>
                    </div>
                    <div class="cy_foo_contact">
                        <span><img src="images/svg/map-mark.svg" alt="map-mark"></span>
                        <div class="cy_post_info">
                        <p>10221 Magnolia Grove Dr,  Manassas, VA, 20110</p>
                        </div>
                    </div>
                    <div class="cy_foo_contact">
                        <span><img src="images/svg/phone.svg" alt="phone"></span>
                        <div class="cy_post_info">
                        <p>Office :- +1-512-555-0190</p>
                        <p>Office :- +1-512-555-0190</p>
                        </div>
                    </div>
                    <div class="cy_foo_contact">
                        <span><img src="images/svg/email.svg" alt="email"></span>
                        <div class="cy_post_info">
                        <p><a href="#">help@yourmail.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h1 class="widget-title">flicker widget</h1>
                        <div class="cy_foo_gallery">
                            <ul>
                                <li><a href="#"><img src="http://via.placeholder.com/78x78" alt="flicker gallery"></a></li>
                                <li><a href="#"><img src="http://via.placeholder.com/78x78" alt="flicker gallery"></a></li>
                                <li><a href="#"><img src="http://via.placeholder.com/78x78" alt="flicker gallery"></a></li>
                                <li><a href="#"><img src="http://via.placeholder.com/78x78" alt="flicker gallery"></a></li>
                                <li><a href="#"><img src="http://via.placeholder.com/78x78" alt="flicker gallery"></a></li>
                                <li><a href="#"><img src="http://via.placeholder.com/78x78" alt="flicker gallery"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>-->
    <!--Bottom footer start-->
    <div class="cy_btm_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12" style="padding: 50px 0;">
                    <P>Copyright &copy; 2020, <a href="#">Solopos Virtual Cycling 2020</a>. All Rights Reserved.</P>
                </div>
            </div>
        </div>
    </div>
        <!--Go to top start-->
    <div class="cy_go_to">
        <div class="cy_go_top">
            <img src="https://www.solopos.com/assets/tema/cycling/images/go_to_top.png" alt="Back to top">
        </div>  
    </div>
    <!--scripts start-->
    <script src="https://www.solopos.com/assets/tema/cycling/js/jquery.js"></script>
    <script src="https://www.solopos.com/assets/tema/cycling/js/tether.min.js"></script>
    <script src="https://www.solopos.com/assets/tema/cycling/js/bootstrap.min.js"></script>
    <script src="https://www.solopos.com/assets/tema/cycling/js/wow.js"></script>
    <script src="https://www.solopos.com/assets/tema/cycling/js/jquery.countTo.js"></script>    
    <script src="https://www.solopos.com/assets/tema/cycling/js/appear.js"></script>
    <script src="https://www.solopos.com/assets/tema/cycling/js/plugin/owl/owl.carousel.min.js"></script>
    <script src="https://www.solopos.com/assets/tema/cycling/js/plugin/magnific/jquery.magnific-popup.min.js"></script>
    <script src="https://www.solopos.com/assets/tema/cycling/js/jquery.nice-select.min.js"></script>
    <script src="https://www.solopos.com/assets/tema/cycling/js/custom.js"></script>
</body>

</html>