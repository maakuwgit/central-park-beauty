<?php
/**
* quote block
* -----------------------------------------------------------------------------
*
* quote block component
*/

$defaults = [
  'quote' => null,
  'source' => null,
  'bg-color' => null
];

$component_data = ll_parse_args( $component_data, $defaults );

$quote = $component_data['quote'];
$source = $component_data['source'];
$bg_color = $component_data['bg-color'];

if ($bg_color == 'pink') {
  $background_color = '#f7e7e1';
} else {
  $background_color = '#F0D0C3';
}

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
<div class="cp-quote-block <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="quote-block" style="background-color: <?php echo $background_color; ?>">

  <div class="cp-quote__content text-center">
    <svg class="icon icon-CP-Logo"><use xlink:href="#icon-CP-Logo"></use></svg>
    <h2 class="cp-quote__quote"><?php echo $quote; ?></h2>
    <p class="cp-quote__source"><?php echo $source; ?></p>
  </div>

</div>
