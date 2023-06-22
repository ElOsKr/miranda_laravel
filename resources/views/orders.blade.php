@extends('layout')
@section('title','Orders')
@section('content')
    <main class="container">
        <section class="introduction">
            <p class="introduction__caption">THE ULTIMATE LUXURY EXPERIENCE</p>
            <h1 class="introduction__title">Ultimate Room</h1>
            <div class="introduction__location">
                <p>Home | <span class="route">Orders</span></p>
            </div>
        </section>
        <section class="orders">
            @if(Session::has('success'))
                <p id="formSuccess" class="orderSuccess">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </p>
            @endif
            @if(count($orders) === 0)
                <h1 class="orders__noOrders">
                   No orders available 
                </h1>
                <a href="/orderCreate" class="orders__ordersCreate">Create an order</a>
            @else
                <a href="/orderCreate" class="orders__ordersCreate">Create an order</a>
                <table>
                    <thead>
                        <tr>
                            <th>
                                Room Number
                            </th>
                            <th>
                                Order Type
                            </th>
                            <th>
                                Message
                            </th>
                            <th colspan="2">
                                Actions
                            </th>                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>
                                    {{$order['room_number']}}
                                </td>
                                <td>
                                    {{$order['type']}}
                                </td>
                                <td class="order__description">
                                    {{$order['description']}}
                                </td>
                                <td>
                                    <form action="{{url('orderEdit')}}" method="get">
                                    {{ csrf_field() }}
                                        <input type="hidden" name="id" id="id" value="{{$order['id']}}">
                                        <input type="image" value="Edit" alt="edit" src="{{asset('/assets/orders/editIcon.png')}}" width="20" height="20">
                                    </form>
                                </td>
                                <td>
                                    <form action="{{url('orders')}}" method="post">
                                    {{ csrf_field() }}
                                    @method('DELETE')
                                        <input type="hidden" name="id" id="id" value="{{$order['id']}}">
                                        <input type="image" value="Delete" alt="delete" src="{{asset('/assets/orders/deleteIcon.png')}}" width="20" height="20">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </section>
    </main>
@endsection        