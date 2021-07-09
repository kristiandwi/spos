<?php 
/*
Template Name: Google Maps Page
*/
get_header(); ?>
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
        <!-- Main Content Section Start -->
        <?php include (TEMPLATEPATH . '/header-section.php'); ?>

        <div class="main-content--section pbottom--30">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="col-md-12">

                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php setPostViews(get_the_ID()); ?>
			                <?php //espos_count_views(get_the_ID()); ?>
                            <!-- Post Item Start -->
                            <div class="post--item post--single post--title-largest" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                <div class="post--info">
                                    <div class="title">
                                        <h1 style="color: #000; text-transform: capitalize;font-weight: 700;"><?php the_title(); ?></h1>
                                        <p style="font-style: italic;">Silakan klik marker peta daerah untuk melihat datanya.</p>                                        
                                    </div>  
                                </div>                                
                                <div class="post--content no-gutter">
                                    <?php the_content(); ?>                                       
                                </div>
                            </div>
                            <!-- Post Item End -->

                            <?php endwhile; ?>

                            <?php else : ?>

                            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                <h1>Not Found</h1>
                            </div>

                            <?php endif; ?>


                        <div class="col-md-12 ptop--30 pbottom--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" >
                                <span class="left"></span>
                                <span class="right"></span>                                 
                                <h2 class="h4">Berita Terkini Virus Corona #Covid-19</h2>
                            </div>
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items">
                                <ul class="nav row gutter--15">
                                    <?php
                                        $pojokbisnis = new WP_Query('no_found_rows=true&tag=virus-corona&posts_per_page=4&order=DESC');
                                        while($pojokbisnis->have_posts()) : $pojokbisnis->the_post();
                                    ?>
                                    <li class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="<?php the_permalink(); ?>" class="thumb"><img style="max-height: 187px;" src="<?php echo post_image('thumbnail', 273, 100); ?>" alt="<?php the_title(); ?>"></a>

                                                <div class="post--info">
                                                    <div class="title">
                                                        <h3 class="h4"><a href="<?php the_permalink(); ?>" class="btn-link"><?php the_title(); ?></a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                </ul>
                            </div>
                            <!-- Post Items End -->
                        </div>

                    </div>
                    <!-- Main Content End -->
                </div>              
            </div>
        </div>
        <!-- Main Content Section End -->

<?php get_footer(); ?>