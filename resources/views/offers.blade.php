@extends('layout')
@section('title','Offers')
@section('content')
    <main class="container">
    <script src="./js/offers.js"></script>
        <section class="introduction">
            <p class="introduction__caption">THE ULTIMATE LUXURY EXPERIENCE</p>
            <h1 class="introduction__title">Our Offers</h1>
            <div class="introduction__location">
                <p>Home | <span class="route">Offers</span></p>
            </div>
        </section>
        <section class="offers">
            @for($i=0 ; $i<count($offers) ; $i++)
                <div class="offers__offer">
                    <div class="offer__img">
                        <img src={{$offers[$i]['room_photo']}} alt={{$offers[$i]['room_type']}}>
                    </div>
                    <div class="offer__price">
                        <p class="offer__old">${{$offers[$i]['room_price']}}<span class="offer__mini">/Night</span></p>
                        <p class="offer__new">${{$offers[$i]['room_price'] - round($offers[$i]['room_price']*($offers[$i]['room_offer']/100))}}<span class="offer__mini">/Night</span></p>
                    </div>
                    <div class="offer__container">
                        <p class="offer__caption">
                            {{$offers[$i]['room_type']}}
                        </p>
                        <h1 class="offer__title">
                            {{$offers[$i]['room_type']}}
                        </h1>
                        <div class="offer__content">
                            <p class="offer__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Reiciendis sequi neque sint, commodi doloribus veniam accusantium. 
                                Velit, sit quibusdam dicta unde nulla temporibus optio maiores provident 
                                repudiandae, neque sint veniam itaque voluptatum aspernatur omnis? Illo ratione
                                atque nemo? Illo id nam at repudiandae mollitia quasi, consequuntur harum! Tenetur, 
                                dolorem maiores.
                            </p>
                            <div class="offer__items">
                            @for($j=0 ; $j<count(json_decode($offers[$i]['room_amenities'])) ; $j++ )

                                <p><img 
                                src="./assets/roomDetails/details_{{json_decode($offers[$i]['room_amenities'])[$j]}}_icon.png" 
                                alt="{{json_decode($offers[$i]['room_amenities'])[$j]}}"> 
                                {{$amenities[json_decode($offers[$i]['room_amenities'])[$j]]}}</p>

                            @endfor
                            </div>
                            <a class="offer__btn" href="roomDetails?id={{$offers[$i]['room_id']}}">
                                BOOK NOW
                            </a>
                        </div>
                    </div>
                </div>
            @endfor
        </section>
        <section class="popular">
            <p class="popular__caption">
                POPULAR LIST
            </p>
            <h1 class="popular__title">
                Popular Rooms
            </h1>
            <div class="swiper-offers">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-wrapper">
                    @for($i=0 ; $i<count($populars) ; $i++)
                        <div class="rooms-rooms__room swiper-slide popular-room">
                            <div class="room__img-container">
                                <img src={{$populars[$i]['room_photo']}} alt={{$populars[$i]['room_type']}} class="room__img">
                            </div>
                            <div class="room__options">
                                <img src="./assets/rooms/rooms_room_bed.png" alt="bedIcon">
                                <img src="./assets/rooms/rooms_room_wifi.png" alt="wifiIcon">
                                <img src="./assets/rooms/rooms_room_car.png" alt="carIcon">
                                <img src="./assets/rooms/rooms_room_winter.png" alt="winterIcon">
                                <img src="./assets/rooms/rooms_room_gym.png" alt="gymIcon">
                                <img src="./assets/rooms/rooms_room_noSmoking.png" alt="noSmokingIcon">
                                <img src="./assets/rooms/rooms_room_cocktail.png" alt="cocktailIcon">
                            </div>
                            <div class="room__description popular__list-item">
                                <h2 class="room__title">
                                    {{$populars[$i]['room_type']}}
                                </h2>
                                <p class="room__description-content">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cum incidunt iure temporibus laborum deleniti!
                                </p>
                                <div class="room__pricing">
                                    <p class="room__price">
                                        ${{$populars[$i]['room_price'] - round($populars[$i]['room_price']*($populars[$i]['room_offer']/100))}}/Night
                                    </p>
                                    <a class="room__booking" href="roomDetails?id={{$populars[$i]['room_id']}}">
                                        Booking Now
                                    </a>
                                </div>
                            </div>
                        </div>                    
                    @endfor
                </div>
            </div>
        </section>
    </main>
@endsection    