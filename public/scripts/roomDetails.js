document.addEventListener("readystatechange", cargarEventos, false);
function cargarEventos(){
    const swiperRelatedRooms = new Swiper('.swiper-relatedRooms',{
        direction: 'horizontal',
        loop: true,
        spaceBetween:20,

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

}