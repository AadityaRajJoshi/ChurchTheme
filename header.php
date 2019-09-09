<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo('charset');  ?>">
	<meta name="viewport" content="width-device-width">
	<title> <?php bloginfo('name'); ?> </title>
	<?php wp_head(); ?>
</head>

<body>
	
	<div id=page >
	<nav class="fh5co-nav" role="navigation">
		<div class="container-wrap">
			<div class="hd-search">
				 
						<?php get_search_form(); ?>
					</div>
			<div class="top-menu">
				<div class="row">

					<div class="text-center">
						<div id="fh5co-logo"><a href="#">Church</a></div>
					</div>
					<div class="col-md-12 col-md-offset-0 text-center menu-1">
						<ul>
							<?php
								$args = array(
									'theme_location' => 'primary'
								);
							 ?>
							<?php wp_nav_menu( $args ); ?>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
		

