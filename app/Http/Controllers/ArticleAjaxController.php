<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;


class ArticleAjaxController extends Controller
{


public function manageArticleAjax()
{
return view('dashboard/manage-article-ajax');
}


/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
$articles = Article::latest()->paginate(5);
return response()->json($articles);
}


/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$create = Article::create($request->all());
return response()->json($create);
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
$edit = Article::find($id)->update($request->all());
return response()->json($edit);
}


/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
    Article::find($id)->delete();
return response()->json(['done']);
}
}