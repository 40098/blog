@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Wijzig gebruiker</div>
            <div class="card-body">
            <form name="update" method="post" action="{{ route('users.update', $user->id)}}">
                @csrf
                @method('put')
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
                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="writer" {{ $user->role == 'writer' ? 'selected' : '' }}>Schrijver</option>
                            <option value="follower" {{ $user->role == 'follower' ? 'selected' : '' }}>Volger</option>
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