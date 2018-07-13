<?php

// check if the flexible content field has rows of data
if( have_rows( 'flex_default' ) ) :

     // loop through the rows of data
    while ( have_rows( 'flex_default' ) ) : the_row();

      if ( get_row_layout() == 'quote_block' ) : ?>

        <?php
        $quote = get_sub_field('quote');
        $source = get_sub_field('source');
        $bg_color = get_sub_field('background_color');

        ll_include_component(
          'quote-block',
          array(
            'quote' => $quote,
            'source' => $source,
            'bg-color' => $bg_color
          )
        );

      ?>

      <?php elseif ( get_row_layout() == 'image_content_cluster' ) : ?>

        <?php
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
        ?>

      <?php elseif ( get_row_layout() == 'split_heading') : ?>

        <?php
          $split_title = get_sub_field('split_title');
          $content = get_sub_field('content');

          ll_include_component(
            'split-heading',
            array(
              'split_title' => $split_title,
              'content' => $content
            )
          );
         ?>

      <?php elseif ( get_row_layout() == 'stacked_image_heading') : ?>

        <?php

          $heading = get_sub_field('heading');
          $image_1 = get_sub_field('image_1');
          $image_2 = get_sub_field('image_2');
          $box_1_color = get_sub_field('box_1_color');
          $box_2_color = get_sub_field('box_2_color');

          ll_include_component(
            'stacked-image-heading',
            array(
              'heading' => $heading,
              'image_1' => $image_1,
              'image_2' => $image_2,
              'box_1_color' => $box_1_color,
              'box_2_color' => $box_2_color
            )
          );
        ?>

      <?php elseif ( get_row_layout() == 'heading_and_text' ) : ?>

        <?php

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

         ?>

      <?php elseif ( get_row_layout() == 'link_list' ) : ?>

        <?php

            ll_include_component(
              'link-list',
              array(
                'list_items' => get_sub_field('list_items')
              )
            );

         ?>

        <?php elseif ( get_row_layout() == 'content_with_staggered_images' ) : ?>

          <?php

            $top_heading = get_sub_field('top_heading');
            $top_content = get_sub_field('top_content');
            $bottom_heading = get_sub_field('bottom_heading');
            $bottom_content = get_sub_field('bottom_content');
            $image_1 = get_sub_field('image_1');
            $image_2 = get_sub_field('image_2');
            $image_3 = get_sub_field('image_3');

            ll_include_component(
              'content-with-staggered-images',
              array(
                'top_heading' => $top_heading,
                'top_content' => $top_content,
                'bottom_heading' => $bottom_heading,
                'bottom_content' => $bottom_content,
                'image_1' => $image_1,
                'image_2' => $image_2,
                'image_3' => $image_3
              )
            );
          ?>

        <?php elseif ( get_row_layout() == 'testimonial_slider' ) : ?>

          <?php

            $image_id = get_sub_field('background_image');
            $testimonials = get_sub_field('testimonials');

            ll_include_component(
              'testimonial-slider',
              array(
                'image_id' => $image_id,
                'testimonials' => $testimonials
              )
            );
          ?>

        <?php elseif ( get_row_layout() == 'cta' ) : ?>

          <?php

            $layout = get_sub_field('layout');
            $text_color = get_sub_field('text_color');
            $heading = get_sub_field('heading');
            $bg_image_id = get_sub_field('bg_image');

            ll_include_component(
              'cta',
              array(
                'layout' => $layout,
                'text_color' => $text_color,
                'heading' => $heading,
                'bg_image' => $bg_image_id
              )
            );
          ?>




      <?php endif;

    endwhile;

else :

    // no layouts found

endif;

?>
