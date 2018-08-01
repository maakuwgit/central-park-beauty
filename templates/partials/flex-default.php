<?php

// check if the flexible content field has rows of data
if( have_rows( 'flex_default' ) ) {

     // loop through the rows of data
    while ( have_rows( 'flex_default' ) ) {
      the_row();

      switch ( get_row_layout() ) {
        case 'quote_block' :

          $quote = get_sub_field('quote');
          $source = get_sub_field('source');
          $bg_color = array(
            'swatches_bg' => get_sub_field('swatches_bg')
          );
          $position = get_sub_field('logo_position');

          ll_include_component(
            'quote-block',
            array(
              'quote' => $quote,
              'source' => $source,
              'bg-color' => $bg_color,
              'logo-position' => $position
            )
          );
        break;
        case 'image_content_cluster' :

          $title = get_sub_field('title');
          $content = get_sub_field('content');
          $image_group_1 = get_sub_field('image_group_1');
          $image_group_2 = get_sub_field('image_group_2');

          ll_include_component(
            'image-content-cluster',
            array(
              'title' => $title,
              'content' => $content,
              'image_group_1' => $image_group_1,
              'image_group_2' => $image_group_2
            )
          );
        break;
        case 'split_heading' :

          $split_title = get_sub_field('split_title');
          $content = get_sub_field('content');

          ll_include_component(
            'split-heading',
            array(
              'split_title' => $split_title,
              'content' => $content
            )
          );
        break;
        case 'stacked_image_heading' :

          $background = get_sub_field('background');
          $heading = get_sub_field('heading');
          $image_1 = get_sub_field('image_1');
          $image_2 = get_sub_field('image_2');
          $box_1_color = get_sub_field('box_1_color');
          $box_2_color = get_sub_field('box_2_color');

          ll_include_component(
            'stacked-image-heading',
            array(
              'background' => $background,
              'heading' => $heading,
              'image_1' => $image_1,
              'image_2' => $image_2,
              'box_1_color' => $box_1_color,
              'box_2_color' => $box_2_color
            )
          );
        break;
        case 'heading_and_text' :

          $heading = get_sub_field('heading');
          $content = get_sub_field('content');
          $left_heading = get_sub_field('left_heading');

          ll_include_component(
            'heading-and-text',
            array(
              'heading' => $heading,
              'content' => $content,
              'left_heading' => $left_heading
            )
          );
        break;
        case 'link_list' :

          ll_include_component(
            'link-list',
            array(
              'list_items' => get_sub_field('list_items')
            )
          );
        break;
        case 'content_with_staggered_images' :

          $top_heading = get_sub_field('top_heading');
          $top_content = get_sub_field('top_content');
          $bottom_heading = get_sub_field('bottom_heading');
          $bottom_content = get_sub_field('bottom_content');
          $staggered_image_1 = get_sub_field('staggered_image_1');
          $staggered_image_2 = get_sub_field('staggered_image_2');
          $staggered_image_3 = get_sub_field('staggered_image_3');
          $box_color = get_sub_field('box_color');

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
        break;
        case 'testimonial_slider' :

          $image_id = get_sub_field('background_image');
          $testimonials = get_sub_field('testimonials');

          ll_include_component(
            'testimonial-slider',
            array(
              'image_id' => $image_id,
              'testimonials' => $testimonials
            )
          );
        break;
        case 'cta' :

          $layout = get_sub_field('layout');
          $text_color = get_sub_field('text_color');
          $heading = get_sub_field('heading');
          $bg_image_id = get_sub_field('bg_image');
          $overlay_opacity = get_sub_field('overlay_opacity');

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
        break;
        case 'instagram_feed' :

          ll_include_component(
            'instagram-feed'
          );
        break;
        case 'staggered_content' :

          $background = get_sub_field('background');
          $content_one = get_sub_field('content_one');
          $content_two = get_sub_field('content_two');
          $title = get_sub_field('title');
          $image = get_sub_field('image');

          ll_include_component(
            'staggered-content',
            array(
              'background'  => $background,
              'content_one' => $content_one,
              'content_two' => $content_two,
              'title' => $title,
              'image' => $image
            )
          );
        break;
        case 'image_with_button' :

          $image = get_sub_field('image');
          $button = get_sub_field('button');
          $overlay = get_sub_field('overlay_opacity');

          ll_include_component(
            'image-with-button',
            array(
              'image' => $image,
              'button' => $button,
              'overlay' => $overlay
            ),
            array(
              'classes' => array('')
            )
          );
        break;
        case 'two_columns' :
          $left_content = get_sub_field('left_content');
          $right_content = get_sub_field('right_content');
          $background = get_sub_field('background');

            ll_include_component(
              'two-columns',
              array(
                'left_content' => $left_content,
                'right_content' => $right_content,
                'background' => $background
              )
            );
        break;
        default:
        break;
    }

  }

}
?>