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

  <div class="container-full cp-link-list__container">

    <div class="container cp-link-list__container-2">

      <div class="cp-link-list__list">

        <?php if ($list_items) : ?>

          <?php foreach ($list_items as $index => $list_item): ?>

          <?php
            if ( $index == 0 ) {
              $active_state = 'active';
            } else {
              $active_state = '';
            }
          ?>

          <a href="<?php echo $list_item['link']['url']; ?>" class="cp-link-list__link <?php echo $active_state; ?>" data-index="<?php echo $index; ?>"><?php echo $list_item['link']['title']; ?></a>

          <?php endforeach ?>
      </div>

      <div class="cp-link-list__slick-container">
        <?php foreach ($list_items as $index => $list_item) : ?>

          <?php
            $image_id = $list_item['image'];
            $image = wp_get_attachment_image_src($image_id, 'medium_large');
           ?>

            <div class="cp-link-list_slide">
              <div class="cp-link-list_slide-title"><?php echo $list_item['link']['title']; ?></div>
              <div class="cp-link-list__img" style="background-image: url('<?php echo $image[0]; ?>');">
                <div class="cp-link-list__overlay">
                  <svg class="icon icon-TREAT-MENTS cp-link-list__svg"><use xlink:href="#icon-TREAT-MENTS"></use></svg>
                </div>
              </div>
            </div>

        <?php endforeach ?>
      </div>


      <?php endif ?>
    </div>
    <div class="cp-link-list__box1"></div>
    <div class="cp-link-list__box2"></div>
  </div>

  </div>


</div>
