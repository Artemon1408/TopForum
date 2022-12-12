import slider from "./modules/slider";
import burgerMenu from "./modules/burgermenu";
import pageup from "./modules/pageup";
import dropdown from "./modules/dropdown";
import modal from "./modules/modal";
import tabs from "./modules/tabs";
import forms from "./modules/forms";

window.addEventListener("DOMContentLoaded", () => {
  try {
    burgerMenu();
    slider(".promo__announce-item", ".promo__btn-prev", ".promo__btn-next");
    slider(".reviews__slider", ".reviews__btn-prev", ".reviews__btn-next");
    pageup();
    dropdown();
    modal();
    tabs(".tab_sponsors", ".sponsors__option", ".sponsors-items");
    tabs(".tab_exhibitors", ".exhibitors__option", ".exhibitors-items");
    tabs(".tab_speakers", ".speakers__option", ".speakers-items");
    forms();
  } catch (e) {}
});
