<?php
global $post;
    $categories = get_the_category();
    if ( has_tag ('sbbi-2020')) {
        include(TEMPLATEPATH.'/sbbi/single.php');              
    } elseif( in_category(array('pilkada', 'profile', 'serba-serbi', 'data')) ) {
        include(TEMPLATEPATH.'/single-pilkada.php');
    } elseif ( has_tag (array('perilaku-baru','setop-penularan-covid-19','ingat-pesan-ibu','solopos-lawan-covid-19','setop-penularan-covid-19','cek-fakta-corona'))) {
        include(TEMPLATEPATH.'/single-perilakubaru.php');
    } elseif ( has_tag (array('uksw','uksw-salatiga','prestasi-uksw','prestasi-uksw-salatiga,foto-uksw-salatiga'))) {
        include(TEMPLATEPATH.'/single-uksw.php');  
    } elseif( in_category('video') ) {
        include(TEMPLATEPATH.'/single-video.php');          
    } else {
?>

<?php get_header(); ?>
<?php
    $path_to_file = $_SERVER["DOCUMENT_ROOT"] . '/xml-data/posts/';
    $path_xml_breaking = $_SERVER["DOCUMENT_ROOT"] . '/xml-data/breaking';
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(strpos($actual_link, '?') !== false) {
        $pecah = explode('?', $actual_link);
        $pecah_link = explode('-', $pecah[0]);
        $get_id = end($pecah_link);
    } else {
        $pecah_link = explode('-', $actual_link);
        $get_id = end($pecah_link);
    }
    if (file_exists(''.$path_to_file.'/'.$get_id.'.xml')) {
        $xml = simplexml_load_file(''.$path_to_file.'/'.$get_id.'.xml');
        
        $premium = $xml->posts->properties->konten_premium;
        $post_id = $xml->posts->properties->post_id;
        $post_date = $xml->posts->created;
        $category_parent = $xml->posts->properties->category->parent;
        $category_parent_id = $xml->posts->properties->category->parent['id'];
        $title = $xml->posts->content->title;
        $summary = $xml->posts->content->summary;
        $content = htmlspecialchars_decode($xml->posts->content->content);
        $author = $xml->posts->authors->author;
        $editor = $xml->posts->authors->editor;
        $user_url = $xml->posts->authors->editor_url;
        $avatar = $xml->posts->authors->avatar;
        //$other_author = $xml->posts->properties->other_author;
        $image_content = $xml->posts->images->content;
        $image_caption = $xml->posts->images->caption;
        $tags = $xml->posts->tags->tag;
        $permalink = 'https://www.solopos.com/'.$xml->posts->content->slug.'-'.$xml->posts->properties->post_id;

        if ($premium != '') {
          include(TEMPLATEPATH.'/single-premium.php');
        } else {
          include(TEMPLATEPATH.'/single-xml.php');  
        }
    } else {
        include(TEMPLATEPATH.'/single-old.php');
    //exit('Failed to open xml file.');
    } 
?>
<?php get_footer();?>

<?php } //End Pengondisian Custom Single Page?>