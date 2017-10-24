<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Article;

class PostController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $articles = Article::get();
    return view('admin/view/articles', ['articles' => $articles]);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('admin/create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $article = Article::create($request->all());
    return redirect(route('articles.edit', $article));
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
    Session::flash('succes.edit', 'Article correctement ajouté. Ajoutez-y une photo.');
    $article = Article::findOrFail($id);
    return view('admin/edit', compact('article'));
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
    // dd(Input::file('file')->getClientMimeType());
    $request->validate([
      'name' => 'required|max:255',
      'content' => 'required|',
      'category' => 'required',
      'price' => 'required|',
      'most_sell' => 'boolean',
      'heart_attack' => 'boolean',
      'show_index' => 'boolean',
      'file' => 'image',
    ]);
    $article = Article::findOrFail($id);

    if(Input::hasFile('file')){
      $file = Input::file('file');
      $file->move('article', $request->file('file')->getClientOriginalName());
      $request['path_img'] = "article/".$request->file('file')->getClientOriginalName();
    }
    else {
      $request['path_img'] = $article['path_img'];
    }
    $article->update($request->all());
    Session::flash('succes.update', 'Article modifié correctement');
    return redirect(route('articles.edit', $id));
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $article = Article::findOrFail($id);
    $article->delete();
    Session::flash('succes.destroy', 'Article correctement supprimé');
    return redirect()->route('articles.index');
  }
}
