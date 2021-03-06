<?php
  $image = get_the_post_thumbnail();
  $terms_list = [];
  $treatments = get_the_terms( get_the_ID(), 'effected_areas');

  foreach($treatments as $treatment) {
    $term_list[] = $treatment->slug;
  }
?>
<div class="card__wrapper col col-sm-6of12 col-md-4of12 col-lg-4of12 col-xl-4of12" data-terms="<?php echo implode(' ', $term_list); ?>">

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

      if ($treatments) :

        foreach($treatments as $treatment) :
      ?>

        <span class="card-grid__meta"><?php echo $treatment->name; ?></span>
        <!-- .card-grid__meta -->

          <?php
        endforeach;

      endif;
      ?>

      <h3 class="card-grid__title">
        <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
      </h3>
      <!-- .card-grid__title -->
    </div>

    <?php get_template_part('templates/partials/condition-meta'); ?>

  </div>

</div><!-- .card-grid -->