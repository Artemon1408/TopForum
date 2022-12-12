<?php
/*
    Template Name: Register
*/
?>

<?php get_header();?>
    <section class="register">
      <div class="container">
        <h2 class="title register__title">2 EASY STEPS TO REGISTER</h2>
        <div class="register__subtitle1">FILL IN THE FORM IN ENGLISH</div>
        <div class="register__divider"></div>
        <div class="register__subtitle2">READ THOROUGHLY TERMS&CONDITIONS</div>
      </div>

      <form action="#" class="register__form">
        <label for="choose" class="register__form-input_lbl"
          >Please, choose a conference:</label
        >
        <select
          name="choose-forum"
          id="choose"
          class="content__select register__form-choose"
        >
          <option value="Wealth TOP FORUM Israel 2016" class="content__option">
            Wealth TOP FORUM Israel 2016
          </option>
          <option value="Wealth TOP FORUM Israel 2018" class="content__option">
            Wealth TOP FORUM Israel 2018
          </option>
          <option value="Wealth TOP FORUM Israel 2020" class="content__option">
            Wealth TOP FORUM Israel 2020
          </option>
        </select>

        <div class="register__form-delegPack">
          Please choose
          <span class="register__form-underline">delegate package</span> :
        </div>
        <div class="register__form-radio">
          <input
            type="radio"
            id="standard"
            value="standard"
            name="standard"
            checked
          />
          <label for="standard">Standard</label>

          <input type="radio" id="premium" value="premium" name="standard" />
          <label for="premium">premium</label>
        </div>

        <label for="register-name" class="register__form-input_lbl"
          >Name:</label
        >
        <input
          type="text"
          name="name"
          id="register-name"
          class="register__form-input"
        />

        <label for="register-surname" class="register__form-input_lbl"
          >Surname:</label
        >
        <input
          type="text"
          name="name"
          id="register-surname"
          class="register__form-input"
        />

        <label for="register-company" class="register__form-input_lbl"
          >Company Name:</label
        >
        <input
          type="text"
          name="name"
          id="register-company"
          class="register__form-input"
        />

        <label for="business" class="register__form-input_lbl"
          >Business Area:</label
        >
        <select
          name="choose"
          id="business"
          class="content__select register__form-choose"
        >
          <option value="Forex companies top 2022" class="content__option">
            Forex companies top 2022
          </option>
          <option value="Forex companies" class="content__option">
            Forex companies
          </option>
        </select>

        <label for="register-position" class="register__form-input_lbl"
          >Position:</label
        >
        <input
          type="text"
          name="name"
          id="register-position"
          class="register__form-input"
        />

        <label for="register-mail_org" class="register__form-input_lbl"
          >E-mail (for organizers):</label
        >
        <input
          type="text"
          name="name"
          id="register-mail_org"
          class="register__form-input"
        />

        <label for="register-mail_spons" class="register__form-input_lbl"
          >E-mail (for sponsors):</label
        >
        <input
          type="text"
          name="name"
          id="register-mail_spons"
          class="register__form-input"
        />

        <label for="register-mobile" class="register__form-input_lbl"
          >Mobile Number (for organizers):</label
        >
        <input
          type="text"
          name="name"
          id="register-mobile"
          class="register__form-input"
        />

        <label for="register-country" class="register__form-input_lbl"
          >Country:</label
        >
        <input
          type="text"
          name="name"
          id="register-country"
          class="register__form-input"
        />

        <label for="register-site" class="register__form-input_lbl"
          >Web-site:</label
        >
        <input
          type="text"
          name="name"
          id="register-site"
          class="register__form-input"
        />

        <div class="register__form-input_lbl">Method of payment</div>

        <div class="register__form-payment">
          <input
            type="radio"
            id="free"
            value="payment"
            name="payment"
            checked
          />
          <label for="free">free</label>

          <input type="radio" id="visa" value="visa" name="payment" />
          <label for="visa"
            ><img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/visa.png" alt="visa"
          /></label>

          <input type="radio" id="invoice" value="invoice" name="payment" />
          <label for="invoice">Invoice</label>

          <input type="radio" id="paypal" value="paypal" name="payment" />
          <label for="paypal"
            ><img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/paypal.png" alt="paypal"
          /></label>
        </div>

        <div class="register__form-buttons">
          <input type="checkbox" name="checkbox" id="checkbox" />
          <label for="checkbox"
            ><span class="checkbox"></span> I accept
            <span class="register__form-underline">Terms&Conditions</span>
          </label>

          <button type="submit" class="btns btns__register">SUBMIT</button>
        </div>
      </form>
    </section>
<?php get_footer();?>