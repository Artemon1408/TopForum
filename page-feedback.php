<?php
    /*
        Template Name: Feedback
    */ 
?>

<?php get_header();?>
    <secrion class="contacts">
      <div class="container">
        <div class="contacts__content">
          <div class="contacts__content-map">
            <iframe
              class="gmap_iframe"
              src="https://maps.google.com/maps?width=750&amp;height=440&amp;hl=en&amp;q=kiev&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
            ></iframe>
          </div>
          <div class="contacts__content-departments">
            <div class="contacts__content-item">
              <div class="contacts__content-title">DELEGATE ENQUIRIES</div>
              <div class="contacts__content-subtitle">Tony Bradley</div>
              <div class="contacts__content-mail">
                E:
                <a
                  href="mailto:tony.bradley@allanlloyds.com"
                  class="contacts__content-link"
                  >tony.bradley@allanlloyds.com</a
                >
              </div>
              <div class="contacts__content-phone">P: +421 221 025 322</div>
            </div>

            <div class="contacts__content-item">
              <div class="contacts__content-title">DELEGATE ENQUIRIES</div>
              <div class="contacts__content-subtitle">Tony Bradley</div>
              <div class="contacts__content-mail">
                E:
                <a
                  href="mailto:tony.bradley@allanlloyds.com"
                  class="contacts__content-link"
                  >tony.bradley@allanlloyds.com</a
                >
              </div>
              <div class="contacts__content-phone">P: +421 221 025 322</div>
            </div>

            <div class="contacts__content-item">
              <div class="contacts__content-title">DELEGATE ENQUIRIES</div>
              <div class="contacts__content-subtitle">Tony Bradley</div>
              <div class="contacts__content-mail">
                E:
                <a
                  href="mailto:tony.bradley@allanlloyds.com"
                  class="contacts__content-link"
                  >tony.bradley@allanlloyds.com</a
                >
              </div>
              <div class="contacts__content-phone">P: +421 221 025 322</div>
            </div>

            <div class="contacts__content-item">
              <div class="contacts__content-title">DELEGATE ENQUIRIES</div>
              <div class="contacts__content-subtitle">Tony Bradley</div>
              <div class="contacts__content-mail">
                E:
                <a
                  href="mailto:tony.bradley@allanlloyds.com"
                  class="contacts__content-link"
                  >tony.bradley@allanlloyds.com</a
                >
              </div>
              <div class="contacts__content-phone">P: +421 221 025 322</div>
            </div>
          </div>
        </div>
      </div>
      <div class="contacts__feedback">
        <div class="container">
          <div class="title contacts__feedback-title">feedback</div>
          <div class="contacts__feedback-content">
            <form action="#" class="contacts__feedback-form">
              <label for="feedback-area" class="contacts__feedback-area_lbl"
                >Your appeal</label
              >
              <textarea
                name="texarea"
                class="contacts__feedback-area"
                id="feedback-area"
              ></textarea>
              <label for="feedback-mail" class="contacts__feedback-mail_lbl"
                >How to contact you?</label
              >
              <input
                type="text"
                name="email"
                class="contacts__feedback-mail"
                id="feedback-mail"
                placeholder="E-mail"
                required
              />
              <input
                type="text"
                name="name"
                class="contacts__feedback-name"
                placeholder="Your name"
                required
              />
              <button type="submit" class="btns feedback-btn">send</button>
            </form>
            <div class="contacts__hotline">
              <div class="contacts__hotline-title">
                You can also ask questions by phone of a hot line:
              </div>
              <div class="contacts__hotline-phone">+421 221 025 322</div>
              <div class="contacts__hotline-answers">
                The answers to many questions already in our
                <a href="#" class="contacts__hotline-link">FAQ</a>
              </div>
              <div class="contacts__hotline-descr">
                All suggestions and comments are considered mandatory!
              </div>
            </div>
          </div>
        </div>
      </div>
    </secrion>
<?php get_footer();?>