<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Traits\mediaTrait;

class SettingController extends Controller
{
    use mediaTrait;
    public function index()
    {
        $settings=Setting::orderBy('id', 'DESC')->paginate(30);
        return view("admin.Setting.index",compact("settings"));
    }

    public function edit($id)
    {
        $settings = Setting::where('id', $id)->first();
        
        return view("admin.Setting.edit",compact("settings"))->with('edit',__('words.Modified successfully'));
        
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'title_ar' => 'required|max:255',
            'title_en' => 'required|max:255',
            'desc_ar' => 'required',
            'desc_en' => 'required',
            'media' => 'required',

        ]);
        $settings = Setting::findOrFail($id);

        $file_name = $this->saveImage($request->media, 'media/media');
        $settings->title_ar = $request->title_ar;
        $settings->title_en = $request->title_en;
        $settings->desc_ar = $request->desc_ar;
        $settings->desc_en = $request->desc_en;
        $settings->media =$file_name;
        $settings->save();
    
        return redirect(route('Settings'))->with('add',__('words.Modified successfully'));
    }
}
