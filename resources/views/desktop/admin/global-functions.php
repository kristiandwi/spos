<?php
// Limit Excerpt Length by number of Words
function excerpt( $limit ) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
}

function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
    } else {
        $content = implode(" ",$content);
    }
    $content = preg_replace('/[.+]/','', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}

/* Function which displays your post date in time ago format */
function solopos_time_ago() {
    return human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ).' '.__( 'yang lalu' );
}

// foto berita
// image from bisnis
function post_image($size, $w, $h) {
    global $post;

    $img_date = get_the_date( 'Y/m/d', $post->ID );
    if($size == 'thumbnail') {
        $img_name = get_post_meta( $post->ID, 'post_image_thumb', true );  
        $url_img_bisnis = 'https://img.solopos.com/thumb/posts/'.$img_date.'/'.$post->ID.'/'.$img_name.'?w='.$w.'&h='.$h.'';
        //image from solopos library
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
    } elseif($size == 'medium') {
        $img_name = get_post_meta( $post->ID, 'post_image_content', true );
        $url_img_bisnis = 'https://img.solopos.com/posts/'.$img_date.'/'.$post->ID.'/'.$img_name.'?w='.$w.'&h='.$h.'';
        //image from solopos library
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
    }
    $url_img_solopos = $thumb['0'];
    if($thumb['0'] == '') {
        if(empty($img_name)) {
            if($size == 'thumbnail') {
                $url = 'https://www.solopos.com/files/tema/no-thumb.jpg';
            } else {
                $url = 'https://www.solopos.com/files/tema/no-medium.jpg';
            }
        } else {
            $url = $url_img_bisnis;
        }
    } else {
        $url = $url_img_solopos;
    }

    return $url;
}

// post image caption
function post_image_caption() {
    global $post;

    $caption = get_post_meta( $post->ID, 'post_image_caption', true );

    if($caption == '') {
        $img_caption = get_the_post_thumbnail_caption( $post->ID );
    } else {
        $img_caption = $caption;
    }

    return $img_caption;
}

//post image for xml data
function post_image_xml($size, $w, $h, $ID) {
    //global $post;

    $img_date = get_the_date( 'Y/m/d', $ID );
    if($size == 'thumbnail') {
        $img_name = get_post_meta( $ID, 'post_image_thumb', true );  
        $url_img_bisnis = 'https://img.solopos.com/thumb/posts/'.$img_date.'/'.$ID.'/'.$img_name.'?w='.$w.'&h='.$h.'';
        //image from solopos library
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($ID), 'thumbnail' );
    } elseif($size == 'medium') {
        $img_name = get_post_meta( $ID, 'post_image_content', true );
        $url_img_bisnis = 'https://img.solopos.com/posts/'.$img_date.'/'.$ID.'/'.$img_name.'?w='.$w.'&h='.$h.'';
        //image from solopos library
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($ID), 'large' );
    }
    $url_img_solopos = $thumb['0'];
    if($thumb['0'] == '') {
        if(empty($img_name)) {
            if($size == 'thumbnail') {
                $url = 'https://www.solopos.com/files/tema/no-thumb.jpg';
            } else {
                $url = 'https://www.solopos.com/files/tema/no-medium.jpg';
            }
        } else {
            $url = $url_img_bisnis;
        }
    } else {
        $url = $url_img_solopos;
    }

    return $url;
}

// post image caption for xml data
function post_image_caption_xml($ID) {
    //global $post;

    $caption = get_post_meta( $ID, 'post_image_caption', true );

    if($caption == '') {
        $img_caption = get_the_post_thumbnail_caption( $ID );
    } else {
        $img_caption = $caption;
    }

    return $img_caption;
}

// author name
function author_name() {
    global $post;
    $solopos = get_post_meta ($post->ID, 'solopos', true);
    $harjo = get_post_meta ($post->ID, 'harjo', true);
    $bisnis = get_post_meta ($post->ID, 'bisnis', true);
    $korano = get_post_meta ($post->ID, 'korano', true);
    $kabar24 = get_post_meta ($post->ID, 'kabar24', true);
    $sumberlain = get_post_meta ($post->ID, 'sumberlain', true);
    $the_author = '';

    $author = get_post_meta( $post->ID, 'author_solopos', true );
    //$c_author = count($author);
    if($author) {
        $the_author = '';
        $loop = 1;
        foreach($author as $author_id) {
            $author_name = get_userdata($author_id);
            $author_solopos = $author_name->display_name;
            //$the_author .= $author_solopos;
                if($loop > 1) {
                    $the_author .= '/';
                //} //else {
                    //$the_author .= '';
                }
            $loop++;
            $the_author .= $author_solopos;
        }
        if($sumberlain <> '') {
            $the_author .= $sumberlain;
        }
    }

    if($solopos <> '') {
        $the_author = $solopos;
    } elseif($harjo <> '') {
        $the_author = $harjo;
    } elseif($bisnis <> '') {
        $the_author = $bisnis;
    } elseif($korano <> '') {
        $the_author = $korano;
    } elseif($kabar24 <> '') {
        $the_author = $kabar24;
    } elseif($sumberlain <> '') {
        $the_author = $sumberlain;
    } //else {
        //$the_author = '';
    //}

    return $the_author;
}

// author name
function author_nick_name() {
    global $post;
    $solopos = get_post_meta ($post->ID, 'solopos', true);
    $harjo = get_post_meta ($post->ID, 'harjo', true);
    $bisnis = get_post_meta ($post->ID, 'bisnis', true);
    $korano = get_post_meta ($post->ID, 'korano', true);
    $kabar24 = get_post_meta ($post->ID, 'kabar24', true);
    $sumberlain = get_post_meta ($post->ID, 'sumberlain', true);

    $author = get_post_meta( $post->ID, 'author_solopos', true );
    //$c_author = count($author);
    if($author) {
        $the_author = '';
        $loop = 1;
        foreach($author as $author_id) {
            $author_name = get_userdata($author_id);
            $author_solopos = $author_name->nickname;
            //$the_author .= $author_solopos;
                if($loop > 1) {
                    $the_author .= '/';
                //} //else {
                    //$the_author .= '';
                }
            $loop++;
            $the_author .= $author_solopos;
        }
        if($sumberlain <> '') {
            $the_author .= $sumberlain;
        }
    }

    if($solopos <> '') {
        $the_author = $solopos;
    } elseif($harjo <> '') {
        $the_author = $harjo;
    } elseif($bisnis <> '') {
        $the_author = $bisnis;
    } elseif($korano <> '') {
        $the_author = $korano;
    } elseif($kabar24 <> '') {
        $the_author = $kabar24;
    } elseif($sumberlain <> '') {
        $the_author = $sumberlain;
    }

    return $the_author;
}

// parent category name
function parent_category_slug() {
    global $post;
        // deteksi kanal
        $cat = get_the_category($post->ID);
        $cat_parent = $cat[0]->category_parent;
        if($cat_parent) { $cat = get_category($cat_parent);
            $cat = $cat->slug;
        } else { 
            $cat = $cat[0]->slug;
        } 
    return $cat;
}

// remove link inside the_content
//add_filter('the_content', 'removelink_content');

function removelink_content($content = '')
{
    $text = preg_replace('/<a href=\"(.*?)\">(.*?)<\/a>/', "", $content);
    return $text;
}


function wcr_parse_feed($feed_url, $limit = 5) {
    // fetch feed
    $feed = fetch_feed($feed_url);

    if (is_wp_error($feed)) {
        return;
    }

    $max_items = $feed->get_item_quantity($limit);
    $items = $feed->get_items(0, $max_items);

    if (empty($items) || !is_array($items)) {
        return;
    }
    
    echo '<ul>';
        foreach ($items as $item) {
        ?>
        <li>
            <a href="<?php echo esc_url($item->get_permalink()); ?>" target="_blank" title="<?php echo esc_html($item->get_title()); ?>">
                <?php echo esc_html($item->get_title()); ?>
            </a>
        </li>
        <?php
        }
    echo '</ul>';
}


// List Users
//add_action("admin_init", "users_meta_init");

function users_meta_init(){
  add_meta_box("users-meta", "Pilih Author/Penulis", "users", "post", "normal", "high");
}

function users() {
  global $post;
  $custom = get_post_custom($post->ID);
  $users = $custom["users"][0];
  $current_user = wp_get_current_user();

  echo '<input type="hidden" name="custom_post_author_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

    // prepare arguments
    $user_args  = array(
    // search only for Authors role
    //'role' => 'Administrator',
    // order results by display_name
    'orderby' => 'display_name'
    );
    // Create the WP_User_Query object
    $wp_user_query = new WP_User_Query($user_args);
    // Get the results
    $authors = $wp_user_query->get_results();
    // Check for results
    if (!empty($authors))
    {
        // Name is your custom field key
        echo "<select name='author_solopos'>";
        // loop trough each author
        foreach ($authors as $author)
        {
            // get all the user's data
            $author_info = get_userdata($author->ID);
            $author_id = get_post_meta($post->ID, 'author_solopos', true);
            if($author_id == $author->ID) { 
                //$author = $author_info->ID;
                $author_selected = 'selected="selected"';
            } elseif($current_user->ID == $author_info->ID AND $author_id == '') { 
                //$author = $current_user->ID;
                $author_selected = 'selected="selected"';
            } else {
                $author_selected = '';
            }
            echo '<option value='.$author_info->ID.' '.$author_selected.'>'.$author_info->display_name.' ('.$author_info->user_login.')</option>';
        }
        echo "</select>";
    } else {
        echo 'No authors found!';
    }

}

// Save Post Meta User/Author
//add_action('save_post', 'save_userlist');

function save_userlist() {
    global $post;

    // verify nonce
    if (!wp_verify_nonce($_POST['custom_post_author_nonce'], basename(__FILE__))) {
        return $post->ID;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post->ID;
    }

    update_post_meta($post->ID, "author_solopos", $_POST["author_solopos"]);
    
}

// Post Feature
//add_action( 'add_meta_boxes', 'post_meta_feature_box');

function post_meta_feature_box() {
    add_meta_box("post-meta-feature", "Fitur Berita", "post_meta_feature", "post", "normal", "high");
}

function post_meta_feature() {
    global $post;

    echo '<input type="hidden" name="custom_post_feature_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

    $feature = get_post_meta($post->ID, 'post_feature', true);
    if($feature == "headline") {
        $headline_selected = 'selected="selected"';
    } elseif($feature == "editor_choice") {
        $editor_choice_selected = 'selected="selected"';
    } else {
        $null_selected = 'selected="selected"';
    }
    echo '<select name="post_feature"><option value="" '.$null_selected.'>-- Pilih --</option><option value="headline" '.$headline_selected.'>Headline</option><option value="editor_choice" '.$editor_choice_selected.'>Pilihan Redaksi</option></select>';
}

// Save Post Meta Feature
//add_action('save_post', 'save_post_meta_feature');

function save_post_meta_feature() {
    global $post;

    // verify nonce
    if (!wp_verify_nonce($_POST['custom_post_feature_nonce'], basename(__FILE__))) {
        return $post->ID;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post->ID;
    }

    //if($_POST["post_feature"] !== '') {
    update_post_meta($post->ID, "post_feature", $_POST["post_feature"]);
    //}
    
}

// Post Source
//add_action( 'add_meta_boxes', 'post_source_box');

function post_source_box() {
    add_meta_box("post-source", "Sumber Berita", "post_source", "post", "normal", "high");
}

function post_source() {
    global $post;

    echo '<input type="hidden" name="custom_post_source_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

    $post_source = get_post_meta($post->ID, 'post_source', true);
    echo '<input type="text" name="post_source" value="'.$post_source.'" size="50">';
}

// Save Postmeta Post Source
//add_action('save_post', 'save_post_source');

function save_post_source() {
    global $post;

    // verify nonce
    if (!wp_verify_nonce($_POST['custom_post_source_nonce'], basename(__FILE__))) {
        return $post->ID;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post->ID;
    }

    //if($_POST["post_source"] !== '') {
    update_post_meta($post->ID, "post_source", $_POST["post_source"]);
    //}
    
}

// Post Summary
//add_action( 'add_meta_boxes', 'post_summary_box');

function post_summary_box() {
    add_meta_box("post-summary", "Summary", "post_summary", "post", "normal", "high");
}

function post_summary() {
    global $post;

    echo '<input type="hidden" name="custom_post_summary_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

    $post_summary = get_post_meta($post->ID, 'post_summary', true);
    echo '<textarea name="post_summary" row="10" cols="100">'.$post_summary.'</textarea>';
}

// Save Postmeta Post Summary
//add_action('save_post', 'save_post_summary');

function save_post_summary() {
    global $post;

    // verify nonce
    if (!wp_verify_nonce($_POST['custom_post_summary_nonce'], basename(__FILE__))) {
        return $post->ID;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post->ID;
    }

    //if($_POST["post_source"] !== '') {
    update_post_meta($post->ID, "post_summary", $_POST["post_summary"]);
    //}
    
}

/**
 * Removes the original author meta box and replaces it
 * with a customized version.
 */
add_action( 'add_meta_boxes', 'wpse_replace_post_author_meta_box' );
function wpse_replace_post_author_meta_box() {
    $post_type = get_post_type();
    $post_type_object = get_post_type_object( $post_type );

    if ( post_type_supports( $post_type, 'author' ) ) {
        if ( is_super_admin() || current_user_can( $post_type_object->cap->edit_posts ) ) {
            remove_meta_box( 'authordiv', $post_type, 'core' );
            add_meta_box( 'authordiv', __( 'Pilih Editor', 'text-domain' ), 'wpse_post_author_meta_box', null, 'normal', 'high' );
        }
    }
}

/**
 * Display form field with list of authors.
 * Modified version of post_author_meta_box().
 *
 * @global int $user_ID
 *
 * @param object $post
 */
function wpse_post_author_meta_box( $post ) {
    global $user_ID;
?>
<label class="screen-reader-text" for="post_author_override"><?php _e( 'Pilih Editor', 'text-domain' ); ?></label>
<?php
    wp_dropdown_users( array(
        'role__in' => [ 'administrator', 'editor', 'author', 'contributor' ], // Add desired roles here.
        'name' => 'post_author_override',
        'selected' => empty( $post->ID ) ? $user_ID : $post->post_author,
        'include_selected' => true,
        'show' => 'display_name_with_login',
    ) );
}


/*=============================================
=            BREADCRUMBS                        =
=============================================*/
//  to include in functions.php
function the_breadcrumb() {
    $sep = ' / ';
    if (!is_front_page()) {
    
    // Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo '</a>' . $sep;
    
    // Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
            the_category('title_li=');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }
    
    // If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }
    
    // If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }
    
    // if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }
        echo '</div>';
    }
}


//== dropdown list category metabox ==//

function custom_meta_box() {

    remove_meta_box( 'categorydiv', 'post', 'side' );
    add_meta_box( 'categorydiv', 'Kanal Berita', 'types_meta_box', 'post', 'side' );

}
//add_action('add_meta_boxes', 'custom_meta_box');

/* Print the taxonomy box content */
function types_meta_box($post) {
    $tax_name = 'category';
    $taxonomy = get_taxonomy($tax_name);
?>
<div class="categorydiv" id="<?php echo $tax_name; ?>">
    <div class="jaxtag">
    <?php 
    // Use nonce for verification
    wp_nonce_field( plugin_basename( __FILE__ ), 'category_noncename' );
    $type_IDs = wp_get_object_terms( $post->ID, 'category', array('fields' => 'ids') );
    wp_dropdown_categories('taxonomy=category&hide_empty=0&orderby=name&name=category&hierarchical=true&show_option_none=Pilih Kanal&selected='.$type_IDs[0].'&include=664047,15,13,94686,10,9,66,4,8,12,6,83,5342,94693,2088,94694,94698,94695,94696,152076,97,60826,60861,15783,8467,94727,18500,636,4175,655246,309540,248262,248263,70805,18499,15420,11091,1804,664049,664048,60862,118237,669793,47665'); ?>
    </div>
</div>
<?php
}

/* When the post is saved, saves our custom taxonomy */
function types_save_postdata( $post_id ) {
  // verify if this is an auto save routine. 
  // If it is our form has not been submitted, so we dont want to do anything
  if ( ( defined( 'DOING_AUTOSAVE' ) && 'DOING_AUTOSAVE' ) || wp_is_post_revision( $post_id ) ) 
      return;

  // verify this came from the our screen and with proper authorization,
  // because save_post can be triggered at other times

  if ( !wp_verify_nonce( $_POST['category_noncename'], plugin_basename( __FILE__ ) ) )
      return;


  // Check permissions
  if ( 'post' == $_POST['post_type'] ) 
  {
    if ( !current_user_can( 'edit_page', $post_id ) )
        return;
  }
  else
  {
    if ( !current_user_can( 'edit_post', $post_id ) )
        return;
  }

  // OK, we're authenticated: we need to find and save the data

  if($_POST['category'] == '-1') {
    $post_cat = '664047';
  } else {
    $post_cat = $_POST['category'];
  }

  $type_ID = $post_cat;

  $type = ( $type_ID > 0 ) ? get_term( $type_ID, 'category' )->slug : NULL;

  wp_set_object_terms(  $post_id , $type, 'category' );

}
/* Do something with the data entered */
//add_action( 'save_post', 'types_save_postdata' );

//add_filter( 'the_title', 'wpse_75691_trim_words' );

function wpse_75691_trim_words( $title )
{
    // limit words
    return wp_trim_words( $title, 8, '...' );
}

// Melihat Jumlah Pengunjung Tiap Postingan
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 Kali";
    }
    return $count.' Kali';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count += 1;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);        

//Menambahkan Kolom field Dikunjungi.
add_filter('manage_posts_columns', 'post_column_views');
add_action('manage_posts_custom_column', 'post_custom_column_views',10,2);  

function get_PostViews($post_ID){
    $count_key = 'post_views_count';
    $count = get_post_meta($post_ID, $count_key, true);
    return $count;
}
 
//Function that Adds a 'Dikunjungi' Column to your Posts tab in WordPress Dashboard.
function post_column_views($newcolumn){
    $newcolumn['post_views'] = __('Views');
    return $newcolumn;
}
 
//Function that Populates the 'Dikunjungi' Column with the number of views count.
function post_custom_column_views($column_name, $id){
    if($column_name === 'post_views'){
        echo get_PostViews(get_the_ID());
    }
}

function jumlah_kata() {
    global $post;
    $content = get_post_field( 'post_content', $post->ID );
    $jumlah = str_word_count( strip_tags( $content ) );

    return $jumlah;
}

// Hilangkan Kolom2 metabox pada Post
function remove_metaboxes() {
    if(!current_user_can('administrator')) {
     remove_meta_box( 'postcustom' , 'post' , 'normal' ); //menyembunyikan  custom Field
     remove_meta_box('postexcerpt', 'post', 'normal'); //menyembunyikan  Excerpt atau snippet
     remove_meta_box('trackbacksdiv', 'post', 'normal'); //menyembunyikan Tracbacks
    }
}
add_action( 'admin_menu' , 'remove_metaboxes' );

// Hilangkan Sub Menu Category
add_action('admin_menu', 'my_remove_sub_menus');
function my_remove_sub_menus() {
    if(!current_user_can('administrator')) {
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=category');
    }
}

function wd_admin_menu_rename() {

         global $menu; // Global to get menu array
         global $submenu; // Global to get submenu array
         $menu[5][0] = 'Berita'; // Change name of posts to portfolio
         $submenu['edit.php'][5][0] = 'Daftar Berita'; // Change name of all posts to all portfolio items
         $submenu['edit.php'][10][0] = 'Tambah Berita'; // Change name of all posts to all portfolio items
         $submenu['edit.php'][16][0] = 'Daftar Topic/Tags'; // Change name of all posts to all portfolio items  
      
}
add_action( 'admin_menu', 'wd_admin_menu_rename' );

// clean header
function clean_header(){
    wp_deregister_script('comment-reply');  
         }
add_action('init','clean_header');

remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'parent_post_rel_link');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');
remove_action('wp_head', 'check_and_publish_future_post');
remove_action('wp_head', 'wp_print_styles');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

// Menyembunyikan Notofikasi Update Wordpress
if ( !current_user_can('administrator') )
    add_action('admin_menu','wphidenag');
function wphidenag() {
    remove_action( 'admin_notices', 'update_nag', 3 );
}
     
/*** Remove Menu in Admin Bar Wordpress */   
function remove_admin_bar_links() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');          // Remove the WordPress logo
    $wp_admin_bar->remove_menu('about');            // Remove the about WordPress link
    $wp_admin_bar->remove_menu('wporg');            // Remove the WordPress.org link
    $wp_admin_bar->remove_menu('documentation');    // Remove the WordPress documentation link
    //$wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
    //$wp_admin_bar->remove_menu('feedback');         // Remove the feedback link
    //$wp_admin_bar->remove_menu('site-name');        // Remove the site name menu
    //$wp_admin_bar->remove_menu('view-site');        // Remove the view site link
    //$wp_admin_bar->remove_menu('updates');          // Remove the updates link
    $wp_admin_bar->remove_menu('comments');         // Remove the comments link
    //$wp_admin_bar->remove_menu('new-content');      // Remove the content link

}
add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );

function check_referrer() {
    if (!isset($_SERVER['HTTP_REFERER']) || $_SERVER['HTTP_REFERER'] == “”) {
        wp_die( __('Please enable referrers in your browser, or, if you\'re a spammer, get out of here!') );
    }
}
add_action('check_comment_flood', 'check_referrer');

// Mengganti string pada konten

function replace_content($content)
{
$content = str_replace('http://cms.solopos.com/', 'http://old.solopos.com/',$content);
$content = str_replace('Harianjogja.com,', 'Solopos.com,',$content);
$content = str_replace('Madiunpos.com,', 'Solopos.com,',$content);
$content = str_replace('Kanalsemarang.com,', 'Solopos.com,',$content);
$content = str_replace('Semarangpos.com,', 'Solopos.com,',$content);
return $content;
}
add_filter('the_content','replace_content');

/*if ( is_page('instant-article-feed') ) {
    function replace_heading($heading) {
        $heading = str_replace('<h4>', '<h2>',$heading);
        $heading = str_replace('</h4>', '</h2>',$heading);
        return $heading;
    }

    add_filter('the_content','replace_heading');
}*/

function replace_heading($content) {
        $heading = str_replace('<h4>', '<h2>',$content);
        $heading = str_replace('</h4>', '</h2>',$heading);
        $heading = str_replace(' class="h4"', '', $heading);
        return $heading;
}


//remove P tags pada deskripsi kategori
remove_filter('term_description','wpautop');

/**
 * Improves the WordPress caption shortcode with HTML5 figure & figcaption, microdata & wai-aria attributes
 *
 * Author: @joostkiens
 * Licensed under the MIT license
 *
 * @param  string $val     Empty
 * @param  array  $attr    Shortcode attributes
 * @param  string $content Shortcode content
 * @return string          Shortcode output
 */
function my_img_caption_shortcode_filter( $val, $attr, $content = null ) {
    extract( shortcode_atts( array(
        'id'      => '',
          'align'   => 'aligncenter',
          'width'   => '',
          'caption' => ''
      ), $attr ) );
      
      // No caption, no dice...
      if ( 1 > (int) $width || empty( $caption ) )
          return $val;
   
      if ( $id )
          $id = esc_attr( $id );
       
      // Add itemprop="contentURL" to image - Ugly hack
      $content = str_replace('<img', '<img itemprop="contentURL"', $content);
      return '<figure id="' . $id . '" aria-describedby="figcaption_' . $id . '" class="wp-caption ' . esc_attr($align) . '" itemscope itemtype="http://schema.org/ImageObject" style="width: ' . (0 + (int) $width) . 'px">' . do_shortcode( $content ) . '<figcaption id="figcaption_'. $id . '" class="wp-caption-text" itemprop="description">' . $caption . '</figcaption></figure>';
  }

add_filter( 'img_caption_shortcode', 'my_img_caption_shortcode_filter', 10, 3 );

add_action( 'admin_footer-post.php',     'wpse_98274_disable_top_categories_checkboxes' );
add_action( 'admin_footer-post-new.php', 'wpse_98274_disable_top_categories_checkboxes' );
/**
 * Disable parent checkboxes in Post Editor.
 */
function wpse_98274_disable_top_categories_checkboxes() {
    global $post_type;

    if ( 'post' != $post_type )
        return;
    ?>
        <script type="text/javascript">
            jQuery( "#category-all ul.children" ).each( function() {
                $( "#in-category-636" ).prop( "disabled", false );
                $( "#in-category-47665" ).prop( "disabled", false );
                jQuery(this).closest( "ul" ).parent().children().children( "input" ).attr( 'disabled', 'disabled' );
                
            });
        </script>
    <?php
}

add_filter( 'wp_terms_checklist_args', 'wpse_98274_checklist_args' );
/**
 * Remove horrid feature that places checked categories on top.
 */
function wpse_98274_checklist_args( $args ) {

    $args['checked_ontop'] = false;
    return $args;
}

// make category check be radio button
add_action( 'admin_footer', 'catlist2radio' );

//only on post new and edit post, not working on quick edit
function catlist2radio(){
    global $pagenow;

    if(isset($_GET['action']) == 'edit' OR 'post-new.php' === $pagenow) {
    echo '<script type="text/javascript">';
    echo 'jQuery("#categorychecklist input, #categorychecklist-pop input, .cat-checklist input")';
    echo '.each(function(){this.type="radio"});</script>';
    }
}

function hide_cat() { 
    $user_id = get_current_user_id();
    if($user_id == '110') { ?>
    <style type="text/css">
        li.hide-if-no-js { display: none !important; }
        div#category-adder { display: none; }
        div#category-pop { display: none; }
        
        li#category-73 { display:none; }
        li#category-317927 { display:none; }
        li#category-60515 { display:none; }
        li#category-351957 { display:none; }
        li#category-41865 { display:none; }
        li#category-54 { display:none; }
        li#category-127679 { display:none; }
        li#category-60197 { display:none; }
        li#category-2707 { display:none; }
        li#category-5179 { display:none; }
        li#category-106534 { display:none; }

        li#category-60118 { display:none; }
        /*li#category-47665 { display:none; }*/
        li#category-963 { display:none; }
        li#category-3362 { display:none; }
        li#category-154197 { display:none; }
        li#category-95321 { display:none; }
        li#category-32881 { display:none; }
        li#category-228966 { display:none; }
        li#category-616542 { display:none; }
        li#category-135001 { display:none; }
        /*li#category-2088 { display:none; }*/
        li#category-527 { display:none; }
        li#category-620571 { display:none; }
        li#category-252516 { display:none; }
        li#category-138461 { display:none; }
        li#category-89635 { display:none; }
        li#category-108962 { display:none; }
        li#category-89641 { display:none; }
        li#category-309540 { display:none; }
        li#category-1804 { display:none; }
        li#category-657713 { display:none; }
        li#category-657712 { display:none; }
        li#category-658759 { display:none; }
        li#category-1803 { display:none; }
        li#category-60821 { display:none; }
        li#category-2082 { display:none; }
        li#category-53275 { display:none; }
        li#category-39767 { display:none; }
        li#category-18498 { display:none; }
        li#category-60519 { display:none; }
        li#category-12100 { display:none; }
        li#category-19174 { display:none; }
        li#category-3363 { display:none; }
        li#category-1804 { display:none; }
        li#category-93082 { display:none; }
        li#category-60516 { display:none; }
        li#category-664047 { display:none; }
        li#category-94686 { display:none; }
        li#category-5342 { display:none; }
        li#category-83 { display:none; }
        li#category-7622 { display:none; }
        li#category-15783 { display:none; }
        li#category-8467 { display:none; }
        li#category-636 { display:none; }
        li#category-4175 { display:none; }
        li#category-655246 { display:none; }
        li#category-664048 { display:none; }
        li#category-664049 { display:none; }
        li#category-11091 { display:none; }
        li#category-15420 { display:none; }
        li#category-106534 { display:none; }
        /*pilkada*/
        li#category-2088 { display:none; }
        li#category-711653 { display:none; }
        li#category-711654 { display:none; }
        li#category-711656 { display:none; }
        /*hikmah ramadhan*/
        li#category-668331 { display:none; }
        li#category-668332 { display:none; }
        li#category-668333 { display:none; }
        li#category-668333 { display:none; }
        li#category-668629 { display:none; }
        li#category-668630 { display:none; }
        /*span.inline { display: none; }
        .editinline { display: none; }*/
    </style>
    <script>
    // JavaScript Document
    jQuery(document).ready(function($) {
    $('#title').attr('required', true);
    //$('#content').attr('required', true);
    //$('#_my_custom_field').attr('required', true); 
    });
    </script>
    <?php
    } else {
    ?>
    <style type="text/css">
        li.hide-if-no-js { display: none; }
        div#category-adder { display: none; }
        div#category-pop { display: none; }
        
        li#category-73 { display:none; }
        li#category-317927 { display:none; }
        li#category-60515 { display:none; }
        li#category-351957 { display:none; }
        li#category-41865 { display:none; }
        li#category-54 { display:none; }
        li#category-127679 { display:none; }
        li#category-60197 { display:none; }
        li#category-2707 { display:none; }
        li#category-5179 { display:none; }
        li#category-106534 { display:none; }

        li#category-60118 { display:none; }
        /*li#category-47665 { display:none; }*/
        li#category-963 { display:none; }
        li#category-3362 { display:none; }
        li#category-154197 { display:none; }
        li#category-95321 { display:none; }
        li#category-32881 { display:none; }
        li#category-228966 { display:none; }
        li#category-616542 { display:none; }
        li#category-135001 { display:none; }
        /*li#category-2088 { display:none; }*/
        li#category-527 { display:none; }
        li#category-620571 { display:none; }
        li#category-252516 { display:none; }
        li#category-138461 { display:none; }
        li#category-89635 { display:none; }
        li#category-108962 { display:none; }
        li#category-89641 { display:none; }
        li#category-309540 { display:none; }
        li#category-1804 { display:none; }
        li#category-657713 { display:none; }
        li#category-657712 { display:none; }
        li#category-658759 { display:none; }
        li#category-1803 { display:none; }
        li#category-60821 { display:none; }
        li#category-2082 { display:none; }
        li#category-53275 { display:none; }
        li#category-39767 { display:none; }
        li#category-18498 { display:none; }
        li#category-60519 { display:none; }
        li#category-12100 { display:none; }
        li#category-19174 { display:none; }
        li#category-3363 { display:none; }
        li#category-1804 { display:none; }
        li#category-93082 { display:none; }
        li#category-60516 { display:none; }
        /*pilkada*/
        li#category-2088 { display:none; }
        li#category-711653 { display:none; }
        li#category-711654 { display:none; }
        li#category-711656 { display:none; }
        /*hikmah ramadhan*/
        li#category-668331 { display:none; }
        li#category-668332 { display:none; }
        li#category-668333 { display:none; }
        li#category-668333 { display:none; }
        li#category-668629 { display:none; }
        li#category-668630 { display:none; }        

        /*span.inline { display: none; }
        .editinline { display: none; }*/
    </style>
    <script>
    // JavaScript Document
    jQuery(document).ready(function($) {
    $('#title').attr('required', true);
    //$('#content').attr('required', true);
    //$('#_my_custom_field').attr('required', true); 
    });
    </script>
<?php
    }
}
add_action( "admin_head", "hide_cat" );

//first image feed
function get_first_image_url($html)
{
    if (preg_match('/<img.+?src="(.+?)"/', $html, $matches)) {
    return $matches[1];
    }
}

//first paragraph feed
function get_first_paragraph_feed($content) {
    $text = strip_tags($content, '<p>');
    $first_p = explode('</p>', $text);
    return $first_p[0];
}

//feedblock jeda.id
function feed_jeda($feed_url) {
    // fetch feed
    $feed = fetch_feed($feed_url);

    if (is_wp_error($feed)) {
        return;
    }

    $max_items = $feed->get_item_quantity(1);
    $items = $feed->get_items(0, $max_items);

    if (empty($items) || !is_array($items)) {
        return;
    }
        foreach ($items as $item) {
        ?>

            <li>
                <!-- Post Item Start -->
                <div class="post--item post--title-largest">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-4 col-xxs-12">
                            <div class="post--img">
                                <a href="<?php echo esc_url($item->get_permalink()); ?>" class="thumb" target="_blank"><?php echo '<img src="'.get_first_image_url($item->get_content()). '" max-height="187px" alt="Image Jeda.id">'; ?></a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-8 col-xxs-12">
                            <div class="post--info">
                                <div class="title">
                                    <h2 class="h4"><a href="<?php echo esc_url($item->get_permalink()); ?>" class="btn-link" target="_blank"><?php echo esc_html($item->get_title()); ?></a></h2>
                                </div>
                            </div>
                            <div class="post--content">
                                <div class="meta--list">
                                    <span> <i class="fa fa-user-o"></i>  <a href="#"><?php $author = $item->get_author(); echo $author->name; ?></a></span>
                                    <span><i class="fa fa-clock-o"></i>  <a href="#"><?php echo date('d F Y', strtotime($item->get_item_tags( '', 'pubDate' )[0]['data'])); ?></a></span>
                                </div>                                                        
                                <p><?php echo get_first_paragraph_feed($item->get_content()); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post Item End -->
            </li>
        <?php
        }
}

function ig_feed_by_hastag($tag) {

    $insta_source = file_get_contents('https://www.instagram.com/explore/tags/'.$tag.'/'); // instagrame tag url
    $shards = explode('window._sharedData = ', $insta_source);
    $insta_json = explode(';</script>', $shards[1]); 
    $insta_array = json_decode($insta_json[0], TRUE);
    $results_array = $insta_array;
    //return $insta_array; // this return a lot things print it and see what else you need
//$tag = 'solopos'; // tag for which ou want images 
//$results_array = scrape_insta_hash($tag);
//$limit = 7; //previous was only limit to 7 images
$limit = 4; // provide the limit thats important because one page only give some images.
$image_array= array(); // array to store images.
    for ($i=0; $i < $limit; $i++) { 
        //previous code to get images from json     
        //$latest_array = $results_array['entry_data']['TagPage'][0]['tag']['media']['nodes'][$i];  
        //new code to get images from json  
        $latest_array = $results_array['entry_data']['TagPage'][0]['graphql']['hashtag']['edge_hashtag_to_media']['edges'][$i]['node'];
        $image_data  = '<img src="'.$latest_array['thumbnail_src'].'" alt="gallery" class="img-fluid">'; // thumbnail and same sizes 
        //$image_data  = '<img src="'.$latest_array['display_src'].'">'; actual image and different sizes 
        array_push($image_array, $image_data);
    }
    foreach ($image_array as $image) {
        //echo $image;// this will echo the images wrap it in div or ul li what ever html structure
        /*echo '<div class="col-md-3">
                    <div class="cy_gal_img">
                        '.$image.'
                        <div class="img_gal_ovrly"></div>
                        <div class="gal_buttons">
                            <a href="https://www.instagram.com/explore/tags/'.$tag.'/" class="fa fa-link" target="_blank"></a>
                        </div>
                    </div>
                </div>';*/
        echo '<div class="col-6 mb-20"><div class="post-block-style clearfix">
                <div class="post-thumb">
                    <a href="https://www.instagram.com/explore/tags/'.$tag.'/" target="_blank">'.$image.'</a>
                </div>
            </div></div>';
        //print_r($insta_array);
    }
    // for getting all images have to loop function for more pages 
    // for confirmation  you are getting correct images view 
    //https://www.instagram.com/explore/tags/your-tag-name/
}

/*
function limit_title($title, $limit = 10) {
    if(stripos($title, " ")) {
        $ex_str = explode(" ", $title);
        if(count($ex_str) > $limit) {
            for($i = 0; $i < $limit; $i++) {
                $str_s .= $ex_str[$i] . " ";
            }
            return $str_s . "&hellip;";
        } else {
            return $title;
        }
    } else {
        return $title;
    }
} */

// case for static loop in custom page (Pilkada, Perilaku Baru)
function custom_next_posts_url($page) {
    global $wp;
    $url = home_url($wp->request);
    //echo $wp->request;
    $link_array = explode('/', $url);
    $page_num = end($link_array);
    $next_page_num = $page_num+1;
    $next_link = str_replace($page_num, $next_page_num, $url);

    return $next_link;
}

function data_covid_jateng() {
// URL TARGET
$url = 'https://corona.jatengprov.go.id/v2';
//end
// get / mengambil content berdasarkan url yang akan di curi datanya
$content = file_get_contents($url);
//
// STEP 1 mengambil syntax pembuka
$first_step = explode( '<div class="container-fluid pl-lg-5 pr-lg-5 pl-md-3 pr-md-3 pl-sm-2 pr-sm-2">' , $content );
//
// STEP 2 mengambil syntax penutup
$second_step = explode("</div>" , $first_step[3] );
//

$info = explode('<p class="text-detail">', $second_step[0]);
$source = $info[1];

$total = $second_step[2];
$dirawat = $second_step[4];
$sembuh = $second_step[6];
$meninggal = $second_step[8];

$html = '<div class="row">'.$total.'</div></div>'.$dirawat.'</div></div>'.$sembuh.'</div></div>'.$meninggal.'</div></div><br><p class="text-left">'.$source.'
</p></div>';

return $html;

}


//pengaturan limit dimensions upload image

if ( !current_user_can( 'upload_foto_besar' ) ) {
    add_filter( 'wp_handle_upload_prefilter', 'aturan_upload_gambar' ); 
    function aturan_upload_gambar( $file )
    {
        // Mime type with dimensions, check to exit earlier
        $mimes = array( 'image/jpeg', 'image/jpg', 'image/png', 'image/gif' );

        if( !in_array( $file['type'], $mimes ) )
            return $file;

        $img = getimagesize( $file['tmp_name'] );
        $img_size = filesize( $file['tmp_name'] )/1024;
        $minimum = array( 'width' => 600, 'height' => 400 );
        $maximum = array( 'width' => 800, 'height' => 600 );

        if ($img_size > 100)   {
            $file['error'] = 
                'Size gambarmu kegedean boz... ' .number_format($img_size,0) . ' KB. Size yang di izinkan maksmimal 100 KB.';
        }

        if (!in_array($img[0], range(600, 800)) || !in_array($img[1], range(400, 600)))  {
            $file['error'] = 
                'Gambar anda tidak sesuai aturan dimensi, atur ulang gambar anda LEBAR 600 s/d 800 px & TINGGI 400 s/d 600 px. gambar yang anda upload ukurannya adalah' . $img[0] . ' x ' . $img[1] . ' px. ulangi upload atau saya panggilkan saitama.';
        }

        return $file;
    } 
}

// Wordpress SQL_CALC fix Optimize Database
/*
add_filter('pre_get_posts', 'optimized_get_posts', 100);
function optimized_get_posts() {
    global $wp_query, $wpdb;
    $wp_query->query_vars['no_found_rows'] = 1;
    $wp_query->found_posts = $wpdb->get_var( "SELECT COUNT(*) FROM wp_posts WHERE 1=1 AND wp_posts.post_type = 'post' AND (wp_posts.post_status = 'publish' OR wp_posts.post_status = 'private')" );
    $wp_query->found_posts = apply_filters_ref_array( 'found_posts', array( $wp_query->found_posts, &$wp_query ) );
    if($wp_query->query_vars['posts_per_page'] <= 0) {
        $wp_query->max_num_pages = 0;
    } else {
        $wp_query->max_num_pages = ceil($wp_query->found_posts / $wp_query->query_vars['posts_per_page']);
    }
    return $wp_query;
} */

// add_action( 'rest_api_init', 'create_api_posts_meta_field' );
 
// function create_api_posts_meta_field() {
 
//     // register_rest_field ( 'name-of-post-type', 'name-of-field-to-return', array-of-callbacks-and-schema() )
//     register_rest_field( 'post', 'post_meta_fields', array(
//            'get_callback'    => 'get_post_meta_for_api',
//            'schema' => 'null',
//         )
//     );
// }
 
// function get_post_meta_for_api( $object ) {
//     //get the id of the post object array
//     $post_id = $object['id'];

//     $post_metas = get_post_meta($post_id,  false, true);
//     $post_metas = array_combine(array_keys($post_metas), array_column($post_metas, '0'));
 
//     //return the post meta
//     // return get_post_meta( $post_id, '0', true );
//     return $post_metas;
// }


// menyebabkan error showpostcount tidak jalan
// function rest_filter_by_custom_taxonomy( $args, $request ) {

//     if ( isset($request['tag_slug']) )
//     {
//         $tag_slug = sanitize_text_field($request['tag_slug']);
//         $args['tax_query'] = [
//             [
//                 'taxonomy' => 'post_tag',
//                 'field'    => 'slug',
//                 'terms'    => $tag_slug,
//             ]
//         ];
//     }

//     return $args;

// }
// add_filter('rest_post_query', 'rest_filter_by_custom_post_feature', 10, 3);

function rest_filter_by_post_feature( $args, $request ) {

    if ( isset($request['post_feature']) && $request['post_feature'] == 'popular') {
        $args = array(
            'showposts' => $request['per_page'],
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            'order' => 'DESC',
            'no_found_rows' => true, // untuk fast loading
            'date_query' => array(
                array(
                    'after' => '-24 hours',
                    //'day' => date('d'),
                    //'monthnum' => date('m'),
                    //'year' => date('Y'),
                ),
            ),
        );
    } else {
        $post_feature = sanitize_text_field($request['post_feature']);
        $args['meta_query'] = [
            [
                'key'     => 'post_feature',
                'value'   => $post_feature,
            ]
        ];
    }

    return $args;

}
add_filter('rest_post_query', 'rest_filter_by_post_feature', 10, 3);

function findTag($key, $data) {
    foreach($data as $item) {
        if($item == $key) {
            $tag = 1;
            break;
        }
    }

    return isset($tag);
}

// menghapus special character
function clean_char($str) {
   return preg_replace('/&/s', '', $str); // pattern, replacement, target/string
}

// // for custom comment types, this is 'comment'. For user meta,
// // this is 'user'.
// $object_type = 'post';
// $meta_args = array( // Validate and sanitize the meta value.
//     // Note: currently (4.7) one of 'string', 'boolean', 'integer',
//     // 'number' must be used as 'type'. The default is 'string'.
//     'type'         => 'string',
//     // Shown in the schema for the meta key.
//     'description'  => 'A meta key associated with a string meta value.',
//     // Return a single value of the type.
//     'single'       => true,
//     // Show in the WP REST API response. Default: false.
//     'show_in_rest' => true,
// );

//register_meta( $object_type, 'post_summary', $meta_args );

// if(!function_exists('slug_add_data')) {
//     function slug_add_data($response, $post) {
//         $response->data['slug_category'] = '';
//         $categories = get_the_category($post->ID);
 
//         if(count($categories)) {
//             $category_slug = $categories[0]->slug;
//             $response->data['slug_category'] = $category_slug;
//          }
//     }
// }
 
// add_filter('rest_prepare_post', 'slug_add_data', 10, 3);

// function slug_add_post_data() {
//     register_rest_field('post',
//         'slug_field',
//         array(
//             'get_callback' => 'slug_get_field',
//             'update_callback' => 'slug_update_field',
//             'schema' => array(
//                                 'description' => 'My special field',
//                                 'type' => 'string',
//                                 'context' => array('view', 'edit')
//                             )
//         )
//     );
// }
 
// add_action('rest_api_init', 'slug_add_post_data');
 
// function slug_get_field($post, $field_name, $request) {
//   return get_post_meta($post->id, $field_name);
// }
 
// function slug_update_field($value, $post, $field_name) {
//   if (!$value || !is_string($value)) {
//     return;
//   }
 
//   return update_post_meta($post->ID, $field_name, strip_tags($value));
// }

// register_rest_field( 'post', 'meta', array(
//     'get_callback' => function ( $data ) {
//         return json_decode(get_post_meta( $data['id'], '', '' ));
//     }, ));