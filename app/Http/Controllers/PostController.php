<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = DB::select('SELECT * FROM posts'); // Show all data in database 
        // $posts = DB::select('SELECT * FROM posts WHERE id = 11'); // Show single data in data base
        // $posts = DB::delete('DELETE FROM posts where id = ?', [2]); // Delete selected id data in database 
        // $posts = DB::table('posts')->get();
        // $posts = DB::table('posts')->avg('min_to_read');
        // dd($posts);


        $posts = DB::table('posts')->find(3);
        return view('blogs.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
