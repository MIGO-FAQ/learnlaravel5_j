<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Page;

class HelloController extends Controller
{

    public function hello()
    {
        //return 'Hello World';
        $lists = [
            'James', 'Cat'
        ];
        $var = 'James';
        return view('hello', compact('lists','var'));
        //return view('hello')->with('var', $var)->with('lists', $lists);
    }
    public function api()
    {
        //return Page::all();
        $pages = Page::all();
        //return $pages;
        return view('my.index',compact('pages'));
    }
    public function show($id)
    {
        //$page = Page::find($id);
        $page = Page::findOrFail($id);

        //dd($page);
        //return $page;
        return view('my.show2',compact('page'));
    }
}
