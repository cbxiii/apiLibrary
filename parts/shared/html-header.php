<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Remove if you're not building a responsive site. (But then why would you do such a thing?) -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
		
		<?php wp_head(); ?> 
		
		<!-- Linked CSS Files -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/cb.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/respond.css">
		<link href='http://fonts.googleapis.com/css?family=Concert+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Merriweather:400,700,300' rel='stylesheet' type='text/css'>
		
		
		
		
	
		
	</head>
	<body <?php body_class(); ?>>

	<div class="overlay-form">
		<div class="overlay-form-inner">
			<h1>Sumbit API</h1>
			
			<form class="over">
				<input type="text" placeholder="The name of the API..." name="Name">
				<input type="text" placeholder="A link to the API..." name="Link">
				<textarea cols="40" id="text" placeholder="Enter a short description of the API..."></textarea>
				<div id="chars">d</div>
				<input type="submit" name="Submit" class="sub">

			</form>
			
		</div><!-- end overlay-form-inner -->
	</div><!-- end overlay-form -->