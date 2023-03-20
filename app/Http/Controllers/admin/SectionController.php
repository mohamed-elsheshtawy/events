<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;
class SectionController extends Controller
{
   
    public function index()
    {
        $sections=Section::orderBy('id', 'DESC')->paginate(30);
        return view("admin.sections.index",compact("sections"));
    }

    public function edit($id)
    {
        $sections = Section::where('id', $id)->first();
        
        return view("admin.sections.edit",compact("sections"))->with('edit',__('words.Modified successfully'));
        
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'key' => 'required',
            'value' => 'required',

        ]);
        $sections = Section::findOrFail($id);

  
        $sections->key = $request->key;
        $sections->value = $request->value;
        $sections->save();
    
        return redirect(route('sections'))->with('edit',__('words.Modified successfully'));
    }
}