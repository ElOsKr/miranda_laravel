document.addEventListener("readystatechange", cargarEventos, false);
function cargarEventos(){
    const swiper = new Swiper('.swiper',{
        direction: 'horizontal',
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        spaceBetween: 30,

        breakpoints:{
            1000:{
                loop: false,
                slidesPerView: 3,
            }
        }
    })

    const swiperMenu = new Swiper('.swiper-menu',{
        direction: 'horizontal',
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints:{
            1000:{
                loop: false,
                slidesPerView: 2,
            }
        }
    })

    const swiperFoodImg = new Swiper('.swiper-foodImg',{
        direction: 'horizontal',
        loop: true,
        pagination:{
            clickable: true,
            el: '.swiper-pagination',
        },
        breakpoints:{
            1000:{
                slidesPerView: 3,
            }
        }
    })

    swiperMode();
    window.addEventListener('resize', swiperMode);
}

let swiperFeatures=Swiper;
let init = false;

function swiperMode() {
    let mobile = window.matchMedia('(min-width: 0px) and (max-width: 999px)')
    let desktop = window.matchMedia('(min-width: 1000px)')

    if(mobile.matches){
        if(!init){
            init = true;
            swiperFeatures = new Swiper('.swiper-features',{
                direction: 'horizontal',
                loop: true,
                pagination:{
                    el: '.swiper-pagination-features',
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