<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMyPagesRequest;
use Input;
use Request;


use App\Page;
use App\Tag;

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
        return view('my.show',compact('page'));
        //return view('pages.show')->withPage(Page::find($id));
    }
    public function create()
    {
        $tags =  Tag::lists('name', 'id');
        return view('my.create', compact('tags'));
    }


    /**
     * @param CreateMyPagesRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateMyPagesRequest $request)
    {
        $page = Page::create($request->all());
        $page->tags()->sync($request->input('tag_list'));
        return redirect('mypages');

    }

    public function edit($id)
    {
        $tags = Tag::lists('name', 'id');
        $page = Page::findOrFail($id);
        //dd($page->tag_list->all());
        return view('my.edit', compact('page', 'tags'));

    }

    public function update(CreateMyPagesRequest $request, $id)
    {
        $page = Page::findOrFail($id);
        $page->title = Input::get('title');
        $page->body = Input::get('body');
        $page->user_id = Input::get('user_id');
        $page->save();
        $page->tags()->sync($request->input('tag_list'));
        return redirect('mypages/' . $id);

    }
}
