document.addEventListener("DOMContentLoaded", function () {
    const cardsContainer = document.getElementById("cardsContainer");
    const cards = document.querySelectorAll(".card");
    const cardWidth = cards[0].offsetWidth;
    let currentIndex = 0;
  
    // Adiciona eventos de clique aos controles
    document.getElementById("scrollLeft").addEventListener("click", scrollLeft);
    document.getElementById("scrollRight").addEventListener("click", scrollRight);
  
    function scrollLeft() {
      currentIndex = Math.max(currentIndex - 1, 0);
      updateScrollPosition();
    }
  
    function scrollRight() {
      currentIndex = Math.min(currentIndex + 1, cards.length - 1);
      updateScrollPosition();
    }
  
    function updateScrollPosition() {
      const newPosition = -currentIndex * cardWidth;
      cardsContainer.style.transform = `translateX(${newPosition}px)`;
    }
  });
  