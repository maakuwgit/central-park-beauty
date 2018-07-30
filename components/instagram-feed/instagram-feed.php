<?php
/**
* Instagram Feed
* -----------------------------------------------------------------------------
*
* Instagram Feed component
*/

$defaults = [
  'feed' => ll_get_instagram_feed(),
  'width' => 'contain', //full
  'type'  => 'gutter', //gutter
  'count' => 3
];

$instagram = get_field( 'social_instagram', 'option' );

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
?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<?php if ( is_array( $component_data['feed'] ) ) : ?>
<div class="ll-instagram-feed ll-instagram-feed--<?php echo $component_data['type']; ?> ll-instagram-feed--<?php echo $component_data['width']; ?> <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="instagram-feed">
  <?php if ( $component_data['width'] == 'full' ) : ?>
    <div class="row">
      <?php foreach ($component_data['feed'] as $key => $item): ?>
        <?php if ( $key <= $component_data['count'] - 1 ) : ?>
          <div class="col-1of4">
            <div class="ll-instagram-feed__img-container">
              <img class="ll-instagram-feed__img" src="<?php echo $item->images->standard_resolution->url ?>" alt="<?php echo $item->caption->text ?>">
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach ?>
    </div>
  <?php else : ?>
    <div class="container">
      <div class="row">
        <?php
          $ic = 0;
        ?>
        <?php foreach ($component_data['feed'] as $key => $item): ?>

          <?php if ( $key <= $component_data['count'] - 1 ) : ?>

            <div class="col-1of3">
              <div class="ll-instagram-feed__img-container">

                <?php if ($ic == 1) : ?>

                  <div class="ll-instagram-feed__overlay">
                    <div class="ll-instagram-feed__title">Follow Us</div>
                    <div class="ll-instagram-feed__icon"><a href="<?php echo $instagram; ?>" target="_blank"><svg class="icon icon-cp-instagram"><use xlink:href="#icon-cp-instagram"></use></svg></a></div>
                    <a href="<?php echo $instagram; ?>" target="_blank">@centralparkbeauty</a>
                  </div>

                <?php endif; ?>

                <img class="ll-instagram-feed__img" src="<?php echo $item->images->standard_resolution->url ?>" alt="<?php echo $item->caption->text ?>">

              </div>
            </div>
          <?php endif; ?>
          <?php $ic++; ?>
        <?php endforeach ?>
       <!--  <div class="col-1of3 ">
          <div class="ll-instagram-feed__img-container">
            <div class="ll-instagram-feed__overlay"></div>
          </div>
        </div> -->
      </div>

    </div>
    <div class="ll-instagram-feed__box1"></div>
    <div class="ll-instagram-feed__box2"></div>
  <?php endif; ?>
</div>
<?php endif; ?>
