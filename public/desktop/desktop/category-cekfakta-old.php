<?php get_header(); ?>
<?php
    // deteksi kanal
    $cat = get_the_category($post->ID);
    $cat_parent = $cat[0]->category_parent;
    if($cat_parent) { $cat = get_category($cat_parent);
        $cat = $cat->slug;
    } else { 
        $cat = $cat[0]->slug;
    } 
?>
<body id="<?php echo $cat; ?>">

    <!-- Wrapper Start -->
    <div class="wrapper">

        <!-- ads Floating -->
        <?php include(TEMPLATEPATH.'/ads/ads-floating.php'); ?>  
          
        <!--?php include (TEMPLATEPATH . '/header-section.php'); ?-->

        <!-- Main Breadcrumb Start -->
        <div class="main--breadcrumb">
            <div class="container">
            <?php the_breadcrumb(); ?>
                <!--<ul class="breadcrumb">
                    <li><a href="index.html" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
                    <li><a href="category.html" class="btn-link">Soloraya</a></li>
                </ul>-->
            </div>
        </div>
        <!-- Main Breadcrumb End -->

        <!-- Main Content Section Start -->
        <div class="main-content--section pbottom--30">
            <div class="container">          

                <!-- Main Content Start -->
                <div class="main--content">  
                    <div class="container row">
                        <!-- pilihan Items Start -->
                        <div class="pilihan--items ptop--30 col-md-12">
                            <ul class="nav row AdjustRow no-gutter">
                            <?php query_posts(array('meta_key' => 'post_feature',
                                        'meta_value' => 'editor_choice',
                                        'showposts' => 4,
                                        'no_found_rows' => true,
                                        'orderby' => 'date',
                                        'cat' => 670832,
                                        //'offset' => 4,
                                        'post__not_in' => $do_not_duplicate // check IDs to display posts ...
                                        ));  
                            ?>
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <li class="col-md-3 col-xs-6 col-xxs-12 pbottom--30" >
                                    <!-- pilihan Item Start -->
                                    <div class="pilihan--item style--4">
                                        <div class="img">
                                            <img style="height: 190px;" src="<?php echo post_image('medium', 285, 315); ?>" alt="<?php the_title(); ?>">
                                        </div>

                                        <div class="info">
                                            <div class="vc--parent">
                                                <div class="vc--child">
                                                    <div class="name">
                                                        <h3 class="h4">Cek Fakta</h3>
                                                    </div>

                                                    <div class="desc">
                                                        <h4 class="h5"><?php the_title(); ?></h4>
                                                    </div>

                                                    <div class="action">
                                                        <a href="<?php the_permalink(); ?>" class="btn btn-default">Baca Selengkapnya</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pilihan Item End -->
                                </li>
                                <?php endwhile; endif; wp_reset_query(); ?>
                            </ul>
                        </div>
                        <!-- pilihan Items End --> 
                    </div> 
                </div>
                <!-- Main Content End -->

                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                        <div class="container"> 
                           <?php include (TEMPLATEPATH . '/ads/ads-kanal-banner.php'); ?> 
                        </div>
                        <div class="sticky-content-inner">
                            <div class="row">
                                <!-- Berita Terikini Start -->
                                <div class="col-md-12 ptop--30 pbottom--30">
                                    <!-- Post Items Title Start -->
                                    <div class="post--items-title">
                                        <span class="left"></span>
                                        <span class="right"></span>
                                        <h2 class="h4">Cek Fakta Terkini</h2>
                                    </div>
                                    <!-- Post Items Title End -->
                                   <!-- Post Items Start -->
                                        <div class="post--items post--items-2 pd--30-0">
                                            <ul class="nav row AdjustRow"> 
                                                <?php
                                                //$latest = new WP_Query('cat=76259&posts_per_page=15&order=DESC');
                                                $loop_no = 1;
                                                if (have_posts()) : while (have_posts()) : the_post(); ?>

                                                <?php
                                                    $cat = get_the_category();
                                                    $cat_name = $cat[0]->cat_name;
                                                    $cat_slug =  $cat[0]->slug;
                                                    $cat_link = get_term_link($cat_slug, 'category');
                                                ?>
                                                <li class="col-md-6 col-sm-12 col-xs-6 col-xss-12" style="margin-bottom: 30px;"> 
                                                    <div class="post--item post--layout-1 post--title-large"> 
                                                        <div class="post--img" style="border-radius: 10px; background: red; border-bottom: 2px solid #FF5733;">
                                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="thumb">
                                                                <img src="<?php echo post_image('thumbnail', 240, 240); ?>" alt="<?php the_title(); ?>" data-rjs="2" style="border-radius: 10px;">
                                                            </a> 
                                                            <a href="https://solopos.com/cekfakta" class="cat cekfakta">Cek Fakta</a>
                                                            <div class="post--info" style="background: #333 !important;">
                                                                <ul class="nav meta">
                                                                    <li>
                                                                        <a href="#"><?php echo author_name(); ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><?php echo solopos_time_ago(); ?></a>
                                                                    </li>
                                                                </ul>
                                                                <div class="title">
                                                                    <h2 class="h4">
                                                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn-link"><?php the_title(); ?></a>
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </li>
                                            <?php endwhile; ?>
                                            
                                            <?php endif; ?>
                                            <div><br><br><?php posts_nav_link(' — ', __('&laquo; Sebelumnya'), __('Berikutnya &raquo;')); ?> </div>                                           
                                        </ul>                                                                     
                                    </div>
                                    <!-- Post Items End -->
                                </div>
                                <!-- Berita Terikini End -->
                            </div>
                            <?php include (TEMPLATEPATH . '/solopostv-on-single.php'); ?>                            
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <?php get_sidebar(); ?>

                </div>
            </div>

            <div class="container">
                <div class="row">      
                <?php include (TEMPLATEPATH . '/bottom-section.php'); ?>
                </div>     
            </div>

        </div>
        <!-- Main Content Section End -->

<?php get_footer(); ?>