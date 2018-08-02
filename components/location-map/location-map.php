<?php
/**
* location-map
* -----------------------------------------------------------------------------
*
* location-map component
*/

$defaults = [
  'map' => false
];

$component_data = ll_parse_args( $component_data, $defaults );

if ( ll_empty( $component_data ) ) return;

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
$id               = ( $component_args['id'] ? $component_args['id'] : uniqid('location-map-') );
$mid              = uniqid('location-map__googlemap-');

/**
 * ACF values pulled into the component from the components.php partial.
 */

$map        = $component_data['map'];

?>

<section class="ll-location-map relative<?php echo implode( " ", $classes ); ?>" <?php echo ( $id ? 'id="'.$id.'"' : '' ) ?> data-component="location-map">

  <div class="location-map__googlemap col" id="<?php echo $mid; ?>" data-locations='[<?php echo json_encode( $map ); ?>]'>
  </div>

</section>