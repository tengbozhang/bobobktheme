<!DOCTYPE html>
<html amp >
<head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title><?php bloginfo('name'); if(get_query_var('paged')){echo '('.get_query_var('paged').')';} ?> </title>
    <meta name="keywords" content="好看头像,微信头像,QQ头像,微博头像,论坛头像,头像图片" />
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
<?php    require_once("mycss.php");?>
</head>
<body>
<div class="g-head">
<div class="m-hd m-index-head f-flex">
<a href="https://amp.zfn9.com/fenlei.html" class="u-index-user" title="头像分类导航"></a>
<a href="https://amp.zfn9.com/" class="u-index-logo" title="好看头像网"></a>
<a href="https://cse.google.com/cse?cx=90800a68a144797db" class="u-index-search"></a>
</div>
</div>
<div class="megx_t">
<div class="ztList cl">
<a href="https://amp.zfn9.com/" title="好看头像">网站首页</a>
<a href="/qinglv/" title="情侣头像">情侣头像</a>
<a href="/nvsheng/" title="女生头像">女生头像</a>
<a href="/nansheng/" title="男生头像">男生头像</a>
<a href="/fengjing/" title="风景头像">风景头像</a>
<a href="/dongman/" title="动漫头像">动漫头像</a>
</div>
</div>
<div class="showMain">
<ul class="navButton f-flex">
<li class="on" id="tabone1" >最新<?php bloginfo('name');?></li>
</ul>
<div>
<div class="f-pd-2" id="con_tabone_1">
<ul class="g-piclist-container">

<?php while ( have_posts()):the_post(); 
?>
<li>
<div class="m-pic-list">
<div class="m-img-wrap">
<a href="<?php the_permalink();?>" title="<?php the_title();?>" target="_blank"><amp-img width='320' height='320' layout="responsive"  src="https://img.zfn9.com/<?php $content=get_the_content();$content=explode("|",$content)[0];echo $content; ?>" alt="<?php the_title();?>" />
</a>
</div>
<div class="u-img-title f-elips"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
</div>
</li>
<?php endwhile;?>
</ul>

<?php
         #global  $numpages;
         #$page=get_query_var('page');
         $numpages= $wp_query->max_num_pages;
         $baseurl = get_site_url()."/page/";
         $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $output = '<div class="f-pd-2 f-mr-top"><ul class="m-page">';
        if ($page>1){$output .= '<li ><a href="'.$baseurl.(string)($page-1).'/">上一页</a></li>';}
        else {$output .= '<li><a  href="'.$baseurl.$page.'/" >上一页</a></li>';}
        if($page!=$numpages){$output .= '<li><a  href="'.$baseurl.(string)($page+1).'/">下一页</a></li>';}
        else{$output .= '<li><a  href="'.$baseurl.$page.'/" >下一页</a></li>';};

        $output .= "</ul></div>";
        echo $output;
?>

</ul></div>
<?php  tag_cloud();?>


<?php
get_footer();
?>


