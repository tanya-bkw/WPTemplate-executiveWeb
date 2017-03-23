<html>
  <head>
    <title><?= the_title()?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!-- Ladowanie js/css -->
    <?php wp_head() ?>
  </head>

  <body>
    <!-- Ladowanie szablonu naglowka -->
    <?php get_header(); ?>
    <!-- Renderowanie wpisu -->
    <?php the_post(); ?>
    <h1> Blog - Moja urojona rzeczywistosc </h1>
      <section>
        <h1><?php echo the_title(); ?></h1>
        <div><?= the_content(); ?></div>
      </section>

  </body>

  <?php get_footer(); ?>
  <!-- Ladowanie js/css -->
  <?php wp_footer() ?>
</html>
