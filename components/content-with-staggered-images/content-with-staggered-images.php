<?php
/**
* content with staggered images
* -----------------------------------------------------------------------------
*
* content with staggered images component
*/

$defaults = [
  'top_heading' => array (
    'tag' => null,
    'text' => null
  ),
  'top_content' => null,
  'bottom_heading' => array (
    'tag' => null,
    'text' => null
  ),
  'bottom_content' => null,
  'image_1' => null,
  'image_2' => null,
  'image_3' => null,
  'box_color' => null
];

$component_data = ll_parse_args( $component_data, $defaults );

$top_heading = $component_data['top_heading'];
$top_content = $component_data['top_content'];
$bottom_heading = $component_data['bottom_heading'];
$bottom_content = $component_data['bottom_content'];
$image_1_id = $component_data['image_1'];
$image_2_id = $component_data['image_2'];
$image_3_id = $component_data['image_3'];
$box_color = $component_data['box_color'];

$image_1 = wp_get_attachment_image_src($image_1_id, 'medium-large');
$image_2 = wp_get_attachment_image_src($image_2_id, 'medium-large');
$image_3 = wp_get_attachment_image_src($image_3_id, 'medium-large');

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
<div class="cp-content-with-staggered-images <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="content-with-staggered-images">

  <div class="container">

    <div class="row ">

      <div class="col-sm-1of2 cp-content-with-staggered-images__top-text">

        <<?php echo $top_heading['tag']; ?> class="cp-content-with-staggered-images__heading"><?php echo $top_heading['text']; ?></<?php echo $top_heading['tag']; ?>>
        <?php echo $top_content; ?>

      </div>
    </div>

    <div class="row">

      <div class="col-xs-1of3">

        <div class="cp-content-with-staggered-images__img cp-content-with-staggered-images__img1" style="background-image: url(<?php echo $image_1[0]; ?>)"></div>

      </div>

      <div class="col-xs-1of3">

        <div class="cp-content-with-staggered-images__img cp-content-with-staggered-images__img2" style="background-image: url(<?php echo $image_2[0]; ?>)"></div>

      </div>

      <div class="col-xs-1of3">

        <div class="cp-content-with-staggered-images__img cp-content-with-staggered-images__img3" style="background-image: url(<?php echo $image_3[0]; ?>)"></div>

      </div>

      <div class="cp-content-with-staggered-images__bg" style="background-color: <?php echo $box_color; ?>"></div>

    </div>

    <div class="row">

      <div class="col-sm-1of2 cp-content-with-staggered-images__bottom-text">

        <<?php echo $bottom_heading['tag']; ?> class="cp-content-with-staggered-images__heading"><?php echo $bottom_heading['text']; ?></<?php echo $bottom_heading['tag']; ?>>
        <?php echo $bottom_content; ?>

      </div>

    </div>

  </div>



  </div>




</div>
