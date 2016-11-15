<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <header id="header" class="home-header blog-background banner-mask lazy no-cover" style="background-image:url(<?php echo get_template_directory_uri()?>/build/img/yasuko.jpg);">
        <div class="nav-header container">
            <div class="nav-header-container">
                <a class="back-home" href="/">Home</a>
            </div>
        </div>
        <div class="header-wrap">
            <div class="container">
            <?php if (is_singular()) : ?>
                <div class="header-wrap">
                    <div class="post-info-container">
                        <h2 class="post-page-title "><?php the_title();?></h2>
                        <time class="post-page-time"><?php echo get_the_date();?></time>
                        <span class="post-page-author"><?php the_author();?></span>
                        <span class="post-page-tags"><?php echo get_the_tag_list('','','');?></span>
                    </div>
                </div>
            <?php else : ?>
            <div class="home-info-container">
                <a href="/">
                    <h2><?php echo get_bloginfo('site_name')?></h2>
                </a>
                <h4><?php echo get_bloginfo('description');?></h4>
            </div>
            </div>
        </div>
        <?php endif;?>
    </header>
    <div id="main" class="content homepage">