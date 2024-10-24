<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{

    public function index(Request $request)
    {
        $perPage = 10;
        $currentPage = $request->input('page', 1);
        $SrhName = $request->input('name');
        $cities = City::query();
        if($request->filled('name')){
            $cities->where('name', 'like', '%' . $SrhName .'%');
        }
        $cities = $cities->paginate($perPage);
        $cities->appends(['Name' => $SrhName]);
        return view('cities.index',compact('cities', 'currentPage'));
    }

    public function create()
    {
        return view('cities.create');
    }

    public function store(Request $request)
    {
        // 驗證表單數據
        
        City::create([
            'postalcode' => '900',
            'name' => $request->name,
            'used' => "1",
            'seq' => $request->seq,
        ]);

        return redirect()->route('cities.index')->with('success', '縣市新增成功');


    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $city = City::findOrFail($id);

        return view('cities.edit', [
            'city' => $city,
            'currentPage' => $request->input('page', 1),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $city = City::findOrFail($id);
        $updatedata = $request->all();
        $updatedata['used'] = ($request->input('used') ? 1 : 0);
        $city->update($updatedata);
        $currentPage = $request->input('page', 1);
        return redirect()->route('cities.index', ['page' => $currentPage])->with('success', '縣市更新完成');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $city = City::findOrFail($id);
        $city->delete();

        // 獲取當前頁碼
        $currentPage = $request->input('page', 1);

        // 重定向回到當前頁碼
        return redirect()->route('cities.index', ['page' => $currentPage])->with('success', '縣市刪除完成。');
    }
}
