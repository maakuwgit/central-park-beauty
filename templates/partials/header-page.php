<?php
  $cat = get_queried_object();
  $side_text = get_field('blog_side_text', $cat);
  $main_text = get_field('blog_main_text', $cat);
  $sub_text = get_field('blog_sub_text', $cat);
  $image_one = get_field('blog_image_one', $cat);
  $image_two = get_field('blog_image_two', $cat);
  $background = get_field('blog_background', $cat);
  $background_color = get_field('blog_background_color', $cat);
  $background_image = get_field('blog_background_image', $cat);
  $overlay_opacity = get_field('blog_overlay_opacity', $cat);
  $text_color = get_field('blog_text_color', $cat);

  ll_include_component(
    'blog-hero',
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