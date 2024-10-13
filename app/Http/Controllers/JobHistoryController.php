<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobHistory;
use App\Models\Employee;
use App\Models\JobPosition;


class JobHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobhistorys = JobHistory::all();
        return view('job-historys.index',compact('jobhistorys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('job-historys.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'account' => 'required|string',
            'job_position_id' => 'required|string'
        ]);

        JobHistory::create([
            'account' => $request->input('account'),
            'job_position_id' => $request->input('job_position_id'),
            'begin_date' => $request->input('begin_date'),
            'end_date' => $request->input('end_date')
        ]);

        return redirect()->route('job-historys.index')->with('success', '工作經歷已新增完成'); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jobhistory = JobHistory::find($id);
        return view('job-historys.edit',compact('jobhistory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jobhistory = JobHistory::find($id);

        $jobhistory->account = $request->input('account');
        $jobhistory->account = $request->input('job_position_id');
        $jobhistory->begin_date = $request->input('begin_date');
        $jobhistory->end_date = $request->input('end_date');
        
        $jobhistory->save();
        return redirect()->route('job-historys.index')->with('success', '工作經歷已更新完成');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jobhistory = JobHistory::find($id);

        if($jobHistory){
            $jobHistory->delete();
            return redirect()->route('job-historys.index')->with('success', '工作經歷已刪除成功');
        }else{
            return redirect()->route('job-historys.index')->with('error', '工作經歷刪除失敗，因為對應不到');
        }
    }
}
