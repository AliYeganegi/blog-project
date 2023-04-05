@extends('layouts.master')


@section('content')
    <h2>Show Article</h2>
    {{-- @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <form action="/" method="get">
        @csrf
        <div class="form-group">
            <label for="title">title :</label>
            <input type="text" name="title" class="form-control" value="{{$article->title}}">
        </div>
        <div class="form-group">
            <label for="body">body :</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{$article->body}}</textarea>
        </div>
        <button class="btn btn-secondary">back</button>
    </form>
@endsection
