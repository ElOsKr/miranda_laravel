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
        <section class="orders">
            <form action="{{url('order')}}" method="post">
            {{ csrf_field() }}
                <label for="room_id">Room</label>
                <select name="room_id" id="room_id" required>
                    <option selected disabled hidden value="">Room Type - Room Number</option>
                    @for($i = 0; $i<count($rooms); $i++)
                        <option value={{$rooms[$i]['room_id'].'&'.$rooms[$i]['room_number']}}>{{$rooms[$i]['room_type']}} - {{$rooms[$i]['room_number']}}</option>
                    @endfor
                </select>
                <label for="type">Order type</label>
                Food<input type="radio" value="food" name="type" id="food" required>
                Other<input type="radio" value="other" name="type" id="other">
                <label for="description">Description</label>
                <textarea placeholder="Order Description..." required name="description" id="description"></textarea>
                <input type="submit" value="Submit">
            </form>
        </section>
    </main>
@endsection  