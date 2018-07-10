<?php
/**
* link list
* -----------------------------------------------------------------------------
*
* link list component
*/

$defaults = [
  'list_items' => null
];

$component_data = ll_parse_args( $component_data, $defaults );

$list_items = $component_data['list_items'];

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
<div class="cp-link-list <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="link-list">

  <div class="container-full cp-ll__container">

    <div class="container">

    <?php if ($list_items) : ?>

      <ul class="cp-ll__ul">
        <?php foreach ($list_items as $index => $list_item): ?>

        <?php
          if ( $index == 0 ) {
            $active_state = 'active';
          } else {
            $active_state = '';
          }
        ?>

          <li class="cp-ll__li <?php echo $active_state; ?>"><a href="<?php echo $list_item['link']['url']; ?>" class="cp-ll__link <?php echo $active_state; ?>" data-target="#img-<?php echo $index; ?>"><?php echo $list_item['link']['title']; ?></a></li>

        <?php endforeach ?>

      </ul>

      <?php foreach ($list_items as $index => $list_item) : ?>

        <?php
          $image_id = $list_item['image'];
          $image = wp_get_attachment_image_src($image_id, 'medium_large');
         ?>

         <?php
          if ( $index == 0 ) {
            $active_state = 'active';
          } else {
            $active_state = '';
          }
        ?>

        <div id="img-<?php echo $index; ?>" class="cp-ll__img <?php echo $active_state; ?>" style="background-image: url('<?php echo $image[0]; ?>');"><svg class="icon icon-REJUVE-NATE"><use xlink:href="#icon-REJUVE-NATE"></use></svg></div>

      <?php endforeach ?>


    <?php endif ?>
  </div>

    <div class="cp-ll__box1"></div>
    <div class="cp-ll__box2"></div>
  </div>


</div>
