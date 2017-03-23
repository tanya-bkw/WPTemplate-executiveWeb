<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title() ?> </title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>

</head>

<body>
	<?php get_header() ?>
	<pagination>
	<?php wp_pagenavi(); wp_page()?>
	 </pagination>

	<div id="content">

		<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					echo the_title($before, $after, $echo);
					echo the_content();

				endwhile;

			endif;
		?>

	</div><!-- #content -->


<?php get_footer() ?>
<?php wp_footer(); ?>

<pagination>
<?php wp_pagenavi(); wp_page()?>
 </pagination>

</body>
</html>
