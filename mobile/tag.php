<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset="<?php bloginfo('charset' );?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link  rel="preconnect"  href="//<?php echo $_SERVER['HTTP_HOST'];?>"/>
<link  rel="preconnect"  href="//img.zfn9.com/">
<title><?php single_cat_title(); echo '头像';if(get_query_var('paged')){echo '('.get_query_var('paged').')';}?></title>
<meta name="keywords" content="<?php single_cat_title();echo '头像';if(get_query_var('paged')){echo '('.get_query_var('paged').')';}?>" />
<meta name="description" content="<?php echo category_description(); ?> " />
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="applicable-device" content="mobile" />
<link rel="canonical" href="<?php echo get_the_permalink();?>" />

<link rel="shortcut icon" href="https://m.zfn9.com/favicon.ico" />
<link rel="stylesheet" type="text/css" href="https://m.zfn9.com/wp-content/themes/mobile/style.css" />
</head>
<body>
<div class="g-head">
<div class="m-hd m-index-head f-flex">
<a href="http://m.zfn9.com/fenlei.html" class="u-index-user" title="头像分类导航"></a>
<a href="http://m.zfn9.com/" class="u-index-logo" title="好看头像网"></a>
<a href="https://cse.google.com/cse?cx=90800a68a144797db" class="u-index-search"></a>
</div>
</div>
<div class="megx_t">
<div class="ztList cl">
<a href="https://m.zfn9.com/" title="好看头像">网站首页</a>
<a href="/qinglv/" title="情侣头像">情侣头像</a>
<a href="/nvsheng/" title="女生头像">女生头像</a>
<a href="/nansheng/" title="男生头像">男生头像</a>
<a href="/fengjing/" title="风景头像">风景头像</a>
<a href="/dongman/" title="动漫头像">动漫头像</a>
<a href="https://m.zfn9.com/fenlei.html" class="moreup">更多<i></i></a>
</div>
</div>
<script type="text/javascript">
function setTab(name,cursel,n){
	for(i=1;i<=n;i++){
		var menu=document.getElementById(name+i);
		var con=document.getElementById("con_"+name+"_"+i);
		var current="on"+i;
		menu.className=i==cursel?"on":"";
		con.style.display=i==cursel?"block":"none";
	}
}
function showuser(menu,i){
	if(i%2==0){
		for(var j=0;j<menu.length;j++){
			if(j%2==1){
				if(j==i*1+1){menu[j].style.display='';}
				else{menu[j].style.display='none';}
			}else{
				if(j==i){menu[j].style.display='none';}
				else{menu[j].style.display='';}
			}
		}
	}
}
</script>
<div class="showMain">
<ul class="navButton f-flex">
<li class="on" id="tabone1" onClick="setTab('tabone',1,4)">最新头像</li>
<li id="tabone2" onClick="setTab('tabone',2,4)">头像排行</li>
</ul>
<div>
<div class="f-pd-2" id="con_tabone_1">
<ul class="g-piclist-container">

<?php while ( have_posts()):the_post(); 
?>
<li>
<div class="m-pic-list">
<div class="m-img-wrap">
<a href="<?php the_permalink();?>" title="<?php the_title();?>" target="_blank"><img src="https://img.zfn9.com/<?php $content=get_the_content();$content=explode("|",$content)[0];echo $content; ?>" alt="<?php the_title();?>" />
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
         global $wp;$current_url =  home_url( $wp->request );$pos = strpos($current_url , '/page');$pos=substr($current_url,0,$pos);
         $baseurl = $pos."/page/";
         $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $output = '<div class="f-pd-2 f-mr-top"><ul class="m-page">';
        if ($page>1){$output .= '<li ><a href="'.$baseurl.(string)($page-1).'/">上一页</a></li>';}
        else {$output .= '<li><a  href="'.get_the_permalink().'" >上一页</a></li>';}
        if($page!=$numpages){$output .= '<li><a  href="'.$baseurl.(string)($page+1).'/">下一页</a></li>';}
        else{$output .= '<li><a  href="'.get_the_permalink().'" >下一页</a></li>';};

        $output .= "</ul></div>";
        echo $output;
?>

</ul></div>
<div class="f-pd-2 f-hide" id="con_tabone_2" style="display:none">
<ul class="g-piclist-container">

<?php 
                $args = array(
                'orderby' => 'rand',
                          'showposts' => 8,
                          'ignore_sticky_posts' => 1
                  );
          query_posts($args);

while ( have_posts()):the_post();
?>
<li>
<div class="m-pic-list">
<div class="m-img-wrap">
<a href="<?php the_permalink();?>" title="<?php the_title();?>" target="_blank"><img src="https://img.zfn9.com/<?php $content=get_the_content();$content=explode("|",$content)[0];echo $content; ?>" alt="<?php the_title();?>" />
</a>
</div>
<div class="u-img-title f-elips"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
</div>
</li>
<?php endwhile;?>
</ul>
</div>
</div>
<?php  tag_cloud();?>


<?php
get_footer();
?>


