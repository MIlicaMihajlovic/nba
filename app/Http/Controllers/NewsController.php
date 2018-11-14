<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;


class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //ne dopusta nam da vidimo stranicu ako nismo user
                                    //dopusta samo userima da vide stranicu
    }


    public function index(){
        
        $news = News::with('user')->latest()->paginate(10);
//ne moze all() jer nam baca gresku da method nije pronadjen
        return view('news.index', ['news' => $news]);
    }

    public function show($news_id)
    {
        $new = News::findOrFail($news_id); 

        return view('news.show', ['new' => $new]);
    }
}

