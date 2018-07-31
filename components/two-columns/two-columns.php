<?php
/**
* Two Columns
* -----------------------------------------------------------------------------
*
* Two Columns component
*/

$defaults = [
  'background' => null,
  'left_content' => null,
  'right_content' => null
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

$bg_color = $component_data['background'];
$left_content = $component_data['left_content'];
$right_content = $component_data['right_content'];

$title = $left_content['title'];
$color = false;

if ($title ){
  $color = ' ' . $title['swatches'];
}else{
  $color = ' black';
}

if( $title ){
  $title = $title['text'];
}

$left_text = $left_content['content'];

if ($bg_color ){
  $bg_color = ' ' . $bg_color;
}
?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<div class="cp-two-columns<?php echo $bg_color . implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="two-columns">

  <div class="container">

    <div class="row">

      <div class="col-md-6of12 col-lg-6of12 col-xl-6of12">
        <span class="cp-two-columns__left-heading<?php echo $color; ?>"><?php echo $title; ?></span>
        <div class="cp-two-columns__left-text">
          <?php echo $left_text; ?>
        </div>
      </div>

      <div class="col-md-6of12 col-lg-6of12 col-xl-6of12">
        <div class="cp-two-columns__right-text">
          <?php echo $right_content; ?>
        </div>
      </div>

    </div>

  </div>

</div>
