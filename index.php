<?php get_template_part('templates/partials/header', 'page'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php

  ll_include_component(
    'filters',
    array( 'taxonomy' => 'category')
  );

?>

<section class="card-grid__wrapper row start">

  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/contents/content'); ?>
  <?php endwhile; ?>

</section>
<!-- .card-grid -->

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
