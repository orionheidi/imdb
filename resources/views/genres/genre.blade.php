@extends('layouts.master')

@section('title')
All movies by genre
@endsection 

@section('content')

<div class="container">   
  <main role="main" class="container">
    <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-3 mb-4 font-italic border-bottom">Imdb movies by genre</h3>
    @foreach($movies as $movie)
    <div class="blog-post">
      <h2 class="blog-post-title"> <a href="{{ route ('movies.show', ['id' => $movie->id]) }}"> {{ $movie->title }}</a></h2>
      {{-- <p class="blog-post-meta"> {{ $movie->created_at }}<a href="#"> Mark</a></p> --}}
      <h2 class="blog-post-title">{{ $movie->genre }} </h2>
      <p>{{ $movie->year }}</p>
      <p>{{ str_limit($movie->storyline,30,'...') }}</p>
    </div><!-- /.blog-post -->
          
    @endforeach

    </div><!-- /.row -->
  </main><!-- /.container -->
    
@endsection 

<style>
  .blog-header {
      line-height: 1;
      border-bottom: 1px solid #e5e5e5;
    }
    
  .blog-header-logo {
    font-family: "Playfair Display", Georgia, "Times New Roman", serif;
    font-size: 2.25rem;
  }
  
  .blog-header-logo:hover {
    text-decoration: none;
  }
  
  h1, h2, h3, h4, h5, h6 {
    font-family: "Playfair Display", Georgia, "Times New Roman", serif;
  }
  
  .display-4 {
    font-size: 2.5rem;
  }
  @media (min-width: 768px) {
    .display-4 {
      font-size: 3rem;
    }
  }
  
  .nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
  }
  
  .nav-scroller .nav {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
  }
  
  .nav-scroller .nav-link {
    padding-top: .75rem;
    padding-bottom: .75rem;
    font-size: .875rem;
  }
  
  .card-img-right {
    height: 100%;
    border-radius: 0 3px 3px 0;
  }
  
  .flex-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
  }
  
  .h-250 { height: 250px; }
  @media (min-width: 768px) {
    .h-md-250 { height: 250px; }
  }
  
  /*
    * Blog name and description
    */
  .blog-title {
    margin-bottom: 0;
    font-size: 2rem;
    font-weight: 400;
  }
  .blog-description {
    font-size: 1.1rem;
    color: #999;
  }
  
  @media (min-width: 40em) {
    .blog-title {
      font-size: 3.5rem;
    }
  }
  
  /* Pagination */
  .blog-pagination {
    margin-bottom: 4rem;
  }
  .blog-pagination > .btn {
    border-radius: 2rem;
  }
  
  /*
    * Blog posts
    */
  .blog-post {
    margin-bottom: 4rem;
  }
  .blog-post-title {
    font-family: "Playfair Display", Georgia, "Times New Roman", serif;
    margin-bottom: .25rem;
    font-size: 2.5rem;
  }
  .blog-post-meta {
    margin-bottom: 1.25rem;
    color: #999;
  }
  
  /*
    * Footer
    */
  .blog-footer {
    padding: 2.5rem 0;
    color: #999;
    text-align: center;
    background-color: #f9f9f9;
    border-top: .05rem solid #e5e5e5;
  }
  .blog-footer p:last-child {
    margin-bottom: 0;
  }

</style>