<?php
  $image = get_the_post_thumbnail();
  $cat_list = [];
  $categories = get_the_category();

  foreach($categories as $category) {
    $cat_list[] = $category->slug;
  }
?>
<div class="card__wrapper col col-sm-6of12 col-md-4of12 col-lg-4of12 col-xl-4of12" data-terms="<?php echo implode(' ', $cat_list); ?>">

  <div class="card-grid__card" data-clickthrough>

  <?php if( $image ) : ?>
    <figure class="card-grid__feature__wrapper" data-backgrounder>

      <div class="card-grid__feature feature">

      <?php echo $image; ?>

      </div><!-- .card-grid__feature.feature -->

    </figure>
  <?php else: ?>

    <figure class="card-grid__feature__wrapper">

      <div class="card-grid__feature feature"></div><!-- .card-grid__feature.feature -->

    </figure>
  <?php endif; ?>

  <div class="card-grid__body">
    <?php

      if ($categories) :

        foreach($categories as $category) :
      ?>

        <span class="card-grid__meta"><?php echo $category->name; ?></span>
        <!-- .entry__meta_category -->

          <?php
        endforeach;

      endif;
      ?>

      <h3 class="card-grid__title">
        <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
      </h3>
      <!-- .card-grid__title -->
    </div>

    <?php get_template_part('templates/partials/post-meta'); ?>

  </div>

</div><!-- .card-grid -->