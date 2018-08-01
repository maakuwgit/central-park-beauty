<?php
/**
* Conditions Content 3
* -----------------------------------------------------------------------------
*
* Conditions Content 3 component
*/

$defaults = [
  'text_1' => null,
  'text_2' => null,
  'text_3' => null,
  'content_3_image_one' => null,
  'content_3_image_two' => null
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

$text_1 = $component_data['text_1'];
$text_2 = $component_data['text_2'];
$text_3 = $component_data['text_3'];
$image_one = $component_data['content_3_image_one'];
$image_two = $component_data['content_3_image_two'];

$image1 = wp_get_attachment_image_src($image_one, 'large');
$image2 = wp_get_attachment_image_src($image_two, 'large');
?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<div class="cp-conditions-content-3 <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="conditions-content-3">

   <div class="container">

    <div class="cp-conditions-content-3__img-row row start">
      <div class="col col-md-6of12 col-offset-lg-4of12 col-lg-3of12 col-xl-3of12 cp-conditions-content-3__img-box1">
        <div class="cp-conditions-content-3__img1" style="background-image: url(<?php echo $image1[0]; ?>);"></div>
      </div>
      <div class="col col-1of3 cp-conditions-content-3__img-box2">
        <div class="cp-conditions-content-3__img2" style="background-image: url(<?php echo $image2[0]; ?>);"></div>
      </div>
    </div>

  </div>

    <div class="container-full">

      <div class="col col-offset-lg-1of12 col-lg-10of12">

        <div class="row between">

          <div class="col col-md-6of12 col-lg-4of12 col-offset-xl-1of12 col-xl-3of12 cp-conditions-content-3__content-box">
            <?php echo $text_1; ?>
          </div>
          <!-- .col col-md-6of12 col-lg-4of12 col-xl-4of12 cp-conditions-content-3__content-box -->

          <div class="col col-md-6of12 col-lg-4of12 col-xl-3of12 cp-conditions-content-3__content-box">
            <?php echo $text_2; ?>
          </div>
          <!-- .col col-md-6of12 col-lg-4of12 col-xl-4of12 cp-conditions-content-3__content-box -->

          <div class="col col-lg-4of12 col-xl-3of12 cp-conditions-content-3__content-box">
            <?php echo $text_3; ?>
          </div>
          <!-- .col col-lg-4of12 col-xl-4of12 cp-conditions-content-3__content-box -->

        </div>

      </div>

    </div>
    <!-- .row -->

  </div>

</div>
