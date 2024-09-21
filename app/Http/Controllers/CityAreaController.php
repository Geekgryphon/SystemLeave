<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\CityArea;

class CityAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = 10;
        $currentPage = $request->input('page', 1);
        $cityareas = CityArea::paginate($perPage);
        return view('cityareas.index', compact('cityareas', 'currentPage'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::select('id', 'Name', 'Seq')
                      ->where('Used', '=', '1')
                      ->orderBy('Seq', 'asc')
                      ->get();
        return view('cityareas.create', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // 驗證的內容
        CityArea::create([
            'PostalCode' => $request->PostalCode,
            'CityID' => $request->CityID,
            'Name' => $request->Name,
            'Used' => 1,
            'Seq' => $request->Seq,
        ]);

        return redirect()->route('cityareas.index')->with('success','縣市街區新增成功');
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
    public function edit(Request $request, string $id)
    {
        $cityarea = CityArea::findOrFail($id);

        return view('cityareas.edit',[
            'cityarea' => $cityarea,
            'currentPage' => $request->input('page', 1),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cityarea = CityArea::findOrFail($id);
        $cityarea->update($request->all());
        $currentPage = $request->input('page', 1);
        return redirect()->route('cityareas.index', ['page' => $currentPage])->with('success', '縣市區域更新完成');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cityarea = CityArea::findOrFail($id);
        $cityarea->delete();
        $currentPage = $request->input('page', 1);
        return redirect()->route('cityareas.index', ['page' => $currentPage])->with('success', '縣市街區刪除完成。');
    }
}
