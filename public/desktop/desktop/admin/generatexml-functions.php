<?php
// function autop wp
function smilieMe($text) {
    $smiliesFind = array(
        '/:\)/',
        '/:P/',
        '/:D/',
        '/:S/',
        '/:\(/',
        '/:8/',
        '/:tea/',
        '/:o/',
        '/:O/',
        '/:q/',
        '/:Q/',
        '/:hug/',
        '/:joy/',
        '/:yes/',
        '/:no/',
    );
    $smiliesReplace = array(
        '<img src="images/smilies/smile.png" alt=":)" title=":)" />',
        '<img src="images/smilies/tongue.png" alt=":P" title=":P" />',
        '<img src="images/smilies/grin.png" alt=":D" title=":D" />',
        '<img src="images/smilies/confused.png" alt=":S" title=":S" />',
        '<img src="images/smilies/sad.png" alt=":(" title=":(" />',
        '<img src="images/smilies/proud.png" alt=":8" title=":8" />',
        '<img src="images/smilies/tea.gif" alt=":tea" title=":tea" />',
        '<img src="images/smilies/wow.png" alt=":o" title=":o" />',
        '<img src="images/smilies/wow.png" alt=":O" title=":O" />',
        '<img src="images/smilies/yay.png" alt=":q" title=":q" />',
        '<img src="images/smilies/yay.png" alt=":Q" title=":Q" />',
        '<img src="images/smilies/hug.gif" alt=":hug" title=":hug" />',
        '<img src="images/smilies/joy.gif" alt=":joy" title=":joy" />',
        '<img src="images/smilies/yes.gif" alt=":yes" title=":yes" />',
        '<img src="images/smilies/no.gif" alt=":no" title=":no" />',
    );
    return preg_replace($smiliesFind, $smiliesReplace, $text);
}

function autop($content) {
    $content = trim($content);
    $content = stripslashes($content);
    /*
     * temporarily replace two or more consecutive newlines
     * into SOH characters (Start of Heading - first character of a message header)
     */
    $content = preg_replace('~(\r\n|\n){2,}|$~', "\001", $content);
    // convert remaining single newlines into HTML <br>
    //$content = nl2br($content);
    // replace SOH characters with paragraphs
    $content = preg_replace('/(.*?)\001/s', "<p>$1</p>\n", $content);
    $content = smilieMe($content);
    // parse URL addresses (ftp, http, https)
    //$content = preg_replace('*(f|ht)tps?://[A-Za-z0-9\./?=\+&%]+*', '<a href="$0">$0</a>', $content);
    $content = htmlspecialchars($content, ENT_QUOTES, 'utf-8');
    //$content = htmlentities($content, ENT_QUOTES, 'utf-8');
    //$content = html_entity_decode($content);
    return $content;
}

// generate XML after post action hook
function generate_post_xml($new_status, $old_status, $post) {
    //if ($new_status === 'publish' && $old_status !=== 'publish') { {
    //global $post;
    //}
    //if ( $new_status == 'publish' && $old_status != 'publish' ) {
    $path_to_file = $_SERVER["DOCUMENT_ROOT"] . '/xml-data/posts/'; //Make sure $path_to_file is the full path, something like /home/user/public_html/

    $xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><soloposcom/>');
    //$xml->addAttribute('encoding', 'UTF-8');
    $posts = get_post( $post->ID );

    //$prev_post = get_previous_post(true); //get_permalink( get_adjacent_post(false,'',true)->ID );
    //$prev_user = get_userdata( $prev_post->post_author );

    //$next_post = get_next_post(true);;//get_permalink( get_adjacent_post(false,'',false)->ID );
    //$next_user = get_userdata( $next_post->post_author );
    
    // deteksi kanal
    /*$cat = get_the_category($posts->ID);
    $cat_parent = $cat[0]->category_parent;
    if($cat_parent) { $cat_parent = get_category($cat_parent);
        $category_parent = $cat_parent->slug;
        $category_child = $cat[0]->slug;
    } else { 
        $category_parent = $cat[0]->slug;
    }*/
    $cat = get_the_category($posts->ID);
    $cat_parent = $cat[0]->category_parent;
    if($cat_parent) { $cat_parent = get_category($cat_parent);
        $category_parent = $cat_parent->slug;
        $category_parent_name = $cat_parent->name;
        $category_parent_id = $cat_parent->term_id;
        $category_child = $cat[0]->slug;
        $category_child_id = $cat[0]->term_id; 
    } else { 
        $category_parent = $cat[0]->slug;
        $category_parent_name = $cat[0]->name;
        $category_parent_id = $cat[0]->term_id;
    }

    if ( 'publish' === $old_status OR 'future' === $old_status OR 'pending' === $old_status) {
        //global $post;
        $post_feature = get_post_meta( $posts->ID, 'post_feature', true ); 
        $konten_premium = get_post_meta( $posts->ID, 'konten_premium', true );
        $post_source = get_post_meta( $posts->ID, 'post_source', true ); 
        $post_other = get_post_meta( $posts->ID, 'sumberlain', true ); //author lain/sumber lain
        $post_summary = get_post_meta( $posts->ID, 'post_summary', true );
        $author = get_post_meta( $posts->ID, 'author_solopos', true );
        $post_url_video = get_post_meta( $posts->ID, 'post_url_video', true );
    } else {
        $post_feature = $_POST['post_feature'];
        $konten_premium = $_POST['konten_premium']; 
        $post_source = $_POST['post_source']; 
        $post_other = $_POST['sumberlain']; //author lain/sumber lain
        $post_summary = $_POST['post_summary'];
        $author = $_POST["rudr_select2_posts"];
        $post_url_video = $_POST['post_url_video'];
    }

    $author_id = $posts->post_author;
    // post author
    //$author = $_POST["rudr_select2_posts"];//author_name($posts->ID);
    $the_author = '';
    $loop = 1;
    //$loop = count($author);
    //$c_author = count($author);
    foreach((array) $author as $authors) {
        $author_name = get_userdata($authors);
        $author_solopos = $author_name->display_name;
        if($loop > 1) {
            $the_author .= '/';
        } else {
            $the_author .= '';
        }
        $loop++;
        $the_author .= $author_solopos;
    }
    if($the_author <> '' AND $post_other <> '') {
        $the_authors = $the_author.'/'.$post_other;
    } elseif($the_author <> '' AND $post_other == '') {
        $the_authors = $the_author;
    } elseif($the_author == '' AND $post_other <> '') {
        $the_authors = $post_other;
    }

    $editor = get_userdata( $author_id );
    $editor_avatar = get_avatar_url( $author_id );
    //$post_summary = $_POST['post_summary']; //get_post_meta( $posts->ID, 'post_summary', true );
    $content = $posts->post_content;
    $content = apply_filters('the_content', $content);
    $formatted_content = str_replace(']]>', ']]>', $content);

    
    $xml->addChild('posts');

    $xml->posts->addChild('created', $posts->post_date);
    $xml->posts->addChild('modified', $posts->post_modified);
    
    $xml->posts->addChild('properties');
    $xml->posts->properties->addChild('post_id', $posts->ID);
    $xml->posts->properties->addChild('category');
    $parent = $xml->posts->properties->category->addChild('parent', $category_parent);
    $parent->addAttribute('id', $category_parent_id);
    $child = $xml->posts->properties->category->addChild('child', $category_child);
    $child->addAttribute('id', $category_child_id);
    $xml->posts->properties->addChild('post_feature', $post_feature);
    $xml->posts->properties->addChild('konten_premium', $konten_premium);
    $xml->posts->properties->addChild('post_source', $post_source);
    $xml->posts->properties->addChild('post_url_video', $post_url_video);
    //$xml->posts->properties->addChild('other_author', $post_other);
    
    $xml->posts->addChild('authors');
    $xml->posts->authors->addChild('author', htmlentities($the_authors));
    $xml->posts->authors->addChild('editor', $editor->display_name);
    $xml->posts->authors->addChild('editor_url', $editor->user_login);
    $xml->posts->authors->addChild('avatar', $editor_avatar);
    
    $xml->posts->addChild('content');
    //$xml->posts->content->addChild('title', htmlspecialchars(htmlentities($posts->post_title), ENT_QUOTES, 'utf-8'));
    $xml->posts->content->addChild('title', htmlspecialchars($posts->post_title, ENT_QUOTES, 'utf-8'));
    $xml->posts->content->addChild('summary', $post_summary);
    $xml->posts->content->addChild('slug', $posts->post_name);
    $xml->posts->content->addChild('content', autop($formatted_content));

    $xml->posts->addChild('images');
    $xml->posts->images->addChild('content', post_image_xml('medium', 800, 800, $posts->ID));
    $xml->posts->images->addChild('caption', post_image_caption_xml($posts->ID));

    $xml->posts->addChild('tags');
    //detect tags
    $postTags = get_the_tags($posts->ID);
    if(!empty($postTags)) {
        foreach( $postTags as $postTags ) {
            $tags = $xml->posts->tags->addChild('tag', $postTags->name);
            $tags->addAttribute('id', $postTags->term_id);
        }
    }

    //$xml->posts->addChild('prev_post');
    //$xml->posts->prev_post->addChild('id', $prev_post->ID);
    //$xml->posts->prev_post->addChild('author', $prev_user->display_name);
    //$xml->posts->prev_post->addChild('date', $prev_post->post_date);
    //$xml->posts->prev_post->addChild('title', $prev_post->post_title);
    //$xml->posts->prev_post->addChild('slug', $prev_post->post_name);
    
    //$xml->posts->addChild('next_post');
    //$xml->posts->next_post->addChild('id', $next_post->ID);
    //$xml->posts->next_post->addChild('author', $next_post->display_name);
    //$xml->posts->next_post->addChild('date', $next_post->post_date);
    //$xml->posts->next_post->addChild('title', $next_post->post_title);
    //$xml->posts->next_post->addChild('slug', $next_post->post_name);
 
    $file = ''.$path_to_file.$post->ID.'.xml';
    $open = fopen($file, 'w+') or die ("File cannot be opened.");
    fwrite($open, $xml->asXML());
    fclose($open); 
    //}
    
    //generate xml breaking by category name (slug)
    //generate_xml_breaking_category($category_parent_name);
}

add_action('transition_post_status', 'generate_post_xml', 10, 3 );
//add_action( 'save_post', 'generate_post_xml', 10, 3 );

add_action('publish_post', 'generate_xml_breaking_category');
add_action( 'auto-draft_to_publish', 'generate_xml_breaking_category');
add_action( 'publish_future_post', 'generate_xml_breaking_category');

add_action('publish_post', 'generate_xml_breaking_all');
add_action( 'auto-draft_to_publish', 'generate_xml_breaking_all');
add_action( 'publish_future_post', 'generate_xml_breaking_all');

add_action('publish_post', 'generate_xml_breaking_headline');
add_action( 'auto-draft_to_publish', 'generate_xml_breaking_headline');
add_action( 'publish_future_post', 'generate_xml_breaking_headline');

add_action('publish_post', 'generate_xml_breaking_editor_choice');
add_action( 'auto-draft_to_publish', 'generate_xml_breaking_editor_choice');
add_action( 'publish_future_post', 'generate_xml_breaking_editor_choice');

add_action('publish_post', 'generate_xml_breaking_premium');
add_action( 'auto-draft_to_publish', 'generate_xml_breaking_premium');
add_action( 'publish_future_post', 'generate_xml_breaking_premium');

add_action('publish_post', 'generate_xml_linetoday');
add_action( 'auto-draft_to_publish', 'generate_xml_linetoday');
add_action( 'publish_future_post', 'generate_xml_linetoday' );

function generate_xml_breaking_category($post_id) {

    $path_to_file_breaking = $_SERVER["DOCUMENT_ROOT"] . '/xml-data/breaking'; //Make sure $path_to_file is the full path, something like /home/user/public_html/

        // deteksi kanal
        $cat = get_the_category($post_id);
        $cat_parent = $cat[0]->category_parent;
        if($cat_parent) { $cat_parent = get_category($cat_parent);
            $category_parent = $cat_parent->slug;
            //$category_parent_id = $cat_parent->term_id;
            $category_parent_name = $cat_parent->name;
            //$category_child = $cat[0]->slug;
            //$category_child_id = $cat[0]->term_id; 
        } else { 
            $category_parent = $cat[0]->slug;
            $category_parent_name = $cat[0]->name;
            //$category_parent_id = $cat[0]->term_id;
        }

    //$categories = get_terms( 'category', array('include' => array( 664047, 94686, 5342, 83, 152076, 76212, 15783, 8467, 636, 4175, 655246, 664048, 664049, 11091, 15420 )));

    //foreach($categories as $category) {

    $xmlbreaking = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><soloposcom/>');

    $xmlbreaking->addChild('updated', date('Y-m-d H:i:s'));

    $args = array(
        'posts_per_page'   => 100,
        'category_name'    => $category_parent,
        'orderby'          => 'date',
        'order'            => 'DESC',
        'post_type'        => 'post',
        'post_status'      => 'publish',
        'no_found_rows' => true
    );
    $query = get_posts( $args );

    foreach($query as $data) {

        // deteksi kanal
        $cat = get_the_category($data->ID);
        $cat_parent = $cat[0]->category_parent;
        if($cat_parent) { $cat_parent = get_category($cat_parent);
            $category_parent = $cat_parent->slug;
            $category_parent_id = $cat_parent->term_id;
            $category_child = $cat[0]->slug;
            $category_child_id = $cat[0]->term_id;
        } else { 
            $category_parent = $cat[0]->slug;
            $category_parent_id = $cat[0]->term_id;
        }

        $post_other = get_post_meta( $data->ID, 'sumberlain', true ); //author lain/sumber lain
        $post_feature = get_post_meta( $data->ID, 'post_feature', true ); // feature post (headline, editor_choice)
        $post_summary = get_post_meta( $data->ID, 'post_summary', true );
        // post author
        //$author = array();
        $author = get_post_meta( $data->ID, 'author_solopos', true ); //$_POST["rudr_select2_posts"];//author_name($posts->ID);
        $the_author = '';
        $loop = 1;
        //if (is_array($author) || is_object($author))
        //{
            //$loop = count($author);
            //$cauthor = count($author);
            foreach((array) $author as $authors) {
                $author_name = get_userdata($authors);
                $author_solopos = $author_name->display_name;
                if($loop > 1) {
                    $the_author .= '/';
                } else {
                    $the_author .= '';
                }
                $loop++;
                $the_author .= $author_solopos;
            }
        //} else {

        //}

        if($the_author <> '' AND $post_other <> '') {
            $the_authors = $the_author.'/'.$post_other;
        } elseif($the_author <> '' AND $post_other == '') {
            $the_authors = $the_author;
        } elseif($the_author == '' AND $post_other <> '') {
            $the_authors = $post_other;
        }

        $content = explode('</p>', wpautop($data->post_content));
        $the_content = strip_tags($content[0], '<strong><em><b>');

        //get the image post
        $img_date = get_the_date( 'Y/m/d', $data->ID );
        $img_name = get_post_meta( $data->ID, 'post_image_thumb', true );  
        $url_img_bisnis = 'https://img.solopos.com/thumb/posts/'.$img_date.'/'.$data->ID.'/'.$img_name.'?w=200&h=200';
        //image from solopos library
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($data->ID), 'medium' );
        $url_img_solopos = $thumb['0'];
        if($thumb['0'] == '') {
            if(empty($img_name)) {
                $url = 'https://www.solopos.com/elements/themes/new2019/img/no-thumb.jpg';
            } else {
                $url = $url_img_bisnis;
            }
        } else {
            $url = $url_img_solopos;
        }

        $caption = get_post_meta( $data->ID, 'post_image_caption', true );
        if($caption == '') {
            $img_caption = get_the_post_thumbnail_caption( $data->ID );
        } else {
            $img_caption = $caption;
        }

    $posts = $xmlbreaking->addChild('post');
    
    $posts->addChild('id', $data->ID);
    $posts->addChild('date', $data->post_date);
    $posts->addChild('modified', $data->post_modified);
    $posts->addChild('title', htmlspecialchars($data->post_title, ENT_QUOTES, 'utf-8'));
    //$posts->addChild('summary', htmlspecialchars(htmlentities($post_summary), ENT_QUOTES, 'utf-8'));
    $posts->addChild('summary', $post_summary);
    $posts->addChild('slug', $data->post_name);
    $posts->addChild('feature', $post_feature);
    
    $posts->addChild('images');
    $posts->images->addChild('thumbnail', $url);
    $posts->images->addChild('caption', $img_caption);
    
    $category = $posts->addChild('category', $category_parent);
    $category->addAttribute('id', $category_parent_id);
    $subcategory = $posts->addChild('subcategory', $category_child);
    $subcategory->addAttribute('id', $category_child_id);
    $posts->addChild('author', htmlentities($the_authors));
    }

    $breaking = ''.$path_to_file_breaking.'/breaking-'.$category_parent.'.xml';
    $open_breaking = fopen($breaking, 'w+') or die ("File cannot be opened.");
    fwrite($open_breaking, $xmlbreaking->asXML());
    fclose($open_breaking);

    //}
}

function generate_xml_breaking_all() {

    $path_to_file_breaking = $_SERVER["DOCUMENT_ROOT"] . '/xml-data/breaking'; //Make sure $path_to_file is the full path, something like /home/user/public_html/

    $xmlbreaking = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><soloposcom/>');

    $xmlbreaking->addChild('updated', date('Y-m-d H:i:s'));

    $args = array(
        'posts_per_page'   => 50,
        'orderby'          => 'date',
        'order'            => 'DESC',
        'post_type'        => 'post',
        'post_status'      => 'publish',
        'no_found_rows' => true
    );
    $query = get_posts( $args );

    foreach($query as $data) {

        // deteksi kanal
        $cat = get_the_category($data->ID);
        $cat_parent = $cat[0]->category_parent;
        if($cat_parent) { $cat_parent = get_category($cat_parent);
            $category_parent = $cat_parent->slug;
            $category_parent_id = $cat_parent->term_id;
            $category_child = $cat[0]->slug;
            $category_child_id = $cat[0]->term_id;
        } else { 
            $category_parent = $cat[0]->slug;
            $category_parent_id = $cat[0]->term_id;
        }

        $post_other = get_post_meta( $data->ID, 'sumberlain', true ); //author lain/sumber lain
        $post_feature = get_post_meta( $data->ID, 'post_feature', true ); // feature post (headline, editor_choice)
        $post_summary = get_post_meta( $data->ID, 'post_summary', true );
        // post author
        //$author = array();
        $author = get_post_meta( $data->ID, 'author_solopos', true ); //$_POST["rudr_select2_posts"];//author_name($posts->ID);
        $the_author = '';
        $loop = 1;
        //if (is_array($author) || is_object($author))
        //{
            //$loop = count($author);
            //$cauthor = count($author);
            foreach((array) $author as $authors) {
                $author_name = get_userdata($authors);
                $author_solopos = $author_name->display_name;
                if($loop > 1) {
                    $the_author .= '/';
                } else {
                    $the_author .= '';
                }
                $loop++;
                $the_author .= $author_solopos;
            }
        //} else {

        //}

        if($the_author <> '' AND $post_other <> '') {
            $the_authors = $the_author.'/'.$post_other;
        } elseif($the_author <> '' AND $post_other == '') {
            $the_authors = $the_author;
        } elseif($the_author == '' AND $post_other <> '') {
            $the_authors = $post_other;
        }

        $content = explode('</p>', wpautop($data->post_content));
        $the_content = strip_tags($content[0], '<strong><em><b>');

        //get the image post
        $img_date = get_the_date( 'Y/m/d', $data->ID );
        $img_name = get_post_meta( $data->ID, 'post_image_thumb', true );  
        $url_img_bisnis = 'https://img.solopos.com/thumb/posts/'.$img_date.'/'.$data->ID.'/'.$img_name.'?w=200&h=200';
        //image from solopos library
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($data->ID), 'medium' );
        $url_img_solopos = $thumb['0'];
        if($thumb['0'] == '') {
            if(empty($img_name)) {
                $url = 'https://www.solopos.com/elements/themes/new2019/img/no-thumb.jpg';
            } else {
                $url = $url_img_bisnis;
            }
        } else {
            $url = $url_img_solopos;
        }

        $caption = get_post_meta( $data->ID, 'post_image_caption', true );
        if($caption == '') {
            $img_caption = get_the_post_thumbnail_caption( $data->ID );
        } else {
            $img_caption = $caption;
        }

    $posts = $xmlbreaking->addChild('post');
    
    $posts->addChild('id', $data->ID);
    $posts->addChild('date', $data->post_date);
    $posts->addChild('modified', $data->post_modified);
    $posts->addChild('title', htmlspecialchars($data->post_title, ENT_QUOTES, 'utf-8'));
    //$posts->addChild('summary', htmlspecialchars(htmlentities($the_content), ENT_QUOTES, 'utf-8'));
    $posts->addChild('summary', $post_summary);
    $posts->addChild('slug', $data->post_name);
    $posts->addChild('feature', $post_feature);
    
    $posts->addChild('images');
    $posts->images->addChild('thumbnail', $url);
    $posts->images->addChild('caption', $img_caption);
    
    $category = $posts->addChild('category', $category_parent);
    $category->addAttribute('id', $category_parent_id);
    $subcategory = $posts->addChild('subcategory', $category_child);
    $subcategory->addAttribute('id', $category_child_id);
    $posts->addChild('author', htmlentities($the_authors));
    }

    $breaking = ''.$path_to_file_breaking.'/breaking-all.xml';
    $open_breaking = fopen($breaking, 'w+') or die ("File cannot be opened.");
    fwrite($open_breaking, $xmlbreaking->asXML());
    fclose($open_breaking);

    //}
}

function generate_xml_breaking_headline() {

    $path_to_file_breaking = $_SERVER["DOCUMENT_ROOT"] . '/xml-data/breaking'; //Make sure $path_to_file is the full path, something like /home/user/public_html/

    $xmlbreaking = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><soloposcom/>');

    $xmlbreaking->addChild('updated', date('Y-m-d H:i:s'));

    $args = array('meta_key' => 'post_feature',
        'meta_value' => 'headline',
        'posts_per_page'   => 100,
        'orderby'          => 'date',
        'order'            => 'DESC',
        'post_type'        => 'post',
        'post_status'      => 'publish',
        'no_found_rows' => true
    );
    $query = get_posts( $args );

    foreach($query as $data) {

        // deteksi kanal
        $cat = get_the_category($data->ID);
        $cat_parent = $cat[0]->category_parent;
        if($cat_parent) { $cat_parent = get_category($cat_parent);
            $category_parent = $cat_parent->slug;
            $category_parent_id = $cat_parent->term_id;
            $category_child = $cat[0]->slug;
            $category_child_id = $cat[0]->term_id;
        } else { 
            $category_parent = $cat[0]->slug;
            $category_parent_id = $cat[0]->term_id;
        }

        $post_other = get_post_meta( $data->ID, 'sumberlain', true ); //author lain/sumber lain
        // post author
        //$author = array();
        $author = get_post_meta( $data->ID, 'author_solopos', true ); //$_POST["rudr_select2_posts"];//author_name($posts->ID);
        $the_author = '';
        $loop = 1;
        //if (is_array($author) || is_object($author))
        //{
            //$loop = count($author);
            //$cauthor = count($author);
            foreach((array) $author as $authors) {
                $author_name = get_userdata($authors);
                $author_solopos = $author_name->display_name;
                if($loop > 1) {
                    $the_author .= '/';
                } else {
                    $the_author .= '';
                }
                $loop++;
                $the_author .= $author_solopos;
            }
        //} else {

        //}

        if($the_author <> '' AND $post_other <> '') {
            $the_authors = $the_author.'/'.$post_other;
        } elseif($the_author <> '' AND $post_other == '') {
            $the_authors = $the_author;
        } elseif($the_author == '' AND $post_other <> '') {
            $the_authors = $post_other;
        }

        $content = explode('</p>', wpautop($data->post_content));
        $the_content = strip_tags($content[0], '<strong><em><b>');
        $post_summary = get_post_meta( $data->ID, 'post_summary', true );

        //get the image post
        $img_date = get_the_date( 'Y/m/d', $data->ID );
        $img_name = get_post_meta( $data->ID, 'post_image_thumb', true );  
        $url_img_bisnis = 'https://img.solopos.com/thumb/posts/'.$img_date.'/'.$data->ID.'/'.$img_name.'?w=200&h=200';
        //image from solopos library
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($data->ID), 'medium' );
        $url_img_solopos = $thumb['0'];
        if($thumb['0'] == '') {
            if(empty($img_name)) {
                $url = 'https://www.solopos.com/elements/themes/new2019/img/no-thumb.jpg';
            } else {
                $url = $url_img_bisnis;
            }
        } else {
            $url = $url_img_solopos;
        }

        $caption = get_post_meta( $data->ID, 'post_image_caption', true );
        if($caption == '') {
            $img_caption = get_the_post_thumbnail_caption( $data->ID );
        } else {
            $img_caption = $caption;
        }

    $posts = $xmlbreaking->addChild('post');
    
    $posts->addChild('id', $data->ID);
    $posts->addChild('date', $data->post_date);
    $posts->addChild('modified', $data->post_modified);
    $posts->addChild('title', htmlspecialchars($data->post_title, ENT_QUOTES, 'utf-8'));
    $posts->addChild('summary', htmlspecialchars(htmlentities($post_summary), ENT_QUOTES, 'utf-8'));
    $posts->addChild('slug', $data->post_name);
    
    $posts->addChild('images');
    $posts->images->addChild('thumbnail', $url);
    $posts->images->addChild('caption', $img_caption);
    
    $category = $posts->addChild('category', $category_parent);
    $category->addAttribute('id', $category_parent_id);
    $subcategory = $posts->addChild('subcategory', $category_child);
    $subcategory->addAttribute('id', $category_child_id);
    $posts->addChild('author', htmlentities($the_authors));
    }

    $breaking = ''.$path_to_file_breaking.'/breaking-headline.xml';
    $open_breaking = fopen($breaking, 'w+') or die ("File cannot be opened.");
    fwrite($open_breaking, $xmlbreaking->asXML());
    fclose($open_breaking);

    //}
}

function generate_xml_breaking_editor_choice() {

    $path_to_file_breaking = $_SERVER["DOCUMENT_ROOT"] . '/xml-data/breaking'; //Make sure $path_to_file is the full path, something like /home/user/public_html/

    $xmlbreaking = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><soloposcom/>');

    $xmlbreaking->addChild('updated', date('Y-m-d H:i:s'));

    $args = array('meta_key' => 'post_feature',
        'meta_value' => 'editor_choice',
        'posts_per_page'   => 100,
        'orderby'          => 'date',
        'order'            => 'DESC',
        'post_type'        => 'post',
        'post_status'      => 'publish',
        'no_found_rows' => true
    );
    $query = get_posts( $args );

    foreach($query as $data) {

        // deteksi kanal
        $cat = get_the_category($data->ID);
        $cat_parent = $cat[0]->category_parent;
        if($cat_parent) { $cat_parent = get_category($cat_parent);
            $category_parent = $cat_parent->slug;
            $category_parent_id = $cat_parent->term_id;
            $category_child = $cat[0]->slug;
            $category_child_id = $cat[0]->term_id;
        } else { 
            $category_parent = $cat[0]->slug;
            $category_parent_id = $cat[0]->term_id;
        }

        $post_other = get_post_meta( $data->ID, 'sumberlain', true ); //author lain/sumber lain
        // post author
        //$author = array();
        $author = get_post_meta( $data->ID, 'author_solopos', true ); //$_POST["rudr_select2_posts"];//author_name($posts->ID);
        $the_author = '';
        $loop = 1;
        //if (is_array($author) || is_object($author))
        //{
            //$loop = count($author);
            //$cauthor = count($author);
            foreach((array) $author as $authors) {
                $author_name = get_userdata($authors);
                $author_solopos = $author_name->display_name;
                if($loop > 1) {
                    $the_author .= '/';
                } else {
                    $the_author .= '';
                }
                $loop++;
                $the_author .= $author_solopos;
            }
        //} else {

        //}

        if($the_author <> '' AND $post_other <> '') {
            $the_authors = $the_author.'/'.$post_other;
        } elseif($the_author <> '' AND $post_other == '') {
            $the_authors = $the_author;
        } elseif($the_author == '' AND $post_other <> '') {
            $the_authors = $post_other;
        }

        $content = explode('</p>', wpautop($data->post_content));
        $the_content = strip_tags($content[0], '<strong><em><b>');
        $post_summary = get_post_meta( $data->ID, 'post_summary', true );

        //get the image post
        $img_date = get_the_date( 'Y/m/d', $data->ID );
        $img_name = get_post_meta( $data->ID, 'post_image_thumb', true );  
        $url_img_bisnis = 'https://img.solopos.com/thumb/posts/'.$img_date.'/'.$data->ID.'/'.$img_name.'?w=200&h=200';
        //image from solopos library
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($data->ID), 'thumbnail' );
        $url_img_solopos = $thumb['0'];
        if($thumb['0'] == '') {
            if(empty($img_name)) {
                $url = 'https://www.solopos.com/elements/themes/new2019/img/no-thumb.jpg';
            } else {
                $url = $url_img_bisnis;
            }
        } else {
            $url = $url_img_solopos;
        }

        $caption = get_post_meta( $data->ID, 'post_image_caption', true );
        if($caption == '') {
            $img_caption = get_the_post_thumbnail_caption( $data->ID );
        } else {
            $img_caption = $caption;
        }

    $posts = $xmlbreaking->addChild('post');
    
    $posts->addChild('id', $data->ID);
    $posts->addChild('date', $data->post_date);
    $posts->addChild('modified', $data->post_modified);
    $posts->addChild('title', htmlspecialchars($data->post_title, ENT_QUOTES, 'utf-8'));
    $posts->addChild('summary', htmlspecialchars(htmlentities($post_summary), ENT_QUOTES, 'utf-8'));
    $posts->addChild('slug', $data->post_name);
    
    $posts->addChild('images');
    $posts->images->addChild('thumbnail', $url);
    $posts->images->addChild('caption', $img_caption);
    
    $category = $posts->addChild('category', $category_parent);
    $category->addAttribute('id', $category_parent_id);
    $subcategory = $posts->addChild('subcategory', $category_child);
    $subcategory->addAttribute('id', $category_child_id);
    $posts->addChild('author', htmlentities($the_authors));
    }

    $breaking = ''.$path_to_file_breaking.'/breaking-editor-choice.xml';
    $open_breaking = fopen($breaking, 'w+') or die ("File cannot be opened.");
    fwrite($open_breaking, $xmlbreaking->asXML());
    fclose($open_breaking);

    //}
}

function generate_xml_breaking_premium() {

    $path_to_file_breaking = $_SERVER["DOCUMENT_ROOT"] . '/xml-data/breaking'; //Make sure $path_to_file is the full path, something like /home/user/public_html/

    $xmlbreaking = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><soloposcom/>');

    $xmlbreaking->addChild('updated', date('Y-m-d H:i:s'));

    $args = array('meta_key' => 'konten_premium',
        'meta_value' => 'premium',
        'posts_per_page'   => 50,
        'orderby'          => 'date',
        'order'            => 'DESC',
        'post_type'        => 'post',
        'post_status'      => 'publish',
        'no_found_rows' => true
    );
    $query = get_posts( $args );

    foreach($query as $data) {

        // deteksi kanal
        $cat = get_the_category($data->ID);
        $cat_parent = $cat[0]->category_parent;
        if($cat_parent) { $cat_parent = get_category($cat_parent);
            $category_parent = $cat_parent->slug;
            $category_parent_id = $cat_parent->term_id;
            $category_child = $cat[0]->slug;
            $category_child_id = $cat[0]->term_id;
        } else { 
            $category_parent = $cat[0]->slug;
            $category_parent_id = $cat[0]->term_id;
        }

        $post_other = get_post_meta( $data->ID, 'sumberlain', true ); //author lain/sumber lain
        // post author
        //$author = array();
        $author = get_post_meta( $data->ID, 'author_solopos', true ); //$_POST["rudr_select2_posts"];//author_name($posts->ID);
        $the_author = '';
        $loop = 1;
        //if (is_array($author) || is_object($author))
        //{
            //$loop = count($author);
            //$cauthor = count($author);
            foreach((array) $author as $authors) {
                $author_name = get_userdata($authors);
                $author_solopos = $author_name->display_name;
                if($loop > 1) {
                    $the_author .= '/';
                } else {
                    $the_author .= '';
                }
                $loop++;
                $the_author .= $author_solopos;
            }
        //} else {

        //}

        if($the_author <> '' AND $post_other <> '') {
            $the_authors = $the_author.'/'.$post_other;
        } elseif($the_author <> '' AND $post_other == '') {
            $the_authors = $the_author;
        } elseif($the_author == '' AND $post_other <> '') {
            $the_authors = $post_other;
        }

        $content = explode('</p>', wpautop($data->post_content));
        $the_content = strip_tags($content[0], '<strong><em><b>');
        $post_summary = get_post_meta( $data->ID, 'post_summary', true );

        //get the image post
        $img_date = get_the_date( 'Y/m/d', $data->ID );
        $img_name = get_post_meta( $data->ID, 'post_image_thumb', true );  
        $url_img_bisnis = 'https://img.solopos.com/thumb/posts/'.$img_date.'/'.$data->ID.'/'.$img_name.'?w=200&h=200';
        //image from solopos library
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($data->ID), 'medium' );
        $url_img_solopos = $thumb['0'];
        if($thumb['0'] == '') {
            if(empty($img_name)) {
                $url = 'https://www.solopos.com/elements/themes/new2019/img/no-thumb.jpg';
            } else {
                $url = $url_img_bisnis;
            }
        } else {
            $url = $url_img_solopos;
        }

        $caption = get_post_meta( $data->ID, 'post_image_caption', true );
        if($caption == '') {
            $img_caption = get_the_post_thumbnail_caption( $data->ID );
        } else {
            $img_caption = $caption;
        }

    $posts = $xmlbreaking->addChild('post');
    
    $posts->addChild('id', $data->ID);
    $posts->addChild('date', $data->post_date);
    $posts->addChild('modified', $data->post_modified);
    $posts->addChild('title', htmlspecialchars($data->post_title, ENT_QUOTES, 'utf-8'));
    $posts->addChild('summary', htmlspecialchars(htmlentities($post_summary), ENT_QUOTES, 'utf-8'));
    $posts->addChild('slug', $data->post_name);
    
    $posts->addChild('images');
    $posts->images->addChild('thumbnail', $url);
    $posts->images->addChild('caption', $img_caption);
    
    $category = $posts->addChild('category', $category_parent);
    $category->addAttribute('id', $category_parent_id);
    $subcategory = $posts->addChild('subcategory', $category_child);
    $subcategory->addAttribute('id', $category_child_id);
    $posts->addChild('author', htmlentities($the_authors));
    }

    $breaking = ''.$path_to_file_breaking.'/breaking-premium.xml';
    $open_breaking = fopen($breaking, 'w+') or die ("File cannot be opened.");
    fwrite($open_breaking, $xmlbreaking->asXML());
    fclose($open_breaking);

    //}
}

//add_action('transition_post_status', 'generate_xml_breaking_category', 10, 3 );

add_filter( 'cron_schedules', 'generate_xml_schedules' );
function generate_xml_schedules( $schedules ) {
    $schedules['every_30_minutes'] = array(
            'interval'  => 1800,
            'display'   => __( 'Every 30 Minutes', 'textdomain' )
    );
    return $schedules;
}

add_action( 'wp', 'xml_popular' );
add_action( 'xml_popular_hourly', 'generate_xml_popular' );

function xml_popular() {
    if ( !wp_next_scheduled( 'xml_popular_hourly' ) ) {
        wp_schedule_event( time(), 'every_30_minutes', 'xml_popular_hourly' );
    }
}

/* cronjob file xml linetoday
add_filter( 'cron_schedules', 'generate_xml_schedules2' );
function generate_xml_schedules( $schedules ) {
    $schedules['every_10_minutes'] = array(
            'interval'  => 600,
            'display'   => __( 'Every 30 Minutes', 'textdomain' )
    );
    return $schedules;
}

add_action( 'wp', 'xml_line_today' );
add_action( 'xml_linetoday', 'generate_xml_linetoday' );

function xml_line_today() {
    if ( !wp_next_scheduled( 'xml_linetoday' ) ) {
        wp_schedule_event( time(), 'every_10_minutes', 'xml_linetoday' );
    }
}
*/

//function update_symbiocards() {
//    wp_mail( get_bloginfo( 'admin_email' ), '[symbiostock_network_update] Network Symbiocards Updated - ' . current_time( 'mysql' ), 'Network Symbiocards Updated - ' . current_time( 'mysql' ) );
//}

function generate_xml_popular() {
    $path_to_file_breaking = $_SERVER["DOCUMENT_ROOT"] . '/xml-data/breaking'; //Make sure $path_to_file is the full path, something like /home/user/public_html/

    $xmlbreaking = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><soloposcom/>');

    $xmlbreaking->addChild('updated', date('Y-m-d H:i:s'));

    $_args = array(
        'showposts' => 30,
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

    $query = get_posts( $_args );

    foreach($query as $data) {

        // deteksi kanal
        $cat = get_the_category($data->ID);
        $cat_parent = $cat[0]->category_parent;
        if($cat_parent) { $cat_parent = get_category($cat_parent);
            $category_parent = $cat_parent->slug;
            $category_parent_id = $cat_parent->term_id;
            $category_child = $cat[0]->slug;
            $category_child_id = $cat[0]->term_id;
        } else { 
            $category_parent = $cat[0]->slug;
            $category_parent_id = $cat[0]->term_id;
        }

        $post_other = get_post_meta( $data->ID, 'sumberlain', true ); //author lain/sumber lain
        // post author
        //$author = array();
        $author = get_post_meta( $data->ID, 'author_solopos', true ); //$_POST["rudr_select2_posts"];//author_name($posts->ID);
        $the_author = '';
        $loop = 1;
        //if (is_array($author) || is_object($author))
        //{
            //$loop = count($author);
            //$cauthor = count($author);
            foreach((array) $author as $authors) {
                $author_name = get_userdata($authors);
                $author_solopos = $author_name->display_name;
                if($loop > 1) {
                    $the_author .= '/';
                } else {
                    $the_author .= '';
                }
                $loop++;
                $the_author .= $author_solopos;
            }
        //} else {

        //}

        if($the_author <> '' AND $post_other <> '') {
            $the_authors = $the_author.'/'.$post_other;
        } elseif($the_author <> '' AND $post_other == '') {
            $the_authors = $the_author;
        } elseif($the_author == '' AND $post_other <> '') {
            $the_authors = $post_other;
        }

        $content = explode('</p>', wpautop($data->post_content));
        $the_content = strip_tags($content[0], '<strong><em><b>');
        $post_summary = get_post_meta( $data->ID, 'post_summary', true );

        //get the image post
        $img_date = get_the_date( 'Y/m/d', $data->ID );
        $img_name = get_post_meta( $data->ID, 'post_image_thumb', true );  
        $url_img_bisnis = 'https://img.solopos.com/thumb/posts/'.$img_date.'/'.$data->ID.'/'.$img_name.'?w=200&h=200';
        //image from solopos library
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($data->ID), 'thumbnail' );
        $url_img_solopos = $thumb['0'];
        if($thumb['0'] == '') {
            if(empty($img_name)) {
                $url = 'https://www.solopos.com/elements/themes/new2019/img/no-thumb.jpg';
            } else {
                $url = $url_img_bisnis;
            }
        } else {
            $url = $url_img_solopos;
        }

        $caption = get_post_meta( $data->ID, 'post_image_caption', true );
        if($caption == '') {
            $img_caption = get_the_post_thumbnail_caption( $data->ID );
        } else {
            $img_caption = $caption;
        }

    $posts = $xmlbreaking->addChild('post');
    
    $posts->addChild('id', $data->ID);
    $posts->addChild('date', $data->post_date);
    $posts->addChild('modified', $data->post_modified);
    $posts->addChild('title', htmlspecialchars($data->post_title, ENT_QUOTES, 'utf-8'));
    $posts->addChild('summary', htmlspecialchars(htmlentities($post_summary), ENT_QUOTES, 'utf-8'));
    $posts->addChild('slug', $data->post_name);
    
    $posts->addChild('images');
    $posts->images->addChild('thumbnail', $url);
    $posts->images->addChild('caption', $img_caption);
    
    $category = $posts->addChild('category', $category_parent);
    $category->addAttribute('id', $category_parent_id);
    $subcategory = $posts->addChild('subcategory', $category_child);
    $subcategory->addAttribute('id', $category_child_id);
    $posts->addChild('author', htmlentities($the_authors));
    }

    $popular = ''.$path_to_file_breaking.'/breaking-popular.xml';
    $open_popular = fopen($popular, 'w+') or die ("File cannot be opened.");
    fwrite($open_popular, $xmlbreaking->asXML());
    fclose($open_popular);
}

function generate_xml_linetoday() {
    $path_to_file_breaking = $_SERVER["DOCUMENT_ROOT"] . '/xml-data/'; //Make sure $path_to_file is the full path, something like /home/user/public_html/

    $xmlbreaking = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><articles/>');
    $xmldate = strtotime(date('YmdHis')) * 1000;
    $xmlbreaking->addChild('UUID', $xmldate);
    $xmlbreaking->addChild('time', $xmldate);

    $_args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        //'meta_key' => 'post_views_count',
        //'orderby' => 'meta_value_num',  
        'orderby' => 'date',      
        'showposts' => 20,
        'order' => 'DESC',
        'no_found_rows' => true, // untuk fast loading
        //'date_query' => array(
            //array(
                //'after' => '-24 hours',
                //'day' => date('d'),
                //'monthnum' => date('m'),
                //'year' => date('Y'),
            //),
        //),        
    );

    $query = get_posts( $_args );

    foreach($query as $data) {
        $poststext = get_post( $data->ID );

        // deteksi kanal
        $cat = get_the_category($data->ID);
        $cat_parent = $cat[0]->category_parent;
        if($cat_parent) { $cat_parent = get_category($cat_parent);
            $category_parent = $cat_parent->slug;
            $category_parent_id = $cat_parent->term_id;
            $category_child = $cat[0]->slug;
            $category_child_id = $cat[0]->term_id;
        } else { 
            $category_parent = $cat[0]->slug;
            $category_parent_id = $cat[0]->term_id;
        }

        $post_other = get_post_meta( $data->ID, 'sumberlain', true ); //author lain/sumber lain
        // post author
        //$author = array();
        $author = get_post_meta( $data->ID, 'author_solopos', true ); //$_POST["rudr_select2_posts"];//author_name($posts->ID);
        $the_author = '';
        $loop = 1;
        //if (is_array($author) || is_object($author))
        //{
            //$loop = count($author);
            //$cauthor = count($author);
            foreach((array) $author as $authors) {
                $author_name = get_userdata($authors);
                $author_solopos = $author_name->display_name;
                if($loop > 1) {
                    $the_author .= '/';
                } else {
                    $the_author .= '';
                }
                $loop++;
                $the_author .= $author_solopos;
            }
        //} else {

        //}

        if($the_author <> '' AND $post_other <> '') {
            $the_authors = $the_author.'/'.$post_other;
        } elseif($the_author <> '' AND $post_other == '') {
            $the_authors = $the_author;
        } elseif($the_author == '' AND $post_other <> '') {
            $the_authors = $post_other;
        }

        $content = explode('</p>', wpautop($data->post_content));
        $the_content = strip_tags($content[0], '<strong><em><b>');

        //get the image post
        $img_date = get_the_date( 'Y-m-j H:i:s', $data->ID );
        $img_name = get_post_meta( $data->ID, 'post_image_thumb', true );  
        $url_img_bisnis = 'https://img.solopos.com/thumb/posts/'.$img_date.'/'.$data->ID.'/'.$img_name.'?w=200&h=200';
        //image from solopos library
        $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id($data->ID), 'large' );
        $urlsrc = $imgsrc['0'];
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($data->ID), 'thumbnail' );
        $url_img_solopos = $thumb['0'];
        if($thumb['0'] == '') {
            if(empty($img_name)) {
                $url = 'https://www.solopos.com/elements/themes/new2019/img/no-thumb.jpg';
            } else {
                $url = $url_img_bisnis;
            }
        } else {
            $url = $url_img_solopos;
        }

        $caption = get_post_meta( $data->ID, 'post_image_caption', true );
        if($caption == '') {
            $img_caption = get_the_post_thumbnail_caption( $data->ID );
        } else {
            $img_caption = $caption;
        }

        $posttext = $poststext->post_content;
        $posttext = apply_filters('the_content', $posttext);
        $formatted_content = str_replace(']]>', ']]>', $posttext);

        $posts = $xmlbreaking->addChild('article');
        $dateunix = strtotime($data->post_date) * 1000;

        $posts->addChild('ID', $data->ID);
        $posts->addChild('nativeCountry', 'ID');
        $posts->addChild('language', 'id');

        $posts->addChild('publishCountries');
        $posts->publishCountries->addChild('country', 'ID');

        $posts->addChild('startYmdtUnix', $dateunix);
        $posts->addChild('endYmdtUnix', '32503593600000');
        $posts->addChild('title', htmlspecialchars($data->post_title, ENT_QUOTES, 'utf-8'));
        $posts->addChild('category', $category_parent);
        $posts->addChild('subcategory', $category_child);
        $posts->addChild('publishTimeUnix', $dateunix);
        $posts->addChild('publishTime', $data->post_date);
        $posts->addChild('updateTime', $data->post_modified);

        //$posts->addChild('slug', $data->post_name);
        
        $posts->addChild('contents');
        $posts->contents->addChild('images');
        $posts->contents->images->addChild('title', htmlspecialchars($data->post_title, ENT_QUOTES, 'utf-8'));
        $posts->contents->images->addChild('description', $img_caption);
        $posts->contents->images->addChild('url', $urlsrc);
        $posts->contents->images->addChild('thumbnail', $url);
        $posts->contents->addChild('text');
        $posts->contents->text->addChild('content', autop($formatted_content));

        $posts->addChild('recommendArticles');
        
        $rekomendasi = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'meta_key' => 'post_feature',
            'meta_value' => 'editor_choice',
            'orderby' => 'date',        
            'showposts' => 1,
            'order' => 'RAND',
            'no_found_rows' => true, // untuk fast loading
        );

        $query_rekomendasi = get_posts( $rekomendasi );

        foreach($query_rekomendasi as $rekomen) {
            //get the image post
            $img_date = get_the_date( 'Y-m-j H:i:s', $rekomen->ID );
            $img_name = get_post_meta( $rekomen->ID, 'post_image_thumb', true );  
            $url_img_bisnis = 'https://img.solopos.com/thumb/posts/'.$img_date.'/'.$rekomen->ID.'/'.$img_name.'?w=200&h=200';
            //image from solopos library
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($rekomen->ID), 'thumbnail' );
            $url_img_solopos = $thumb['0'];
            if($thumb['0'] == '') {
                if(empty($img_name)) {
                    $url = 'https://www.solopos.com/elements/themes/new2019/img/no-thumb.jpg';
                } else {
                    $url = $url_img_bisnis;
                }
            } else {
                $url = $url_img_solopos;
            }    

            $rekomendasi = $posts->recommendArticles->addChild('article');
            $rekomendasi->addChild('title',htmlspecialchars($rekomen->post_title, ENT_QUOTES, 'utf-8'));
            $rekomendasi->addChild('url', 'https://solopos.com/'.$rekomen->post_name.'-'.$rekomen->ID.'');
            $rekomendasi->addChild('thumbnail',$url);

        }

        $posts->addChild('publisher');
        $posts->publisher->addChild('name', 'Solopos.com');
        $posts->publisher->addChild('url', 'https://solopos.com');
        $posts->publisher->addChild('logo','https://solopos.com/assets/tema/logo-solopos.png');

        $posts->addChild('author', htmlentities($the_authors));
        $posts->addChild('sourceUrl', get_permalink($post->ID));

        $posts->addChild('copyright');
        $posts->copyright->addChild('name', 'Solopos.com');
        $posts->copyright->addChild('url', 'https://solopos.com');
        $posts->copyright->addChild('logo', 'https://solopos.com/assets/tema/logo-solopos.png');

    }

    $popular = ''.$path_to_file_breaking.'/linetoday.xml';
    $open_popular = fopen($popular, 'w+') or die ("File cannot be opened.");
    fwrite($open_popular, $xmlbreaking->asXML());
    fclose($open_popular);
}