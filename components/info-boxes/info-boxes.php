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

  <div class="container">

    <div class="row">

      <?php if ($info_boxes): ?>

        <?php foreach ($info_boxes as $key => $info_box): ?>

          <div class="col-1of3 cp-info-boxes__col">

            <h3 class="cp-info-boxes__title"><?php echo $info_box['title'] ?></h3>
            <?php echo $info_box['content']; ?>

          </div>

        <?php endforeach ?>

      <?php endif ?>

    </div>

  </div>

</div>
