<?php
/*
Template Name: Products
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php

    $side_text = get_field('side_text');
    $image_one = get_field('image_one');
    $image_two = get_field('image_two');
    $image_three = get_field('image_three');
    $background_color = get_field('background_color');

    ll_include_component(
      'products-hero',
      array(
        'side_text' => $side_text,
        'image_one' => $image_one,
        'image_two' => $image_two,
        'image_three' => $image_three,
        'background_color' => $background_color
      )
    );
  ?>

  <?php get_template_part('templates/partials/flex', 'default'); ?>

<?php endwhile; ?>
