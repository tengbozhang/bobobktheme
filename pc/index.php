<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="initial-scale=1.0,user-scalable=no"> 
<link  rel="preconnect"  href="//<?php echo $_SERVER['HTTP_HOST'];?>"/>
<link  rel="preconnect"  href="//img.zfn9.com/">
<title><?php bloginfo('name'); ?> </title>
<meta name="keywords" content="好看头像,微信头像,QQ头像,微博头像,论坛头像,头像图片" />
<meta name="description" content="好看头像(<?Php echo $_SERVER['HTTP_HOST'];?>)收录海量微信头像,QQ头像,微博头像,论坛头像,情侣头像,男生头像,女生头像,风景头像,动漫头像,头像图片,是你找寻个性独特头像的最佳场所" />
<link rel="canonical" href="<?php  echo str_replace("www.zfn9.com",'m.zfn9.com',home_url($_SERVER['REQUEST_URI']));?>" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<script data-ad-client="ca-pub-3250570391881200" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<link rel="stylesheet"  href="//stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet"  href="/style.css">
</head>
<body>
<header>
<nav class="navbar navbar-light main-nav">
  <div class="container">
           <a class="navbar-brand" href="/"><img src="/logo.png" alt="好看头像"><span class="ml-1">好看头像</span>
</a></div>
  <div class="container top-navbar">

            <ul class="nav navbar navbar-expand navbar-dark flex-column flex-md-row ">
<li class="nav-item"><a href="https://m.zfn9.com/" title="好看头像">网站首页</a></li>
<li class="nav-item"><a href="/qinglv/" title="情侣头像">情侣头像</a></li>
<li class="nav-item"><a href="/nvsheng/" title="女生头像">女生头像</a></li>
<li class="nav-item"><a href="/nansheng/" title="男生头像">男生头像</a></li>
<li class="nav-item"><a href="/fengjing/" title="风景头像">风景头像</a></li>
<li class="nav-item"><a href="/dongman/" title="动漫头像">动漫头像</a></li>
    </ul>
  </div>
 </nav>
</header>
<main role="main">
        <div class="container content">
                <div class="row mt-4" >

<?php while ( have_posts()):the_post(); 
?>
                             <div class="col-sm-6 col-md-3 item  text-center"><a href="<?php the_permalink();?>"><img class="img-thumbnail" src="https://img.zfn9.com/<?php
$content=get_the_content();$content=explode("|",$content)[0];
echo $content; ?>" alt="<?php the_title();?>"><?php the_title();?></a></div>  
<?php endwhile;wp_reset_query();?>
                   </div>


       </div>
</main>
<div class="pagination justify-content-center">
<nav class="navbar  navbar-expand-sm bg-light navbar-light">

<?php
         $numpages= $wp_query->max_num_pages;
         $baseurl = get_site_url()."/page/";
         $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $output = '<ul class="pagination align-self-center justify-content-center">';
        if ($page>1){$output .= '<li class="page-item"><a class="page-link" href="'.$baseurl.(string)($page-1).'/"'.">上一页</a></li>";}
        $output .= '<li class="page-item"><a class="page-link current" href="'.$baseurl.$page.'/" >'.$page."</a></li>";
        if($page!=$numpages){$output .= '<li class="page-item"><a class="page-link" href="'.$baseurl.(string)($page+1).'/">'.(string)($page+1)."</a></li>";}
        if($page<=$numpages-2){$output .= '<li class="page-item"><a class="page-link" href="'.$baseurl.(string)($page+2).'/">'.(string)($page+2)."</a></li>";}
        if($page<=$numpages-3){$output .= '<li class="page-item"><a class="page-link" href="'.$baseurl.(string)($page+3).'/">'.(string)($page+3)."</a></li>";}
        if($page<=$numpages-4){$output .= '<li class="page-item"><a class="page-link" href="'.$baseurl.(string)($page+4).'/">'.(string)($page+4)."</a></li>";}

        if($page!=$numpages){$output .='<li class="page-item"><a class="page-link" href="'.$baseurl.(string)($page+1).'/"'.">下一页</a></li>";}
        $output .= '<li class="page-item"><span>共['.$numpages."]页</span></li>";
        $output .= "</ul>";
        echo $output;
        wp_reset_query();
?>

</nav>
</div>
<?php
rvm2_tag_cloud();
get_footer();
?>


