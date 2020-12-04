@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Nieuwe gebruiker</div>
            <div class="card-body">
                <form name="new" method="post" action="/users">
                    @csrf
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input type="text" class="form-control" name="name" id="name"/>
                        @if($errors->has('name'))
                            <small id="nameError" class="text-danger form-text">{{$errors->first('name')}}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" name="email" id="email"/>
                        @if($errors->has('email'))
                            <small id="emailError" class="text-danger form-text">{{$errors->first('email')}}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="role">Rol</label>
                        <select name="role" class="form-control">
                            <option value="admin" >Admin</option>
                            <option value="writer" >Schrijver</option>
                            <option value="follower" selected>Volger</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password">Wachtwoord</label>
                        <input type="password" class="form-control" name="password" id="password"/>
                        @if($errors->has('password'))
                            <small id="passwordError" class="text-danger form-text">{{$errors->first('password')}}</small>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Opslaan</button>
                    <a class="ml-2" href="/users">Annuleren</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection