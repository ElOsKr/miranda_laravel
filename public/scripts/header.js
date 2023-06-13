document.addEventListener("readystatechange", cargarEventos, false);
function cargarEventos(){
    document.getElementById("openMenu").addEventListener("click",toggleMenu);
    document.getElementById("closeMenu").addEventListener("click",toggleMenu);
    window.addEventListener("scroll", hideNavBar);
    document.addEventListener("mousemove",detectMouse);
}

function toggleMenu(){
    document.getElementById("openMenu").classList.toggle("active");
    document.getElementById("closeMenu").classList.toggle("active");
    document.getElementsByClassName("header__content-menu")[0].classList.toggle("active");
}

function hideNavBar(){
    let desktop= window.matchMedia('(min-width: 1000px)')

    if(desktop){
        if(window.scrollY>200){
            document.getElementsByClassName("header__nav")[0].classList.add("transition-top")
        }else{
            document.getElementsByClassName("header__nav")[0].classList.remove("transition-top")
        }
    }
}

function detectMouse(event){

    let desktop= window.matchMedia('(min-width: 1000px)')

    let mouseY = event.clientY

    if(desktop){
        if(mouseY<200){
            document.getElementsByClassName("header__nav")[0].classList.remove("transition-top")
        }else if(window.scrollY>200){
            document.getElementsByClassName("header__nav")[0].classList.add("transition-top")
        }
    }
}