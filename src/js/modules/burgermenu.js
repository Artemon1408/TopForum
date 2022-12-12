const burgerMenu = () => {
  try {
    const menu = document.body.querySelector(".menu"),
      menuItem = document.body.querySelectorAll(".promo__nav-item"),
      hamburger = document.body.querySelector(".hamburger");

    hamburger.addEventListener("click", () => {
      hamburger.classList.toggle("hamburger_active");
      menu.classList.toggle("menu-active");
      if (hamburger.classList.contains("hamburger_active")) {
        document.body.style.overflow = "hidden";
      } else {
        document.body.style.overflow = "";
      }
    });

    menuItem.forEach((item) => {
      item.addEventListener("click", () => {
        hamburger.classList.toggle("hamburger_active");
        menu.classList.toggle("menu-active");
        if (menu.classList.contains("menu-active")) {
          document.body.style.overflow = "hidden";
        } else {
          document.body.style.overflow = "";
        }
      });
    });
  } catch (e) {}
};

export default burgerMenu;
