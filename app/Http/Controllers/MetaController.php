<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class MetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::all();
        return view('admin.settings.meta', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        dd($req->all());
        if(Page::whereName($req->name)->delete())
        {

        }
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
    public function update(Request $request, string $name)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
