<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Http\Requests\CreateMovieRequest;
use App\Http\Requests\CreateCommentRequest;
use App\Comment;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index',compact('movies'));
    }

    public function sidebar()
    {
        $movies = Movie::limit(5)->orderBy('id', 'desc')->get();
        return view('movies.index',compact('movies'));
    }

    public function lastMoviesLimit()
    {
        
        $movies = Movie::orderBy('title', 'DESC')->get();
        return view('movies.index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMovieRequest $request)
    {
        $request->validate([
            'title'=> 'required',
            'genre' => 'required',
            'year' => 'required|numeric|between:1900,'.date('Y'),
            'director' => 'required',
            'storyline' => 'required|max:1000'
        ]);
  
        Movie::create($request->all());
        


        return redirect(route('movies.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        // \Log::info(print_r($movie,true));
        return view('movies.show',compact('movie'));
    }


    public function addComment(CreateCommentRequest $request,$id)
    {
        $request->validate([
            'content'=> 'required',
        ]);

        Comment::create([
            'movie_id' => $id,
            'content' => $request->content,
        ]);

        return redirect()
        ->back();

        // Post::findOrFail($id)
        // ->addComments
        // ->create($request->all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
