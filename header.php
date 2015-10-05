<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>
	   <?php 
	         if (function_exists('is_tag') && is_tag()) {
                single_tag_title('Quotes tagged as &quot;'); echo '&quot; - '; } 
             elseif (is_archive()) {
                wp_title(''); echo ' Quotes - '; } 
             elseif (is_search()) {
                echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; } 
             elseif (!(is_404()) && (is_single()) || (is_page())) {
				 $category = get_the_category();
                wp_title(''); echo ' - '; echo $category[0]->cat_name . ' | ' ; } 
             elseif (is_404()) {
                echo 'Not Found - ';
             } 
            
             if (is_home()) {
                bloginfo('name'); echo ' - '; bloginfo('description'); } 
             else {
                bloginfo('name');
             } 
             
             if ($paged > 1) {
                echo ' - page '. $paged;
             } 
        ?> 
    </title>
	
    
    
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <!-- LESS -->
    <?php /*
   	//Client-side Implementation that works like a charm
    <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/main.less">
	<script src="<?php bloginfo('template_directory') ?>/js/less-1.3.0.min.js" type="text/javascript"></script>
	
	//PHP Implementation that doesnt work dor some reason
	require 'http://sicquotes.com/wp-content/themes/SICQUOTES01/inc/lessc.inc.php';
	$less = new lessc('http://sicquotes.com/wp-content/themes/SICQUOTES01/css/main.less');
	file_put_contents('http://sicquotes.com/wp-content/themes/SICQUOTES01/css/main.css', $less->parse());
	*/ ?>
    
    <!-- BOOTSRAP STYLES -->
    <link href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap.css" rel="stylesheet">
    
    <link href="<?php bloginfo( 'template_directory' ); ?>/css/main.css" rel="stylesheet">


    <!-- WORDPRESS STYLES -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
	
	<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<link rel="shortcut icon" href="/favicon.ico">
	
	
	<?php wp_head(); ?>

    <!-- FACEBOOK -->
    <meta property="og:title" content="<?php bloginfo('name'); echo ' - '; bloginfo('description'); ?>"/>
    <meta property="og:image" content="http://sicquotes.com/avatar.jpg" />
    <meta property="og:url" content="http://sicquotes.com" />
    <meta property="fb:admins" content="633780028" />
    <meta property="og:description" content="[sic]Quotes is a CHEDONLINE project and is designed and developed with love and curiosity by Charles Lim aka Ched." />











    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/480.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/fluid.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/768.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/992.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/1382.css">
    <![endif]-->
</head>




<body <?php body_class(); ?>>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NKFLNW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKFLNW');</script>
<!-- End Google Tag Manager -->




          
          
<header class="container-fluid">
    <?php /*
	<!-- NAV -->
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container-fluid">
          <h1><a href="/">[<em>sic</em>] Quotes</a></h1>
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    */ ?>
        
    <div id="navigation-collapsed" class="row-fluid">
        <h1 class="span12"><a href="/">[<em>sic</em>] Quotes</a></h1>
        <a id="showhide-menu" class="btn btn-navbar" data-toggle="collapse" data-target=".collapsed-menu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        
        <div class="collapsed-menu">
            <div class="span6">
                <div class="dropdown">
                    <ul id="people-list">
                        <?php wp_list_categories('title_li='); ?>
                    </ul>
                </div>
                <div id="search"><?php get_search_form() ?></div>
            </div>
            
            <div class="span6">
                <a href="/submit" class="btn submit"><i class="icon-share"></i> Submit a quote</a><br>
                <a href="/about" class="btn about"><i class="icon-question-sign"></i> About [sic]Quotes</a>
            </div>
        </div>
    </div><!-- #navigation-collapsed -->
    
    
    
    
    
    
	<div id="navigation">
        <div class="row-fluid">
              <h1 class="span12"><a href="/">[<em>sic</em>] Quotes</a></h1>
    	</div>
        
        <div class="row-fluid">
            <div class="span6">
                <div class="dropdown">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-user"></i> Quoted People <b class="caret"></b></a>
                    <ul id="people-list" class="dropdown-menu">
                        <?php wp_list_categories('title_li='); ?>
                    </ul>
                </div>
                <div id="search"><?php get_search_form() ?></div>
            </div>
            
            <div class="span6">
                <a href="/submit" class="btn submit"><i class="icon-share"></i> Submit a quote</a>
                <a href="/about" class="btn about"><i class="icon-question-sign"></i> About [sic]Quotes</a>
            </div>
        </div>
        
    </div><!-- #navigation -->
</header>









