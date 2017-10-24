<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;


class PagesController extends Controller
{
    public function page($category){
      $tabs = ['méditation', 'oracle', 'radiesthésie', 'bien-être', 'lithothérapie','thé', 'bijoux', 'encens'];
      if (in_array($category, $tabs, true)) {
        $articles = Article::where('category', $category)->simplePaginate(6);
        return view('client/page' , ["category" => $category, "articles" => $articles]);
      }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles_hearts = Article::where('show_index', 1)->where('heart_attack', 1)->get();
        $articles_sells = Article::where('show_index', 1)->where('most_sell', 1)->get();
        $category = ['Home'];
        return view('client/index', ["Home" => $category, "articles_hearts" => $articles_hearts, 'articles_sells' => $articles_sells]);
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
