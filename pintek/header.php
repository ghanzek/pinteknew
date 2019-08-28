<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zlatan Pinteks</title>
      <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <section class="top-bar">
        <div class="container">
          <div class="row-header">
            <div class="social-media-icons col-xl-10 col-md-8 col-sm-8 col-6">Social</div>
            <div class="search col-xl-2 col-md-4 col-sm-4 col-6 text-right">Search</div>
          </div>
        </div>

      </section>
      <section class="menu-area">
        <div class="row-logo">
          <section class="logo">Logo</section>
          <nav class="main-menu">
          <?php wp_nav_menu( array( 'theme_location' => 'my_main_menu')); ?></nav>
        </div>

      </section>
    </header>
