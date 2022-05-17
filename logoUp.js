const headerShrink = document.querySelector("header");

window.addEventListener("scroll", () =>{
    if (window.pageYOffset > 100){
    headerShrink.classList.add("shrink");
    }else {
    headerShrink.classList.remove("shrink");
    }
})
