let listItem = document.querySelectorAll(".nav-section");

for (const elem of listItem) {
    elem.addEventListener("click", ()=>{
        let activeListItem = document.querySelector(".nav-section.active");
        if(elem !== activeListItem){
            activeListItem.className = "nav-section";
            elem.className = "nav-section active";
        }
    })
}