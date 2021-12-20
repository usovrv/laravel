@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Email для уведомлений</h1>
        <a href="{{route('admin.mails.create')}}" class="btn btn-link">Добавить email</a>
        <table class="table table-bordered">
            <tr>
                <td>ID</td>
                <td>Email</td>
                <td>Изменить</td>
                <td>Удалить</td>
            </tr>
            @foreach($mails as $mail)
                <tr>
                    <td>{{$mail->id}}</td>
                    <td>{{$mail->email}}</td>
                    <td><a class="btn btn-default" href="{{route('admin.mails.edit', ['id' => $mail->id])}}">Изменить</a></td>
                    <td><a class="btn btn-danger" href="{{route('admin.mails.delete', ['id' => $mail->id])}}">Удалить</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection