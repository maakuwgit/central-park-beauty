<?php
/**
* Before and Afters
* -----------------------------------------------------------------------------
*
* Before and Afters component
*/

$defaults = [
  'images' => null
];

$component_data = ll_parse_args( $component_data, $defaults );

$image_array = $component_data['images'];

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
<div class="cp-before-and-afters <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="before-and-afters">

  <div class="container-full cp-before-and-afters__container">
      <div class="cp-before-and-afters__heading">
        <h3>Before</h3>
        <h3>After</h3>
      </div>
    <div class="cp-before-and-afters__slick">
      <?php if (condition): ?>

        <?php foreach ($image_array as $key => $image): ?>

          <?php

            $image_id = $image['image'];
            $img = wp_get_attachment_image_src($image_id, 'large');

          ?>

            <div class="cp-before-and-afters__image-container">
              <img class="cp-before-and-afters__img" src="<?php echo $img[0]; ?>">
            </div>

        <?php endforeach ?>

      <?php endif ?>
    </div>
  </div>

</div>
