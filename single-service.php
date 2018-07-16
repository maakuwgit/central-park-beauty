<?php while (have_posts()) : the_post(); ?>
  <?php

    $main_text = get_field('main_text');
    $sub_text = get_field('sub_text');
    $image_one = get_field('image_one');
    $background_image = get_field('background_image');

    ll_include_component(
      'hero-2',
      array(
        'main_text' => $main_text,
        'sub_text' => $sub_text,
        'image_one' => $image_one,
        'background_image' => $background_image
      )
    );
  ?>
  <?php get_template_part('templates/contents/content', 'single'); ?>
<?php endwhile; ?>
