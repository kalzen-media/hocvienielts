<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Config;
use DB;

class SettingController extends Controller
{
    public function index()
    {
        $config = Config::all()->keyBy('name');
        return view('admin.setting.index',compact('config'));
    }
    public function update(Request $request)
    {
        DB::beginTransaction();
        try {

            if ($request->image) {
                Config::where('name','logo')->update(['value'=>$request->image]);
            }
            if ($request->hotline) {
                Config::where('name','hotline')->update(['value'=>$request->hotline]);
            }
            if ($request->address) {
                Config::where('name','address')->update(['value'=>$request->address]);
            }
            if ($request->email) {
                Config::where('name','email')->update(['value'=>$request->email]);
            }
            DB::commit();
            return redirect()->route('admin.setting.index')->with('message', 'Cập nhật thành công');
        }catch(Exception $ex) {
            DB::rollback();
            return back()->withInput();
        }
    }
}
