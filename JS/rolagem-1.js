// VARIÁVEIS //

// const controls = document.querySelectorAll(".control-l1"); 
// const items = document.querySelectorAll(".card-l1");
// const maxItems = items.length;
// let currentItem = 0;

// controls.forEach(control => {
//     control.addEventListener("click", () => {

//         const isLeft = control.classList.contains("arrow-left2");

//         if(isLeft){
//             currentItem -= 1;
//         }else{
//             currentItem += 1;
//         }

//         if(currentItem >= maxItems){
//             currentItem = 0;
//         }

//         if(currentItem < 0){
//             currentItem = maxItems - 1;
//         }

//         items.forEach((item) =>
// 			item.classList.remove("current-item"));

//         items[currentItem].scrollIntoView({
//             inline:"center",
//             behavior:"smooth"
// 		});

//       	items[currentItem].classList.add("current-item");
		
//     });
// });

// VARIÁVEIS //
// const controls = document.querySelectorAll(".control-l1");
// const items = document.querySelectorAll(".card-l1");
// let currentItem = 0;

// function updateCarousel(direction) {
//     currentItem = (currentItem + direction + items.length) % items.length;

//     items.forEach(item => item.classList.remove("current-item"));
//     items[currentItem].scrollIntoView({ inline: "center", behavior: "smooth" });
//     items[currentItem].classList.add("current-item");
// }

// controls.forEach(control => {
//     control.addEventListener("click", () => {
//         const isLeft = control.classList.contains("arrow-left2");
//         updateCarousel(isLeft ? -1 : 1);
//     });
// });

// VARIÁVEIS //
// const controls = document.querySelectorAll(".control-l1");
// const items = document.querySelectorAll(".card-l1");
// let currentItem = 0;

// function updateCarousel(direction) {
//     currentItem = (currentItem + direction + items.length) % items.length;

//     const cardWidth = items[currentItem].offsetWidth;
//     const containerWidth = document.querySelector(".cards-container-l1").offsetWidth;

//     const scrollAmount = currentItem * cardWidth - (containerWidth - cardWidth) / 2;

//     document.querySelector(".cards-container-l1").scrollLeft = scrollAmount;

//     items.forEach(item => item.classList.remove("current-item"));
//     items[currentItem].classList.add("current-item");
// }

// controls.forEach(control => {
//     control.addEventListener("click", () => {
//         const isLeft = control.classList.contains("arrow-left2");
//         updateCarousel(isLeft ? -1 : 1);
//     });
// });


// VARIÁVEIS //
// const controls = document.querySelectorAll(".control-l1");
// const items = document.querySelectorAll(".card-l1");
// let currentItem = 0;

// function updateCarousel(direction) {
//     currentItem = (currentItem + direction + items.length) % items.length;

//     const cardWidth = items[currentItem].offsetWidth;
//     const containerWidth = document.querySelector(".cards-galeria").offsetWidth;

//     const scrollAmount = currentItem * cardWidth - (containerWidth - cardWidth) / 2;

//     document.querySelector(".cards-galeria").scrollLeft = scrollAmount;

//     items.forEach(item => item.classList.remove("current-item"));
//     items[currentItem].classList.add("current-item");
// }

// controls.forEach(control => {
//     control.addEventListener("click", () => {
//         const isLeft = control.classList.contains("arrow-left2");
//         updateCarousel(isLeft ? -1 : 1);
//     });
// });

// VARIÁVEIS //
// const controls = document.querySelectorAll(".control-l1");
// const items = document.querySelectorAll(".card-l1");
// let currentItem = 0;

// function updateCarousel(direction) {
//     currentItem = (currentItem + direction + items.length) % items.length;

//     const cardWidth = items[currentItem].offsetWidth;
//     const container = document.querySelector(".cards-galeria");

//     container.scrollLeft = currentItem * cardWidth;

//     items.forEach(item => item.classList.remove("current-item"));
//     items[currentItem].classList.add("current-item");
// }

// controls.forEach(control => {
//     control.addEventListener("click", () => {
//         const isLeft = control.classList.contains("arrow-left2");
//         updateCarousel(isLeft ? -1 : 1);
//     });
// });


function initializeCarousel(controlsSelector, itemsSelector) {
    const controls = document.querySelectorAll(controlsSelector);
    const items = document.querySelectorAll(itemsSelector);
    const maxItems = items.length;
    let currentItem = 0;
  
    controls.forEach(control => {
      control.addEventListener("click", () => {
        const isLeft = control.classList.contains("arrow-left2");
  
        if (isLeft) {
          currentItem -= 1;
        } else {
          currentItem += 1;
        }
  
        if (currentItem >= maxItems) {
          currentItem = 0;
        }
  
        if (currentItem < 0) {
          currentItem = maxItems - 1;
        }
  
        items.forEach(item => item.classList.remove("current-item"));
  
        items[currentItem].scrollIntoView({
          inline: "center",
          behavior: "smooth",
        });
  
        items[currentItem].classList.add("current-item");
      });
    });
  }
  
  // Inicializar carrosséis
  initializeCarousel(".control-l1", ".card-l1");
  initializeCarousel(".control-l2", ".card-l2");
  