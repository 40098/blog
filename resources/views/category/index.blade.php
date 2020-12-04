@extends('layouts.app')

@section('content')

    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <h1>Berichten</h1>
    <div class="d-flex mb-4">
        <a href="/categories/create" class="ml-auto btn btn-success">Nieuwe categorie</a>
    </div>
    <table class="table">
        <thead>
            <th>#</th>
            <th>Naam</th>
            <th>Aantal berichten</th>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{count($category->posts)}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection