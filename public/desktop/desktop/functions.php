<?php
ini_set( 'mysql.trace_mode', 0 );
$solo_path = TEMPLATEPATH . '/admin/';
require_once ($solo_path . 'global-functions.php'); // function untuk global
require_once ($solo_path . 'admin-functions.php'); // function untuk backend/post editor
require_once ($solo_path . 'generatexml-functions.php');

add_filter('show_admin_bar', '__return_false');

add_theme_support( 'post-thumbnails' );
add_image_size( 'mthumb', 100, 100, true );
add_image_size( 'mcaraousel', 173, 165, true ); 

/*add_image_size( 'bigthumb', 540, 460, true ); 
add_image_size( 'vthumb', 255, 330, true ); 
add_image_size( 'medthumb', 255, 170, true );
*/

// disable autosave
function disable_autosave() {
	wp_deregister_script('autosave');
}
add_action( 'wp_print_scripts', 'disable_autosave' );

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="btn btn-primary"';
}

// waktu baca
function reading_time() {
    global $post;
    $content = get_post_field( 'post_content', $post->ID );
    $word_count = str_word_count( strip_tags( $content ) );
    $readingtime = ceil($word_count / 225);

    if ($readingtime == 1) {
      $timer = " menit baca";
    } else {
      $timer = " menit baca";
    }
    $totalreadingtime = $readingtime . $timer;

    return $totalreadingtime;
}

// fungsi waktu baca
function readingtime($content) {
  //global $post;
  //$content = get_post_field( 'post_content', $post->ID );
  $word_count = str_word_count( strip_tags( $content ) );
  $readingtime = ceil($word_count / 225);

  if ($readingtime == 1) {
    $timer = " menit baca";
  } else {
    $timer = " menit baca";
  }
  $totalreadingtime = $readingtime . $timer;

  return $totalreadingtime;
}

function count_user_posts_by_type( $userid, $post_type, $year, $month ) {
    $query = new WP_Query( array(
      'author'         => $userid,
      'post_type'      => $post_type,
      'post_status'    => 'publish',
      'date_query'     => array(
         array(
           'year'      => $year,
           'month'     => $month,
           //'day'       => $day,
           ),
          ),
      'posts_per_page' => -1,       
      )); 
    $count = $query->found_posts;
    return $count;
}

function wp_get_cat_postcount($id) {
    $cat = get_category($id);
    $count = (int) $cat->count;
    $taxonomy = 'category';
    $args = array(
        'child_of' => $id,
    );
    $tax_terms = get_terms($taxonomy,$args);
    foreach ($tax_terms as $tax_term) {
        $count +=$tax_term->count;
    }

    return $count;
}

/* Function to add related posts by tags on single page */
//add_filter('the_content', 'related_posts_split_content');
function related_posts_split_content($content){
  global $post;
  if( is_single() ){
    $rel_posts = '';
    $backup = $post;  // backup the current object
    $tags = wp_get_post_tags($post->ID);
    $tagIDs = array();
    if ($tags) {
      $tagcount = count($tags);
      for ($i = 0; $i < $tagcount; $i++) {
        $tagIDs[$i] = $tags[$i]->term_id;
      }

      # 1. get category IDs of the current article and save to variable as an array.
      $categories = get_the_category();
      foreach($categories as $category){
        $rel_cat[] = $category->cat_ID;
      }
      # 2. arguments for wp_query.  
      $rep_args = array(
        'post__not_in' => array($post->ID), # don't display current post.
        //'category__in' => $rel_cat, # get posts within current categories.
        'tag__in' => $tagIDs,
        'posts_per_page' => 5, # number of posts to display.
        'orderby' => 'date', # display random posts.
        'date_query' => array(
          array(
              'after' => '-30 days',
          ),
        ), 
      );
      # 3. run the query. 
      $rep_query = new wp_query($rep_args);

      # 4. if the query has posts start the loop.
      if($rep_query->have_posts()){
        $rel_posts = "<div class='baca-juga'><h3>Baca Juga</h3><ul>";
        while($rep_query->have_posts()) : $rep_query->the_post();
          $rel_img = get_the_post_thumbnail($post->ID, 'thumbnail'); ## get featured image with default thumbnail size. 
          $rel_title =  get_the_title(); # get post title.
          $rel_link = get_permalink(); # get post link. 
          $rel_posts .= "<li><a href='$rel_link' title='$rel_title?utm_source=bacajuga_desktop'> $rel_title </a></li>";
        endwhile;
        $rel_posts .= "</ul></div>";
        wp_reset_postdata();
      }
    } 
  }
  if ( is_single() && ! is_admin() ) {
    return prefix_insert_after_paragraph( $rel_posts, 3, $content );
  }  
  return $content;
}

// Parent Function that makes the magic happen
function prefix_insert_after_paragraph( $insertion, $paragraph_id, $content ) {
    $closing_p = '</p>';
    $paragraphs = explode( $closing_p, $content );
    foreach ($paragraphs as $index => $paragraph) {
  
      if ( trim( $paragraph ) ) {
        $paragraphs[$index] .= $closing_p;
      }
  
      if ( $paragraph_id == $index + 1 ) {
        $paragraphs[$index] .= $insertion;
      }
    }
    
    return implode( '', $paragraphs );
}

// time ago
function time_elapsed_string($datetime, $full = false) {
  $now = new DateTime;
  $ago = new DateTime($datetime);
  $diff = $now->diff($ago);

  $diff->w = floor($diff->d / 7);
  $diff->d -= $diff->w * 7;

  $string = array(
      'y' => 'tahun',
      'm' => 'bulan',
      'w' => 'minggu',
      'd' => 'hari',
      'h' => 'jam',
      'i' => 'menit',
      's' => 'detik',
  );
  foreach ($string as $k => &$v) {
      if ($diff->$k) {
          $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? '' : '');
      } else {
          unset($string[$k]);
      }
  }

  if (!$full) $string = array_slice($string, 0, 1);
  return $string ? implode(', ', $string) . ' yang lalu' : 'baru saja';
}


function timeago($time, $tense='yang lalu') {
  // declaring periods as static function var for future use
  static $periods = array('tahun', 'bulan', 'hari', 'jam', 'menit', 'detik');

  // checking time format
  if(!(strtotime($time)>0)) {
      return trigger_error("Wrong time format: '$time'", E_USER_ERROR);
  }

  // getting diff between now and time
  $now  = new DateTime('now');
  $time = new DateTime($time);
  $diff = $now->diff($time)->format('%y %m %d %h %i %s');
  // combining diff with periods
  $diff = explode(' ', $diff);
  $diff = array_combine($periods, $diff);
  // filtering zero periods from diff
  $diff = array_filter($diff);
  // getting first period and value
  $period = key($diff);
  $value  = current($diff);

  // if input time was equal now, value will be 0, so checking it
  if(!$value) {
      $period = 'detik';
      $value  = 0;
  } else {
      // converting days to weeks
      if($period=='day' && $value>=7) {
          $period = 'week';
          $value  = floor($value/7);
      }
      // adding 's' to period for human readability
      if($value>1) {
          $period .= '';
      }
  }

  // returning timeago
  return "$value $period $tense";
}

function featuredtoRSS($content) {
  global $post;
  if ( has_post_thumbnail( $post->ID ) ){
  $content = '<div>' . get_the_post_thumbnail( $post->ID, 'medium', array( 'style' => 'margin-bottom: 15px;' ) ) . '</div>' . $content;
  }
  return $content;
}
   
add_filter('the_excerpt_rss', 'featuredtoRSS');
add_filter('the_content_feed', 'featuredtoRSS');

add_filter( 'allowed_http_origins', 'add_allowed_origins' );
function add_allowed_origins( $origins ) {
    $origins[] = 'https://m.solopos.com';
    return $origins;
}

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

function limit_text($text, $limit) {
  if (str_word_count($text, 0) > $limit) {
      $words = str_word_count($text, 2);
      $pos   = array_keys($words);
      $text  = substr($text, 0, $pos[$limit]) . '...';
      $content = strip_tags(html_entity_decode($text, ENT_QUOTES, 'UTF-8'));
  }
  return $content;
}

//double link ads
if (!function_exists('double_link'))
{
    function double_link()
    {
        $x = mt_rand(1, 2);
        $now = date('Y-m-d H:i:s');
        if( $now >= '2020-12-22 11:45:00' && $now <= '2020-12-22 20:59:59' ) {
            if ($x==1) {
                $link = 'target="_blank" onclick="window.location = \'https://youtu.be/mV1YmrnQNBU\'"';
            } else {
                $link = '';
            }
        } else {
            $link = '';
        }

        return $link;
    }
}

function rclr_query_string($q)
{
    foreach (get_taxonomies(array(), 'objects') as $taxonomy => $t) {
        if ('post_tag' == $taxonomy) {
            continue;   // Handled further down in the $q['tag'] block
        }
        if ($t->query_var && !empty($q[$t->query_var])) {
            if (is_array($q[$t->query_var])) {
                $q[$t->query_var] = implode(',', $q[$t->query_var]);
            }
        }
    }
    return $q;
}

add_filter('request', 'rclr_query_string', 1);

//menambah subtitle pada feed instant articles facebook
add_filter( 'instant_articles_subtitle', 'hf_instant_articles_subtitle' ); 
function hf_instant_articles_subtitle( $subtitle ) { 
	global $post;
	$excerpt = get_post_meta( $post->ID, 'post_summary', true ); 
	if ( trim($excerpt)!='' ) 
		$subtitle = trim($excerpt); 
	return $subtitle; 
}

//Hanya bisa melihat tulisannya sendiri
function posts_for_current_author($query) {
    global $pagenow;
 
    if( 'edit.php' != $pagenow || !$query->is_admin )
        return $query;
 
    if( !current_user_can( 'publish_posts' ) ) {
        global $user_ID;
        $query->set('author', $user_ID );
    }
    return $query;
}
add_filter('pre_get_posts', 'posts_for_current_author');
		
