const toTop = document.querySelector(".arrowUp");

window.addEventListener("scroll", () =>{
    if (window.pageYOffset > 100){
        toTop.classList.add("show");
    }else {
        toTop.classList.remove("show");
    }
})

toTop.addEventListener("click", () =>{
    window.scrollTo(0, 0);
})
