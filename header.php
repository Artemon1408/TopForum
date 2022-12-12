<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="apple-touch-icon"
      sizes="57x57"
      href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-57x57.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="60x60"
      href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-60x60.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="72x72"
      href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-72x72.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-76x76.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-114x114.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="120x120"
      href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-120x120.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="144x144"
      href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-144x144.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="152x152"
      href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-152x152.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon/apple-icon-180x180.png"
    />
    <link
      rel="icon"
      type="images/png"
      sizes="192x192"
      href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon/android-icon-192x192.png"
    />
    <link
      rel="icon"
      type="images/png"
      sizes="32x32"
      href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="images/png"
      sizes="96x96"
      href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon/favicon-96x96.png"
    />
    <link
      rel="icon"
      type="images/png"
      sizes="16x16"
      href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="<?php echo bloginfo('template_url'); ?>/assets/images/favicon/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-Tileimages" content="/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Primary Meta Tags -->

    <meta name="title" content="Meta Tags — Preview, Edit and Generate" />
    <meta
      name="description"
      content="With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!"
    />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://metatags.io/" />
    <meta
      property="og:title"
      content="Meta Tags — Preview, Edit and Generate"
    />
    <meta
      property="og:description"
      content="With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!"
    />
    <meta
      property="og:images"
      content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png"
    />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_images" />
    <meta property="twitter:url" content="https://metatags.io/" />
    <meta
      property="twitter:title"
      content="Meta Tags — Preview, Edit and Generate"
    />
    <meta
      property="twitter:description"
      content="With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!"
    />
    <meta
      property="twitter:images"
      content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png"
    />

    
    <?php
    wp_head();
    ?>
    <title><?php bloginfo('name'); echo ' | '; bloginfo('description');?></title>
  </head>
  <body>
    <header class="header">
      <div class="header__navigation">
        <div class="container">
          <div class="header__navbar">
             <nav class="menu">

             


              <div class="menu__dropdown drop_sponsors">Sponsors</div>
              
                <?php
                    wp_nav_menu([
                        'menu'            => 'Sponsors',
                        'container'       => false,
                        'menu_class'      => 'menu__dropdown-content content-sponsors',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul class="menu__dropdown-content content-sponsors">%3$s</ul>',
                        'depth'           => 1
                    ]);
                ?>

              

              <div class="menu__dropdown drop_exhibitors">Exhibitors</div>
              <?php
                    wp_nav_menu([
                        'menu'            => 'Exhibitors',
                        'container'       => false,
                        'menu_class'      => 'menu__dropdown-content content-exhibitors',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul class="menu__dropdown-content content-exhibitors">%3$s</ul>',
                        'depth'           => 1
                    ]);
                ?>
              

              <div class="menu__dropdown drop_speakers">Speakers</div>
              <?php
                    wp_nav_menu([
                        'menu'            => 'Speakers',
                        'container'       => false,
                        'menu_class'      => 'menu__dropdown-content content-speakers',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul class="menu__dropdown-content content-speakers">%3$s</ul>',
                        'depth'           => 1
                    ]);
                ?>
              

              <div class="menu__dropdown drop_media">Media</div>
              <?php
                    wp_nav_menu([
                        'menu'            => 'Media',
                        'container'       => false,
                        'menu_class'      => 'menu__dropdown-content content-media',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul class="menu__dropdown-content content-media">%3$s</ul>',
                        'depth'           => 1
                    ]);
                ?>
              
            </nav>

            <button class="btns btns__mc2 btn_sub">top forum club</button>
          </div>
          <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="header__descr">
          <div class="header__descr-items">
            <div class="header__descr-logo">
              <?php the_custom_logo(); ?>
            </div>
            <div class="header__descr-links">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/event.png" alt="event" />
              <a href="#" class="header__descr-link">upcoming events</a>
            </div>

            <div class="header__descr-links">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/contact.png" alt="contact" />
              <a href="#" class="header__descr-link">contacts</a>
            </div>
          </div>

           <?php
                    wp_nav_menu([
                        'menu'            => 'Register',
                        'container'       => false,
                        'menu_class'      => 'btns btns__mc1',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<button class="btns btns__mc1">%3$s</button>',
                        'depth'           => 1
                    ]);
                ?>
          
        </div>
      </div>
    </header>