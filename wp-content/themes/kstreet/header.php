<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
<!--
                                                                       
   ```  ```        ````   ``````` ``````   ``````` ``````` ```````     
   ```  ``        ``````  ``````` ```````  ``````` ``````` ```````     
   ``` ```        ``  ```   ```   ``  ```  ```     ```       ```       
   ``````        ```        ```   ``   ``  ```     ```       ```       
   `````    ````  ````      ```   ``  ```  ```     ```       ```       
   ``````   ````  ``````    ```   ```````  ``````  ``````    ```       
   ``````           `````   ```   ``````   ``````  ``````    ```       
   ``` ```            ```   ```   ``  ``   ```     ```       ```       
   ```  ``       ```  ```   ```   ``  ```  ```     ```       ```       
   ```  ```      ````````   ```   ``  ```  ``````` ```````   ```       
   ```  ```       ``````    ```   ``   ``  ``````` ```````   ```       
   
--!>		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>K Street Capital | Connecting the social, political, and financial capital of Washington, DC with promising startups.</title>

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png" rel="apple-touch-icon" />
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php if ( is_front_page() ) { ?>
			<meta property="og:title" content="K Street Capital"/>
		<?php } else { ?>
			<meta property="og:title" content="K Street Capital | <?php the_title(); ?>"/>		
		<?php } ?>
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/library/images/fb-share.jpg"/>
		<meta property="og:site_name" content="K Street Capital"/>
		<?php if ( is_single() ) { ?>		
		<meta property="og:description" content="<?php echo wp_strip_all_tags(get_post_field('post_content', $id)); ?>">
		<?php } else { ?>
		<meta property="og:description" content="Connecting the social, political, and financial capital of Washington, DC with promising startups.">		
		<?php } ?>
		<meta name="description" content="Connecting the social, political, and financial capital of Washington, DC with promising startups.">
	
		<?php wp_head(); ?>
		
	</head>

	<body <?php body_class(); ?>>
		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">
				<div id="container">
					<header class="header" role="banner">
							
						 <!-- This navs will be applied to the topbar, above all content 
							  To see additional nav styles, visit the /partials directory -->
						 <?php// get_template_part( 'partials/nav', 'top-offcanvas' ); ?>
								 
						<div class="post-menu">
							<div class="row show-for-large-up">
								<a href="/" class="logo">KStreet</a>
								<?php joints_main_nav(); ?> 
							</div>
							<div class="row show-for-touch show-for-small-only show-for-medium-only hide-for-large-up">
								<div class="small-9 columns"><a href="/" class="mobile-home">KStreet</a></div>
								<div class="small-3 columns">
									<div class="show-mobile-menu">
									    <div class="mobile-menu-icon">
									        <span></span>
									        <span></span>
									        <span></span>
									    </div>
									</div>
								</div>
							</div>
						</div>
						<div class="post-second-menu">
							<div class="row show-for-large-up">
								<a href="/" class="logo">KStreet</a>
								<?php joints_main_nav(); ?> 
							</div>
							<div class="row show-for-touch show-for-small-only show-for-medium-only hide-for-large-up">
								<div class="small-9 columns"><a href="/" class="mobile-home">KStreet</a></div>
								<div class="small-3 columns">
									<div class="show-mobile-menu">
									    <div class="mobile-menu-icon">
									        <span></span>
									        <span></span>
									        <span></span>
									    </div>
									</div>
								</div>
							</div>		
						</div>	
					</header> <!-- end .header -->
