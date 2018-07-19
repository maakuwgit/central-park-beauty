<?php
/**
* Staggered Content
* -----------------------------------------------------------------------------
*
* Staggered Content component
*/

$defaults = [
  'content_one' => null,
  'content_two' => null,
  'title' => null,
  'image' => null
];

$component_data = ll_parse_args( $component_data, $defaults );

$content_one = $component_data['content_one'];
$content_two = $component_data['content_two'];
$title = $component_data['title'];
$image_id = $component_data['image'];

$image = wp_get_attachment_image_src($image_id, 'medium');




?>

<?php
/**
 * Any additional classes to apply to the main component container.
 *
 * @var array
 * @see args['classes']
 */
$classes        = $component_args['classes'] ?: array();

/**
 * ID to apply to the main component container.
 *
 * @var array
 * @see args['id']
 */
$component_id   = $component_args['id'];
?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<div class="cp-staggered-content <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="staggered-content">

  <div class="container">
    <div class="row">
      <div class="col-md-2of3">

        <div class="cp-staggered-content__box1">

          <?php echo $content_one; ?>

        </div>

        <h2 class="cp-staggered-content__title" style="color: <?php echo $title['color']; ?>"><?php echo $title['text']; ?></h2>

      </div>
      <div class="col-md-1of3">
        <div class="cp-staggered-content__box2">

          <?php
            if ($image == false) { ?>
              <svg class="icon icon-CP-Logo cp-staggered-content__logo"><use xlink:href="#icon-CP-Logo"></use></svg>
            <?php } else { ?>
              <div class="cp-staggered-content__image" style="background-image: url(<?php echo $image[0]; ?>"></div>
            <?php }
           ?>


          <?php echo $content_two; ?>

        </div>

      </div>
    </div>
  </div>

</div>
