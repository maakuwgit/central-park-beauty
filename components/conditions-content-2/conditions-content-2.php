<?php
/**
* Conditions Content 2
* -----------------------------------------------------------------------------
*
* Conditions Content 2 component
*/

$defaults = [
  'heading' => null,
  'content' => null,
  'left_heading' => null
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

$background = $component_data['background'];
$left_content = $component_data['left_content'];
$right_content = $component_data['right_content'];

if( $left_content ) {
  $title = $left_content['title']['text'];

  if ($left_content['title']['swatches']) {
    $color = ' ' . $left_content['title']['swatches'];
  }else{
    $color = '';
  }

  $left_text = $left_content['content'];
}

if ($background ){
  $bg = ' ' . $background['swatches_bg'];
}else{
  $bg = '';
}
?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<div class="cp-conditions-content-2<?php echo $bg . implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="conditions-content-2">

  <div class="container row">

    <?php if( $left_content ) : ?>
    <div class="col col-lg-6of12 col-xl-6of12">
      <span class="cp-conditions-content-2__left-heading<?php echo $color; ?>"><?php echo $title; ?></span>

      <div class="cp-conditions-content-2__left-text">
        <?php echo $left_text; ?>
      </div>
      <!-- .cp-conditions-content-2__left-text -->

    </div>
    <!-- .col.col-lg-6of12.col-xl-6of12 -->
    <?php endif; ?>

    <?php if( $right_content ) : ?>
    <div class="col col-lg-6of12 col-xl-6of12">

      <div class="cp-conditions-content-2__right-text">
        <?php echo $right_content; ?>
      </div>
      <!-- .cp-conditions-content-2__right-text -->

    </div>
    <!-- .col col-lg-6of12 col-xl-6of12 -->
    <?php endif; ?>

  </div>
  <!-- .container -->

</div>
