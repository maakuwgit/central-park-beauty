<?php
/**
* location-map
* -----------------------------------------------------------------------------
*
* location-map component
*/

$defaults = [
  'map' => false,
  'address' => false,
  'phone' => false
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
$address    = $component_data['address'];
$phone      = $component_data['phone'];
?>

<section class="ll-location-map relative<?php echo implode( " ", $classes ); ?>" <?php echo ( $id ? 'id="'.$id.'"' : '' ) ?> data-component="location-map">

  <div class="location-map__googlemap col" id="<?php echo $mid; ?>" data-locations='[<?php echo json_encode( $map ); ?>]'>
  </div>

  <aside class="location-map__info flex">

    <div class="location-map__details">

      <svg class="location-map__icon icon icon-CP-Logo">
        <use xlink:href="#icon-CP-Logo"></use>
      </svg>

    </div>

  <?php if ($address || $phone ) : ?>
    <div class="location-map__details">

      <h2 class="location-map__title">Locate</h2>

    <?php if ($address) : ?>
      <address class="location-map__address">
        <?php echo $address; ?>
      </address>
    <?php endif; ?>

    <?php if ($phone) : ?>
      <a class="location-map__phone" href="tel:+1<?php echo $phone; ?>"><?php echo format_phone($phone); ?></a>
    <?php endif; ?>

    </div>

  <?php endif; ?>

  </aside>

</section>