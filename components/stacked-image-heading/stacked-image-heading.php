<?php
/**
* stacked image heading
* -----------------------------------------------------------------------------
*
* stacked image heading component
*/

$defaults = [
  'background' => false,
  'heading' => null,
  'image_1' => null,
  'image_2' => null,
  'box_1_color' => null,
  'box_2_color' => null
];

$component_data = ll_parse_args( $component_data, $defaults );

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

$heading = $component_data['heading'];
$image_1 = $component_data['image_1'];
$image_2 = $component_data['image_2'];
$box_1_color = $component_data['box_1_color'];
$box_2_color = $component_data['box_2_color'];

$image1 = wp_get_attachment_image_src($image_1, 'large');
$image2 = wp_get_attachment_image_src($image_2, 'large');

$bg = $component_data['background'];

if( $bg ) $bg = ' ' . $bg;
?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<div class="cp-stacked-image-heading<?php echo $bg . implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="stacked-image-heading">

  <div class="container">

    <div class="row cp-stacked-image-heading__row">

      <div class="col-5of12 cp-stacked-image-heading__box1" style="background-color: <?php echo $box_1_color; ?>">

        <div class="cp-stacked-image-heading__img1" style="background-image: url(<?php echo $image1[0]; ?>)"></div>

      </div>

      <div class="col-7of12 cp-stacked-image-heading__box2" style="background-color: <?php echo $box_2_color; ?>">

        <div class="cp-stacked-image-heading__img2" style="background-image: url(<?php echo $image2[0]; ?>)"></div>

        <h2 class="cp-stacked-image-heading__heading" style="color: <?php echo $heading['text_color']; ?>"><?php echo $heading['text']; ?></h2>

      </div>

    </div>

  </div>




</div>
