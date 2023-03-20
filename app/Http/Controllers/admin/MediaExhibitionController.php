<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MediaExhibition;
use App\Models\Exhibition;

use App\Http\Traits\mediaTrait;
use App\Http\Requests\mediaExhibitionRequest;

class mediaExhibitionController extends Controller
{
    use mediaTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias=MediaExhibition::with('exhibition')->orderBy('id', 'DESC')->paginate(30);
        return view("admin.mediaExhibitions.index",compact("medias",));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $exhibitions=Exhibition::select(
            'id',
            'name_'.app()->getLocale() .' as  name',
            'desc_'.app()->getLocale() .' as  desc')->get();

        return view("admin.mediaExhibitions.create",compact("exhibitions"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(mediaExhibitionRequest $request)
    {
        
        
        $file_name = $this->saveImage($request->media, 'media/media');
      
      
        MediaExhibition::create([
            'exhibition_id' => $request->exhibition_id,
            'media' =>$file_name,

        ]);
        return redirect('/admin/mediaExhibitions')->with('add',__('words.Added successfully'));;

     
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
        $medias = MediaExhibition::where('id', $id)->with('exhibition')->first();
        $exhibitions=Exhibition::select(
            'id',
            'name_'.app()->getLocale() .' as  name',
            'desc_'.app()->getLocale() .' as  desc')->get();

        return view("admin.mediaExhibitions.edit",compact("medias","exhibitions"));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(mediaExhibitionRequest $request,$id)
    {
        
        $medias = MediaExhibition::findOrFail($id);
        $file_name = $this->saveImage($request->media, 'media/media');
        $medias->media =$file_name;
        $medias-> exhibition_id = $request->exhibition_id;
        $medias->save();
    
        return redirect('/admin/mediaExhibitions')->with('add',__('words.Modified successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->media_id;
        $medias_id = MediaExhibition::where('id', $id)->first();
        $medias_id->delete();
        return redirect('/admin/mediaExhibitions')->with('delete',__('words.Deleted successfully'));
        
}
}
