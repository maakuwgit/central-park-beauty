<?php
  $page_for_conditions = get_field('conditions_archive_page', 'option');
  $side_text = get_field('side_text', $page_for_conditions);
  $main_text = get_field('main_text', $page_for_conditions);
  $sub_text = get_field('sub_text', $page_for_conditions);
  $image_one = get_field('image_one', $page_for_conditions);
  $image_two = get_field('image_two', $page_for_conditions);
  $background = get_field('background', $page_for_conditions);
  $background_color = get_field('background_color', $page_for_conditions);
  $background_image = get_field('background_image', $page_for_conditions);
  $overlay_opacity = get_field('overlay_opacity', $page_for_conditions);
  $text_color = get_field('text_color', $page_for_conditions);

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

  ll_include_component(
    'filters',
    array( 'taxonomy' => 'effected_areas')
  );
?>

<section class="card-grid__wrapper row start">

  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/contents/content', 'single-condition'); ?>
  <?php endwhile; ?>

</section>