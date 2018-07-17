<?php
/**
* Hero 3
* -----------------------------------------------------------------------------
*
* Hero 3 component
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
$main_text = $component_data['main_text'];
$sub_text = $component_data['sub_text'];
$image_one = $component_data['image_one'];
$image_two = $component_data['image_two'];
$background = $component_data['background'];
$background_color = $component_data['background_color'];
$background_image = $component_data['background_image'];
$overlay_opacity = $component_data['overlay_opacity'];
$text_color = $component_data['text_color'];

$image1 = wp_get_attachment_image_src($image_one, 'large');
$image2 = wp_get_attachment_image_src($image_two, 'large');
$bg_image = wp_get_attachment_image_src($background_image, 'large');


if ($background == 'image') {
  $background_image = 'background-image';
} else {
  $background_image = '';
}

if ($background == 'solid') {
  $bg = 'background-color: ' . $background_color;
  $overlay_opacity = '0';
} else {
  $bg = 'background-image: url(' . $bg_image[0] . ')';
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
<div class="cp-hero-3 <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="hero-3" style="<?php echo $bg; ?>">

  <div class="cp-hero-3__overlay" style="background-color: rgba(0,0,0,<?php echo $overlay_opacity; ?>)"></div>
  <div class="cp-hero-3__img-1" style="background-image: url(<?php echo $image1[0]; ?>);"></div>

  <div class="container">
    <div class="row">
      <div class="col-sm-1of3">

        <div class="cp-hero-3__icon-col">
          <svg class="icon icon-<?php echo $side_text[text]; ?> cp-hero-3__svg" style="color: <?php echo $side_text['color']; ?>"><use xlink:href="#icon-<?php echo $side_text[text]; ?>"></use></svg>
        </div>

      </div>

      <div class="col-sm-1of2 cp-hero-3__right-col">

        <div class="cp-hero-3__text-box">

          <<?php echo $sub_text['tag']; ?> class="cp-hero-3__sub-text" style="color: <?php echo $text_color; ?>"><?php echo $sub_text['text']; ?></<?php $main_text['tag']; ?>>
          <<?php echo $main_text['tag']; ?> class="cp-hero-3__main-text" style="color: <?php echo $text_color; ?>"><?php echo $main_text['text']; ?></<?php $main_text['tag']; ?>>
        </div>

        <div class="cp-hero-3__img-2" style="background-image: url(<?php echo $image2[0]; ?>);"></div>

      </div>

    </div>

  </div>


</div>
