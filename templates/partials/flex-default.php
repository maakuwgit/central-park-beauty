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



      <?php endif;

    endwhile;

else :

    // no layouts found

endif;

?>
