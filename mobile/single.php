<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset="<?php bloginfo('charset' );?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link  rel="preconnect"  href="//<?php echo $_SERVER['HTTP_HOST'];?>"/>
<link  rel="preconnect"  href="//img.zfn9.com/">
<title><?php echo trim(wp_title('',0)); ?><?php if (get_query_var('page')) { echo '('; echo get_query_var('page'); echo ')';}?> | <?php echo get_the_category()[0]->name;?> | <?php bloginfo('name'); ?></title>
<meta name="keywords" content="<?php $post_tags = get_the_tags();
 if ( $post_tags ) {
    foreach( $post_tags as $tag ) {
    echo $tag->name . '头像, ';
    }
}
echo trim(wp_title('',0));if (get_query_var('page')) { echo '('; echo get_query_var('page'); echo ')';} ?>" />
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="applicable-device" content="mobile" />
<link rel="canonical" href="<?php echo home_url($_SERVER['REQUEST_URI']);?>" />
<link rel="amphtml" href="<?php echo str_replace("m.zfn9.com",'amp.zfn9.com',home_url($_SERVER['REQUEST_URI']));?>" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" href="/wp-content/themes/mobile/style.css" />
<link rel="stylesheet" type="text/css" href="/wp-content/themes/mobile/slide.css" />
<script src="/wp-content/themes/mobile/zfn9.js"></script>
</head>
<body>
<div class="g-head ">
<div class="m-hd m-index-head f-flex">
<a href="http://m.zfn9.com/fenlei.html" class="u-index-user" title="头像分类导航"></a>
<a href="http://m.zfn9.com/" class="u-index-logo" title="好看头像网"></a>
<a href="https://cse.google.com/cse?cx=90800a68a144797db" class="u-index-search"></a>
</div>
</div>
<?php $cate= get_the_category($post->ID)[0]->name;$catelink=  esc_html(get_category_link(get_the_category($post->ID)[0]));?>
<?php
while ( have_posts() ) : the_post();
if (get_query_var('page')) { $page=intval(get_query_var('page'));} else {$page=1;}
?>
<div class="mianbaoxue cl"><a href="//m.zfn9.com/">好看头像</a> &gt; <a href="<?php echo  $catelink;?>"><?php echo $cate;?></a>&gt; <?php echo the_title();?></div>
<div class="txtList">
<h1 class="txh1"><?php echo the_title();echo "($page/$numpages)";?></h1>
<div class="info"><span>时间：2021-06-24 08:19</span><span>栏目：<a href="<?php echo $catelink;?>"><?php echo $cate;?></a></span><span>来源：<a href="https://m.zfn9.com/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></span></div>
<div class="tp_content"><p>提示：长按头像图片可放大或保存到本地</p><div class="swipebox"><img alt="<?php echo the_title();?>" src="//img.zfn9.com/<?php echo get_the_content();?>"></div><p>以上头像由好看头像整理发布，<a href="<?php echo  $catelink;?>"><?php echo $cate;?></a>频道提供丰富头像图片挑选下载。</p></div>
</div>
<div class="tagsL">标签：<a href="<?php echo $catelink;?>"><?php echo $cate;?></a></div>
<?php liangmt_wplink(); ?>
<?php endwhile;?>
<div class="m-txt-recomend f-mr-top">
<div class="u-rec-head f-flex">
<div class="u-rec-title">相关内容</div>
</div>
</div>
<?php relate_post();?>
<div class="m-txt-recomend f-mr-top">
<div class="u-rec-head f-flex">
<div class="u-rec-title">猜你喜欢</div>
</div>
</div>
<?php like_post();?>
<?php  tag_cloud();?>

<?php get_footer();?>
