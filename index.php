<?php
  get_header();
?>
    <section class="promo">
      <div class="container">
        <div class="promo__announce">
          <button class="promo__btn-prev">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/promo_prev.png" alt="prev" />
          </button>
           <?php
            $posts = get_posts(array(
                'numberposts' => -1,
                'category_name'    => 'promo-slider',
                'orderby'     => 'date',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));

            foreach ($posts as $post) {
                setup_postdata($post);
            ?>

          <div class="promo__announce-item">
          

            <div class="promo__announce-content">
              <div class="promo__announce-logo">
                <img src="<?php the_field('promo_slide_img'); ?>" alt="logo" />
              </div>
              <div class="promo__announce-descr">
                <div class="promo__announce-title">
                  <?php the_title();?>
                </div>
                <div class="promo__announce-text">
                  <?php the_field("promo_slide_descr")?>
                </div>
                <div class="promo__announce-subtitle"><?php the_field("promo_slide_subtitle")?></div>
              </div>
            </div>
          
            


          </div>
              <?php
            }

            wp_reset_postdata(); // сброс
            ?>  
          
          <button class="promo__btn-next">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/promo_next.png" alt="prev" />
          </button>
        </div>
      </div>
    </section>
    <section class="subscribe">
      <div class="container">
        <div class="subscribe__descr">
          TOP FORUM is an international business communication company. Our main
          idea is to take your business to the next level. To make this
          transformation happen you need to have a platform to meet hundreds of
          new clients and specialists, become aware of new trends and soak up
          fresh ideas from best experts. It's what we call the forum impact.
          Face to face communication with like-minded professionals is a
          personal experience which leads your business to a great success. TOP
          FORUM business conferences give you the unique opportunity to set new
          goals, open your new strategy and implement the campaigns that will
          give you superiority in your industry. Just invest in your future.
        </div>
        <div class="subscribe__items">
          <div class="subscribe__item">
            <div class="subscribe__item-logo">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/money.png" alt="logo" />
            </div>
            <div class="subscribe__item-title">
              FOR FUTURE content AND content
            </div>
            <div class="subscribe__item-text">
              TOP FORUM conferences are the best route to raise brand awareness,
              get pre- and after-event promotion among your target audience,
              confirm the highest level of your business, present your company
              services and catch the interest of highly qualified prospects and
              as a result to find new clients
            </div>
            <button class="btns btns__mc2 btns__sub">Learn more</button>
            <div class="subscribe__item-subtitle">
              Wealth TOP FORUM Israel 2016
            </div>
          </div>

          <div class="subscribe__item">
            <div class="subscribe__item-logo">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/men.png" alt="logo" />
            </div>
            <div class="subscribe__item-title">BECOME A DELEGATE</div>
            <div class="subscribe__item-text">
              TOP FORUM business conferences and events serve as the best
              platform to learn useful insights and new trends in your business
              area, engage with peers from the global community and choose the
              best available offer, and all that in one place, so your
              participation will safe dozens of working hours.
            </div>
            <button class="btns btns__mc2 btns__sub">Learn more</button>
            <div class="subscribe__item-subtitle">
              Wealth TOP FORUM Israel 2016
            </div>
          </div>

          <div class="subscribe__item">
            <div class="subscribe__item-logo">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/speaker.png" alt="logo" />
            </div>
            <div class="subscribe__item-title">FOR FUTURE SPEAKERS</div>
            <div class="subscribe__item-text">
              We thoroughly choose the key experts to make a speech at TOP FORUM
              international conferences and our audience obtains the most
              up-to-date information about new trends on the market. Should you
              like to share useful insights, become a speaker or to take part in
              panel discussion, please contact us.
            </div>
            <button class="btns btns__mc2 btns__sub">Learn more</button>
            <div class="subscribe__item-subtitle">
              Wealth TOP FORUM Israel 2016
            </div>
          </div>
        </div>
        <div class="subscribe__buttons">
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
          
          <button class="btns btns__blck btn_sub">subscribe</button>
        </div>
      </div>
    </section>
    <section class="reviews">
      <div class="container">
        <div class="title reviews__title">CUSTOMER REVIEWS</div>
      
        <?php
            $posts = get_posts(array(
                'numberposts' => -1,
                'category_name'    => 'reviews-slider',
                'orderby'     => 'date',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));

            foreach ($posts as $post) {
                setup_postdata($post);
            ?>

        <div class="reviews__slider">

       
          
          <div class="reviews__item">
            <div class="reviews__item-photo">
              <img src="<?php the_field('reviews_img1'); ?>" alt="photo" />
            </div>
            <div class="reviews__content">
              <div class="reviews__content-title"><?php the_field('reviews_title1'); ?></div>
              <div class="reviews__content-subtitle"><?php the_field('reviews_subtitle1'); ?></div>
              <div class="reviews__content-descr">
                <?php the_field('reviews_descr1'); ?>
              </div>
            </div>
          </div>

          <div class="reviews__item">
            <div class="reviews__item-photo">
              <img src="<?php the_field('reviews_img2'); ?>" alt="photo" />
            </div>
            <div class="reviews__content">
              <div class="reviews__content-title">
                <?php the_field('reviews_title2'); ?>
              </div>
              <div class="reviews__content-subtitle"><?php the_field('reviews_subtitle2'); ?></div>
              <div class="reviews__content-descr">
                <?php the_field('reviews_descr2'); ?>
              </div>
            </div>
          </div>

         
        </div>

          <?php
            }

            wp_reset_postdata(); // сброс
            ?> 

       

        

        
        

        

        
        <div class="reviews__dots">
          <span class="reviews__dot"></span>
          <span class="reviews__dot active"></span>
          <span class="reviews__dot"></span>
        </div>
      </div>
      <button class="reviews__btn-prev">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/reviews_prev.png" alt="prev" />
      </button>
      <button class="reviews__btn-next">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/reviews_next.png" alt="next" />
      </button>
    </section>
    <section class="video">
      <div class="container">
        <h2 class="title video__title">Promo video</h2>
        <div class="video__player">
          <!-- <iframe id="ytplayer" type="text/html" width="640" height="360"
                  src="http://www.youtube.com/embed/M7lc1UVf-VE?autoplay=1&origin=http://example.com"
                  frameborder="0"/> -->
        </div>
      </div>
    </section>

    <section class="clients">
      <div class="container">
        <h2 class="title clients__title">OUR CLIENTS</h2>
        <div class="clients__content">
          <div class="clients__content-item">
            <img src="<?php  the_field('clients1'); ?>" alt="image" />
          </div>
          <div class="clients__content-item">
            <img src="<?php  the_field('clients2'); ?>" alt="image" />
          </div>
          <div class="clients__content-item">
            <img src="<?php  the_field('clients3'); ?>" alt="image" />
          </div>
          <div class="clients__content-item">
            <img src="<?php  the_field('clients4'); ?>" alt="image" />
          </div>
          <div class="clients__content-item">
            <img src="<?php  the_field('clients5'); ?>" alt="image" />
          </div>
          <div class="clients__content-item">
            <img src="<?php  the_field('clients6'); ?>" alt="image" />
          </div>
        </div>
      </div>
    </section>

    

    

    <?php
      get_footer();
    ?>
  </body>
</html>
