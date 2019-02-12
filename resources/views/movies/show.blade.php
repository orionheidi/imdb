@extends('layouts.master')

@section('title',$movie->title)


@section('content')


    <div>{{ $movie->title }}</div> 
    <div>{{ $movie->genere}}</div> 
    <div>{{ $movie->storyline}}</div>
    <div>{{ $movie->director}}</div>
    <div>{{ $movie->year}}</div>
        <hr/>   
    @foreach($movie->comments as $comment) 
    <div class="p-4 alert alert-success">
    <div class ="text-muted">  
        {{$comment->created_at}}
    </div>
    {{ $comment->content}}
    </div>
 @endforeach

<div class="container">
    <form method="POST" action="{{ route('movies.comments',['id' => $movie->id]) }}">
    @csrf
    <div class="form-group row">
        <label for="textarea" class="col-4 col-form-label">Comment</label>
    <div class="col-8">
        <textarea id="textarea" name="content" cols="20" rows="5" class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }} " >{{ old('content') }} </textarea>
    @include('partials.invalid-feedback',['field' => 'content'])
    </div>
    </div>
    <div class="form-group row">
    <div class="offset-4 col-8">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>

@endsection
