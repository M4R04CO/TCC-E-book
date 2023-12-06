document.addEventListener("DOMContentLoaded", function () {
    const scrollIndicator = document.querySelector(".scroll-indicator");
  
    window.addEventListener("scroll", function () {
      if (window.scrollY > 100) {
        scrollIndicator.classList.add("active");
      } else {
        scrollIndicator.classList.remove("active");
      }
    });
  
    scrollIndicator.addEventListener("click", function () {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  });
  