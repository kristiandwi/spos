<?php

add_action( 'admin_menu', 'metabox_for_detail_post' );
add_action( 'save_post', 'save_metaboxdata', 10, 2 );
/*
 * Add a metabox
 * I hope you're familiar with add_meta_box() function, so, nothing new for you here
 */
function metabox_for_detail_post() {
    add_meta_box( 'detail_post_box', 'Detail Berita', 'detail_post_metabox', 'post', 'normal', 'default' );
}
 
/*
 * Display the fields inside it
 */
function detail_post_metabox( $post_object ) {
    global $post;
 
    // do not forget about WP Nonces for security purposes
 
    // I decided to write all the metabox html into a variable and then echo it at the end
    $html = '';
    
    $feature = get_post_meta($post_object->ID, 'post_feature', true);
    if($feature == "headline") {
        $headline_selected = 'selected="selected"';
        $editor_choice_selected = '';
        $story_selected = '';
        $null_selected = '';
    } elseif($feature == "editor_choice") {
        $editor_choice_selected = 'selected="selected"';
        $null_selected = '';
        $story_selected = '';
        $headline_selected = '';
    } elseif($feature == "story") {
        $story_selected = 'selected="selected"';
        $null_selected = '';
        $headline_selected = '';
        $editor_choice_selected = '';
    } else {
        $null_selected = 'selected="selected"';
        $headline_selected = '';
        $editor_choice_selected = '';
        $story_selected = '';
    }

    $premium = get_post_meta($post_object->ID, 'konten_premium', true);
    if($premium == "premium") {
        $premium_selected = 'selected="selected"';
        $null_selected = '';
    } else {
        $null_selected = 'selected="selected"';
        $premium_selected = '';
    }

    $post_source = get_post_meta($post_object->ID, 'post_source', true);

    $post_summary = get_post_meta($post_object->ID, 'post_summary', true);

    $post_url_video = get_post_meta($post_object->ID, 'post_url_video', true);
    
 
    // always array because we have added [] to our <select> name attribute
    $post_author = get_post_meta( $post_object->ID, 'author_solopos',true );
    $post_author_other = get_post_meta($post_object->ID, 'sumberlain', true);
 
    $html .= '<table class="form-table"><tbody>';

    $html .= '<input type="hidden" name="custom_detail_post_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
    $html .= '<tr><td>Summary<br><textarea name="post_summary" row="20" cols="100">'.$post_summary.'</textarea></td></tr>';
    /*
     * Select Posts with AJAX search
     */
    $html .= '<tr><td width="15%"><label for="rudr_select2_posts">Penulis Berita</label><br><select id="rudr_select2_posts" name="rudr_select2_posts[]" multiple="multiple" style="width:99%;max-width:25em;">';
 
    if( $post_author ) {
        foreach( $post_author as $author_id ) {
            $author = get_userdata( $author_id );
            // if the post title is too long, truncate it and add "..." at the end
            //$title = ( mb_strlen( $title ) > 50 ) ? mb_substr( $title, 0, 49 ) . '...' : $title;
            $author_solopos = $author->display_name;
            $html .=  '<option value="' . $author_id . '" selected="selected">' . $author_solopos . '</option>';
        }
    }
    

    $html .= '</select></td></tr>';
    $html .= '<tr><td>Penulis Lain<br><input type="text" name="sumberlain" value="'.$post_author_other.'" size="100"></td></tr>';
    $html .= '<tr><td>Jadikan Konten Premium ? <br><select name="konten_premium"><option value="" '.$null_selected.'>-- Pilih --</option><option value="premium" '.$premium_selected.'>Konten Premium</option></select></td></tr>';    
    $html .= '<tr><td>Fitur Berita<br><select name="post_feature"><option value="" '.$null_selected.'>-- Pilih --</option><option value="headline" '.$headline_selected.'>Headline</option><option value="editor_choice" '.$editor_choice_selected.'>Pilihan Redaksi</option><option value="story" '.$story_selected.'>Story</option></select></td></tr>';
    $html .= '<tr><td>Sumber Berita<br><input type="text" name="post_source" value="'.$post_source.'" size="100"></td></tr>';
    $html .= '<tr><td>ID Youtube (contoh : http://www.youtube.com/embed/ --> <b>YBeV0GGyidY</b> <-- )<br><input type="text" name="post_url_video" value="'.$post_url_video.'" size="100"></td></tr>';


    $html .= '</tbody></table>';
 
    echo $html;
}
 
 
function save_metaboxdata( $post_id, $post ) {

    //global $post;

    // verify nonce
    if (!wp_verify_nonce($_POST['custom_detail_post_nonce'], basename(__FILE__))) {
        return $post_id;
    }
 
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
 
    // if post type is different from our selected one, do nothing
    if ( $post->post_type == 'post' ) {
 
        if( isset( $_POST['rudr_select2_posts'] ) )
            update_post_meta( $post_id, 'author_solopos', $_POST['rudr_select2_posts'] );
        else
            delete_post_meta( $post_id, 'author_solopos' );
        //endif

        if( isset($_POST['konten_premium']))
            update_post_meta($post_id, "konten_premium", $_POST["konten_premium"]);
        else
            delete_post_meta($post_id, "konten_premium");
        //endif

        if( isset($_POST['post_feature']))
            update_post_meta($post_id, "post_feature", $_POST["post_feature"]);
        else
            delete_post_meta($post_id, "post_feature");
        //endif

        if( isset($_POST['post_source']))
            update_post_meta($post_id, "post_source", $_POST["post_source"]);
        else
            delete_post_meta($post_id, "post_source");
        //endif

        if( isset($_POST['post_summary']))
            update_post_meta($post_id, "post_summary", $_POST["post_summary"]);
        else
            delete_post_meta($post_id, "post_summary");
        //endif

        if( isset($_POST['sumberlain']))
            update_post_meta($post_id, "sumberlain", $_POST["sumberlain"]);
        else
            delete_post_meta($post_id, "suamberlain");
        //endif

        if( isset($_POST['post_url_video']))
            update_post_meta($post_id, "post_url_video", $_POST["post_url_video"]);
        else
            delete_post_meta($post_id, "post_url_video");
        //endif        
    }
    return $post_id;
}

add_action( 'admin_enqueue_scripts', 'detail_post_metabox_enqueue' );
function detail_post_metabox_enqueue(){
 
    wp_enqueue_style('select2', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css' );
    wp_enqueue_script('select2', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js', array('jquery') );
 
    // please create also an empty JS file in your theme directory and include it too
    wp_enqueue_script('mycustom', get_stylesheet_directory_uri() . '/mycustom.js', array( 'jquery', 'select2' ) ); 
 
}

add_action( 'wp_ajax_mishagetposts', 'rudr_get_posts_ajax_callback' ); // wp_ajax_{action}
function rudr_get_posts_ajax_callback(){
 
    // we will pass post IDs and titles to this array
    $return = array();
 
    // you can use WP_Query, query_posts() or get_posts() here - it doesn't matter
    $search_results = new WP_User_Query( array( 
        'search'         => '*'.$_GET['q'].'*',
        'search_columns' => array( 'user_login', 'user_email', 'user_nicename', 'display_name' )
        //'s'=> $_GET['q'], // the search query
        //'post_status' => 'publish', // if you don't want drafts to be returned
        //'ignore_sticky_posts' => 1,
        //'posts_per_page' => 50 // how much to show at once
    ) );
    
    
    // User Loop
    if ( ! empty( $search_results->get_results() ) ) {
        foreach ( $search_results->get_results() as $user ) {
            $return[] = array($user->ID, $user->display_name);
        }
    } //else {
    //    echo 'No users found.';
    //}
    echo json_encode( $return );
    die;
}

/**
 * Add meta box Peringatan Admin
 */

add_action( 'add_meta_boxes', 'add_peringatan_admin' );
function add_peringatan_admin()
{
    add_meta_box( 'status-meta-box-id', 'PERINGATAN, PENTING!!!', 'peringatan_admin_box', 'post', 'side', 'high' );
}

function peringatan_admin_box(  ) {
?>
<style type="text/css">
ol.a {list-style-type:lower-alpha;color:#ff0000; font: bold 12px/ normal arial;}
</style>

<ol class="a">
  <li>Upload foto maksimal 100 Kb</li>
  <li>Gunakan program pengecil ukuran foto</li>
  <li>Usahakan ukuran max 600 pixel</li>  
  <li>Seragamkan frase TAG</li>
</ol>
    
<?php   
}

/**
 * Remove metabox/widget dashboard
 */
 
// disable default dashboard widgets

function remove_dashboard_widgets() {
    global $wp_meta_boxes;

    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_activity']);

}

add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

// Remove welcome pannel admin
add_action( 'load-index.php', 'remove_welcome_panel' );

function remove_welcome_panel()
{
    remove_action('welcome_panel', 'wp_welcome_panel');
    $user_id = get_current_user_id();
    if (0 !== get_user_meta( $user_id, 'show_welcome_panel', true ) ) {
        update_user_meta( $user_id, 'show_welcome_panel', 0 );
    }
}

//custom dashboard widget
// welcome dashboard widget
function welcome_dashboard_widget() {
    global $current_user;
    get_currentuserinfo();
    echo "<p>Selamat datang <strong>".$current_user->display_name."</strong>, semoga hari anda menyenangkan di SOLOPOS.COM <a href=\"".home_url()."/wp-admin/profile.php\">Klik disini</a> untuk melengkapi profil anda.</p> Semoga aktifitas anda hari ini lancar.";
}
function add_custom_dashboard_widget() {
    wp_add_dashboard_widget('welcome_dashboard_widget', 'Selamat Datang', 'welcome_dashboard_widget');
}
//add_action('wp_dashboard_setup', 'add_custom_dashboard_widget');

//popular news today dashboard widget
function popular_today_dashboard_widget() {
    //echo "<p>Its work</p>";
    echo "<ol>";
    $_args = array(
                'posts_per_page' => 10,
                'meta_key' => 'post_views_count',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
                'no_found_rows' => true, // untuk fast loading
                'date_query' => array(
                                    array(
                                        'after' => '-24 hours',
                                        //'day' => date('d'),
                                        //'monthnum' => date('m'),
                                        //'year' => date('Y')
                                        ),
                                    ),
                                );
                $loop = new WP_Query($_args);
                if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a> <br> <?php echo get_post_meta(get_the_ID(), 'post_views_count', true); ?> views | oleh: <?php echo author_name(); ?> | pada: <?php the_time('d-m H:i'); ?>
                    </li>
                <?php
                endwhile; endif; wp_reset_query();
    echo "</ol>";
}
function add_popular_today_dashboard_widget() {
    wp_add_dashboard_widget('popular_today_dashboard_widget', 'Berita Populer Hari Ini  '.date('d F Y').'  (-24 jam)', 'popular_today_dashboard_widget');
}
add_action('wp_dashboard_setup', 'add_popular_today_dashboard_widget');

add_action( 'wp_dashboard_setup', 'register_my_dashboard_widget' );
function register_my_dashboard_widget() {
    wp_add_dashboard_widget('my_dashboard_widget', 'Berita Populer Bulan Ini ('.date('F Y').')', 'my_dashboard_widget_display');

}
function my_dashboard_widget_display() {
    //echo "<p>Its work</p>";
    echo "<ol>";
    $_args = array(
                'showposts' => 10,
                'meta_key' => 'post_views_count',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
                'no_found_rows' => true, // untuk fast loading
                'date_query' => array(
                                    array(
                                        'monthnum' => date('m'),
                                        'year' => date('Y'),
                                        ),
                                    ),
                                );
                $loop = new WP_Query($_args);
                if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a> | <?php echo get_post_meta( get_the_ID(), 'post_views_count', true); ?> views | oleh: <?php echo author_name(); ?></li>
                <?php
                endwhile; endif; wp_reset_query();
    echo "</ol>";
}

// widget productifity
//add_action( 'wp_dashboard_setup', 'register_productifity_widget' );
function register_productifity_widget() {
    wp_add_dashboard_widget('productifity_widget', 'Produktifitasku ('.date('F Y').')', 'productifity_widget_display');

}
function productifity_widget_display() {
    if ( is_user_logged_in() ) :
    $current_user_id = get_current_user_id();
    //echo 'Your User ID is: ' .$current_user_id;

    $arg=array(
        'author' => $current_user_id,
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'year' => date('Y'),
        'monthnum' => date('m'),
        //'day' => $tgl,
        'no_found_rows' => true,
      );
      $my_query = new WP_Query($arg);
      $sum = 0;
      if( $my_query->have_posts() ) :
          $count_post = $my_query->post_count;
          while ($my_query->have_posts()) : $my_query->the_post(); 

          $sum = $sum + intval(get_post_meta(get_the_id(), 'post_views_count', true ));
      endwhile;
      endif;
      wp_reset_query();

      $arg1=array(
        'author' => $current_user_id,
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'year' => date('Y'),
        'monthnum' => date('m'),
        //'day' => $tgl,
        'no_found_rows' => true,
        'meta_query' => array(
            array(
                'key'     => 'author_solopos',
                'value'   => '"'.$current_user_id.'"',
                'compare' => 'LIKE',
            ),
        ),
        //'paged' => get_query_var('paged')
      );
      $my_query1 = new WP_Query($arg1);
      $sum1 = 0;
      if( $my_query1->have_posts() ) :
          $count_post1 = $my_query1->post_count;
          while ($my_query1->have_posts()) : $my_query1->the_post(); 

          $sum1 = $sum1 + intval(get_post_meta(get_the_id(), 'post_views_count', true ));
      endwhile;
      endif;
      wp_reset_query();

      $arg2=array(
        'author' => -$current_user_id,
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'year' => date('Y'),
        'monthnum' => date('m'),
        //'day' => $tgl,
        'no_found_rows' => true,
        'meta_query' => array(
            array(
                'key'     => 'author_solopos',
                'value'   => '"'.$current_user_id.'"',
                'compare' => 'LIKE',
            ),
        ),
        //'paged' => get_query_var('paged')
      );
      $my_query2 = new WP_Query($arg2);
      $sum2 = 0;
      if( $my_query2->have_posts() ) :
          $count_post2 = $my_query2->post_count;
          while ($my_query2->have_posts()) : $my_query2->the_post(); 

          $sum2 = $sum2 + intval(get_post_meta(get_the_id(), 'post_views_count', true ));
      endwhile;
      endif;
      wp_reset_query();
      $total_post_count = ($count_post - $count_post1) + $count_post2;
      $total_sum = $sum + $sum1 + $sum2;
?>
    <table style="width: 100%;">
        <tbody>
            <th>
                <tr>
                    <td style="width: 50%;">Total Berita (Publish)</td>
                    <td style="width: 50%;">Total Views</td>
                </tr>
                <tr>
                    <td><h1><?php echo $total_post_count; ?></h1></td>
                    <td><h1><?php echo $total_sum; ?></h1></td>
                </tr>
            </th>
        </tbody>
    </table>
<?php
    endif;
}

// widget editor 
add_action( 'wp_dashboard_setup', 'register_editor_widget' );
function register_editor_widget() {
    wp_add_dashboard_widget('editor_widget', 'Produktifitas Editor Bulan Ini ('.date('F Y').')', 'editor_widget_display');

}
function editor_widget_display() {
    $args = array(
        'show_fullname' => 1,
        'optioncount' => 1,
        'orderby' => 'name',
        'order' => 'ASC',
        'number' => 10,
        'exclude_admin' => true,
        'no_found_rows' => true, // untuk fast loading
        'date_query' => array(
            array(
                'monthnum' => date('m'),
                'year' => date('Y'),
                ),
            ),
                        );        
    //wp_list_authors('show_fullname=1&optioncount=1&orderby=post_count&order=DESC&number=10&exclude_admin=true');
    //wp_list_authors($args);

    // WP_User_Query arguments
$args2 = array(
    'no_found_rows' => true,
    'role'           => 'Editor',
    'order'          => 'ASC',
    'orderby'        => 'name',
    //'number'        => 10,
    'include' => '6,68,184,116,141,183,26,154,129,97,59,155,28,171,134,30,160,151,17,134'
);

// The User Query
//$user_query = new WP_User_Query( $args2 );

    // Create the WP_User_Query object
    $wp_user_query = new WP_User_Query( $args2 );

    // Get the results
    $authors = $wp_user_query->get_results();

    // Check for results
    if ( ! empty( $authors ) ) {
        //echo '<ul>';
        echo '<table style="width: 100%;">
        <tbody>
            <th>
                <tr>
                    <td style="width: 40%;"><strong>Nama Editor</strong></td>
                    <td style="width: 30%;" align="center"><strong>Total Berita (Publish)</strong></td>
                    <td style="width: 30%;" align="center"><strong>Total Views</strong></td>
                </tr>';
        // loop through each author
        foreach ( $authors as $author ) {
            //hitung views
            $arg=array(
                'author' => $author->ID,
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'year' => date('Y'),
                'monthnum' => date('m'),
                //'day' => $tgl,
                'no_found_rows' => true,
                //'date_query' => array(
                //    array(
                //        'after'     => array(
                //            'year'  => 2019,
                //            'month' => 10,
                //            'day'   => 1,
                //        ),
                //        'before'    => array(
                //            'year'  => 2019,
                //            'month' => 10,
                //            'day'   => 31,
                //        ),
                //        'inclusive' => true,
                //    ),
                //),
              );
              $my_query = new WP_Query($arg);
              $sum = 0;
              if( $my_query->have_posts() ) :
                  $count_post = $my_query->post_count;
                  while ($my_query->have_posts()) : $my_query->the_post(); 
        
                  $sum = $sum + intval(get_post_meta(get_the_id(), 'post_views_count', true ));
              endwhile;
              endif;
              wp_reset_query();
            // get all the user's data
            $author_info = get_userdata( $author->ID );
            echo '<tr>
              <td>'.$author_info->display_name.'</td>
              <td align="center">'.count_user_posts_by_type( $author_info->ID, 'post', date('Y'), date('m') ).'</td>
              <td align="center">'.$sum.'</td>
            </tr>';
            //echo '<li>' . $author_info->first_name . ' ' . $author_info->last_name . ' ('. count_user_posts_by_type( $author_info->ID, 'post', '2019', '10' ).' '.$sum.')</li>';
        }
        echo '</tbody>
        </table>';
        $arg1=array(
            //'author' => 199,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'year' => date('Y'),
            'monthnum' => date('m'),
            'no_found_rows' => true,
            'meta_query' => array(
                array(
                    'key'     => 'author_solopos',
                    'value'   => '"199"',
                    'compare' => 'LIKE',
                ),
            ),
          );
          $my_query1 = new WP_Query($arg1);
          $sum1 = 0;
          if( $my_query1->have_posts() ) :
              $count_post1 = $my_query1->post_count;
              while ($my_query1->have_posts()) : $my_query1->the_post(); 
    
              $sum1 = $sum1 + intval(get_post_meta(get_the_id(), 'post_views_count', true ));
          endwhile;
          endif;
          wp_reset_query();

        $arg2=array(
            //'author' => 193,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'year' => date('Y'),
            'monthnum' => date('m'),
            'no_found_rows' => true,
            'meta_query' => array(
                array(
                    'key'     => 'author_solopos',
                    'value'   => '"193"',
                    'compare' => 'LIKE',
                ),
            ),
          );
          $my_query2 = new WP_Query($arg2);
          $sum2 = 0;
          if( $my_query2->have_posts() ) :
              $count_post2 = $my_query2->post_count;
              while ($my_query2->have_posts()) : $my_query2->the_post(); 
    
              $sum2 = $sum2 + intval(get_post_meta(get_the_id(), 'post_views_count', true ));
          endwhile;
          endif;
          wp_reset_query();

        $arg3=array(
            //'author' => 193,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'year' => date('Y'),
            'monthnum' => date('m'),
            'no_found_rows' => true,
            'meta_query' => array(
                array(
                    'key'     => 'author_solopos',
                    'value'   => '"89"',
                    'compare' => 'LIKE',
                ),
            ),
          );
          $my_query3 = new WP_Query($arg3);
          $sum3 = 0;
          if( $my_query3->have_posts() ) :
              $count_post3 = $my_query3->post_count;
              while ($my_query3->have_posts()) : $my_query3->the_post(); 
    
              $sum3 = $sum3 + intval(get_post_meta(get_the_id(), 'post_views_count', true ));
          endwhile;
          endif;
          wp_reset_query();

        $arg4=array(
            //'author' => 194,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'year' => date('Y'),
            'monthnum' => date('m'),
            'no_found_rows' => true,
            'meta_query' => array(
                array(
                    'key'     => 'author_solopos',
                    'value'   => '"80"',
                    'compare' => 'LIKE',
                ),
            ),
          );
          $my_query4 = new WP_Query($arg4);
          $sum4 = 0;
          if( $my_query4->have_posts() ) :
              $count_post4 = $my_query4->post_count;
              while ($my_query4->have_posts()) : $my_query4->the_post(); 
    
              $sum4 = $sum4 + intval(get_post_meta(get_the_id(), 'post_views_count', true ));
          endwhile;
          endif;
          wp_reset_query();

          $arg5=array(
            //'author' => 194,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'year' => date('Y'),
            'monthnum' => date('m'),
            'no_found_rows' => true,
            'meta_query' => array(
                array(
                    'key'     => 'author_solopos',
                    'value'   => '"181"',
                    'compare' => 'LIKE',
                ),
            ),
          );
          $my_query5 = new WP_Query($arg5);
          $sum5 = 0;
          if( $my_query5->have_posts() ) :
              $count_post5 = $my_query5->post_count;
              while ($my_query5->have_posts()) : $my_query5->the_post(); 
    
              $sum5 = $sum5 + intval(get_post_meta(get_the_id(), 'post_views_count', true ));
          endwhile;
          endif;
          wp_reset_query();

          $arg6=array(
            //'author' => 194,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'year' => date('Y'),
            'monthnum' => date('m'),
            'no_found_rows' => true,
            'meta_query' => array(
                array(
                    'key'     => 'author_solopos',
                    'value'   => '"31"',
                    'compare' => 'LIKE',
                ),
            ),
          );
          $my_query6 = new WP_Query($arg6);
          $sum6 = 0;
          if( $my_query6->have_posts() ) :
              $count_post6 = $my_query6->post_count;
              while ($my_query6->have_posts()) : $my_query6->the_post(); 
    
              $sum6 = $sum6 + intval(get_post_meta(get_the_id(), 'post_views_count', true ));
          endwhile;
          endif;
          wp_reset_query();
          
          $arg7=array(
            //'author' => 194,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'year' => date('Y'),
            'monthnum' => date('m'),
            'no_found_rows' => true,
            'meta_query' => array(
                array(
                    'key'     => 'author_solopos',
                    'value'   => '"11"',
                    'compare' => 'LIKE',
                ),
            ),
          );
          $my_query7 = new WP_Query($arg7);
          $sum7 = 0;
          if( $my_query7->have_posts() ) :
              $count_post7 = $my_query7->post_count;
              while ($my_query7->have_posts()) : $my_query7->the_post(); 
    
              $sum7 = $sum7 + intval(get_post_meta(get_the_id(), 'post_views_count', true ));
          endwhile;
          endif;
          wp_reset_query();

          $arg8=array(
            //'author' => 194,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'year' => date('Y'),
            'monthnum' => date('m'),
            'no_found_rows' => true,
            'meta_query' => array(
                array(
                    'key'     => 'author_solopos',
                    'value'   => '"202"',
                    'compare' => 'LIKE',
                ),
            ),
          );
          $my_query8 = new WP_Query($arg8);
          $sum8 = 0;
          if( $my_query8->have_posts() ) :
              $count_post8 = $my_query8->post_count;
              while ($my_query8->have_posts()) : $my_query8->the_post(); 
    
              $sum8 = $sum8 + intval(get_post_meta(get_the_id(), 'post_views_count', true ));
          endwhile;
          endif;
          wp_reset_query();

          $arg9=array(
            //'author' => 194,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'year' => date('Y'),
            'monthnum' => date('m'),
            'no_found_rows' => true,
            'meta_query' => array(
                array(
                    'key'     => 'author_solopos',
                    'value'   => '"102"',
                    'compare' => 'LIKE',
                ),
            ),
          );
          $my_query9 = new WP_Query($arg9);
          $sum9 = 0;
          if( $my_query9->have_posts() ) :
              $count_post9 = $my_query9->post_count;
              while ($my_query9->have_posts()) : $my_query9->the_post(); 
    
              $sum9 = $sum9 + intval(get_post_meta(get_the_id(), 'post_views_count', true ));
          endwhile;
          endif;
          wp_reset_query();

          $arg10=array(
            //'author' => 194,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'year' => date('Y'),
            'monthnum' => date('m'),
            'no_found_rows' => true,
            'meta_query' => array(
                array(
                    'key'     => 'author_solopos',
                    'value'   => '"17"',
                    'compare' => 'LIKE',
                ),
            ),
          );
          $my_query10 = new WP_Query($arg10);
          $sum10 = 0;
          if( $my_query10->have_posts() ) :
              $count_post10 = $my_query10->post_count;
              while ($my_query10->have_posts()) : $my_query10->the_post(); 
    
              $sum10 = $sum10 + intval(get_post_meta(get_the_id(), 'post_views_count', true ));
          endwhile;
          endif;
          wp_reset_query();

          $arg11=array(
            //'author' => 194,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'year' => date('Y'),
            'monthnum' => date('m'),
            'no_found_rows' => true,
            'meta_query' => array(
                array(
                    'key'     => 'author_solopos',
                    'value'   => '"156"',
                    'compare' => 'LIKE',
                ),
            ),
          );
          $my_query11 = new WP_Query($arg11);
          $sum11 = 0;
          if( $my_query11->have_posts() ) :
              $count_post11 = $my_query11->post_count;
              while ($my_query11->have_posts()) : $my_query11->the_post(); 
    
              $sum11 = $sum11 + intval(get_post_meta(get_the_id(), 'post_views_count', true ));
          endwhile;
          endif;
          wp_reset_query();

          $arg12=array(
            //'author' => 194,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'year' => date('Y'),
            'monthnum' => date('m'),
            'no_found_rows' => true,
            'meta_query' => array(
                array(
                    'key'     => 'author_solopos',
                    'value'   => '"204"',
                    'compare' => 'LIKE',
                ),
            ),
          );
          $my_query12 = new WP_Query($arg12);
          $sum12 = 0;
          if( $my_query12->have_posts() ) :
              $count_post12 = $my_query12->post_count;
              while ($my_query12->have_posts()) : $my_query12->the_post(); 
    
              $sum12 = $sum12 + intval(get_post_meta(get_the_id(), 'post_views_count', true ));
          endwhile;
          endif;
          wp_reset_query();

          $arg13=array(
            //'author' => 194,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'year' => date('Y'),
            'monthnum' => date('m'),
            'no_found_rows' => true,
            'meta_query' => array(
                array(
                    'key'     => 'author_solopos',
                    'value'   => '"205"',
                    'compare' => 'LIKE',
                ),
            ),
          );
          $my_query13 = new WP_Query($arg13);
          $sum13 = 0;
          if( $my_query13->have_posts() ) :
              $count_post13 = $my_query13->post_count;
              while ($my_query13->have_posts()) : $my_query13->the_post(); 
    
              $sum13 = $sum13 + intval(get_post_meta(get_the_id(), 'post_views_count', true ));
          endwhile;
          endif;
          wp_reset_query();   

		$arg14=array(
            //'author' => 199,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'year' => date('Y'),
            'monthnum' => date('m'),
            'no_found_rows' => true,
            'meta_query' => array(
                array(
                    'key'     => 'author_solopos',
                    'value'   => '"206"',
                    'compare' => 'LIKE',
                ),
            ),
          );
          $my_query14 = new WP_Query($arg14);
          $sum14 = 0;
          if( $my_query14->have_posts() ) :
              $count_post14 = $my_query14->post_count;
              while ($my_query14->have_posts()) : $my_query14->the_post(); 
    
              $sum14 = $sum14 + intval(get_post_meta(get_the_id(), 'post_views_count', true ));
          endwhile;
          endif;
          wp_reset_query();
		  
		  $arg15=array(
            //'author' => 199,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'year' => date('Y'),
            'monthnum' => date('m'),
            'no_found_rows' => true,
            'meta_query' => array(
                array(
                    'key'     => 'author_solopos',
                    'value'   => '"207"',
                    'compare' => 'LIKE',
                ),
            ),
          );
          $my_query15 = new WP_Query($arg15);
          $sum15 = 0;
          if( $my_query15->have_posts() ) :
              $count_post15 = $my_query15->post_count;
              while ($my_query15->have_posts()) : $my_query15->the_post(); 
    
              $sum15 = $sum15 + intval(get_post_meta(get_the_id(), 'post_views_count', true ));
          endwhile;
          endif;
          wp_reset_query();
		  
          //echo $sum1;
            echo '<br><hr><br><table style="width: 100%;">
                    <tbody>
                        <th>
                            <tr>
                                <td style="width: 40%;"><strong>Nama Penulis</strong></td>
                                <td style="width: 30%;" align="center"><strong>Total Berita (Publish)</strong></td>
                                <td style="width: 30%;" align="center"><strong>Total Views</strong></td>
                            </tr>';
            echo '<tr>
                <td>Nugroho Meidinata</td>
                <td align="center">'.$count_post1.'</td>
                <td align="center">'.$sum1.'</td>
                </tr>
                <tr>
                <td>Ichsan Kholif Rahman</td>
                <td align="center">'.$count_post2.'</td>
                <td align="center">'.$sum2.'</td>
                </tr>
                <tr>
                <td>Ponco Suseno</td>
                <td align="center">'.$count_post3.'</td>
                <td align="center">'.$sum3.'</td>
                </tr>
                <tr>
                <td>Muh Khodiq Duhri</td>
                <td align="center">'.$count_post4.'</td>
                <td align="center">'.$sum4.'</td>
                </tr>
                <tr>
                <td>Sri Sumi Handayani</td>
                <td align="center">'.$count_post5.'</td>
                <td align="center">'.$sum5.'</td>
                </tr>
                <tr>
                <td>Kurniawan</td>
                <td align="center">'.$count_post6.'</td>
                <td align="center">'.$sum6.'</td>
                </tr>
                <tr>
                <td>Indah Septiyaning W</td>
                <td align="center">'.$count_post7.'</td>
                <td align="center">'.$sum7.'</td>
                </tr>
                <tr>
                <td>Aris Munandar</td>
                <td align="center">'.$count_post8.'</td>
                <td align="center">'.$sum8.'</td>
                </tr>
                <tr>
                <td>Imam Yuda Saputra</td>
                <td align="center">'.$count_post9.'</td>
                <td align="center">'.$sum9.'</td>
                </tr>
                <tr>
                <td>Arif Fajar Setiadi</td>
                <td align="center">'.$count_post10.'</td>
                <td align="center">'.$sum10.'</td>
                </tr>
                <tr>
                <td>Abdul Jalil</td>
                <td align="center">'.$count_post11.'</td>
                <td align="center">'.$sum11.'</td>
                </tr>
                <td>Wahyu Prakoso</td>
                <td align="center">'.$count_post12.'</td>
                <td align="center">'.$sum12.'</td>
                </tr>
                <td>Candra Mantovani</td>
                <td align="center">'.$count_post13.'</td>
                <td align="center">'.$sum13.'</td>
                </tr>
				<td>Yesaya Wisnu</td>
                <td align="center">'.$count_post14.'</td>
                <td align="center">'.$sum14.'</td>
                </tr>
				<td>Latif Ghufron Aula</td>
                <td align="center">'.$count_post15.'</td>
                <td align="center">'.$sum15.'</td>
                </tr>';
            echo '</tbody>
                    </table>';
    } else {
        echo 'No authors found';
    }
}

// widget author 
//add_action( 'wp_dashboard_setup', 'register_author_widget' );
function register_author_widget() {
    wp_add_dashboard_widget('author_widget', 'Produktifitas Penulis Bulan Ini ('.date('F Y').')', 'author_widget_display');

}
function author_widget_display() {

    // WP_User_Query arguments
    $args2 = array(
        'no_found_rows' => true,
        'role'           => 'Penulis',
        'order'          => 'ASC',
        'orderby'        => 'name',
        //'number'        => 10,
        'include' => '68,6,184,116,141,183,26,154,129,97,59,134,160'
    );

    // Create the WP_User_Query object
    $wp_user_query = new WP_User_Query( $args2 );

    // Get the results
    $authors = $wp_user_query->get_results();

    // Check for results
    if ( ! empty( $authors ) ) {
        echo '<ul>';
        // loop through each author
        foreach ( $authors as $author ) {
            // get all the user's data
            $author_info = get_userdata( $author->ID );
            echo '<li>' . $author_info->first_name . ' ' . $author_info->last_name . ' ('. count_user_posts_by_type( $author_info->ID, 'post', '2019', '09' ).')</li>';
        }
        echo '</ul>';
    } else {
        echo 'No authors found';
    }
}

// widget kanal
add_action( 'wp_dashboard_setup', 'register_category_widget' );
function register_category_widget() {
    wp_add_dashboard_widget('category_widget', 'Produktifitas Kanal ('.date('F Y').')', 'category_widget_display');

}
function category_widget_display() {
    echo '<ul>';
    foreach (get_categories('include=664047,94686,5342,83,152076,76212,15783,8467,636,4175,655246,664048,664049,11091,15420,1804,18499,309540,118237,669739,2088') as $category ) 
    {

        $arg=array(
            'cat' => $category->term_id,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'year' => date('Y'),
            'monthnum' => date('m'),
            //'day' => $tgl,
            'no_found_rows' => true,
            //'paged' => get_query_var('paged')
          );
          
          $my_query = null;
          $my_query = new WP_Query($arg);

          if( $my_query->have_posts() ) :
              $count = $my_query->post_count;

              if( $category->category_parent == '0') 
              { 
              $url = '';
              $url =  site_url() . '/' . $category->slug ;
              echo '<li><a href="' . $url . '" target="_blank">' . $category->name . ' </a> (' . $count . ')</li>';
              }

          endif;
    }
    echo '</ul>';

    /*global $wpdb;
    $sql = "
SELECT wp_term_taxonomy.term_id as term_id, COUNT(wp_posts.id) as count_posts
    FROM wp_posts
    INNER JOIN wp_term_relationships ON wp_posts.id = wp_term_relationships.object_id
    INNER JOIN wp_term_taxonomy ON wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_id
    WHERE wp_posts.post_date >= '2019-09-24 00:00:00'
    AND wp_term_taxonomy.taxonomy = 'category'
    GROUP BY term_id";
    $query = $wpdb->get_results($sql);
    foreach ($query as $u) {
        //var_dump($u);
        echo $u->term_id.'-'.get_cat_name($u->term_id).'-'.$u->count_posts;
        echo "<br>";
    }*/
}

function arrange_dashboard_widget() {
    // Global the $wp_meta_boxes variable (this will allow us to alter the array)
    global $wp_meta_boxes;
    
    // Then we make a backup of your widget
    $news = $wp_meta_boxes['dashboard']['normal']['core']['popular_today_dashboard_widget'];
    $socmed = $wp_meta_boxes['dashboard']['normal']['core']['my_dashboard_widget'];
    
    // We then unset that part of the array
    unset($wp_meta_boxes['dashboard']['normal']['core']['popular_today_dashboard_widget']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['my_dashboard_widget']);
    
    // Now we just add your widget back in
    $wp_meta_boxes['dashboard']['side']['core']['popular_today_dashboard_widget'] = $news;
    $wp_meta_boxes['dashboard']['side']['core']['my_dashboard_widget'] = $socmed;
}

add_action('wp_dashboard_setup', 'arrange_dashboard_widget');

add_action( 'wp_login', 'add_login_time');
function add_login_time( $user_login){
    global $wpdb;

    $user_id = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->users WHERE user_login = %s", $user_login ));

    update_user_meta( $user_id, 'last_login', current_time('mysql'));
}

// Disable Ajax Tag Search
function remove_tag_suggestions($tax) {
    //You can place your condition if you want!
    return 0;
}
add_filter('term_search_min_chars', 'remove_tag_suggestions');
/*
function no_tag_suggest() {
    if( 'DOING_AJAX' == true && $_GET['action'] == 'ajax-tag-search' ) {
        die;
    }
}    
add_action('admin_init', 'no_tag_suggest');*/

function delete_comment_link($id) {
  if (current_user_can('edit_post')) {
    echo ' | <a href="'.admin_url("comment.php?action=cdc&c=$id").'">Delete</a>  | ';
    echo '<a href="'.admin_url("comment.php?action=cdc&dt=spam&c=$id").'">Spam</a>';
  }
}

// one column editor
function so_screen_layout_columns( $columns ) {
    $columns['post'] = 1;
    return $columns;
}
add_filter( 'screen_layout_columns', 'so_screen_layout_columns' );

function so_screen_layout_post() {
    return 1;
}
add_filter( 'get_user_option_screen_layout_post', 'so_screen_layout_post' );

// hide help
function hide_help() {
    echo '<style type="text/css">
            #contextual-help-link-wrap { display: none !important; }
          </style>';
}
add_action('admin_head', 'hide_help');

// Halaman Login Admin
function custom_loginlogo() {
    echo '<style type="text/css">
    h1 a {background-image: url('.get_bloginfo('template_directory').'/img/logo.png) !important;background-size: 300px 60px !important; width: 300px !important; height: 60px !important;}
    body, html {background: #333 url('.get_bloginfo('template_directory').'/img/bgadmin.jpg) no-repeat center center fixed !important;
        -webkit-background-size: cover !important;
          -moz-background-size: cover !important;
          -o-background-size: cover !important;
          background-size: cover !important;}
    .login form {background: rgba(0,0,0,0.6) !important;}
    .login #backtoblog {display: none;}
    </style>';
    }
add_action('login_head', 'custom_loginlogo');

add_filter( 'login_headerurl', 'custom_loginlogo_url' );

function custom_loginlogo_url($url) {

     return 'https://www.solopos.com';

}


// remove comment on recent activity
function remove_recent_activity_comment(){
    echo '<script type="text/javascript">jQuery(document).ready(function($) {
       
    $("#latest-comments").remove(); // remove the recent comments
    $("#dashboard_activity").remove();
         
    });</script>';
}

add_action('admin_head','remove_recent_activity_comment');

//Menambahkan Kolom nama penulis.
add_filter('manage_posts_columns', 'post_column_author');
add_action('manage_posts_custom_column', 'post_custom_column_author',10,2); 
 
//Function that Adds a 'Penulis' Column to your Posts tab in WordPress Dashboard.
function post_column_author($newcolumn) {
    $newcolumn['author_solopos'] = __('Penulis');
    return $newcolumn;
}
 
//Function that Populates the 'Penulis' Column with the name of author.
function post_custom_column_author($column_name, $id) {
    global $post;
    if($column_name === 'author_solopos'){
        echo author_name();
    }
}

// rename author column be editor
add_filter( 'manage_edit-post_columns', 'author_to_editor' );
function author_to_editor( $columns ) {
    $columns['author'] = 'Editor';
    return $columns;
}

add_filter( 'manage_posts_columns', 'custom_post_columns', 10, 2 );
function custom_post_columns( $columns, $post_type ) {
  //switch ( $post_type ) {     
    //case 'post':
    unset(
      $columns['comments']
    );
    //break;
 
    //case 'gallery':
    //unset(
    //  $columns['post_type'],
    //  $columns['author']
    //);
    //break; 
  return $columns;
}

// add filter by auhtor name
add_action('restrict_manage_posts', 'author_solopos_filter');

function author_solopos_filter() {
    $args = array('name' => 'author_solopos', 'show_option_all' => 'Semua Penulis');
    if (isset($_GET['author_solopos'])) {
        $args['selected'] = $_GET['author_solopos'];
    }
    wp_dropdown_users($args);
}

// update query post filter by author name
function filter_by_author_solopos( $query ) {
    global $pagenow;
    // Get the post type
    $post_type = isset( $_GET['post_type'] ) ? $_GET['post_type'] : '';
    if ( $pagenow=='edit.php' && isset( $_GET['author_solopos'] ) && $_GET['author_solopos'] !='all' && $_GET['m'] >= '201803' ) {
      $query->query_vars['meta_key'] = 'author_solopos';
      $query->query_vars['meta_value'] = $_GET['author_solopos'];
      $query->query_vars['meta_compare'] = 'LIKE';
    }
}

add_filter( 'parse_query', 'filter_by_author_solopos' );

// count views
function espos_count_views($postid) {
    global $wpdb;
    //var
    //$user_id = $userid;
    $post_id = $postid;
    $date = date('Y-m-d');

    // get author ID (user_id)
    $user_id = get_post_field( 'post_author', $post_id );

    $query = $wpdb->get_results("SELECT * FROM wp_espos_stats WHERE post_id = '$post_id' AND views_date='$date'");
    $total_result_rows = $wpdb->num_rows;
  
    if($total_result_rows == 0) {
        //echo "insert works";
        $wpdb->query("INSERT INTO ".$wpdb->prefix."espos_stats(user_id,post_id,views,views_date) VALUES('$user_id','$post_id','1','$date')");
    } else {
        //echo "update works";
        $wpdb->query("UPDATE ".$wpdb->prefix."espos_stats SET views= views+1 WHERE post_id='$postid' AND views_date='$date'");
    }
}

// show view stats
function espos_stats_views($postid) {
    global $wpdb;

    $post_id = $postid;
    $date = date('Y-m-d');

    $result = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."espos_stats where post_id = '$post_id' AND views_date='$date'");

    if($result) {
        foreach($result as $res) {
            $view = $res->views;
        }
    }

    return $view;
}

add_action('admin_head', 'my_column_width');
function my_column_width() {
    echo '<style type="text/css">';
    echo '.column-title {width:27% !important;}';
    echo '.column-categories {width:9% !important;}';
    echo '.column-post_views {width:5% !important;}';
    echo '.column-FBIA {width:7% !important;}';
    echo '.column-date {width:7.5% !important;}';
    echo '.column-wpseo-title { display: none }';
    echo '.column-wpseo-metadesc { display: none }';
    echo '.column-wpseo-focuskw { display: none }';

    echo '.column-FBIA {width:3% !important;}';
    echo '.column-author_solopos {width:10% !important;}';
    echo '</style>';
}

function indigo_hide_wpseo() {
    if ( is_admin() ) {
    print '<style>select#wpseo-filter, select#wpseo-readability-filter, select#filter-by-format {display:none;}</style>';
    }
}
add_action( 'restrict_manage_posts', 'indigo_hide_wpseo', 15 );