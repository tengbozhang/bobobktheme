<?php
/***************************************
****************************************/

$keywords='';
$description='';
 if ( is_home() ) { ?>

<title><?php bloginfo('name'); ?> | 性感靓妹，古风靓妹，cosplay靓妹，清纯靓妹</title>
<meta name="keywords" content="<?php echo "靓妹图,liangmt,靓妹,性感靓妹,古风靓妹,cosplay靓妹,清纯靓妹,美女图,美女,妹子  "; ?>" />
<meta name="description" content="<?php echo  "靓妹图(".$_SERVER['HTTP_HOST']."www.zfn9.com)每日分享最新高清靓妹图，美女图，包括性感靓妹、古风靓妹、cosplay靓妹、清纯靓妹等各种靓妹
、美女图片"; ?>" /> 
<?php } if ( is_single() ) { ?>

<title><?php echo trim(wp_title('',0)); ?><?php if (get_query_var('page')) { echo '('; echo get_query_var('page'); echo ')';}?> | <?php bloginfo('name'); ?></title>
<meta name="keywords" content="<?php echo rtrim($keywords,','); ?>" />
<meta name="description" content="<?php echo trim(wp_title('',0)); ?><?php if (get_query_var('page')) { echo '('; echo get_query_var('page'); echo ')';}?> | <?php bloginfo('name'); ?> " />
<?php } if ( is_page() ) { ?>

<title><?php echo trim(wp_title('',0)); ?> | <?php bloginfo('name'); ?></title>
<meta name="keywords" content="<?php echo rtrim($keywords,','); ?>" />
<meta name="description" content="<?php echo trim($description); ?> " />
<?php }if ( is_category() ) { ?>
<title><?php single_cat_title(); ?></title>
<meta name="keywords" content="<?php echo rtrim($keywords,','); ?>" />
<meta name="description" content="<?php echo trim($description); ?> " />

<?php } ?>

