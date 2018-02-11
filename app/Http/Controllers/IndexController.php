<?php

namespace DCStore\Http\Controllers;

use DCStore\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function loadAll()
    {
    	$resultMovies=Article::where('type',3)->orderBy('updated_at','desc')->get();
    	$resultSeries=Article::where('type',2)->orderBy('updated_at','desc')->get();

    	return view('index',[
    		'movies' => $resultMovies,
    		'series' => $resultSeries, 
    	]);
    }
}