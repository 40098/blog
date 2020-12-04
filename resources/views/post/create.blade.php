@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Nieuwe post</div>
            <div class="card-body">
                <form name="new" method="post" action="/posts">
                    @csrf
                    <div class="form-group">
                        <label for="title">Titel</label>
                        <input type="text" class="form-control" name="title" id="title"/>
                        @if($errors->has('title'))
                            <small id="titleError" class="text-danger form-text">{{$errors->first('title')}}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="content">Bericht</label>
                        <textarea name="content" id="content" class="form-control"></textarea>
                        @if($errors->has('content'))
                            <small id="contentError" class="text-danger form-text">{{$errors->first('content')}}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="content">Samenvatting</label>
                        <textarea name="summary" id="summary" class="form-control"></textarea>
                        @if($errors->has('summary'))
                            <small id="summaryError" class="form-text text-danger">{{$errors->first('summary')}}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="content">Categorie</label>
                        <select name="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>                        
                        @if($errors->has('category_id'))
                            <small id="categoryError" class="form-text text-danger">{{$errors->first('category_id')}}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="content">Auteur</label>
                        <select name="author_id" class="form-control">
                            @foreach($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                            @endforeach
                        </select>                        
                        @if($errors->has('author_id'))
                            <small id="authorError" class="form-text text-danger">{{$errors->first('author_id')}}</small>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Opslaan</button>
                    <a class="ml-2" href="/posts">Annuleren</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection