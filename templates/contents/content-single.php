<?php
  $bg_img = get_post_thumbnail_id();

  if( $bg_img ) {
    $bg_img_full = wp_get_attachment_image_url($bg_img, 'full');
    $bg_img_lg = wp_get_attachment_image_url($bg_img, 'large');
    $bg_img_md = wp_get_attachment_image_url($bg_img, 'medium');
  }

?>
<article <?php post_class(); ?>>

  <div class="post container">

      <header class="post__header relative flex row start"<?php if($bg_img) echo ' data-backgrounder';?>>

      <?php if ($bg_img) : ?>
        <div class="feature">
          <img alt="" src="<?php echo $bg_img_md; ?>" srcset="<?php echo $bg_img_lg; ?> 2x, <?php echo $bg_img_full; ?> 3x" data-src-md="<?php echo $bg_img_md; ?>" data-src-lg="'<?php echo $bg_img_lg; ?>" data-src-xl="<?php echo $bg_img_full; ?>">
        </div>
      <?php endif; ?>

        <svg class="post__headline icon icon-BLOG">
          <use xlink:href="#icon-BLOG"></use>
        </svg>
        <!-- .post__headline icon icon-BLOG -->

        <div class="col col-md-9of12 col-lg-9of12 col-xl-9of12 white">
          <time class="published post__header__supertitle" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
          <!-- . -->
          <h1 class="post__header__title"><?php the_title(); ?></h1>
          <!-- . -->
        </div>

      </header>
      <!-- .post__header.row.start -->

    <div class="row centered">

      <div class="post__content relative col col-md-6of12 col-offset-lg-1of12 col-lg-6of12 col-offset-lg-1of12 col-xl-6of12">
        <?php the_content(); ?>
      </div>

      <div class="post__related_posts col col-md-3of12 col-lg-2of12 col-xl-2of12">
        Related News
      </div>

    </div>

  </div>
  <!-- /.post -->
</article>
