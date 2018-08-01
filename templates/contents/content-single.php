<article <?php post_class(); ?>>

  <div class="post container">

    <div class="row start">

      <header class="post__header col col-10of12 white">

        <svg class="post__headline icon icon-BLOG">
          <use xlink:href="#icon-BLOG"></use>
        </svg>
        <!-- .post__headline icon icon-BLOG -->

        <time class="published post__supertitle" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
        <!-- . -->
        <h1 class="post__title"><?php the_title(); ?></h1>
        <!-- . -->

      </header>
      <!-- .post__header col col-10of12 white -->

    </div>

    <div class="row centered">

      <div class="post__content relative col col-md-6of12 col-offset-lg-1of12 col-lg-6of12 col-offset-lg-1of12 col-xl-6of12">
        <?php the_content(); ?>
      </div>

      <div class="post__related_posts col col-md-3of12 col-lg-2of12 col-xl-2of12">
      </div>

    </div>

  </div>
  <!-- /.post -->
</article>
