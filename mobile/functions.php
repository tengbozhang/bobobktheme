<?php
date_default_timezone_set("PRC");
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );

remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );//移除主页链接
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );//删除上下篇文章链接
remove_action( 'wp_head', 'wp_shortlink_wp_head',10, 0 );//删除短链接
  function clear_styles_and_scripts() {
  global $wp_scripts;
  global $wp_styles;
  $styles_to_keep = array("wp-admin", "admin-bar", "dashicons", "open-sans");

  foreach( $wp_styles ->queue as $handle ) :
   if ( in_array($handle, $styles_to_keep) ) continue;
    wp_dequeue_style( $handle );
    wp_deregister_style( $handle );

    endforeach;

  }
   add_action( 'wp_enqueue_scripts', 'clear_styles_and_scripts', 100 );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'feed_links', 2 );//文章和评论feed
remove_action( 'wp_head', 'feed_links_extra', 3 ); //分类等feed
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


/* -------------------------------- */
remove_action( 'admin_print_scripts',	'print_emoji_detection_script');
remove_action( 'admin_print_styles',	'print_emoji_styles');
remove_action( 'wp_head',		'print_emoji_detection_script',	7);
remove_action( 'wp_print_styles',	'print_emoji_styles');
remove_filter( 'the_content_feed',	'wp_staticize_emoji');
remove_filter( 'comment_text_rss',	'wp_staticize_emoji');
remove_filter( 'wp_mail',		'wp_staticize_emoji_for_email');

register_nav_menus(
   array(
      'top-nav' => __( '顶部导航' ),
      'home-nav' => __( '首页导航' ),
      'foot-nav' => __( '底部导航' ),
   )
);
##3 disable ping back
function no_self_ping( &$links ) {
    $home = get_option( 'home' );
    foreach ( $links as $l => $link )
        if ( 0 === strpos( $link, $home ) )
            unset($links[$l]);
}
 
add_action( 'pre_ping', 'no_self_ping' );


### nav bar
function clean_custom_menus() {
	$menu_name = 'top-nav'; // specify custom menu slug
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = ''; #'<nav>' ."\n";
		$menu_list .= "\t\t\t\t\t". '<li class="nav-item"><a class="nav-link" href="/">首页</a></li>' ."\n";
		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
			$url = str_replace("/./","/",$menu_item->url);
			$menu_list .= "\t\t\t\t\t". '<li  class="nav-item"><a class="nav-link" href="'. $url .'">'. $title .'</a></li>' ."\n";
		}
	} else {
	}
	echo $menu_list;
}

### pagination

function liangmt_pagi(){
         global  $numpages,$paged;
         $page=get_query_var('page');
         $baseurl = "//www.zfn9.com/page/";
         $page = (get_query_var('paged')) ? get_query_var('paged') : 1; 
        $output = '<ul class="pagination align-self-center justify-content-center">';
        if ($page>1){$output .= '<li class="page-item"><a href="'.$baseurl.(string)($page-1).'/"'.">上一页</a></li>";}
        $output .= '<li class="page-item"><a href="'.$baseurl.$page.'" class="current">'.$page."</a></li>";        
        if($page!=$numpages){$output .= '<li class="page-item"><a  class="page-link" href="'.$baseurl.(string)($page+1).'/">'.(string)($page+1)."</a></li>";}
        if($page<=$numpages-2){$output .= '<li class="page-item"><a  class="page-link" href="'.$baseurl.(string)($page+2).'/">'.(string)($page+2)."</a></li>";}
        if($page<=$numpages-3){$output .= '<li class="page-item"><a  class="page-link"  href="'.$baseurl.(string)($page+3).'/">'.(string)($page+3)."</a></li>";}
        if($page<=$numpages-4){$output .= '<li class="page-item"><a  class="page-link" href="'.$baseurl.(string)($page+4).'/">'.(string)($page+4)."</a></li>";}
        
        if($page!=$numpages){$output .='<li class="page-item"><a   class="page-link" href="'.$baseurl.(string)($page+1).'/"'.">下一页</a></li>";}
        $output .= "<li class='page-item'><span>共[".$numpages."]页</span></li>";
        $output .= "</ul>";
        $output .= (string)($paged)."page:".(string)$page."numpages:".(string)$numpages;
        echo $output;

}


#### liangmt wplink
function liangmt_wplink($range=4){
         global $page, $numpages, $multipage, $more, $pagenow;

 if ( $multipage ) {
     $output = '<div class="f-mr-top"><ul class="m-page">';
            if ( $numpages >=$range ) {
     if ($page>=2){$output .=  '<li><a target="_blank" href="'.get_the_permalink().(string)($page-1).'/"'.'>上一篇</a> </li>';}
     else{$output .=  '<li><a target="_blank" href="'.get_the_permalink().'/"'.'>上一篇</a> </li>';}
     if($page!=$numpages){$output .= '<li><a target="_blank" href="'.get_the_permalink().(string)($page+1).'/"'.">下一篇</a> </li>";}
     else{$output .= '<li><a target="_blank" href="'.get_the_permalink().(string)($page).'/"'.">下一篇</a> </li>";}
     $output .= "</ul></div>";
     echo $output;
      }   
   }


 else{
         wp_link_pages(array('before' => '<ul class="pagination align-self-center justify-content-center">', 'after' => '', 'next_or_number' => 'next', 'previouspagelink' => '上一页', 'nextpagelink' => ""));
         wp_link_pages(array('before' => '', 'after' => '', 'next_or_number' => 'number', 'link_before' =>'<span>', 'link_after'=>'</span>'));
         wp_link_pages(array('before' => '', 'after' => '</ul>', 'next_or_number' => 'next', 'previouspagelink' => '', 'nextpagelink' => "下一页"));


}}

#### disable archive

/*Register template redirect action callback*/
add_action('template_redirect','makes_remove_wp_archives');
/* Remove archive*/
function makes_remove_wp_archives(){
       //if we are on category or tag or date or auther archive
       if(is_date() || is_author() ){
       global $wp_query;
       $wp_query->set_404();
       }
}

#########category pagination error

function my_pagination_rewrite() {
    add_rewrite_rule('(\w{1,})/page/?([0-9]{1,})/?$', 'index.php?category_name=$matches[1]&paged=$matches[2]', 'top');
}
add_action('init', 'my_pagination_rewrite');

#### remove p tag from description

remove_filter('term_description','wpautop');
##########post in same category
function  relate_post() {
        global $post;
        $cats = wp_get_post_categories($post->ID);
        if ($cats) {
                echo '<div class="f-pd-2"><ul class="g-piclist-container">';
                $args = array(
                          'category__in' => array( $cats[0] ),
                          'post__not_in' => array( $post->ID ),
                          'showposts' => 8,
                          'ignore_sticky_posts' => 1
                  );
          query_posts($args);
                  if (have_posts()) {
                        while (have_posts()) {
                          the_post();
                         echo '<li><div class="m-pic-list"><div class="m-img-wrap"><a href="';
                         echo get_the_permalink().'" target="_blank"><img src="//img.zfn9.com/'.get_the_content().'" alt="'.get_the_title().'" title="'.get_the_title().'"></a></div>';
                         echo '<div class="u-img-title f-elips"><a href="'.get_the_permalink().'">'.get_the_title().'</a></div></div></li>';
                         echo '';
                        }
                  }
        echo "</ul></div>";
          wp_reset_query();
        }
}
####### post in same tag like
function  like_post() {
        global $post;
        $cats = wp_get_post_categories($post->ID);
        if ($cats) {
                echo '<div class="f-pd-2"><ul class="g-piclist-container">';
                $args = array(
                           'orderby' => 'rand',
                          'category__in' => array( $cats[0] ),
                          'post__not_in' => array( $post->ID ),
                          'showposts' => 8,
                          'ignore_sticky_posts' => 1
                  );
          query_posts($args);
                  if (have_posts()) {
                        while (have_posts()) {
                          the_post(); 
                          echo '<li><div class="m-pic-list"><div class="m-img-wrap"><a href="';
                         echo get_the_permalink().'" target="_blank"><img src="//img.zfn9.com/'.get_the_content().'" alt="'.get_the_title().'" title="'.get_the_title().'"></a></div>';
                         echo '<div class="u-img-title f-elips"><a href="'.get_the_permalink().'">'.get_the_title().'</a></div></div></li>';
                         echo '';
                        }
                  }
        echo "</div></div>";
          wp_reset_query();
        }
}

################ tag cloud 

function  tag_cloud(){
          $output='<div class="megx_t"><div class="ztList cl">';
         
          $tags = get_tags('orderby=count&order=desc&number=48');
          foreach ($tags as $tag) {
              $tag_link = get_tag_link($tag->term_id);  
              $output .= '<a href="'.$tag_link.'">'.$tag->name."头像</a>";
                 }
          $output .="</div></div>";
          echo $output;  
          wp_reset_query();
}

######baidu push
#add_action('save_post', 'tingke_save_post_notify_baidu_zz', 10, 3);
function tingke_save_post_notify_baidu_zz($post_id, $post, $update){
 if($post->post_status != 'publish') return;
 
 $baidu_zz_api_url = 'http://data.zz.baidu.com/urls?site=https://www.zfn9.com&token=l1wZlpbjMAhQhyoC';
 //请到百度站长后台获取你的站点的专属提交链接
 $response = wp_remote_post($baidu_zz_api_url, array(
  'headers' => array('Accept-Encoding'=>'','Content-Type'=>'text/plain'),
  'sslverify' => false,
  'blocking' => false,
  'body' => get_permalink($post_id)
 ));
}

add_theme_support('post-thumbnails');
function get_post_img_url($thumbnail = true)
{
    global $post;
    if (has_post_thumbnail()) {
        $domsxe = simplexml_load_string(get_the_post_thumbnail());
        $thumbnailsrc = $domsxe->attributes()->src;
        return $thumbnailsrc;
    } elseif ($thumbnail) {
        $content = $post->post_content;
        preg_match_all('\d\d/\d\d/.+\.jpg', $content, $strResult, PREG_PATTERN_ORDER);
        $n = count($strResult [1]);
        if ($n > 0) {
            return $strResult [1] [0];
        }
    }
}



?>
