<?php
/*
Template Name: Home
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php

    $info_box = get_field('info_box');
    $title = $info_box['title'];
    $subtitle = $info_box['subtitle'];
    $image = get_field('image');
    $popup_video = get_field('popup_video');
    $video_link = $popup_video['link'];
    $video_text = $popup_video['text'];
    $video_loop = get_field('video_loop');


    ll_include_component(
      'hero-banner',
      array(
        'title' => $title,
        'subtitle' => $subtitle,
        'background_image' => $image,
        'video_link' => $video_link,
        'video_text' => $video_text,
        'video_loop' => $video_loop
      )
    );
  ?>

  <?php get_template_part('templates/contents/content', 'home'); ?>

<?php endwhile; ?>


