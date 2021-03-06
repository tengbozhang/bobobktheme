<!DOCTYPE html>
<html amp >
<head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title><?php echo trim(wp_title('',0)); ?><?php if (get_query_var('page')) { echo '('; echo get_query_var('page'); echo ')';}?> | <?php echo get_the_category()[0]->name;?> | <?php bloginfo('name'); ?></title>
    <meta name="keywords" content="<?php $post_tags = get_the_tags();
 if ( $post_tags ) {
    foreach( $post_tags as $tag ) {
    echo $tag->name . '头像, ';
    }
}
echo trim(wp_title('',0));if (get_query_var('page')) { echo '('; echo get_query_var('page'); echo ')';} ?>" />
    <meta name="description" content="好看头像(<?Php echo $_SERVER['HTTP_HOST'];?>)收录海量微信头像,QQ头像,微博头像,论坛头像,情侣头像,男生头像,女生头像,风景头像,动漫头像,头像图片,是你找寻个性独特头像的最佳场所" />
    <meta name="viewport" content="width=device-width">
    <link rel="canonical" href="<?php echo str_replace("amp.zfn9.com",'m.zfn9.com',home_url($_SERVER['REQUEST_URI']));?>" />
    <link rel="shortcut icon" href="https://amp.zfn9.com/favicon.ico" />
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>
    <amp-auto-ads type="adsense" data-ad-client="ca-pub-3250570391881200"></amp-auto-ads>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
<amp-analytics type="gtag" data-credentials="include">
<script type="application/json">
{
  "vars" : {
    "gtag_id": "G-W7YLGFDPYN",
    "config" : {
      "G-W7YLGFDPYN": { "groups": "default" }
    }
  }
}
</script>
</amp-analytics>
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Article",
  "name" : "<?php echo trim(wp_title('',0));  ?>",
  "publisher": {
    "@type": "Organization",
    "name": "好看头像",
    "logo": {
      "@type": "ImageObject",
      "url": "https://amp.zfn9.com/logo.png"
    }
  },
  "author": "zfn9",
  "headline": "<?php echo trim(wp_title('',0));?>",
  "datePublished" : "<?php echo get_the_date();?>",
  "image" : "https://img.zfn9.com/<?php echo get_the_content();?>",
  "articleSection" : "<?php if (get_query_var('page')) {echo get_query_var('page');}else{echo '1';} ?>",
  "articleBody" : "https://img.zfn9.com/<?php echo get_the_content();?>",
  "url" : "<?php echo home_url($_SERVER['REQUEST_URI']);?>"
}
</script>
<?php   include 'mycss.php';?>
</head>
<body>
<div class="g-head ">
<div class="m-hd m-index-head f-flex">
<a href="https://amp.zfn9.com/fenlei.html" class="u-index-user" title="头像分类导航"></a>
<a href="https://amp.zfn9.com/" class="u-index-logo" title="好看头像网"></a>
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
<div class="info"><span>时间：<?php echo get_the_date();?></span><span>浏览：<?php if(function_exists('the_views')) { the_views(); }else{echo '1';} ?></span><span>栏目：<a href="<?php echo $catelink;?>"><?php echo $cate;?></a></span><span>来源：<a href="https://m.zfn9.com/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></span></div>
<div class="tp_content"><p>提示：打开头像图片保存到本地</p><div class="swipebox"><amp-img width='320' height='320' layout="responsive"   alt="<?php echo the_title();?>" src="//img.zfn9.com/<?php echo get_the_content();?>"></div><p>以上头像由好看头像整理发布，<a href="<?php echo  $catelink;?>"><?php echo $cate;?></a>频道提供丰富头像图片挑选下载。</p></div>
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
