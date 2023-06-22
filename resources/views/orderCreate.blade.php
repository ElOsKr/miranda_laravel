@extends('layout')
@section('title','Orders Creation')
@section('content')
    <main class="container">
    <script src="scripts/rooms.js"></script>
        <section class="introduction">
            <p class="introduction__caption">THE ULTIMATE LUXURY EXPERIENCE</p>
            <h1 class="introduction__title">Ultimate Room</h1>
            <div class="introduction__location">
                <p>Home | <span class="route">Order Creation</span></p>
            </div>
        </section>
        <section class="orders-Create">
            <a href="/orders" class="ordersBack"><- Go back</a>
            <form action="{{url('order')}}" method="post">
            {{ csrf_field() }}
                <div>
                    <h3><label for="room_id">Room</label></h3>
                    <select name="room_id" id="room_id" required>
                        <option selected disabled hidden value="">Room Type - Room Number</option>
                        @for($i = 0; $i<count($rooms); $i++)
                            <option value={{$rooms[$i]['room_id'].'&'.$rooms[$i]['room_number']}}>{{$rooms[$i]['room_type']}} - {{$rooms[$i]['room_number']}}</option>
                        @endfor
                    </select>                    
                </div>
                <div>
                    <div class="type">
                        <h3><label for="type">Order type</label></h3>
                        <div>
                            Food
                            <input type="radio" value="food" name="type" id="food" required>
                        </div>
                        <div>
                            Other<input type="radio" value="other" name="type" id="other">
                        </div>              
                    </div>
                    <div>
                        <h3><label for="description">Description</label></h3>
                        <textarea placeholder="Order Description..." required name="description" id="description" rows="5" maxlength="255"></textarea>                    
                    </div>                    
                </div>
                <input type="submit" value="Submit" class="createSubmit">
            </form>
        </section>
    </main>
@endsection  