const dropdown = () => {
  try {
    const btns = document.querySelectorAll(".menu__dropdown"),
      sponCont = document.querySelector(".content-sponsors"),
      exhibCont = document.querySelector(".content-exhibitors"),
      speakCont = document.querySelector(".content-speakers"),
      mediaCont = document.querySelector(".content-media"),
      content = document.querySelectorAll(".menu__dropdown-content");

    function showDropDown() {
      btns.forEach((btn) => {
        btn.addEventListener("click", (e) => {
          const target = e.target;

          if (target.matches(".drop_sponsors")) {
            sponCont.classList.toggle("sponsors-active");
          }

          if (target.matches(".drop_exhibitors")) {
            exhibCont.classList.toggle("exhibitors-active");
          }

          if (target.matches(".drop_speakers")) {
            speakCont.classList.toggle("speakers-active");
          }

          if (target.matches(".drop_media")) {
            mediaCont.classList.toggle("media-active");
          }
        });
      });
    }

    function closeAllDrop() {
      window.addEventListener("click", (e) => {
        const target = e.target;

        if (!target.matches(".menu__dropdown")) {
          sponCont.classList.remove("sponsors-active");
          exhibCont.classList.remove("exhibitors-active");
          speakCont.classList.remove("speakers-active");
          mediaCont.classList.remove("media-active");
        }
      });
    }

    function closeDropDown() {
      btns.forEach((btn) => {
        btn.addEventListener("click", (e) => {
          const target = e.target;

          if (!target.matches(".drop_sponsors")) {
            sponCont.classList.remove("sponsors-active");
          }

          if (!target.matches(".drop_exhibitors")) {
            exhibCont.classList.remove("exhibitors-active");
          }

          if (!target.matches(".drop_speakers")) {
            speakCont.classList.remove("speakers-active");
          }

          if (!target.matches(".drop_media")) {
            mediaCont.classList.remove("media-active");
          }
        });
      });
    }

    showDropDown();
    closeDropDown();
    closeAllDrop();
  } catch (e) {}
};
export default dropdown;
