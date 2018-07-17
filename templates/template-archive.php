<?php
/*
Template Name: Archive
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php

    $side_text = get_field('side_text');
    $main_text = get_field('main_text');
    $sub_text = get_field('sub_text');
    $image_one = get_field('image_one');
    $image_two = get_field('image_two');
    $background = get_field('background');
    $background_color = get_field('background_color');
    $background_image = get_field('background_image');
    $overlay_opacity = get_field('overlay_opacity');
    $text_color = get_field('text_color');


    ll_include_component(
      'hero-3',
      array(
        'side_text' => $side_text,
        'main_text' => $main_text,
        'sub_text' => $sub_text,
        'image_one' => $image_one,
        'image_two' => $image_two,
        'background' => $background,
        'background_color' => $background_color,
        'background_image' => $background_image,
        'overlay_opacity' => $overlay_opacity,
        'text_color' => $text_color
      )
    );
  ?>

  <?php get_template_part('templates/partials/flex', 'default'); ?>

<?php endwhile; ?>


