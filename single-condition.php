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

    $content_one = get_field('content_one');
    $image_1 = get_field('image_1');
    $image_2 = get_field('image_2');

    ll_include_component(
      'conditions-content-1',
      array(
        'content_one' => $content_one,
        'image_1' => $image_1,
        'image_2' => $image_2
      )
    );

    $left_content = get_field('left_content');
    $right_content = get_field('right_content');
    $background = get_field('background');

      ll_include_component(
        'conditions-content-2',
        array(
          'left_content' => $left_content,
          'right_content' => $right_content,
          'background' => $background
        )
      );

    $text_1 = get_field('text_1');
    $text_2 = get_field('text_2');
    $text_3 = get_field('text_3');
    $content_3_image_one = get_field('content_3_image_one');
    $content_3_image_two = get_field('content_3_image_two');

    ll_include_component(
      'conditions-content-3',
      array(
        'text_1' => $text_1,
        'text_2' => $text_2,
        'text_3' => $text_3,
        'content_3_image_one' => $content_3_image_one,
        'content_3_image_two' => $content_3_image_two
      )
    );

    $top_heading = get_field('top_heading');
    $top_content = get_field('top_content');
    $bottom_heading = get_field('bottom_heading');
    $bottom_content = get_field('bottom_content');
    $staggered_image_1 = get_field('staggered_image_1');
    $staggered_image_2 = get_field('staggered_image_2');
    $staggered_image_3 = get_field('staggered_image_3');
    $box_color = get_field('box_color');

    ll_include_component(
      'content-with-staggered-images',
      array(
        'top_heading' => $top_heading,
        'top_content' => $top_content,
        'bottom_heading' => $bottom_heading,
        'bottom_content' => $bottom_content,
        'staggered_image_1' => $staggered_image_1,
        'staggered_image_2' => $staggered_image_2,
        'staggered_image_3' => $staggered_image_3,
        'box_color' => $box_color
      )
    );

    ll_include_component(
      'info-boxes',
      array(
        'info_boxes' => get_field('info_boxes')
      )
    );

    $layout = get_field('layout');
    $text_color = get_field('text_color');
    $heading = get_field('heading');
    $bg_image_id = get_field('bg_image');
    $overlay_opacity = get_field('overlay_opacity');

    ll_include_component(
      'cta',
      array(
        'layout' => $layout,
        'text_color' => $text_color,
        'heading' => $heading,
        'bg_image' => $bg_image_id,
        'overlay_opacity' => $overlay_opacity
      )
    );

  ?>

<?php endwhile; ?>
