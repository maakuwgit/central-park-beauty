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
    $content_two = get_field('content_two');
    $title = get_field('title');
    $image = get_field('image');

    ll_include_component(
      'staggered-content',
      array(
        'content_one' => $content_one,
        'content_two' => $content_two,
        'title' => $title,
        'image' => $image
      )
    );

    $quote = get_field('quote');
    $source = get_field('source');
    $bg_color = get_field('background_color');
    $position = get_field('logo_position');

    ll_include_component(
      'quote-block',
      array(
        'quote' => $quote,
        'source' => $source,
        'bg-color' => $bg_color,
        'logo-position' => $position
      )
    );

    $left_content = get_field('left_content');
    $right_content = get_field('right_content');
    $background = get_field('background');

      ll_include_component(
        'two-columns',
        array(
          'left_content' => $left_content,
          'right_content' => $right_content,
          'background' => $background
        )
      );

    $procedure_time = get_field('procedure_time');
    $recovery_time = get_field('recovery_time');
    $service_title = get_field('service_title');
    $treatment_list = get_field('treatment_list');
    $details_image_one = get_field('details_image_one');
    $details_image_two = get_field('details_image_two');

    ll_include_component(
      'service-details',
      array(
        'procedure_time' => $procedure_time,
        'recovery_time' => $recovery_time,
        'service_title' => $service_title,
        'treatment_list' => $treatment_list,
        'details_image_one' => $details_image_one,
        'details_image_two' => $details_image_two
      )
    );

    $column_1 = get_field('column_1');
    $column_2 = get_field('column_2');

    ll_include_component(
      'how',
      array(
        'column_1' => $column_1,
        'column_2' => $column_2
      )
    );

    $image_id = get_field('background_image');
    $testimonials = get_field('testimonials');

    ll_include_component(
      'testimonial-slider',
      array(
        'image_id' => $image_id,
        'testimonials' => $testimonials
      )
    );

    ll_include_component(
      'before-and-afters',
      array(
        'images' => get_field('images')
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
