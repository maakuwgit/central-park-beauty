<?php
/**
* Info Boxes
* -----------------------------------------------------------------------------
*
* Info Boxes component
*/

$defaults = [
  'info_boxes' => null
];

$component_data = ll_parse_args( $component_data, $defaults );

$info_boxes = $component_data['info_boxes'];

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
<div class="cp-info-boxes <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="info-boxes">

  <div class="container-full">

    <div class="row centered">

      <?php if ($info_boxes): ?>

        <div class="col-10of12">

          <div class="row start">

          <?php foreach ($info_boxes as $key => $info_box) : ?>

            <div class="col col-sm-6of12 col-md-6of12 col-lg-4of12 col-xl-4of12 cp-info-boxes__col">

            <?php if( $info_box['title'] ) :?>
              <h4 class="cp-info-boxes__title"><?php echo $info_box['title'] ?></h4>
            <?php endif; ?>

              <?php echo format_text($info_box['content']); ?>

            </div>

          <?php endforeach ?>

          </div>

        </div>

      <?php endif ?>

    </div>

  </div>

</div>
