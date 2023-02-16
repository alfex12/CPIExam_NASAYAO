<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Http\Requests\UpdatePostsRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Posts::all();
        // return View::make('welcome')->with('posts', $posts);
        return Posts::all();
        //return Posts::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // return Posts::save(['post_title' => $request->input('post_title'),
        // 'post_details' => $request->input('post_details')]);
        return Posts::create(['post_title' => $request->input('post_title'),
        'post_details' => $request->input('post_details')]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Posts $posts): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $posts): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Posts $posts): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $posts): RedirectResponse
    {
        //
    }
}
