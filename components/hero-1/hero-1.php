<?php
/**
* Hero 1
* -----------------------------------------------------------------------------
*
* Hero 1 component
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
  'image_two' => null,
  'image_three' => null
];

$component_data = ll_parse_args( $component_data, $defaults );
$main_text = $component_data['main_text'];
$sub_text = $component_data['sub_text'];
$image_one = $component_data['image_one'];
$image_two = $component_data['image_two'];
$image_three = $component_data['image_three'];


$image1 = wp_get_attachment_image_src($image_one, 'large');
$image2 = wp_get_attachment_image_src($image_two, 'large');
$image3 = wp_get_attachment_image_src($image_three, 'large');

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
<div class="cp-hero-1 <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="hero-1">

    <div class="cp-hero-1__icon-col">
      <svg class="icon icon-ABOUT-CPB"><use xlink:href="#icon-ABOUT-CPB"></use></svg>
      <div class="cp-hero-1__img-1" style="background-image: url(<?php echo $image1[0]; ?>);"></div>
    </div>

    <div class="cp-hero-1__img-2" style="background-image: url(<?php echo $image2[0]; ?>);"></div>

    <div class="cp-hero-1__text-box">

      <<?php echo $main_text['tag']; ?> class="cp-hero-1__main-text"><?php echo $main_text['text']; ?></<?php $main_text['tag']; ?>>
      <<?php echo $sub_text['tag']; ?> class="cp-hero-1__sub-text"><?php echo $sub_text['text']; ?></<?php $main_text['tag']; ?>>

    </div>

    <div class="cp-hero-1__img-3" style="background-image: url(<?php echo $image3[0]; ?>);"></div>

</div>
