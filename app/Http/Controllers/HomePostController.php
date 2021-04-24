<?php

namespace App\Http\Controllers;

use App\Models\HomePost;
use App\Models\User;
use Illuminate\Http\Request;

class HomePostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->middleware('auth');
        return 'create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomePost  $homePost
     * @return \Illuminate\Http\Response
     */
    public function show(HomePost $homePost)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomePost  $homePost
     * @return \Illuminate\Http\Response
     */
    public function edit(HomePost $homePost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomePost  $homePost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomePost $homePost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomePost  $homePost
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomePost $homePost)
    {
        //
    }
}
