<?php
/**
* Image With Button
* -----------------------------------------------------------------------------
*
* Image With Button component
*/

$defaults = [
  'image' => null,
  'button' => null,
  'overlay' => null
];

$component_data = ll_parse_args( $component_data, $defaults );

$image = $component_data['image'];
$button = $component_data['button'];
$overlay = $component_data['overlay'];

$image = wp_get_attachment_image_src($image, 'full');

if ($button['color'] == '#000000' ) {
  $btn_color = 'btn__dark';
} else {
  $btn_color = 'btn__light';
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
<div class="cp-image-with-button <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="image-with-button" style="background-image: url(<?php echo $image[0]; ?>)">
  <div class="cp-image-with-button__overlay" style="background-color: rgba(0,0,0,<?php echo $overlay; ?>);"></div>

  <a class="btn <?php echo $btn_color; ?> cp-image-with-button__btn" href="<?php echo $button['info']['url']; ?>"><?php echo $button['info']['title']; ?></a>

</div>
