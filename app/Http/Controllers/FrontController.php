<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;
use App\Tag;
use App\Category;
use Laracasts\Flash\Flash;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $articles = Article::orderBy('id','DESC')->paginate(4);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });
        return view('front.index')->with([

            'articles' => $articles,


        ]);
    }

    public function searchCategory($name){

        $tags = Tag::all();
        $articles = Article::orderBy('id','DESC')->paginate(4);
        $categories = Category::SearchCategory($name)->get();
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });
        return view('front.index')->with([

            'articles' => $articles,
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

    public function searchTag($name){
        
        $articles = Article::orderBy('id','DESC')->paginate(4);
        $categories = Category::all();
        $tags = Tag::SearchTag($name)->get();
                $articles->each(function($articles){
                    $articles->tag;
                    
                    $articles->images;
                });
                return view('front.index')->with([
        
                    'articles' => $articles,
                    'categories' => $categories,
                    'tags' => $tags
                ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
