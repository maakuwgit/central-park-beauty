<?php
  $form_id = ( get_field('form_id') ? get_field('form_id') : 1 );
?>
<article <?php post_class(); ?>>

  <div class="container-full">
<?php if( is_plugin_active( 'gravityforms/gravityforms.php' ) ) : ?>

  <?php gravity_form( $form_id, true, true ); ?>
  <!-- .form-skin -->

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
</div>
<!-- .container -->

</article>