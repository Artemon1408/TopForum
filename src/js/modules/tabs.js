const tabs = (
  headerSelector,
  tabSelector,
  contentSelector,

  display = "flex"
) => {
  try {
    const header = document.querySelector(headerSelector),
      tab = document.querySelectorAll(tabSelector),
      content = document.querySelectorAll(contentSelector);

    function hideTabContent() {
      content.forEach((item) => {
        item.style.display = "none";
      });
    }

    function showTabContent(i = 0) {
      content[i].style.display = display;
    }

    hideTabContent();
    showTabContent();

    header.addEventListener("change", (e) => {
      const target = e.target.value;

      if (target) {
        tab.forEach((item, i) => {
          if (target == item.value || target.parentNode == item.value) {
            hideTabContent();
            showTabContent(i);
          }
        });
      }
    });
  } catch (e) {}
};

export default tabs;
