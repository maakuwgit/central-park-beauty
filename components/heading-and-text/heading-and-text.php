<?php
/**
* heading and text
* -----------------------------------------------------------------------------
*
* heading and text component
*/

$defaults = [
  'background' => null,
  'left_content' => null,
  'right_content' => null
];

$component_data = ll_parse_args( $component_data, $defaults );

$heading = $component_data['heading'];
$content = $component_data['content'];
$left_heading = $component_data['left_heading'];

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
<div class="cp-heading-and-text <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="heading-and-text">

<div class="container">

  <div class="row">

    <div class="col-5of12">
      <span class="cp-heading-and-text__left-heading"><?php echo $left_heading; ?></span>
    </div>

    <div class="col-7of12">
      <<?php echo $heading['tag']; ?> class="cp-heading-and-text__heading"><?php echo $heading['text']; ?></<?php echo $heading['tag']; ?>>
      <div class="cp-heading-and-text__caption"><?php echo format_text($content); ?></div>
    </div>

  </div>

</div>

</div>
