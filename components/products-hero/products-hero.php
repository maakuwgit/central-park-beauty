<?php
/**
* Products Hero
* -----------------------------------------------------------------------------
*
* Products Hero component
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
  'side_text' => null,
  'background' => null,
  'background_color' => null,
  'background_image' => null,
  'overlay_opacity' => null,
  'text_color' => null
];

$component_data = ll_parse_args( $component_data, $defaults );

$side_text = $component_data['side_text'];
$image_one = $component_data['image_one'];
$image_two = $component_data['image_two'];
$image_three = $component_data['image_three'];
$background_color = $component_data['background_color'];

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
<div class="cp-products-hero <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="products-hero" style="background-color: <?php echo $background_color; ?>;">



  <div class="container-full">
    <div class="row">
      <div class="col-sm-1of2">

        <div class="cp-products-hero__img-1" style="background-image: url(<?php echo $image1[0]; ?>);"></div>

        <div class="cp-products-hero__img-2" style="background-image: url(<?php echo $image2[0]; ?>);"></div>

        <div class="cp-products-hero__icon-col">
          <svg class="icon icon-<?php echo $side_text[text]; ?> cp-products-hero__svg" style="color: <?php echo $side_text['color']; ?>"><use xlink:href="#icon-<?php echo $side_text[text]; ?>"></use></svg>
        </div>

      </div>

      <div class="col-sm-1of2 cp-products-hero__right-col">

        <div class="cp-products-hero__img-3" style="background-image: url(<?php echo $image3[0]; ?>);"></div>

      </div>

    </div>

  </div>



</div>
