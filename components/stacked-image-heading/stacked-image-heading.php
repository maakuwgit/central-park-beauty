<?php
/**
* stacked image heading
* -----------------------------------------------------------------------------
*
* stacked image heading component
*/

$defaults = [
  'heading' => null,
  'image_1' => null,
  'image_2' => null,
  'box_1_color' => null,
  'box_2_color' => null
];

$component_data = ll_parse_args( $component_data, $defaults );

$heading = $component_data['heading'];
$image_1 = $component_data['image_1'];
$image_2 = $component_data['image_2'];
$box_1_color = $component_data['box_1_color'];
$box_2_color = $component_data['box_2_color'];



$image1 = wp_get_attachment_image_src($image_1, 'large');
$image2 = wp_get_attachment_image_src($image_2, 'large');

if ($box_1_color == 'pink') {
  $background_color1 = '#EABEAE';
} else {
  $background_color1 = '#000000';
}

if ($box_2_color == 'pink') {
  $background_color2 = '#EABEAE';
} else {
  $background_color2 = '#000000';
}

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
<div class="cp-stacked-image-heading <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="stacked-image-heading">

  <div class="container">

    <div class="row cp-sh__row">

      <div class="col-sm-5of12 cp-sh__box1" style="color: <?php echo $background_color1; ?>">
        <img class="cp-sh__img1" src="<?php echo $image1[0]; ?>">
      </div>

      <div class="col-sm-7of12 cp-sh__box2" style="background-color: <?php echo $background_color2; ?>">
        <img class="cp-sh__img2" src="<?php echo $image2[0]; ?>"><br>
        <<?php echo $heading['tag']; ?> class="cp-sh__heading"><?php echo $heading['text']; ?></<?php echo $heading['tag']; ?>>
      </div>

    </div>

  </div>




</div>
