<?php
/**
* cta
* -----------------------------------------------------------------------------
*
* cta component
*/

$defaults = [
  'layout' => null,
  'text_color' => null,
  'heading' => null,
  'bg_image' => null,
  'overlay_opacity' => null
];

$component_data = ll_parse_args( $component_data, $defaults );

$layout = $component_data['layout'];
$text_color = $component_data['text_color'];
$heading = $component_data['heading'];
$bg_image_id = $component_data['bg_image'];
$overlay_opacity = $component_data['overlay_opacity'];

$bg_image = wp_get_attachment_image_src($bg_image_id, 'full');

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
<div class="cp-cta <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="cta">

  <div class="cp-cta__container-bg" style="background-image: url(<?php echo $bg_image[0]; ?>); color: <?php echo $text_color; ?>">
  <div class="cp-cta__overlay" style="background-color: rgba(0,0,0,<?php echo $overlay_opacity; ?>)"></div>

    <div class="container">

      <?php if ($layout == 'single'): ?>

        <div class="cp-cta__single">
          <h2 class="cp-cta__heading" style="color: <?php echo $text_color; ?>"><?php echo $heading['text']; ?></h2>
          <?php echo $heading['content']; ?>
        </div>

      <?php else: ?>

        <div class="row cp-cta__two-column">

          <div class="col-md-5of12">
            <h2 class="cp-cta__heading" style="color: <?php echo $text_color; ?>"><?php echo $heading['text']; ?></h2>
          </div>

          <div class="col-md-7of12">
            <?php echo $heading['content']; ?>
          </div>

        </div>

      <?php endif ?>

    </div>

  </div>

</div>
