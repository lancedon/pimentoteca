<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brood
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85724937-1', 'auto');
  ga('send', 'pageview');

</script>
<link rel="shortcut icon" href="/blog/wp-content/themes/pimentoteca/img/favicon.ico" type="image/x-icon" >
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
        <div class="container">
            <div class="col-sm-12">
                <div class="site-branding">
                    <a href="/"><img src="<?php bloginfo('stylesheet_directory');?>/img/pimentoteca-logo.png" class="img-responsive" /></a>
                    <button data-target="#site-navigation" data-toggle="collapse" class="navbar-toggle" type="button" aria-expanded="true">
                        <span class="sr-only"><?php _e( 'Toggle navigation', 'brood' ); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div><!-- .site-branding -->
                <nav id="site-navigation" class="main-navigation navbar-collapse collapse" role="navigation">
                    <?php
                    	$args = array(
                    		'theme_location'	=>	'primary',
                    		'menu_class'		=>	'nav navbar-nav',
                    		'container'         => 	'',
                    		'fallback_cb'       => 	'wp_bootstrap_navwalker::fallback',
                    		'walker'			=>	new wp_bootstrap_navwalker()
                    		);
                    	wp_nav_menu( $args );
                    ?>
                </nav><!-- #site-navigation -->
            </div>
						<?php if ( get_header_image() ) : ?>
							<div class="site-header_background">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" >
										<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
									</a>
							</div>
						<?php endif; // End header image check. ?>
        </div>
    </header><!-- #masthead -->
	<div id="content" class="site-content">
		<div class="container">
			<div class="col-md-8">
