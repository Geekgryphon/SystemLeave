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
        $validatedData = $request->validate([
            'name' => 'required|string',
            'signcode' => 'required|string',
        ]);

        $seq = SignState::count() + 1;

        SignState::create([
            'name' => $request->input('name'),
            'signcode' => $request->input('signcode'),
            'used'  => 1,
            'seq'  => $seq,
        ]);

        return  redirect()->route('sign-states.index')->with('success','審核狀態已建立完成。');
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $signstate = SignState::find($id);
        return view('sign-states.edit',compact('signstate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $signstate = SignState::find($id);
        $signstate->name = $request->input('name');
        $signstate->signcode = $request->input('signcode');
        $signstate->used = $request->input('used') == null ? 0 : 1;
        $signstate->seq = $request->input('seq');

        $signstate->save();

        return redirect()->route('sign-states.index')->with('success','審核狀態更新成功');
    }

}
