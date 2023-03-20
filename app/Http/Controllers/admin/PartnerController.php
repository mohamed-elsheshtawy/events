<?php

namespace App\Http\Controllers\admin;
use App\Models\Partner;
use App\Http\Requests\PartnerRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\mediaTrait;

class partnerController extends Controller
{
    use mediaTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners=Partner::orderBy('id', 'DESC')->paginate(30);

        ;
        return view("admin.partners.index",compact("partners"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.partners.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartnerRequest $request)
    {
        
        $file_name = $this->saveImage($request->media, 'media/media');
        Partner::create([
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'media' =>$file_name,
            'link' => $request->link,

        ]);
    
        return redirect('/admin/partners')->with('add',__('words.Added successfully'));;

     
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
        $partners = Partner::where('id', $id)->first();
        
        return view("admin.partners.edit",compact("partners"));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PartnerRequest $request,$id)
    {
        $partners = Partner::findOrFail($id);

        $file_name = $this->saveImage($request->media, 'media/media');
        $partners->title_ar = $request->title_ar;
        $partners->title_en = $request->title_en;
        $partners->media =$file_name;
        $partners->link= $request->link;
        $partners->save();
    
        return redirect('/admin/partners')->with('add',__('words.Modified successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->partner_id;
        $partners_id = Partner::where('id', $id)->first();
        $partners_id->delete();
        // session()->flash('delete',__('words.The deletion was completed successfully'));

        return redirect('/admin/partners')->with('delete',__('words.Deleted successfully'));
        
}
}