<?php
/**
* heading and text
* -----------------------------------------------------------------------------
*
* heading and text component
*/

$defaults = [
  'heading' => null,
  'content' => null,
  'left_heading' => null
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

    <div class="col-sm-5of12">
      <span class="cp-ht__left-heading"><?php echo $left_heading; ?></span>
    </div>

    <div class="col-sm-7of12">
      <<?php echo $heading['tag']; ?>><?php echo $heading['text']; ?></<?php echo $heading['tag']; ?>>
      <?php echo $content; ?>
    </div>

  </div>

</div>

</div>