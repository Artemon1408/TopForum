<footer class="footer">
      <div class="container">
        <div class="footer__content">
          <div class="footer__content-links">
            <h3 class="footer__content-title">top forum</h3>
            <a href="#" class="footer__content-link">content</a>
            <a href="#" class="footer__content-link">content</a>
            <a href="#" class="footer__content-link">Speakers</a>
            <a href="#" class="footer__content-link">Media</a>
          </div>
          <div class="footer__content-contact">
            <h3 class="footer__content-title">contact</h3>
            <div class="footer__content-descr">Top Forum Group</div>
            <div class="footer__content-descr">
              Trnavska cesta 82, 821 02 Bratislava, Slovakia
            </div>
            <div class="footer__content-descr phone"><?php the_field("phone", 2);?></div>
            <a href="mailto:nfo@topforum.com" class="footer__content-addr"
              ><?php the_field("mail", 2);?></a
            >
          </div>
          <div class="footer__content-follow">FOLLOW US</div>
        </div>
        <div class="footer__divider"></div>
        <div class="footer__rights">
          <div class="footer__rights-reserved">
            © 2014 Top Forum Group. All rights reserved.
          </div>
          <div class="footer__rights-logo">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/logo/1111.png" alt="logo" />
          </div>
        </div>
      </div>
    </footer>
    <a href="#" class="pageup">
      <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/pageup.png" alt="chevron" />
    </a>

    <div class="popup" data-modal>
      <div class="modal" id="consultation">
        <div class="modal__close">&times;</div>
        <div class="modal__subtitle">SUBSCRIBE</div>
        <div class="modal__descr">
          Lorem Ipsum is simply dummy text of the printing and typesetting
          industry.
        </div>
        <form class="feed-form feed-form_mt" action="#">
          <input
            name="name"
            placeholder="Name and surname "
            type="text"
            required
          />
          <input
            name="phone"
            placeholder="Company name "
            type="number"
            required
          />
          <input name="email" placeholder="E-mail" type="email" required />

          <button type="submit" class="btns_modal">subscribe</button>
        </form>
      </div>
    </div>
    <?php
      wp_footer();
    ?>