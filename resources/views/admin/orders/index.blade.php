@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Заказы</h1>
        <table class="table table-bordered">
            <tr>
                <td>ID</td>
                <td>Имя пользователя</td>
                <td>E-mail</td>
                <td>Id продукта</td>
                <td>Наименование</td>
                <td>Цена</td>
            </tr>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->user->name}}</td>
                    <td>{{$order->user->email}}</td>
                    <td>{{$order->product->id}}</td>
                    <td>{{$order->product->name}}</td>
                    <td>{{$order->product->price}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection