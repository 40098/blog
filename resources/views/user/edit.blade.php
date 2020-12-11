@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Nieuwe gebruiker</div>
            <div class="card-body">
            <form name="new" method="post" action="/users/{{$user->id}}">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}"/>
                        @if($errors->has('name'))
                            <small id="nameError" class="text-danger form-text">{{$errors->first('name')}}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" name="email" id="email" value="{{$user->email}}"/>
                        @if($errors->has('email'))
                            <small id="emailError" class="text-danger form-text">{{$errors->first('email')}}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="role">Rol</label>
                        <select name="role" class="form-control">
                            <option value="admin" @if($user->role == 'admin') selected @endif>Admin</option>
                            <option value="writer" @if($user->role == 'writer') selected @endif>Schrijver</option>
                            <option value="follower" @if($user->role == 'follower') selected @endif>Volger</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Opslaan</button>
                    <a class="ml-2" href="/users">Annuleren</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection