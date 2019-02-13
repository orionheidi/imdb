{{-- 
<div class="col-xs-12 col-sm-8">
    <div class="jumbotron">
        <h1>5 Movies<h1>
    </div>
    <div class="row">
    <div class="col-6 col-sm-6 col-lg-4">
        @foreach($movies as $movie)
        <h2> <a href="{{ route ('movies.show', ['id' => $movie->id]) }}"> {{ $movie->title }}</a></h2>
        @endforeach
    </div>
    </div>
    </div>
</div>
    

<style>

</style> --}}