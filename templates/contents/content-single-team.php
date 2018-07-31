<article <?php post_class( 'single-team__article salmon' ); ?>>

  <div class="container row relative">

    <div class="col col-md-6of12 col-offset-lg-1of12 col-lg-5of12 col-offset-xl-1of12 col-xl-5of12">

      <header class="single-team__header">

        <h1 class="single-team__title"><span class="rotated">About</span><?php the_title(); ?></h1>
        <!-- .single-team__title -->

      </header>
      <!-- .single-team__header -->

      <div class="single-team__content">
        <?php the_content(); ?>
      </div>

    </div>
    <!-- .col.col-md-6of12.col-offset-lg-1of12.col-lg-5of12.col-offset-xl-1of12.col-xl-5of12 -->

    <div class="col col-md-6of12 col-offset-lg-1of12 col-lg-5of12 col-offset-xl-1of12 col-xl-5of12">

      <?php if( has_post_thumbnail() ) : ?>
      <figure class="single-team__thumb__image" data-backgrounder>

        <div class="feature">
          <?php the_post_thumbnail(); ?>
        </div>

      </figure>
      <!-- .single-team__thumb__image -->

      <?php endif; ?>

      <div class="single-team__details">
      </div>
      <!-- .single-team__details -->

    </div>
    <!-- .col.col-md-6of12.col-offset-lg-1of12.col-lg-5of12.col-offset-xl-1of12.col-xl-5of12 -->

  </div><!-- .container.row -->

</article>
