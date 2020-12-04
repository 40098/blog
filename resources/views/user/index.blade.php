@extends('layouts.app')

@section('content')

    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <h1>Gebruikers</h1>
    <div class="d-flex mb-4">
        <a href="/users/create" class="ml-auto btn btn-success">Nieuwe gebruiker</a>
    </div>
    <table class="table">
        <thead>
            <th>#</th>
            <th>Naam</th>
            <th>Rol</th>
            <th>E-mail</th>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->role}}</td>
                    <td>{{$user->email}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection