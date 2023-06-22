@extends('layout')
@section('title','Orders Creation')
@section('content')
    <main class="container">
        <section class="introduction">
            <p class="introduction__caption">THE ULTIMATE LUXURY EXPERIENCE</p>
            <h1 class="introduction__title">Ultimate Room</h1>
            <div class="introduction__location">
                <p>Home | <span class="route">Edit Order</span></p>
            </div>
        </section>
        <section class="orders-Edit">
            <form action="{{route('orders.update')}}" method="POST">
            @method('PUT')
            {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$order['id']}}">
                <h1>Room Description</h1>
                <h3>Room Number: {{$order['room_number']}}</h3>
                <label for="type">Order type</label>
                <div>
                    Food
                    <input type="radio" value="food" name="type" id="food" required {{$order['type']==="food"? "checked" : ""}}>
                </div>
                <div>
                    Other
                    <input type="radio" value="other" name="type" id="other" {{$order['type']==="other"? "checked" : ""}}>
                </div>              
                <p><label for="description">Description</label></p>
                <textarea placeholder="Order Description..." required name="description" id="description" rows="5" maxlength="255">{{$order['description']}}</textarea>
                <input type="submit" value="Save Changes" class="orderEdit">
            </form>
        </section>
    </main>
@endsection  