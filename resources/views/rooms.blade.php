@extends('layout')
@section('title','Rooms')
@section('content')
    <main class="container">
    <script src="scripts/rooms.js"></script>
        <section class="introduction">
            <p class="introduction__caption">THE ULTIMATE LUXURY EXPERIENCE</p>
            <h1 class="introduction__title">Ultimate Room</h1>
            <div class="introduction__location">
                <p>Home | <span class="route">Rooms</span></p>
            </div>
        </section>
        <section class="rooms-rooms">
            <p class="room_msg">{{$message}}</p>
            <div class="swiper-rooms">
                <div class="swiper-wrapper">
                    <div class="room__section swiper-slide">

                    @for($i = 0; $i<count($rooms); $i++)
                        @if($i % 4 === 0 && $i!==0)
                        </div>
                        <div class="room__section swiper-slide">
                            <div class="rooms-rooms__room">
                                <div class="room__img-container">
                                    <img src="{{$rooms[$i]["room_photo"]}}" alt="roomImg" class="room__img">
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
                                <div class="room__description">
                                    <h2 class="room__title">
                                        {{$rooms[$i]["room_type"]}}
                                    </h2>
                                    <p class="room__description-content">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cum incidunt iure temporibus laborum deleniti!
                                    </p>
                                </div>
                                <div class="room__pricing">
                                    <p class="room__price">
                                        ${{$rooms[$i]["room_price"] - round($rooms[$i]["room_price"] * ($rooms[$i]["room_offer"]/100),0)}}<span class="price-mini">/Night</span>
                                    </p>
                                    <a class="room__booking" href="roomDetails/{{$rooms[$i]["room_id"]}}">
                                        Booking Now
                                    </a>
                                </div>
                            </div>
                        @else
                            <div class="rooms-rooms__room">
                                <div class="room__img-container">
                                    <img src="{{$rooms[$i]["room_photo"]}}" alt="roomImg" class="room__img">
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
                                <div class="room__description">
                                    <h2 class="room__title">
                                        {{$rooms[$i]["room_type"]}}
                                    </h2>
                                    <p class="room__description-content">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cum incidunt iure temporibus laborum deleniti!
                                    </p>
                                </div>
                                <div class="room__pricing">
                                    <p class="room__price">
                                        ${{$rooms[$i]["room_price"] - round($rooms[$i]["room_price"] * ($rooms[$i]["room_offer"]/100),0)}}<span class="price-mini">/Night</span>
                                    </p>
                                    <a class="room__booking" href="roomDetails/{{$rooms[$i]["room_id"]}}">
                                        Booking Now
                                    </a>
                                </div>
                            </div>
                            @endif    
                    @endfor
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </section>
    </main>
@endsection        