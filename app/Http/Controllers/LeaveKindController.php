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
        $leavekinds = LeaveKind::all();
        return request()->json($leavekinds);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('leavekinds.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 資料驗證
        // 從資料庫取得資料數量並產生排序

        $leavekind = LeaveKind::create([
            'Name' => '',
        ]);
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $leavekind = LeaveKind::find($id);

        if(!$leavekind){
            return response()->json(['message' => '找不到該假別資料'], 404);
        }

        $leavekind->delete();

        return redirect()->route('leavekinds.index')->with('success', '假別已刪除完成!');
    }
}
