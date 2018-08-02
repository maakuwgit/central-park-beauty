<?php
  $form_id = ( get_field('form_id') ? get_field('form_id') : 1 );
?>
<article <?php post_class(); ?>>

<?php if( is_plugin_active( 'gravityforms/gravityforms.php' ) ) : ?>

  <?php gravity_form( $form_id, true, true ); ?>

<?php endif; ?>

<?php
  $map = array(
    'map'       => get_field('map'),
    'address'   => get_field('location_address'),
    'phone'   => get_field('location_phone')
  );

  ll_include_component(
    'location-map',
    $map
  );
?>
<!-- .form-skin -->
</article>