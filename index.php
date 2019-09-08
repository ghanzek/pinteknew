<?php get_header(); ?>

<div class="content-area">
  <main>
    <section class="slide">Slide</section>
    <section class="services">Services</section>
    <section class="middle-area">
      <div class="row-middle">
        <aside class="sidebar"><?php get_sidebar( 'home' ); ?></aside>
        <div class="news">
          <?php

            if(have_posts()):
              while(have_posts()): the_post();
              get_template_part( 'template-parts/content', get_post_format() );
              endwhile;
            else:
            ?>
              <p>There are no posts</p>
          <?php endif; ?>
        </div>
      </div>

    </section>
    <section class="map">Map</section>
  </main>
</div>

<?php get_footer(); ?>
