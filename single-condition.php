<?php while (have_posts()) : the_post(); ?>
  <?php

    $main_text = get_field('main_text');
    $sub_text = get_field('sub_text');
    $image_one = get_field('image_one');
    $background_image = get_field('background_image');
    $overlay_opacity = get_field('overlay_opacity');
    $side_text = get_field('side_text');

    ll_include_component(
      'hero-2',
      array(
        'main_text' => $main_text,
        'sub_text' => $sub_text,
        'image_one' => $image_one,
        'background_image' => $background_image,
        'overlay_opacity' => $overlay_opacity,
        'side_text' => $side_text
      )
    );

    ll_include_component(
      'flex-default'
    );

    ll_include_component(
      'staggered-content',
      array(
        'content_one' => $content_one,
        'content_two' => $content_two,
        'title' => $title,
        'image' => $image
      )
    );
  ?>

<?php endwhile; ?>
