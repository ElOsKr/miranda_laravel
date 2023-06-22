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
            <a href="/orderCreate">Create an order</a>
            @if(count($orders) === 0)
                No orders available
            @else
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
                            <th rowspan="2">
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
                                <td>
                                    {{$order['description']}}
                                </td>
                                <td>
                                    <form action="{{url('orderEdit')}}" method="get">
                                    {{ csrf_field() }}
                                        <input type="hidden" name="id" id="id" value="{{$order['id']}}">
                                        <input type="submit" value="Edit">
                                    </form>
                                </td>
                                <td>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </section>
    </main>
@endsection        