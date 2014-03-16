<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Lesson19</title>
	<?php wp_head(); ?>
</head>

<body>
	<div class="wrapper">
		<div class="header">
			<h1><a href="#"><img src="<?php  echo get_template_directory_uri() . '/images/logo.png'; ?>" alt="logo" /></a><span>managers to managers</span></h1>
			
				<?php wp_nav_menu(array(
				  'container' => false,
				  'theme_location' => 'header_menu' // расположение меню в теме, вывели header_menu
				)); ?>
		</div>
		<div class="nav">
			<h4>Категории</h4>
			<ul>
		                <?php wp_list_categories(array(
		                	'title_li' => ''
		                )); ?> 
			</ul>  	
		</div>
    		<div class="content">
    			<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();
				
					if ( is_single() ) :
						the_title( '<h2>', '</h2>' );
					else :
						the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;
					
					the_content();

				endwhile;

			else :
				// If no content, include the "No posts found" template.
				
			endif;
			?>
    			
    		</div>
    		<div class="footer">
    			<p>&#169; MOC Сайт работает на <a href="#">WordPress</a></p>
    		</div>
	</div>
</body>
</html>
