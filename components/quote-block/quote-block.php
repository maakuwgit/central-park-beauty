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
  'bg-color' => null,
  'logo-position' => false
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

$quote = $component_data['quote'];
$source = $component_data['source'];
$bg = $component_data['bg-color'];
$position = $component_data['logo-position'];

if ($bg ){
  $bg = ' ' . $bg['swatches_bg'];
}
?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<div class="cp-quote-block<?php echo $bg . implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="quote-block">

  <div class="cp-quote__content row centered center text-center">

    <?php if( $position !== 'bottom' ) : ?>
      <svg class="icon icon-CP-Logo"><use xlink:href="#icon-CP-Logo"></use></svg>
    <?php endif; ?>

    <blockquote class="cp-quote__quote">
      <?php echo $quote; ?>
    </blockquote>
    <!-- .cp-quote__quote -->

    <cite class="cp-quote__source"><?php echo $source; ?></cite>

    <?php if( $position === 'bottom' ) : ?>
      <svg class="icon icon-CP-Logo"><use xlink:href="#icon-CP-Logo"></use></svg>
    <?php endif; ?>

  </div>

</div>
