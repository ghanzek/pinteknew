<?php get_header(); ?>

<div class="content-area">
  <main>
    <section class="slide">Slide</section>
    <section class="services">Services</section>
    <section class="middle-area">
      <div class="row-middle">
        <aside class="sidebar">Sidebar</aside>
        <div class="news">
          <?php

            if(have_posts()):
              while(have_posts()): the_post();
           ?>
            <article class="post-basic">
              <h2><?php the_title(); ?></h2>
              <p>Posted in <?php echo get_the_date(); ?></p>
              <p><?php the_tags('Tags: ',', '); ?></p>
              <p><?php the_content(); ?></p>
            </article>
           <?php
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
