document.addEventListener("readystatechange", cargarEventos, false);
function cargarEventos(){
    const swiperFeaturesAbout = new Swiper('.swiper-rooms',{
        pagination:{
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function(index,className){
                return '<span class="' + className + '">' + (index + 1) + "</span>";
            },
        },
    })

}