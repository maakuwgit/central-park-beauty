<?php
/**
* image content cluster
* -----------------------------------------------------------------------------
*
* image content cluster component
*/

$defaults = [
  'title' => array(
    'tag' => null,
    'text' => null
  ),
  'content' => array(
    'text' => null,
    'tag' => null,
    'content' => null
  ),
  'image_group_1' => array(
    'big_image' => null,
    'small_image' => null
  ),
  'image_group_2' => array(
    'big_image' => null,
    'small_image' => null
  )
];

$component_data = ll_parse_args( $component_data, $defaults );

$title = $component_data['title'];
$content = $component_data['content'];
$image_group_1 = $component_data['image_group_1'];
$image_group_2 = $component_data['image_group_2'];

$image_1_sm = wp_get_attachment_image_src($image_group_1['small_image'], 'medium');
$image_1_big = wp_get_attachment_image_src($image_group_1['big_image'], 'large');
$image_2_sm = wp_get_attachment_image_src($image_group_2['small_image'], 'medium');
$image_2_big = wp_get_attachment_image_src($image_group_2['big_image'], 'large');
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
<div class="cp-image-content-cluster <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="image-content-cluster">
<div class="container">
  <div class="cp-icc__bg-shape"></div>
  <div class="cp-icc__container">

    <div class="cp-icc__title-section">
      <<?php echo $title['tag']; ?> class="cp-icc__title cp__title-underline"><?php echo $title['text']; ?></<?php echo $title['tag']; ?>>
    </div>

    <div class="cp-icc__sm-img-1" style="background-image: url(<?php echo $image_1_sm[0]; ?>)"></div>

    <div class="cp-icc__bg-img-1" style="background-image: url(<?php echo $image_1_big[0]; ?>)"></div>

    <div class="cp-icc__content-section"><<?php echo $content['tag']; ?> class="cp-icc__content"><?php echo $content['text']; ?></<?php echo $content['tag']; ?>><?php echo $content['content']; ?></div>

    <div class="cp-icc__bg-img-2" style="background-image: url(<?php echo $image_2_big[0]; ?>)"></div>

    <div class="cp-icc__sm-img-2" style="background-image: url(<?php echo $image_2_sm[0]; ?>)"></div>

  </div>
</div>






</div>
