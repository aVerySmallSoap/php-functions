let listItem = document.querySelectorAll(".nav-section");
let selection = document.querySelectorAll(".section");

for (let i = 0; i < listItem.length; i++) {
    listItem[i].addEventListener("click", ()=>{
        let activeListItem = document.querySelector(".nav-section.active");
        if(listItem[i] !== activeListItem){
            activeListItem.className = "nav-section";
            listItem[i].className = "nav-section active";
        }
        location.href = "#"+selection[i].getAttribute("id");
    })
}

window.addEventListener("scroll", () => {
    for (let i = 0; i < listItem.length; i++) {
        let scrolled = window.scrollY;
        let elemTop =  selection[i].getBoundingClientRect().top;
        let elemHeight = selection[i].offsetHeight;
        if(elemTop<= scrolled && scrolled < elemTop + elemHeight - 150){
            for (const elem of listItem) {
                elem.className = "nav-section";
            }
            for (let j = 1; j < i+1; j++) {
                if(j%2===0){
                    selection[j].style.transition = "2s ease-in";
                    selection[j].style.animation = "2s section-fadeIn";
                    selection[j].style.opacity = "1";
                }else{
                    selection[j].style.transition = "2s ease-in";
                    selection[j].style.animation = "2s section-right-fadeIn";
                    selection[j].style.opacity = "1";
                }

            }
            listItem[i].className = "nav-section active";
        }
    }
})