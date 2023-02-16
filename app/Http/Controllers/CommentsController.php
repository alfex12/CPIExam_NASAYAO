<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Http\Requests\StoreCommentsRequest;
use App\Http\Requests\UpdateCommentsRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
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
    public function store(StoreCommentsRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Comments $comments): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comments $comments): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request): RedirectResponse
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comments $comments): RedirectResponse
    {
        //
    }
}
