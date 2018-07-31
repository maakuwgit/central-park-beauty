<?php $image = get_the_post_thumbnail(); ?>
<div class="card__wrapper col col-sm-6of12 col-md-4of12 col-lg-4of12 col-xl-4of12">

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
      $positions = get_the_terms(get_the_ID(), 'team_position');

      if ($positions) :

        foreach($positions as $position) :
      ?>

        <span class="card-grid__meta"><?php echo $position->name; ?></span>
        <!-- .card-grid__meta -->

          <?php
        endforeach;

      endif;
      ?>

      <h3 class="card-grid__title">
        <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
      </h3>
      <!-- .card-grid__title -->

      <?php
        $specialties = get_the_terms(get_the_ID(), 'team_tag');

        if ($specialties) :
      ?>
        <p class="card-grid__tags">
        <?php foreach($specialties as $specialty) : ?>

          <span class="card-grid__caption"><?php echo $specialty->name; ?></span>
          <!-- .card-grid__meta -->

        <?php endforeach; ?>
        </p>
      <!-- .card-grid__title -->
      <?php endif; ?>
    </div>

    <?php get_template_part('templates/partials/team-meta'); ?>

  </div>

</div><!-- .card-grid -->