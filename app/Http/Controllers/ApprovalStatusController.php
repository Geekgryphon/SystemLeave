<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApprovalStatus;

class ApprovalStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $approvalstatus = ApprovalStatus::all();
        return view("approval-status.index", compact('approvalstatus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("approval-status.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'approval_code' => 'required|string',
        ]);

        $seq = ApprovalStatus::count() + 1;

        ApprovalStatus::create([
            'name' => $request->input('name'),
            'approval_code' => $request->input('approval_code'),
            'seq'  => $seq,
            'used'  => 1,
        ]);

        return  redirect()->route('approval-status.index')->with('success','審核狀態已建立完成。');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $approvalstatus = ApprovalStatus::find($id);
        return view('approval-status.edit', compact('approvalstatus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $approvalstatus = ApprovalStatus::find($id);

        $approvalstatus->name = $request->input('name');
        $approvalstatus->approval_code = $request->input('approval_code');
        $approvalstatus->used = $request->input('used') == null ? 0 : 1;
        $approvalstatus->seq = $request->input('seq');

        $approvalstatus->save();

        return redirect()->route('approval-status.index')->with('success','審核狀態更新成功');
    }

}
