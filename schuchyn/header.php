<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/global.js"></script>
<script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>
<script type="text/javascript">
  VK.init({apiId: 4856803, onlyWidgets: true});
</script>
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/icon.png" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/icon.png"/>
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/be_BY/sdk.js#xfbml=1&version=v2.3";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div class="bg-top-menu">
        <div class="block block-top-menu">
            <div class="menu">
                <a href="<?php echo get_site_url(); ?>"<?php if(is_home()){ echo ' class="active"'; } ?>>Галоўная</a>
                <a href="<?php echo get_site_url(); ?>/news/"<?php if(is_category(1)){ echo ' class="active"'; } ?>>Навіны</a>
                <a href="<?php echo get_site_url(); ?>/news/history/"<?php if(is_category(3)){ echo ' class="active"'; } ?>>Гісторыя</a>
                <a href="<?php echo get_site_url(); ?>/news/culture/"<?php if(is_category(5)){ echo ' class="active"'; } ?>>Культура</a>
                <a href="<?php echo get_site_url(); ?>/news/sport/"<?php if(is_category(4)){ echo ' class="active"'; } ?>>Спорт</a>
				<a href="<?php echo get_site_url(); ?>/news/crime/"<?php if(is_category(26)){ echo ' class="active"'; } ?>>Крымінал</a>
                <a href="<?php echo get_site_url(); ?>/contact/"<?php if(is_page(13)){ echo ' class="active"'; } ?>>Кантакт</a>
            </div>
            <div class="social-networks">
                <a href="https://vk.com/schuchyn_eu" target="_blank" class="vk"></a>
                <a href="https://www.facebook.com/schuchyn.eu" target="_blank" class="fb"></a>
                <a href="https://twitter.com/schuchyneu" target="_blank" class="tw"></a>
                <a href="http://ok.ru/profile/578521760263" target="_blank" class="ok"></a>
            </div>
        </div>
    </div>
    <div class="bg-logo">
        <div class="block block-logo">
            <div class="logo"><a href="<?php get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a></div>
            <div class="search">
                <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <input class="input-search" maxlength="250" alt="Поиск" type="text" placeholder="Пошук па сайту..." value="<?php echo get_search_query(); ?>" name="s" id="s" />
                    <input class="input-search-button" type="image" src="<?php echo get_template_directory_uri(); ?>/images/icon-search.PNG"/>
                </form>
            </div>
        </div>
    </div>