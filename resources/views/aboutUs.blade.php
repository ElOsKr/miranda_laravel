@extends('layout')
@section('title','About Us')
@section('content')
    <main class="container">
    <script src="./js/aboutUs.js"></script>
        <section class="introduction">
            <p class="introduction__caption">THE ULTIMATE LUXURY EXPERIENCE</p>
            <h1 class="introduction__title">About Us</h1>
            <div class="introduction__location">
                <p>Home | <span class="route">About</span></p>
            </div>
        </section>
        <section class="description">
            <div class="description__video">
                <video controls>
                    <source src="./assets/home/home_hotel_video.mp4" type="video/mp4">
                </video>
            </div>
            <h1 class="description__introduction">
                Hello. Our hotel has been present for over 20 years. We make the best for all our customers.
            </h1>
            <div class="description__services">
                <div class="service">
                    <img src="./assets/about/about_breakfast_icon.png" alt="breakfastIcon">
                    <p>BREAKFAST</p>
                </div>
                <div class="service">
                    <img src="./assets/about/about_airplane_icon.png" alt="airplaneIcon">
                    <p>AIRPORT PICKUP</p>
                </div>
                <div class="service">
                    <img src="./assets/about/about_guide_icon.png" alt="guideIcon">
                    <p>CITY GUIDE</p>
                </div>
                <div class="service bbq">
                    <img src="./assets/about/about_bbq_icon.png" alt="BBQIcon">
                    <p>BBQ PARTY</p>
                </div>
                <div class="service luxury">
                    <img src="./assets/about/about_room_icon.png" alt="roomIcon">
                    <p>LUXURY ROOM</p>
                </div>
            </div>
        </section>
        <section class="restaurant">
            <div class="restaurant__img">
                <img src="./assets/about/about_restaurant_photo.jpg" alt="restaurantPhoto">
            </div>
            <p class="restaurant__caption">RESTAURANT</p>
            <h1 class="restaurant__title">
                Get Restaurant Facilities & Many Other More
            </h1>
            <p class="restaurant__description">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Earum quos quo soluta adipisci id voluptatem distinctio 
                impedit eveniet dolorum, nulla omnis enim, ab esse 
                odit itaque placeat expedita ipsam? Ullam!
            </p>
            <button class="restaurant__btn">
                TAKE A TOUR
            </button>
        </section>
        <section class="facilities-about">
            <p class="facilities-about__caption">FACILITIES</p>
            <h1 class="facilities-about__title">Core Features</h1>
            <div class="facilities-about__features">
                <div class="swiper-about">
                    <div class="swiper-wrapper">
                        <div class="facilities-about__feature swiper-slide">
                            <div class="feature__header">
                                <p class="feature__number">01</p>
                                <img src="./assets/home/home_feature1_icon.png" alt="featureIcon01" class="feature__img">                        
                            </div>
                            <div class="feature__body">
                                <h2 class="feature__title">
                                    Have High Rating
                                </h2>
                                <p class="feature__description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                    Totam at nobis, ipsa velit qui aperiam debitis id quae voluptas 
                                    repudiandae.
                                </p>
                            </div>
                        </div>
                        <div class="facilities-about__feature swiper-slide">
                            <div class="feature__header">
                                <p class="feature__number">02</p>
                                <img src="./assets/home/home_feature2_icon.png" alt="featureIcon01" class="feature__img">                        
                            </div>
                            <div class="feature__body">
                                <h2 class="feature__title">
                                    Quiet Hours
                                </h2>
                                <p class="feature__description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                    Totam at nobis, ipsa velit qui aperiam debitis id quae voluptas 
                                    repudiandae.
                                </p>
                            </div>
                        </div>
                        <div class="facilities-about__feature swiper-slide">
                            <div class="feature__header">
                                <p class="feature__number">03</p>
                                <img src="./assets/home/home_feature3_icon.png" alt="featureIcon03" class="feature__img">                        
                            </div>
                            <div class="feature__body">
                                <h2 class="feature__title">
                                    Best Locations
                                </h2>
                                <p class="feature__description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                    Totam at nobis, ipsa velit qui aperiam debitis id quae voluptas 
                                    repudiandae.
                                </p>
                            </div>
                        </div>
                        <div class="facilities-about__feature swiper-slide">
                            <div class="feature__header">
                                <p class="feature__number">04</p>
                                <img src="./assets/home/home_feature4_icon.png" alt="featureIcon04" class="feature__img">                        
                            </div>
                            <div class="feature__body">
                                <h2 class="feature__title">
                                    Free Cancellation
                                </h2>
                                <p class="feature__description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                    Totam at nobis, ipsa velit qui aperiam debitis id quae voluptas 
                                    repudiandae.
                                </p>
                            </div>
                        </div>
                        <div class="facilities-about__feature swiper-slide">
                            <div class="feature__header">
                                <p class="feature__number">05</p>
                                <img src="./assets/home/home_feature5_icon.png" alt="featureIcon05" class="feature__img">                        
                            </div>
                            <div class="feature__body">
                                <h2 class="feature__title">
                                    Payment Options
                                </h2>
                                <p class="feature__description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                    Totam at nobis, ipsa velit qui aperiam debitis id quae voluptas 
                                    repudiandae.
                                </p>
                            </div>
                        </div>
                        <div class="facilities-about__feature swiper-slide">
                            <div class="feature__header">
                                <p class="feature__number">06</p>
                                <img src="./assets/home/home_feature6_icon.png" alt="featureIcon06" class="feature__img">                        
                            </div>
                            <div class="feature__body">
                                <h2 class="feature__title">
                                    Special Offers
                                </h2>
                                <p class="feature__description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                    Totam at nobis, ipsa velit qui aperiam debitis id quae voluptas 
                                    repudiandae.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <section class="counter">
            <p class="counter__caption">
                COUNTER
            </p>
            <h1 class="counter__title">
                Some Fun Facts
            </h1>
            <div class="counter__container">
                <div class="counter__fact">
                    <div class="fact__img">
                        <img src="./assets/about/about_fact_icon1.png" alt="factIcon1">
                    </div>
                    <div class="fact__text">
                        <h2>
                            8000
                        </h2>
                        <p>
                            Happy Users
                        </p>
                    </div>
                    <div class="fact__arrow">
                        <img src="./assets/about/about_arrow_icon.png" alt="arrowIcon">
                    </div>
                </div>
                <div class="counter__fact">
                    <div class="fact__img">
                        <img src="./assets/about/about_fact_icon2.png" alt="factIcon1">
                    </div>
                    <div class="fact__text">
                        <h2>
                            10M
                        </h2>
                        <p>
                            Reviews & Appriciate
                        </p>
                    </div>
                    <div class="fact__arrow">
                        <img src="./assets/about/about_arrow_icon.png" alt="arrowIcon">
                    </div>
                </div>
                <div class="counter__fact">
                    <div class="fact__img">
                        <img src="./assets/about/about_fact_icon3.png" alt="factIcon1">
                    </div>
                    <div class="fact__text">
                        <h2>
                            100
                        </h2>
                        <p>
                            Country Coverage
                        </p>
                    </div>
                    <div class="fact__arrow">
                        <img src="./assets/about/about_arrow_icon.png" alt="arrowIcon">
                    </div>
                </div>
            </div>
            <div class="counter__img swiper-about-counter">
                <div class="swiper-wrapper">
                    <img src="./assets/about/about_hotel_photo.jpg" alt="hotelPhoto" class="swiper-slide">
                    <img src="./assets/about/about_hotel_photo2.jpg" alt="hotelPhoto" class="swiper-slide">
                    <img src="./assets/about/about_hotel_photo3.jpg" alt="hotelPhoto" class="swiper-slide">
                    <img src="./assets/about/about_hotel_photo4.jpg" alt="hotelPhoto" class="swiper-slide">
                    <img src="./assets/about/about_hotel_photo5.jpg" alt="hotelPhoto" class="swiper-slide">
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
    </main>
@endsection