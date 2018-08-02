<?php
/**
* lr-blocks
* -----------------------------------------------------------------------------
*
* lr-blocks component
*/

$defaults = [
  'style'      => false,
  'image'      => false,
  'content'    => false
];

$args = [
  'id'      => uniqid('lr-blocks-'),
  'classes' => false,
];

$component_data = ll_parse_args( $component_data, $defaults );
$component_args = ll_parse_args( $component_args, $args );
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

$id = $component_args['id'];

/**
 * ACF values pulled into the component from the components.php partial.
 */
$style              = $component_data['style'];
$image              = $component_data['image'];
$content            = $component_data['content'];

?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<section class="ll-lr-blocks<?php echo ' ' . $style . implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="lr-blocks">

  <div class="container row centered center">

  <?php if( $content ) : ?>
    <div class="lr-blocks__content col col-md-6of12 col-lg-5of12 col-xl-5of12 col-xxl-5of12">
      <?php echo $content; ?>
    </div><!-- .lr-block__content -->
  <?php endif; ?>

  <?php if( $image ) : ?>
    <div class="lr-blocks__spacer col col-md-6of12 col-lg-7of12 col-xl-7of12 col-xxl-7of12"></div><!-- .lr-blocks__spacer -->
  <?php endif; ?>

  </div>

<?php if( $image ) : ?>
  <figure class="lr-blocks__figure col col-md-6of12 col-lg-6of12 col-xl-6of12 col-xxl-6of12" data-backgrounder>

    <div class="lr-blocks__feature feature">
    <?php echo ll_format_image($image); ?>
    </div><!-- .lr-blocks__feature.feature -->

  </figure><!-- .lr-blocks__figure -->
<?php endif; ?>

</section>