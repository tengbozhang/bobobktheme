<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="initial-scale=1.0,user-scalable=no"> 
<link  rel="preconnect"  href="//<?php echo $_SERVER['HTTP_HOST'];?>"/>
<link  rel="preconnect"  href='//img.zfn9.com' />
<title><?php echo trim(wp_title('',0)); ?><?php if (get_query_var('page')) { echo '('; echo get_query_var('page'); echo ')';}?> | <?php echo get_the_category()[0]->name;?> | <?php bloginfo('name'); ?></title>
<meta name="keywords" content="<?php $post_tags = get_the_tags();
 if ( $post_tags ) {
    foreach( $post_tags as $tag ) {
    echo $tag->name . '头像, '; 
    }
}
echo trim(wp_title('',0));if (get_query_var('page')) { echo '('; echo get_query_var('page'); echo ')';} ?>" />
<meta name="description" content="<?php echo trim(wp_title('',0)); ?><?php if (get_query_var('page')) { echo '('; echo get_query_var('page'); echo ')';}?> | <?php echo get_the_category()[0]->name;?> | <?php bloginfo('name'); ?> " />
<link rel="canonical" href="<?php  echo str_replace("www.zfn9.com",'m.zfn9.com',home_url($_SERVER['REQUEST_URI']));?>" />
<script data-ad-client="ca-pub-3250570391881200" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
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
<?php
while ( have_posts() ) : the_post();
if (get_query_var('page')) { $page=intval(get_query_var('page'));} else {$page=1;}
?>

        <div class="mt-4 container content">
                 <h3 class="text-success text-center"><?php the_title();echo "($page/$numpages)";?></h3>
                <div class="row justify-content-center align-items-center" >

                               <div > <a href="//img.zfn9.com/<?php echo get_the_content();?>"><img class="img-thumbnail" src="//img.zfn9.com/<?php echo get_the_content();?>" alt="<?php the_title();?>" title="<?php the_title();?>"></a></div>
     </div>
<?php  $output='<div class="mt-2 container"><div class="row justify-content-center align-items-center"><p class="">头像类型:</p><ul class="taglist text-center">';

         
          foreach ($post_tags as $tag) {
              $tag_link = get_tag_link($tag->term_id);
              $output .= "<li><a href='{$tag_link}' title='{$tag->name}'>";
              $output .= "<span>{$tag->name}</span></a></li>";
                 }
          $output .="</div>";
          echo $output;?>

                   </div>

</main>
<div class="pagination justify-content-center">
<nav class="navbar  navbar-expand-sm bg-light navbar-light">
<?php
#wp_link_pages();
liangmt_wplink();
#liangmt_pagenavi( $range = 4 );

#wpdx_paging_nav();
endwhile;
?>

</nav>
</div>
<?php
liangmt_relate_post();
liangmt_like_post();
rvm2_tag_cloud();
#cx_xg_post();
get_footer();

?>
