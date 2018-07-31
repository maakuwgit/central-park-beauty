<?php
/**
* testimonial slider
* -----------------------------------------------------------------------------
*
* testimonial slider component
*/

$defaults = [
  'image_id' => null,
  'testimonials' => null
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
$component_id = $component_args['id'];

$image_id = $component_data['image_id'];
$testimonials = $component_data['testimonials'];

$image = wp_get_attachment_image_src($image_id, 'large');
?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<div class="cp-testimonial-slider<?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="testimonial-slider">

    <div class="container-full cp-testimonial-slider__container">

      <div class="container cp-testimonial-slider__bg-img" style="background-image: url('<?php echo $image[0]; ?>');">

        <div class="cp-testimonial-slider__title-container">

          <h2 class="cp-testimonial-slider__title">Client</h2>

          <span class="cp-testimonial-slider__heart-svg">

            <svg class="icon icon-heart salmon">
              <use xlink:href="#icon-heart"></use>
            </svg>

          </span>

        </div>

        <?php if ($testimonials): ?>

          <div class="cp-testimonial-slider__slider">

            <?php foreach ($testimonials as $index => $testimonial) : ?>

              <?php
                if ( $index == 0 ) {
                  $active_state = 'active';
                } else {
                  $active_state = '';
                }
              ?>

              <div class="cp-testimonial-slider__slide">

                  <div class="cp-testimonial-slider__quote">

                    <blockquote class="cp-testimonial-slider__blockquote <?php $active_state; ?>"><span class="cp-testimonial-slider__open-quote"></span><?php echo $testimonial['text']; ?></blockquote>

                    <p class="cp-testimonial-slider__name row start <?php $active_state; ?>">&mdash; <?php echo $testimonial['name']; ?></p>

                    <ul class="no-bullet cp-testimonial-slider__stars row start">
                      <li class="iflex">
                        <svg class="icon icon-star">
                          <use xlink:href="#icon-star"></use>
                        </svg>
                      </li>
                      <li class="iflex">
                        <svg class="icon icon-star">
                          <use xlink:href="#icon-star"></use>
                        </svg>
                      </li>
                      <li class="iflex">
                        <svg class="icon icon-star">
                          <use xlink:href="#icon-star"></use>
                        </svg>
                      </li>
                      <li class="iflex">
                        <svg class="icon icon-star">
                          <use xlink:href="#icon-star"></use>
                        </svg>
                      </li>
                      <li class="iflex">
                        <svg class="icon icon-star">
                          <use xlink:href="#icon-star"></use>
                        </svg>
                      </li>
                    </ul>

                  </div>

              </div>

            <?php endforeach ?>

          </div>

          <div class="cp-testimonial-slider__index">

            <ol>

              <?php foreach ($testimonials as $index => $testimonial): ?>

                <?php
                if ( $index == 0 ) {
                  $active_state = 'active';
                } else {
                  $active_state = '';
                }
              ?>

                <li class="cp-testimonial-slider__number <?php echo $active_state; ?>" data-index="<?php echo $index; ?>"></li>

              <?php endforeach ?>

            </ol>

           </div>

          <?php endif ?>

      </div>

      <div class="cp-testimonial-slider__box1"></div>
      <div class="cp-testimonial-slider__box2"></div>
      <div class="cp-testimonial-slider__box3"></div>
    </div>

</div>
