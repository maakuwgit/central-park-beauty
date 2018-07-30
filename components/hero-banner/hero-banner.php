<?php
/**
* hero banner
* -----------------------------------------------------------------------------
*
* hero banner component
*/

$defaults = [
  'title' => array(
    'tag' => null,
    'text' => null
  ),
  'subtitle' => array(
    'tag' => null,
    'text' => null
  ),
  'background_image' => null,
  'video_link' => null,
  'video_text' => null,
  'video_loop' => null
];

$component_data = ll_parse_args( $component_data, $defaults );

$title = $component_data['title'];
$subtitle = $component_data['subtitle'];
$image = $component_data['background_image'];
$video_link = $component_data['video_link'];
$video_text = $component_data['video_text'];
$video_loop = $component_data['video_loop'];

$background_image = wp_get_attachment_image_src($image, 'large');

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
<div class="cp-hero-banner <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="hero-banner" style="background-image: url(<?php echo $background_image[0]; ?>)">


  <div class="hero-banner__content">

    <div class="hero-banner__info-box text-center">
      <svg class="icon icon-CP-Logo hero-banner__logo"><use xlink:href="#icon-CP-Logo"></use></svg>

      <<?php echo $title['tag']; ?> class="hero-banner__title">
        <span class="hero-banner__big-title"><?php echo $title['big_text']; ?></span>
        <span class="hero-banner__small-title"><?php echo $title['small_text']; ?></span>
      </<?php echo $title['tag']; ?>>
      <!-- .hero-banner__title -->

      <<?php echo $subtitle['tag']; ?> class="hero-banner__subtitle">
        <?php echo $subtitle['text']; ?>
      </<?php echo $subtitle['tag']; ?>>
      <!-- .hero-banner__subtitle -->

    </div>
    <!-- .hero-banner__info-box text-center -->

    <div class="hero-banner__play-btn">

      <a class="js-init-video" href="<?php echo $video_link; ?>"><svg class="icon icon-play-button"><use xlink:href="#icon-play-button"></use></svg></a>
      <p class="hero-banner__subtitle"><?php echo $video_text ?></p>

    </div>

  </div>

  <?php if ( $video_loop ) : ?>
    <?php
      ll_include_component(
        'loop-video',
        array(
          'video' => $video_loop
        )
      );
    ?>
  <?php endif; ?>


</div>
