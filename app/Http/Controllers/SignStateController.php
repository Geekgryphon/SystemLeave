<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SignState;

class SignStateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $signstates =  SignState::all();
       return view('sign-states.index', compact('signstates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sign-states.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

}
