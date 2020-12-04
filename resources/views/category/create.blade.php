@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Nieuwe categorie</div>
            <div class="card-body">
                <form name="new" method="post" action="/categories">
                    @csrf
                    <div class="form-group">
                        <label for="title">Naam</label>
                        <input type="text" class="form-control" name="name" id="name"/>
                        @if($errors->has('name'))
                            <small id="nameError" class="text-danger form-text">{{$errors->first('name')}}</small>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Opslaan</button>
                    <a class="ml-2" href="/categories">Annuleren</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection