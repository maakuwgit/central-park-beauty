<?php
  //Tags & Cats
  $positions      = get_the_terms(get_the_ID(), 'team_position');
  $specialties    = get_the_terms(get_the_ID(), 'team_tag');
  $education      = get_the_terms(get_the_ID(), 'team_education');

  //ACFs
  $page_for_team  = get_field('team_archive_page', 'option');
  $quote          = get_field('member_quote');
  $testimonials   = get_field('member_testimonials');

  if( $page_for_team ){
    $parent = get_post($page_for_team);
    $back_href = $parent->guid;
  }else{
    $back_href = 'javascript:window.history.back();';
  }
?>
<article <?php post_class( 'single-team__article salmon' ); ?>>

  <nav class="container row start relative">

    <a class="icon-link" href="<?php echo $back_href; ?>">
      <svg class="icon icon-arrow-left">
        <use xlink:href="#icon-arrow-left"></use>
      </svg>
      <span>Back</span>
    </a>

  </nav>

  <div class="container row start relative">

    <div class="single-team__col1 col col-md-6of12 col-offset-lg-2of12 col-lg-4of12 col-offset-xl-1of12 col-xl-5of12">

      <header class="single-team__header">

        <h1 class="single-team__title"><span class="rotated">About</span><?php the_title(); ?></h1>
        <!-- .single-team__title -->

        <?php if( has_post_thumbnail() ) : ?>
        <figure class="single-team__thumb__image" data-backgrounder>

          <div class="feature">
            <?php the_post_thumbnail(); ?>
          </div>

        </figure>
        <!-- .single-team__thumb__image -->

        <?php endif; ?>

      </header>
      <!-- .single-team__header -->

      <div class="single-team__content">
      <?php the_content(); ?>
      </div>

    </div>
    <!-- .single-team__col1.col.col-md-6of12.col-offset-lg-1of12.col-lg-5of12.col-offset-xl-1of12.col-xl-5of12 -->

    <div class="single-team__col2 col col-md-6of12 col-offset-lg-1of12 col-lg-4of12 col-offset-xl-1of12 col-xl-5of12">

      <?php if( has_post_thumbnail() ) : ?>
      <figure class="single-team__thumb__image" data-backgrounder>

        <div class="feature">
          <?php the_post_thumbnail(); ?>
        </div>

      </figure>
      <!-- .single-team__thumb__image -->

      <?php endif; ?>

      <div class="single-team__details">

      <?php if ($positions) : ?>

        <h3>Position</h3>

        <?php foreach($positions as $position) : ?>

        <p class="single-team__meta"><?php echo $position->name; ?></p>
        <!-- .single-team__meta -->

        <?php endforeach; ?>

      <?php endif;?>

      <?php if ($specialties) : ?>

        <?php foreach($specialties as $specialty) : ?>

        <p class="single-team__meta"><?php echo $specialty->name; ?></p>
        <!-- .single-team__meta -->

        <?php endforeach; ?>

      <?php endif; ?>

      <?php if ($education) : ?>

        <h3>Education</h3>

        <?php foreach($education as $school) : ?>

        <p class="single-team__meta"><?php echo $school->name; ?></p>
        <!-- .single-team__meta -->

        <?php endforeach; ?>

      <?php endif;?>

      <?php if ($quote) : ?>

        <blockquote class="single-team__quote">
          <?php echo format_text($quote); ?>
        </blockquote>

      <?php endif; ?>
      </div>
      <!-- .single-team__details -->

    </div>
    <!-- .single-team__col2.col.col-md-6of12.col-offset-lg-1of12.col-lg-5of12.col-offset-xl-1of12.col-xl-5of12 -->

  </div><!-- .container.row -->

</article>
