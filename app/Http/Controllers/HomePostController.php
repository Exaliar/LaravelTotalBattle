<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomePostRequest;
use App\Models\HomePost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePostController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:isAdmin')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')->with('homePosts', HomePost::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\HomePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\HomePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomePostRequest $request)
    {
        $homePost = new HomePost($request->validated());
        $homePost->user_id = Auth::id();
        $homePost->save();
        return redirect()->route('home.index')->with('message', 'Nowy post został utworzony');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomePost
     * @return \Illuminate\Http\Response
     */
    public function show(HomePost $home)
    {
        return view('home.show')->with('post', $home);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomePost  $homePost
     * @return \Illuminate\Http\Response
     */
    public function edit(HomePost $home, Request $request)
    {
        return view('home.edit')->with('post', $home);
        // dd($home);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\HomePostRequest  $request
     * @param  \App\Models\HomePost  $homePost
     * @return \Illuminate\Http\Response
     */
    public function update(HomePostRequest $request, HomePost $home)
    {
        $home->fill($request->validated());
        $home->save();
        return redirect()->route('home.index')->with('message', 'Post został zaktualizowany');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomePost  $homePost
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomePost $home)
    {
        // dd($home->id);
        HomePost::destroy($home->id);
        return redirect('home')->with('deleted', 'Post został pomyślnie usunięty');
    }
}
