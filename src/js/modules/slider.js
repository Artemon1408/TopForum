const slider = (slides, prev, next) => {
  try {
    let slideIndex = 1;

    const items = document.querySelectorAll(slides),
      dots = document.querySelectorAll(".reviews__dot");

    function showSlides(n) {
      if (n > items.length) {
        slideIndex = 1;
      }

      if (n < 1) {
        slideIndex = items.length;
      }

      items.forEach((item) => {
        item.classList.add("animate__animated");
        item.style.display = "none";

        item.addEventListener("touchstart", handleTouchStart);
        item.addEventListener("touchmove", handleTouchMove);
      });

      items[slideIndex - 1].style.display = "flex";

      dots.forEach((dot) => {
        dot.classList.remove("active");
        dot.classList.add("animate__animated");
      });

      dots[slideIndex - 1].classList.add("active");
    }

    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides((slideIndex += n));
    }

    let firstPos = null;

    function handleTouchStart(e) {
      e.preventDefault();

      const firstTouch = e.touches[0];
      firstPos = firstTouch.clientX;
    }

    function handleTouchMove(e) {
      e.preventDefault();

      if (!firstPos) {
        return false;
      }

      let lastPos = e.touches[0].clientX;
      let xDiff = lastPos - firstPos;

      if (xDiff > 0) {
        plusSlides(-1);
        items[slideIndex - 1].classList.remove("animate__slideInRight");
        items[slideIndex - 1].classList.add("animate__slideInLeft");

        dots[slideIndex - 1].classList.add("active");
      }

      if (xDiff < 0) {
        plusSlides(1);
        items[slideIndex - 1].classList.remove("animate__slideInLeft");
        items[slideIndex - 1].classList.add("animate__slideInRight");

        dots[slideIndex - 1].classList.add("active");
      }

      firstPos = null;
    }

    try {
      const prevBtn = document.querySelector(prev),
        nextBtn = document.querySelector(next);

      prevBtn.addEventListener("click", () => {
        plusSlides(-1);
        items[slideIndex - 1].classList.remove("animate__slideInRight");
        items[slideIndex - 1].classList.add("animate__slideInLeft");

        dots[slideIndex - 1].classList.add("active");
      });

      nextBtn.addEventListener("click", () => {
        plusSlides(1);
        items[slideIndex - 1].classList.remove("animate__slideInLeft");
        items[slideIndex - 1].classList.add("animate__slideInRight");

        dots[slideIndex - 1].classList.add("active");
      });
    } catch (e) {}
  } catch (e) {}
};

export default slider;
