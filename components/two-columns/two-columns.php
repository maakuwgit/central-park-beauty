<?php
/**
* Two Columns
* -----------------------------------------------------------------------------
*
* Two Columns component
*/

$defaults = [
  'heading' => null,
  'content' => null,
  'left_heading' => null
];

$component_data = ll_parse_args( $component_data, $defaults );

$background = $component_data['background'];
$left_content = $component_data['left_content'];
$right_content = $component_data['right_content'];

$bg_color = $background['background_color'];
$opacity = $background['opacity'];

$title = $left_content['title']['text'];
$color = $left_content['title']['color'];

$left_text = $left_content['content'];

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
<div class="cp-two-columns <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="two-columns" style="background-color: rgba(<?php echo $bg_color; ?>, <?php echo $opacity; ?>);">

  <div class="container">

    <div class="row">

      <div class="col-1of2">
        <span class="cp-two-columns__left-heading" style="color: <?php echo $color; ?>"><?php echo $title; ?></span>
        <div class="cp-two-columns__left-text">
          <?php echo $left_text; ?>
        </div>
      </div>

      <div class="col-1of2">
        <div class="cp-two-columns__right-text">
          <?php echo $right_content; ?>
        </div>
      </div>

    </div>

  </div>

</div>
