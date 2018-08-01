<?php
/**
* Conditions Content 1
* -----------------------------------------------------------------------------
*
* Conditions Content 1 component
*/

$defaults = [
  'content_one' => null,
  'image_1' => null,
  'image_2' => null
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

$content_one = $component_data['content_one'];
$image1_id = $component_data['image_1'];
$image2_id = $component_data['image_2'];

$img1 = wp_get_attachment_image_src($image1_id, 'medium');
$img2 = wp_get_attachment_image_src($image2_id, 'medium');
?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<div class="cp-conditions-content-1 <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="conditions-content-1">

  <div class="container-full">
    <div class="row">
      <div class="col-md-8of12 col-lg-8of12 col-xl-8of12">

        <div class="cp-conditions-content-1__box1">

          <?php echo $content_one; ?>

        </div>

        <span class="cp-conditions-content-1__title"></span>

      </div>

      <div class="cp-conditions-content-1__images col-md-4of12 col-lg-4of12 col-xl-4of12">

        <div class="cp-conditions-content-1__box2">

          <div class="cp-conditions-content-1__img1" style="background-image: url(<?php echo $img1[0]; ?>);"></div>
          <!-- .cp-conditions-content-1__img1 -->

          <div class="cp-conditions-content-1__img2" style="background-image: url(<?php echo $img2[0]; ?>);"></div>
          <!-- .cp-conditions-content-1__img2 -->

        </div>
        <!-- .cp-conditions-content-1__box2 -->

      </div>
      <!-- .cp-conditions-content-1__images.col-md-4of12.col-lg-4of12.col-xl-4of12 -->

    </div>
  </div>

</div>
