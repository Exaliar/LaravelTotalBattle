<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomePostRequest;
use App\Models\HomePost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePostController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:isAdmin')->except('index', 'show');
    }

    public function index()
    {
        return view('home')->with('homePosts', HomePost::orderBy('updated_at', 'DESC')->get());
    }

    public function create()
    {
        return view('home.create');
    }

    public function store(HomePostRequest $request)
    {
        $homePost = new HomePost($request->validated());
        $homePost->user_id = Auth::id();
        $homePost->save();
        return redirect()->route('home.index')->with('message', 'Nowy post został utworzony');
    }

    public function show(HomePost $home)
    {
        return view('home.show')->with('post', $home);
    }

    public function edit(HomePost $home, Request $request)
    {
        return view('home.edit')->with('post', $home);
    }

    public function update(HomePostRequest $request, HomePost $home)
    {
        $home->fill($request->validated());
        $home->save();
        return redirect()->route('home.index')->with('message', 'Post został zaktualizowany');
    }

    public function destroy(HomePost $home)
    {
        HomePost::destroy($home->id);
        return redirect('home')->with('deleted', 'Post został pomyślnie usunięty');
    }
}
