@extends('layout')
@section('title','Home')
@section('content')
    <main class="container">
    <script src="./js/index.js"></script>
        <section class="introduction">
            <p class="introduction__caption">THE ULTIMATE LUXURY EXPERIENCE</p>
            <h1 class="introduction__title mainPage">The Perfect Base For You</h1>
            <button class="introduction__btn btn-tour">TAKE A TOUR</button>
            <button class="introduction__btn btn-learn">LEARN MORE</button>
        </section>
        <form class="availability" action="rooms" method="get">
            <div class="availability__arrival">
                <label for="arrivalDate">Arrival Date</label>
                <input type="date" name="arrivalDate" id="arrivalDate" class="availability__input" required>
            </div>
            <div class="availability__departure">
                <label for="departureDate">LeDeparture Date</label>
                <input type="date" name="departureDate" id="departureDate" class="availability__input" required>
            </div>
            <input type="submit" class="availability__btn" value="CHECK AVAILABILITY" />
        </form>
        <section class="aboutUs">
            <div class="aboutUs__introduction">
                <p class="aboutUs__caption">ABOUT US</p>
                <h1 class="aboutUs__title">Discover Our Underground.</h1>
                <p class="aboutUs__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quis magnam perferendis exercitationem fugiat sed labore officia, 
                    consectetur vitae molestiae omnis placeat, facere praesentium ad 
                    explicabo itaque sint maxime eaque fugit quasi dolor delectus. 
                    Expedita sit, eius laboriosam voluptate aspernatur quae fugiat hic 
                    doloremque debitis numquam veritatis ipsa commodi quia aut.</p>
                <button class="aboutUs__btn">BOOK NOW</button>                
            </div>
            <div class="aboutUs__card team">
                <div class="card__img">
                    <img src="./assets/home/home_team_img.png" alt="team">
                </div>
                <div class="card__body">
                    <img src="./assets/home/home_team_icon_background.png" alt="img_background" class="img__background">
                    <img src="./assets/home/home_team_icon-colored.png" alt="teamIconColored" class="img__colored">
                    <h2 class="card__title">Strong Team</h2>
                    <p class="card__description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, amet.
                    </p>
                </div>
            </div>
            <div class="aboutUs__card luxuryRoom">
                <div class="card__img">
                    <img src="./assets/home/home_luxuryRoom_img.png" alt="luxuryRoom">
                </div>
                <div class="card__body colored">
                    <img src="./assets/home/home_luxuryRoom_icon.png" alt="teamIconColored">
                    <h2 class="card__title">Luxury Room</h2>
                    <p class="card__description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, amet.
                    </p>
                </div>
            </div>
        </section>
        <section class="rooms">
            <p class="rooms__caption">ROOMS</p>
            <h1 class="rooms__title">Hand Picked Rooms</h1>
            <div class="swiper">
                <div class="swiper-wrapper">
                        @for($i = 0; $i<count($rooms); $i++)
                        <div class="rooms__room swiper-slide">
                            <div class="room__options-home">
                                <img src="./assets/rooms/rooms_room_bed.png" alt="bedIcon">
                                <img src="./assets/rooms/rooms_room_wifi.png" alt="wifiIcon">
                                <img src="./assets/rooms/rooms_room_car.png" alt="carIcon">
                                <img src="./assets/rooms/rooms_room_winter.png" alt="winterIcon">
                                <img src="./assets/rooms/rooms_room_gym.png" alt="gymIcon">
                                <img src="./assets/rooms/rooms_room_noSmoking.png" alt="noSmokingIcon">
                                <img src="./assets/rooms/rooms_room_cocktail.png" alt="cocktailIcon">
                            </div>
                            <div class="room__img">
                                <a href="roomDetails?id={{$rooms[$i]['room_id']}}">
                                    <img src={{$rooms[$i]['room_photo']}} alt={{$rooms[$i]['room_type']}}> 
                                </a>                                
                            </div>
                            <div class="room__info">
                                <h1 class="room__title">
                                    {{$rooms[$i]['room_type']}}
                                </h1>
                                <p class="room__description">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim facere, fugiat qui magni mollitia quaerat culpa dolore dolor. Porro, animi!
                                </p>
                                <p class="room__price">
                                    ${{$rooms[$i]["room_price"] - round($rooms[$i]["room_price"] * ($rooms[$i]["room_offer"]/100),0)}}<span class="room__price-mini">/Night</span>
                                </p>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>
        <section class="video">
            <div class="video__text">
                <p class="video__caption">INTRO VIDEO</p>
                <h1 class="video__title">Meet With Our Luxury Place.</h1>
                <p class="video__description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores optio omnis, maxime porro laudantium tenetur minima, 
                    eaque, pariatur quam amet at ducimus fuga exercitationem sed veritatis!
                </p>
            </div>
            <div class="video__container">
                <video controls>
                    <source src="./assets/home/home_hotel_video.mp4" type="video/mp4">
                </video>
            </div>
            <button class="video__btn">BOOK NOW</button>
        </section>
        <section class="facilities">
            <p class="facilities__caption">FACILITIES</p>
            <h1 class="facilities__title">Core Features</h1>
            <div class="facilities__features">
                <div class="swiper-features">
                    <div class="swiper-wrapper">
                        <div class="facilities__feature swiper-slide">
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
                        <div class="facilities__feature swiper-slide">
                            <div class="feature__header">
                                <p class="feature__number">02</p>
                                <img src="./assets/home/home_feature2_icon.png" alt="featureIcon02" class="feature__img">                        
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
                        <div class="facilities__feature swiper-slide">
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
                        <div class="facilities__feature swiper-slide">
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
                        <div class="facilities__feature swiper-slide">
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
                        <div class="facilities__feature swiper-slide">
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
                    <div class="swiper-pagination-features"></div>
                </div>
            </div>
        </section>
        <section class="menu">
            <div class="menu__icon">
                <img src="./assets/home/home_menu_icon.png" alt="menuIcon">
            </div>
            <p class="menu__caption">MENU</p>
            <h1 class="menu__title">Our Foods Menu</h1>
            <div class="menu__foods">
                <div class="swiper-menu">
                    <div class="swiper-wrapper">
                        <div class="menu__selection1 swiper-slide">
                            <div class="menu__food">
                                <div class="food__img">
                                    <img src="./assets/home/home_menu_eggsbacon.png" alt="eggsBacon">
                                </div>
                                <div class="food__content">
                                    <h3 class="food__title">
                                        Eggs & Bacon
                                    </h3>
                                    <p class="food__description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    </p>
                                </div>
                            </div>
                            <div class="menu__food">
                                <div class="food__img">
                                    <img src="./assets/home/home_menu_teacoffe.png" alt="teaCoffee">
                                </div>
                                <div class="food__content">
                                    <h3 class="food__title">
                                        Tea or Coffee
                                    </h3>
                                    <p class="food__description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    </p>
                                </div>
                            </div>
                            <div class="menu__food">
                                <div class="food__img">
                                    <img src="./assets/home/home_menu_chiaoatmeal.png" alt="chiaOatmeal">
                                </div>
                                <div class="food__content">
                                    <h3 class="food__title">
                                        Chia Oatmeal
                                    </h3>
                                    <p class="food__description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="menu__selection2 swiper-slide">
                            <div class="menu__food">
                                <div class="food__img">
                                    <img src="./assets/home/home_menu_fruit.png" alt="fruits">
                                </div>
                                <div class="food__content">
                                    <h3 class="food__title">
                                        Fruit Parfait
                                    </h3>
                                    <p class="food__description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    </p>
                                </div>
                            </div>
                            <div class="menu__food">
                                <div class="food__img">
                                    <img src="./assets/home/home_menu_marmalade.png" alt="marmalade">
                                </div>
                                <div class="food__content">
                                    <h3 class="food__title">
                                        Marmalade Selection
                                    </h3>
                                    <p class="food__description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    </p>
                                </div>
                            </div>
                            <div class="menu__food">
                                <div class="food__img">
                                    <img src="./assets/home/home_menu_cheese.png" alt="cheesePlate">
                                </div>
                                <div class="food__content">
                                    <h3 class="food__title">
                                        Cheese Plate
                                    </h3>
                                    <p class="food__description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="menu__selection3 swiper-slide">
                            <div class="menu__food">
                                <div class="food__img">
                                    <img src="./assets/home/home_menu_eggsbacon.png" alt="eggsBacon">
                                </div>
                                <div class="food__content">
                                    <h3 class="food__title">
                                        Eggs & Bacon
                                    </h3>
                                    <p class="food__description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    </p>
                                </div>
                            </div>
                            <div class="menu__food">
                                <div class="food__img">
                                    <img src="./assets/home/home_menu_teacoffe.png" alt="teaCoffee">
                                </div>
                                <div class="food__content">
                                    <h3 class="food__title">
                                        Tea or Coffee
                                    </h3>
                                    <p class="food__description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    </p>
                                </div>
                            </div>
                            <div class="menu__food">
                                <div class="food__img">
                                    <img src="./assets/home/home_menu_chiaoatmeal.png" alt="chiaOatmeal">
                                </div>
                                <div class="food__content">
                                    <h3 class="food__title">
                                        Chia Oatmeal
                                    </h3>
                                    <p class="food__description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="menu__selection4 swiper-slide">
                            <div class="menu__food">
                                <div class="food__img">
                                    <img src="./assets/home/home_menu_fruit.png" alt="fruits">
                                </div>
                                <div class="food__content">
                                    <h3 class="food__title">
                                        Fruit Parfait
                                    </h3>
                                    <p class="food__description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    </p>
                                </div>
                            </div>
                            <div class="menu__food">
                                <div class="food__img">
                                    <img src="./assets/home/home_menu_marmalade.png" alt="marmalade">
                                </div>
                                <div class="food__content">
                                    <h3 class="food__title">
                                        Marmalade Selection
                                    </h3>
                                    <p class="food__description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    </p>
                                </div>
                            </div>
                            <div class="menu__food">
                                <div class="food__img">
                                    <img src="./assets/home/home_menu_cheese.png" alt="cheesePlate">
                                </div>
                                <div class="food__content">
                                    <h3 class="food__title">
                                        Cheese Plate
                                    </h3>
                                    <p class="food__description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="menu__images swiper-foodImg">
                <div class="swiper-wrapper">
                    <img src="./assets/home/home_menu_eggsbacon.png" alt="eggsBacon" class="swiper-slide" data-hash="slide1">
                    <img src="./assets/home/home_menu_teacoffe.png" alt="teaCoffee" class="swiper-slide" data-hash="slide2">
                    <img src="./assets/home/home_menu_chiaoatmeal.png" alt="chiaOatmeal" class="swiper-slide" data-hash="slide3">
                    <img src="./assets/home/home_menu_fruit.png" alt="fruits" class="swiper-slide" data-hash="slide4">
                    <img src="./assets/home/home_menu_marmalade.png" alt="marmalade" class="swiper-slide" data-hash="slide5">
                    <img src="./assets/home/home_menu_cheese.png" alt="cheesePlate" class="swiper-slide" data-hash="slide6">
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <section class="stadistics">
            <div class="stadistics__data">
                <div class="data__img">
                    <img src="./assets/home/home_stadistics_icon1.png" alt="stadisticsIcon1">
                </div>
                <div class="data__info">
                    <h1 class="data__number">
                        84k<span class="data__mini">+</span>
                    </h1>
                    <p class="data__title">
                        Projects are Complete
                    </p>
                </div>
            </div>
            <div class="stadistics__data">
                <div class="data__img">
                    <img src="./assets/home/home_stadistics_icon2.png" alt="stadisticsIcon1">
                </div>
                <div class="data__info">
                    <h1 class="data__number">
                        10M<span class="data__mini">+</span>
                    </h1>
                    <p class="data__title">
                        Active Backers Around World
                    </p>
                </div>
            </div>
            <div class="stadistics__data">
                <div class="data__img">
                    <img src="./assets/home/home_stadistics_icon3.png" alt="stadisticsIcon1">
                </div>
                <div class="data__info">
                    <h1 class="data__number">
                        02k<span class="data__mini">+</span>
                    </h1>
                    <p class="data__title">
                        Categories Served
                    </p>
                </div>
            </div>
            <div class="stadistics__data">
                <div class="data__img">
                    <img src="./assets/home/home_stadistics_icon4.png" alt="stadisticsIcon1">
                </div>
                <div class="data__info">
                    <h1 class="data__number">
                        100M<span class="data__mini">+</span>
                    </h1>
                    <p class="data__title">
                        Idea Raised Funds
                    </p>
                </div>
            </div>
        </section>
    </main>
@endsection    