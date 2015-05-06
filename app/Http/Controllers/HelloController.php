<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;


use App\Page;

class HelloController extends Controller
{

    public function hello()
    {
        return 'Hello World';
    }
    public function hello_faq()
    {
        //return 'Hello World';
        $lists = [
            'Anne', 'Eunice', 'Nina', 'Zoey', 'James'
        ];
        $var = 'FAQ';
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
    public function index()
    {
        //return Page::all();
        $pages = Page::latest()->get();
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
        //return view('pages.show')->withPage(Page::find($id));
    }
    public function create()
    {
        return view('my.create');
    }
    public function store()
    {
        $input = Request::all();
        //$input = Request::get('title');

        Page::create($input);
        return redirect('mypages');

    }
}
