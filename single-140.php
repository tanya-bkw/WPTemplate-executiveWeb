<?php get_header() ?>
  <!-- Renderowanie wpisu -->
<?php the_post(); ?>
  <h1> Shukaj </h1>
    <section>
      <h1><?php echo the_title(); ?></h1>
      <div><?= the_content(); ?></div>
    </section>
<?php get_footer() ?>
