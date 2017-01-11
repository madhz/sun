<!DOCTYPE html>
<html>
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Free</title> 
	<meta name="description" content="FreeME:Bootstrap Theme"/>
	<meta name="keywords" content="Template, Theme, web, html5, css3" />
	<meta name="author" content="Łukasz Holeczek from creativeLabs"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap-responsive.css" rel="stylesheet">
      <link href="<?php bloginfo( 'template_directory' ); ?>/css/icons.css" rel="stylesheet">
            <link href="<?php bloginfo( 'template_directory' ); ?>/css/icons-color.css" rel="stylesheet">
                        <link href="<?php bloginfo( 'template_directory' ); ?>/css/social-icons.css" rel="stylesheet">
                        <link href="<?php bloginfo( 'template_directory' ); ?>/css/hover.css" rel="stylesheet">
	<link href="<?php bloginfo( 'template_directory' ); ?>/style.css" rel="stylesheet">
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery-1.8.2.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/flexslider.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/carousel.js"></script>
<script def src="<?php bloginfo( 'template_directory' ); ?>/js/custom.js"></script>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.gmap.min.js"></script>
	<!-- end: CSS -->
 <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
			<!--start: Header -->
			<header>
			
				<!--start: Row -->
				<div class="row">
					
					<!--start: Logo -->
					<div class="logo span4">
						<?php if ( get_theme_mod( 'freeme_logo' ) ) : ?>
    <div class='site-logo'>
        <a href='<?php the_permalink(); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'freeme_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
    </div>
<?php else : ?>
    <hgroup>
        <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
        <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
    </hgroup>
<?php endif; ?>
					</div>
					<!--end: Logo -->
					
					<!--start: Social Links -->
					<div class="span8">
						<div id="social-links">
							<ul class="social-small-grid">

							<?php if ( !function_exists('dynamic_sidebar') ||
 !dynamic_sidebar('follow') ) : ?>
<?php endif; ?>	
							</ul>
						</div>
					</div>
					<!--end: Social Links -->
					
				</div>
				<!--end: Row -->
						
			</header>
</html>