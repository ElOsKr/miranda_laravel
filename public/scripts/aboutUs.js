document.addEventListener("readystatechange", cargarEventos, false);
function cargarEventos(){

    const swiperHotels = new Swiper('.swiper-about-counter',{
        direction: 'horizontal',
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        breakpoints:{
            1000:{
                slidesPerView: 2,
            }
        }
    })

    swiperMode();
    window.addEventListener('resize', swiperMode());
}

let swiperFeatures=Swiper;
let init = false;

function swiperMode() {
    let mobile = window.matchMedia('(min-width: 0px) and (max-width: 999px)')
    let desktop = window.matchMedia('(min-width: 1000px)')

    if(mobile.matches){
        if(!init){
            init = true;
            swiperFeatures = new Swiper('.swiper-about',{
                direction: 'horizontal',
                loop: true,
                pagination:{
                    el: '.swiper-pagination',
                },
        
                breakpoints:{
                    1000:{
                        loop: false,
                        slidesPerView: 6,
                    }
                }
            })
        } else if(desktop.matches){
            swiper.destroy();
            init = false
        }
    }
}