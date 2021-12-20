@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Новости</h1>
        <a href="{{route('admin.news.create')}}" class="btn btn-link">Добавить новость</a>
        <table class="table table-bordered">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Description</td>
                <td>Image</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            @foreach($news as $new)
                <tr>
                    <td>{{$new->id}}</td>
                    <td>{{$new->name}}</td>
                    <td>{{$new->description}}</td>
                    <td><img src="/upload/news/{{$new->img}}" alt="" width="72"></td>
                    <td><a class="btn btn-default" href="{{route('admin.news.edit', ['id' => $new->id])}}">Edit</a></td>
                    <td><a class="btn btn-danger" href="{{route('admin.news.delete', ['id' => $new->id])}}">Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection