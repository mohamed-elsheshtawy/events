<?php

namespace App\Http\Controllers\admin;
use App\Models\Exhibition;
use App\Http\Requests\ExhibitionRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\mediaTrait;
class exhibitionController extends Controller
{
    use mediaTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exhibitions=Exhibition::orderBy('id', 'DESC')->paginate(30);
        return view("admin.exhibitions.index" ,compact("exhibitions"));
 
    }


    public function AllExhibitions()
    {
        $exhibitions=Exhibition::select(
            'created_at',
            'id',
            'media',
            'name_'.app()->getLocale() .' as  name',
            'desc_'.app()->getLocale() .' as  desc')->get();
        return view("website.all-exhibitions" ,compact("exhibitions"));
 
 
    }



    

    public function SingleExhibitions($id)
    {
        $exhibition=Exhibition::with('all_media')->select(
            'created_at',
            'id',
            'media',
            'name_'.app()->getLocale() .' as  name',
            'desc_'.app()->getLocale() .' as  desc')->where('id', $id)->first();
        return view("website.Single-exhibition" ,compact("exhibition"));
 
    }
  

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.exhibitions.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExhibitionRequest $request)
    {
        
        $file_name = $this->saveImage($request->media, 'media/media');
        Exhibition::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'desc_ar' => $request->desc_ar,
            'desc_en' => $request->desc_en,
            'media' =>$file_name,
        ]);
      
        return redirect('/admin/exhibitions')->with('add',__('words.Added successfully'));
        
     
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
        $exhibitions = Exhibition::where('id', $id)->first();
        
        return view("admin.exhibitions.edit",compact("exhibitions"))->with('edit',__('words.Modified successfully'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExhibitionRequest $request,$id)
    {
        $exhibitions = Exhibition::findOrFail($id);

        $file_name = $this->saveImage($request->media, 'media/media');
        $exhibitions->name_ar = $request->name_ar;
        $exhibitions->name_en = $request->name_en;
        $exhibitions->desc_ar = $request->desc_ar;
        $exhibitions->desc_en = $request->desc_en;
        $exhibitions->media =$file_name;
        $exhibitions->save();
    
        return redirect('/admin/exhibitions')->with('edit',__('words.Modified successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->exhibition_id;
        $exhibitions_id = Exhibition::where('id', $id)->first();
        $exhibitions_id->delete();
        return redirect('/admin/exhibitions')->with('delete',__('words.Deleted successfully'));
        
}
}