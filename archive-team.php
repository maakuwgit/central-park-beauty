<?php
  $page_for_team = get_field('team_archive_page', 'option');
  $side_text = get_field('side_text', $page_for_team);
  $main_text = get_field('main_text', $page_for_team);
  $sub_text = get_field('sub_text', $page_for_team);
  $image_one = get_field('image_one', $page_for_team);
  $image_two = get_field('image_two', $page_for_team);
  $background = get_field('background', $page_for_team);
  $background_color = get_field('background_color', $page_for_team);
  $background_image = get_field('background_image', $page_for_team);
  $overlay_opacity = get_field('overlay_opacity', $page_for_team);
  $text_color = get_field('text_color', $page_for_team);

  var_dump($page_for_team);


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

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/contents/content', 'single'); ?>
<?php endwhile; ?>
