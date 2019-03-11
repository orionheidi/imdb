<div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
    @foreach($movies as $movie)
    <li>
    <a href="{{ route ('movies.show', ['id' => $movie->id]) }}"> {{ $movie->title }}</a>       
    </li>
    @endforeach
    </ol>
  </div> 