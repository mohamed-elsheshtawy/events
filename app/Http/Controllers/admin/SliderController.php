<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Traits\mediaTrait;
class SliderController extends Controller
{
    use mediaTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=Slider::orderBy('id', 'DESC')->paginate(30);
        return view("admin.sliders.index",compact("sliders"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.sliders.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresliderRequest $request)
    {
        
        $file_name = $this->saveImage($request->media, 'media/media');
        Slider::create([
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'desc_ar' => $request->desc_ar,
            'desc_en' => $request->desc_en,
            'media' =>$file_name,
            'date' => $request->date,

        ]);
    
        return redirect('/admin/sliders')->with('add',__('words.Added successfully'));;

     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sliders = Slider::where('id', $id)->first();
        
        return view("admin.sliders.edit",compact("sliders"))->with('edit',__('words.The slider has been added successfully'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoresliderRequest $request,$id)
    {
        $sliders = Slider::findOrFail($id);

        $file_name = $this->saveImage($request->media, 'media/media');
        $sliders->title_ar = $request->title_ar;
        $sliders->title_en = $request->title_en;
        $sliders->desc_ar = $request->desc_ar;
        $sliders->desc_en = $request->desc_en;
        $sliders->media =$file_name;
        $sliders-> date = $request->date;
        $sliders->save();
    
        return redirect('/admin/sliders')->with('add',__('words.Modified successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->slider_id;
        $sliders_id = Slider::where('id', $id)->first();
        $sliders_id->delete();
        // session()->flash('delete',__('words.The deletion was completed successfully'));

        return redirect('/admin/sliders')->with('delete',__('words.Deleted successfully'));
        
}
}