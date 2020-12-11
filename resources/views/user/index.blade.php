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
            <th>Acties</th>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->role}}</td>
                    <td>{{$user->email}}</td>
                <td>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Bewerken</a>
                        @csrf
                        @method('delete')
                        <input type="submit" value="Verwijderen" class="btn btn-danger" onclick="return confirm('Weet je het zeker?')"/>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection