@extends('layout')
@section('title','Orders')
@section('content')
    <main class="container">
    <script src="scripts/rooms.js"></script>
        <section class="introduction">
            <p class="introduction__caption">THE ULTIMATE LUXURY EXPERIENCE</p>
            <h1 class="introduction__title">Ultimate Room</h1>
            <div class="introduction__location">
                <p>Home | <span class="route">Orders</span></p>
            </div>
        </section>
        <section class="orders">
            <a href="/orderCreate">Create an order</a>
            @if(count($orders) === 0)
                No orders available
            @else
                @foreach($orders as $order)
                    <p>{{$order['type']}}</p>
                @endforeach
            @endif
        </section>
    </main>
@endsection        