
    <?php get_header() ?>
    <pagination>
    <?php wp_pagenavi(); wp_page()?>
     </pagination>
     
    <section class="main-wrap">
      <section class "container">
      <?php
      if(have_posts()):
        while(have_posts()): the_post(); ?>
            <article class="post-<?=the_ID()?>">
            <?= the_post_thumbnail(); ?>
            <h2><?= the_title();?></h2>
            <author><?= the_author() ?></author>
            <date><?= the_date();?></date>
            <time><?= the_time();?></time>
            <description><?= the_content('wiecej'); ?></description>
            <tags><?= the_tags('Tagi: '.' '.'!!!')?></tags>
            </article>

      <?php endwhile;
        else: ?>
          <h2> Brak wpisow </h2>
      <?php
        endif; ?>

      </section>
    </section>
    <pagination>
    <?php wp_pagenavi(); wp_page()?>
     </pagination>
    <?php get_footer() ?>
