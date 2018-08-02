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
        <h1 class="post__header__title"><?php echo $post->post_title; ?></h1>
        <!-- . -->
      </div>

    </header>
    <!-- .post__header.row.start -->

    <div class="row start">

      <div class="post__content relative col col-md-7of12 col-offset-lg-1of12 col-lg-6of12 col-offset-lg-1of12 col-xl-6of12">
        <?php the_content(); ?>
      </div>
      <!-- .post__content.relative.col.col-md-7of12.col-offset-lg-1of12.col-lg-6of12.col-offset-lg-1of12.col-xl-6of12 -->

      <div class="post__related_posts card__wrapper col col-offset-md-1of12 col-md-4of12 col-offset-lg-1of12 col-lg-3of12 col-offset-xl-1of12 col-xl-3of12">
      <?php
        $related = get_field('related_articles');

        foreach( $related as $post ) :
      ?>

        <?php $image = $post->post_thumbnail; ?>

        <div class="card-grid__card" data-clickthrough>

        <?php if( $image ) : ?>
          <figure class="card-grid__feature__wrapper" data-backgrounder>

            <div class="card-grid__feature feature">

            <?php echo $image; ?>

            </div><!-- .card-grid__feature.feature -->

          </figure>
          <!-- .card-grid__feature__wrapper -->
        <?php else: ?>

          <figure class="card-grid__feature__wrapper">

            <div class="card-grid__feature feature"></div><!-- .card-grid__feature.feature -->

          </figure>
          <!-- .card-grid__feature__wrapper -->
        <?php endif; ?>

          <div class="card-grid__body">
            <?php
              $categories = get_the_category($post->ID);

              if ($categories) :
            ?>
              <?php foreach($categories as $category) : ?>

            <span class="card-grid__meta"><?php echo $category->name; ?></span>
            <!-- .entry__meta_category -->

              <?php endforeach; ?>

            <?php endif; ?>

            <h3 class="card-grid__title">
              <a href="<?php echo $post->guid; ?>"><?php echo $post->post_title; ?></a>
            </h3>
            <!-- .card-grid__title -->

          </div>
          <!-- .card-grid__body -->

          <?php get_template_part('templates/partials/related-post-meta'); ?>

        </div>
        <!-- .card-grid__card -->

      <?php endforeach; ?>
      </div>
      <!-- .post__related_posts card__wrapper.col.col-md-5of12.col-lg-4of12.col-xl-4of12 -->

    </div>
    <!-- .row.start -->

  </div>
  <!-- .post.container -->

</article>