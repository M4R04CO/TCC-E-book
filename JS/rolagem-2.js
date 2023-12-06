// VARIÁVEIS //

const controls = document.querySelectorAll(".control-l"); 
const items = document.querySelectorAll(".card-l");
const maxItems = items.length;
let currentItem = 0;

controls.forEach(control => {
    control.addEventListener("click", () => {

        const isLeft = control.classList.contains("arrow-left1");

        if(isLeft){
            currentItem -= 1;
        }else{
            currentItem += 1;
        }

        if(currentItem >= maxItems){
            currentItem = 0;
        }

        if(currentItem < 0){
            currentItem = maxItems - 1;
        }

        items.forEach((item) =>
			item.classList.remove("current-item1"));

        items[currentItem].scrollIntoView({
            inline:"center",
            behavior:"smooth"	
		});
    

      	items[currentItem].classList.add("current-item1");
		
    });
});