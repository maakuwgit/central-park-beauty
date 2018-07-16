<?php
/*
Template Name: About
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php

    $main_text = get_field('main_text');
    $sub_text = get_field('sub_text');
    $image_one = get_field('image_one');
    $image_two = get_field('image_two');
    $image_three = get_field('image_three');

    ll_include_component(
      'hero-1',
      array(
        'main_text' => $main_text,
        'sub_text' => $sub_text,
        'image_one' => $image_one,
        'image_two' => $image_two,
        'image_three' => $image_three
      )
    );
  ?>

  <?php get_template_part('templates/partials/flex', 'default'); ?>

<?php endwhile; ?>


