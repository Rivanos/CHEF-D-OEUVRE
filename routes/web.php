<?php
// route pour l'ajax de la search_bar :)
Route::get('/search/{keyword}', function($keyword){
  if (Request::ajax()) {
    $articles = App\Article::where('name','like', '%'.$keyword.'%')->get();
    foreach ($articles as $key => $value) {
      # code...
    };
  }
});
Route::get('catalogue/search/{keyword}', function($keyword){
  if (Request::ajax()) {
    $articles = App\Article::where('name','like', '%'.$keyword.'%')->get();
    foreach ($articles as $value) {
      return '<div class="row-result">
      <div class="col-md-8">
      <p class="text_search">'.$value->name.'</p>
      </div>
      <img src="../'.$value->path_img.'" alt="" class="img-responsive col-md-3 thumbnail thumbnail_search">
      </div>';
    }
  }
});

Route::post('/sendmail', function( \Illuminate\Http\Request $request, \Illuminate\Mail\Mailer $mailer){
  echo $requestt->input('name');
  $mailer
      ->to('mike-like-me-pistons@hotmail.com')
      ->send(new \app\Mail\RDV($request->input('name')) );
  return redirect()->back();
})->name('sendmail');

// route pour l'index.
Route::get('/', 'IndexController@index');

// route pour l'index du catalogue
Route::get('/catalogue', 'PagesController@index');

// route pour les pages des différents articles
Route::get('catalogue/{category}', 'PagesController@page');

// route pour le login page
Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@do']);

// route pour la partie admin.
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
  Route::get('/', 'AdminController@index');
  Route::resource('articles', 'PostController');
  Route::resource('date', 'DateController');
});

// route pour la partie auth/login.
Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
