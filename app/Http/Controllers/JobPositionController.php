<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPosition;

class JobPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobpositions = JobPosition::all(); 
        return view('job-positions.index',compact('jobpositions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('job-positions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required'
        ]);
        
        $seq = JobPosition::count() + 1;

        JobPosition::create([
            'title' => $request->input('title'),
            'eng_title' => $request->input('eng_title'),
            'used' => 1,
            'seq' => $seq
        ]);

        return redirect()->route('job-positions.index')->with('success','工作名稱新增成功');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jobposition = JobPosition::find($id);
        return view('job-positions.edit', compact('jobposition'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jobposition = JobPosition::find($id);

        $jobposition->title = $request->input('title');
        $jobposition->eng_title = $request->input('eng_title');
        $jobposition->used = $request->input('used') == null ? 0 : 1;
        $jobposition->seq = $request->input('seq');
        
        $jobposition->save();
        return redirect()->route('job-positions.index')->with('success','工作名稱更新成功');
    }

}
