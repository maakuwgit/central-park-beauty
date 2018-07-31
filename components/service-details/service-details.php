<?php
/**
* Service Details
* -----------------------------------------------------------------------------
*
* Service Details component
*/

$defaults = [
  'procedure_time' => null,
  'recovery_time' => null,
  'service_title' => null,
  'treatment_list' => null,
  'details_image_one' => null,
  'details_image_two' => null
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

$procedure_time = $component_data['procedure_time'];
$recovery_time = $component_data['recovery_time'];
$title = $component_data['service_title'];
$list = $component_data['treatment_list'];
$image_one = $component_data['details_image_one'];
$image_two = $component_data['details_image_two'];

$image1 = wp_get_attachment_image_src($image_one, 'large');
$image2 = wp_get_attachment_image_src($image_two, 'large');
?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<div class="cp-service-details <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="service-details">

  <div class="container relative">

    <div class="row cp-service-details__img-row">
        <div class="col col-md-5of12 col-lg-4of12 col-xl-4of12 cp-service-details__img-box1">
          <div class="cp-service-details__img1" style="background-image: url(<?php echo $image1[0]; ?>);"></div>
        </div>
        <div class="col col-md-5of12 col-lg-4of12 col-xl-4of12 cp-service-details__img-box2">
          <div class="cp-service-details__img2" style="background-image: url(<?php echo $image2[0]; ?>);"></div>
        </div>
    </div>

    <div class="row cp-service-details__wrapper">
      <div class="col col-offset-md-1of12 col-md-4of12 col-offset-lg-1of12 col-lg-4of12 col-offset-xl-1of12 col-xl-4of12">
        <div class="cp-service-details__left-content">
          <h6 class="cp-service-details__heading">Procedure Time</h6>
          <p><?php echo $procedure_time; ?></p>
          <h6 class="cp-service-details__heading">Recovery Time</h6>
          <p><?php echo $recovery_time; ?><br>*recovery times may vary</p>
        </div>
      </div>

      <div class="col col-offset-md-1of12 col-md-6of12 col-offset-lg-1of12 col-lg-6of12 col-offset-xl-1of12 col-xl-6of12">

        <div class="cp-service-details__right-content">

          <h6 class="cp-service-details__heading"><?php echo $title; ?></h6>

          <?php if ($list): ?>

            <ul class="cp-service-details__list">

              <?php foreach ($list as $key => $list_item): ?>

                <li class="cp-service-details__list-item"><?php echo $list_item['list_item']; ?></li>

              <?php endforeach ?>

            </ul>

          <?php endif ?>

        </div>

      </div>

    </div>

  </div>



</div>
