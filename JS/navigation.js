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
        if(elemTop <= scrolled && scrolled < elemTop + elemHeight){
            for (const elem of listItem) {
                elem.className = "nav-section";
            }
            listItem[i].className = "nav-section active";
        }
    }
})