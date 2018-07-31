<?php
/**
* How
* -----------------------------------------------------------------------------
*
* How component
*/

$defaults = [
  'column_1' => null,
  'column_2' => null,
  'box_color' => null
];

$component_data = ll_parse_args( $component_data, $defaults );

$column_1 = $component_data['column_1'];
$column_2 = $component_data['column_2'];

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

$bg = $component_data['box_color'];

if ($bg ){
  $bg = ' ' . $bg['swatches_bg'];
}
?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<div class="cp-how<?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="how">

  <div class="container">

    <span class="cp-how__h">H</span>

    <div class="row start">

      <div class="col-md-6of12 col-lg-4of12 col-xl-4of12">

        <div class="cp-how__col">
          <?php echo $column_1; ?>
        </div>

      </div>

      <div class="col-md-6of12 col-offset-lg-2of12 col-lg-4of12 col-offset-lg-2of12 col-xl-4of12">

        <div class="cp-how__col">
          <?php echo $column_2; ?>
          <span class="cp-how__ow">OW</span>
        </div>

      </div>
    </div>

    <div class="cp-how__box<?php echo $bg; ?>"></div>
    <!-- .cp-how__box -->

  </div>

</div>
