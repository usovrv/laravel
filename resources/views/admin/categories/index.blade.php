@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Категрии</h1>
        <a href="{{route('admin.categories.create')}}" class="btn btn-link">Создать категорию</a>
        <table class="table table-bordered">
            <tr>
                <td>Показать товары категории</td>
                <td>ID</td>
                <td>Название</td>
                <td>Описание</td>
                <td>Изменить</td>
                <td>Удалить</td>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td><a class="btn btn-default" href="{{route('admin.products.listing', ['category_id' => $category->id])}}">Показать</a></td>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td><a class="btn btn-default" href="{{route('admin.categories.edit', ['id' => $category->id])}}">Изменить</a></td>
                    <td><a class="btn btn-danger" href="{{route('admin.categories.delete', ['id' => $category->id])}}">Удалить</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection