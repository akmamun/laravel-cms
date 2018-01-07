<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', ])->except('index', 'show');
        //        'clearance'
    }


    public function index()
    {
        $pages = Page::orderby('id', 'desc')->paginate(5); //show only 5 items at a time in descending order

        return view('backend.admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required|max:100',
            'body' =>'required',
        ]);

        $title = $request['title'];
        $body = $request['body'];

        $page= Page::create($request->only('title', 'body'));

        //Display a successful message upon save
        return redirect()->route('pages.index')
            ->with('flash_message', 'Page,
             '. $page->title.' created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = Page::findOrFail($id); //Find post of id = $id

        return view ('backend.admin.pages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::findOrFail($id);

        return view('backend.admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'=>'required|max:100',
            'body'=>'required',
        ]);

        $page = Page::findOrFail($id);
        $page->title = $request->input('title');
        $page->body = $request->input('body');
        $page->save();

        return redirect()->route('pages.show',
            $page->id)->with('flash_message',
            'Page, '. $page>title.' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();

        return redirect()->route('pages.index')
            ->with('flash_message',
                'Page successfully deleted');
    }
}
