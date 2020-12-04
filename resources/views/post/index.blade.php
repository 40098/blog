@extends('layouts.app')

@section('content')

    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <h1>Berichten</h1>
    <div class="d-flex mb-4">
        <a href="/posts/create" class="ml-auto btn btn-success">Nieuw bericht</a>
    </div>
    <table class="table">
        <thead>
            <th>#</th>
            <th>Titel</th>
            <th>Categorie</th>
            <th>Auteur</th>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->category->name}}</td>
                    <td>{{$post->author->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection