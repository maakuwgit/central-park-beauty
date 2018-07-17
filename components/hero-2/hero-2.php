<?php
/**
* Hero 2
* -----------------------------------------------------------------------------
*
* Hero 2 component
*/

$defaults = [
  'main_text' => array(
    'text' => null,
    'tag' => null
  ),
  'sub_text' => array(
    'text' => null,
    'tag' => null
  ),
  'image_one' => null,
  'overlay_opacity' => null,
  'side_text' => null
];

$component_data = ll_parse_args( $component_data, $defaults );

$main_text = $component_data['main_text'];
$sub_text = $component_data['sub_text'];
$background_image = $component_data['background_image'];
$image_one = $component_data['image_one'];
$overlay_opacity = $component_data['overlay_opacity'];
$side_text = $component_data['side_text'];

$image1 = wp_get_attachment_image_src($image_one, 'large');
$bg_image = wp_get_attachment_image_src($background_image, 'large');

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
<div class="cp-hero-2 <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="hero-2" style="background-image: url(<?php echo $bg_image[0]; ?>);">

  <div class="cp-hero-2__overlay" style="background-color: rgba(0,0,0,<?php echo $overlay_opacity; ?>)"></div>

  <div class="cp-hero-2__icon-col">
      <svg class="icon icon-<?php echo $side_text; ?> cp-hero-2__svg"><use xlink:href="#icon-<?php echo $side_text; ?>"></use></svg>
      <div class="cp-hero-2__img-1" style="background-image: url(<?php echo $image1[0]; ?>);"></div>
    </div>

    <div class="cp-hero-2__text-box">

      <<?php echo $main_text['tag']; ?> class="cp-hero-2__main-text"><?php echo $main_text['text']; ?></<?php $main_text['tag']; ?>>
      <<?php echo $sub_text['tag']; ?> class="cp-hero-2__sub-text"><?php echo $sub_text['text']; ?></<?php $main_text['tag']; ?>>

    </div>

</div>
