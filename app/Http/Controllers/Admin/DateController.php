<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Date;

class DateController extends Controller
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
    $dates = Date::get();
    return view('admin/date/dates', ['dates' => $dates]);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('admin/date/create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $dates = Date::create($request->all());
    return redirect(route('date.edit', $dates));
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
    Session::flash('succes.edit', 'Date correctement ajouté.');
    $dates = Date::findOrFail($id);
    return view('admin/date/edit', compact('dates'));
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
    $dates = Date::findOrFail($id);
    $dates->update($request->all());
    Session::flash('succes.update', 'Date modifiée correctement');
    return redirect(route('date.edit', $id));
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $dates = Date::findOrFail($id);
    $dates->delete();
    Session::flash('succes.destroy', 'Date correctement supprimée');
    return redirect()->route('date.index');
  }
}
