@extends('layout')
@section('title','Room Details')
@section('content')
    <main class="container">
    <script src="./js/roomDetails.js"></script>
        <section class="introduction">
            <p class="introduction__caption">THE ULTIMATE LUXURY EXPERIENCE</p>
            <h1 class="introduction__title">Ultimate Room</h1>
            <div class="introduction__location">
                <p>Home | <span class="route">Room Details</span></p>
            </div>
        </section>
        <section class="details">
            <div class="details__info">
                <div>
                    <p class="details__caption">
                        {{$room['room_type']}}
                    </p>
                    <h1 class="details__title">
                        {{$room['room_type']}}
                    </h1>                    
                </div>
                <div>
                    <p class="details__discount">
                        {{$room['room_price']}}€ - {{$room['room_offer']}}%
                    </p>
                    <p class="details__price">
                        ${{$room["room_price"] - round($room["room_price"] * ($room["room_offer"]/100),0)}}<span class="details__price-mini">/Night</span>
                    </p>                    
                </div>
            </div>
            <div class="details__img">
                <img src={{$room["room_photo"]}} alt="doubleBed">
            </div>
            <form class="details__form" method="post" action="roomDetails.php?id={{$room['room_id']}}">
                <h2 class="form__title">
                    Check Availability
                </h2>
                <div class="form__checkIn">
                    <label for="checkIn">Check In</label>
                    <input type="date" name="checkIn" id="checkIn" required>
                </div>
                <div class="form__checkOut">
                    <label for="checkOut">Check Out</label>
                    <input type="date" name="checkOut" id="checkOut" required>
                </div>
                <input type="submit" class="form__btn" value="CHECK AVAILABILITY" />
                <p class="details__availability">
                    @if($availability === "available")
                        The room is available between {{$_POST['checkIn']}} and {{$_POST['checkOut']}}
                    @elseif($availability === "not available")
                        The room is <span style="color: red;">NOT</span> available between {{$_POST['checkIn']}} and {{$_POST['checkOut']}}
                    @elseif($availability === "check date error")
                        CheckIn Date <span style="color: red;">CAN NOT</span> be greater than CheckOut
                    @elseif($availability === "no data")
                        No data introduced
                    @endif
                </p>
            </form>
            <p class="details__description">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Doloremque, harum cumque. Culpa aperiam obcaecati perspiciatis 
                pariatur quo autem ab at quidem facilis voluptatum necessitatibus esse 
                quas odio dolore quasi cupiditate asperiores beatae, maxime accusamus vitae. 
                Officiis fuga repellendus aliquam veniam suscipit temporibus, amet quas mollitia
                 culpa eaque illo exercitationem deserunt sunt commodi, voluptatum numquam. Quos 
                 exercitationem doloribus sint nisi laudantium.
            </p>
        </section>
        <section class="amenities">
            <h2 class="amenities__title">
                Amenities
            </h2>
            <hr/>
            <div class="amenities__items">
                @for($i=0 ; $i<count(json_decode($room['room_amenities'])) ; $i++ )

                <p><img 
                src="./assets/roomDetails/details_{{json_decode($room['room_amenities'])[$i]}}_icon.png" 
                alt="{{json_decode($room['room_amenities'])[$i]}}"> 
                {{$amenities[json_decode($room['room_amenities'])[$i]]}}</p>

                @endfor
                
            </div>
            <div class="amenities__founder">
                <div class="founder__container">
                    <span class="founder__circle">
                        ✓
                    </span>
                    <div class="founder__img">
                        <img src="./assets/roomDetails/details_founder.jpg" alt="founderGod">
                    </div>
                </div>
                <h1 class="founder__name">
                    Barack Obama
                </h1>
                <p class="founder__caption">
                    FOUNDER, QUX CO.
                </p>
                <p class="founder__description">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure accusamus,
                    aut accusantium deleniti laboriosam debitis placeat vero corporis quasi sed.
                </p>
            </div>
        </section>
        <section class="cancellation">
            <h2 class="cancellation__title">
                Cancellation
            </h2>
            <hr/>
            <p class="cancellation__description">
                Phasellus volutpat neque a tellus venenatis, 
                a euismod augue facilisis. Fusce ut metus mattis,
                consequat metus nec, luctus lectus. Pellentesque orci 
                quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.

            </p>
        </section>
        <section class="related">
            <h2 class="related__title">
                Related Rooms
            </h2>
            <hr/>
            <div class="swiper-relatedRooms">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                <div class="swiper-wrapper">
                    @if(count($relatedRooms)>0)
                        @for($i=0 ; $i<count($relatedRooms) ; $i++)
                            <div class="rooms-rooms__room swiper-slide related-room">
                                <div class="room__img-container">
                                    <img src={{$relatedRooms[$i]['room_photo']}} alt="roomImg" class="room__img">
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
                                        {{$relatedRooms[$i]['room_type']}}
                                    </h2>
                                    <p class="room__description-content">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cum incidunt iure temporibus laborum deleniti!
                                    </p>
                                    <div class="room__pricing">
                                        <p class="room__price">
                                            ${{$relatedRooms[$i]['room_price'] - round($relatedRooms[$i]['room_price']*($relatedRooms[$i]['room_offer']/100))}}/Night
                                        </p>
                                        <a class="room__booking" href="roomDetails?id={{$relatedRooms[$i]['room_id']}}">
                                            Booking Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endfor    
                    @else
                        <div>No related room</div>
                    @endif        
                </div>
            </div>
        </section>
    </main>
@endsection    