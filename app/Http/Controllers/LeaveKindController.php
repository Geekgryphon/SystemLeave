<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaveKind;

class LeaveKindController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // compact 把變數和其值存成陣列
        $leavekinds = LeaveKind::all();
        return view('leave-kinds.index',compact('leavekinds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('leave-kinds.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string'
        ]);

        $seq = LeaveKind::count() + 1;

        LeaveKind::create([
            'name' => $validatedData['name'],
            'seq' => $seq,
            'used' => 1,
        ]);

        return  redirect()->route('leave-kinds.index')->with('success','假別已建立完成。');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $leavekind = LeaveKind::find($id);
        return view('users.edit', compact('leavekind'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $leavekind = LeaveKind::find($id);
        if(!$leavekind){

        }

        // 驗證

        $leavekind->update();

        return redirect()->route('leavekinds.index')->with('success','假別資料更新成功');
    }

}
