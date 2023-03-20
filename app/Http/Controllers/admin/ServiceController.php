<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Http\Requests\ServiceRequest;

use App\Http\Traits\mediaTrait;

class ServiceController extends Controller
{
    use mediaTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::orderBy('id', 'DESC')->paginate(30);
        return view("admin.Services.index",compact("services"));
    }
    public function AllServices()
    {
        $Services=Service::select(
            'created_at',
            'id',
            'media',
            'title_'.app()->getLocale() .' as  title',
            'desc_'.app()->getLocale() .' as  desc')->get();
        return view("website.AllServices" ,compact("Services"));
 
    }
    public function SingleServices($id)
    {
        $Services=Service::select(
            'created_at',
            'id',
            'media',
            'title_'.app()->getLocale() .' as  title',
            'content_'.app()->getLocale() .' as  content',
            'desc_'.app()->getLocale() .' as  desc')->where('id', $id)->get();
        return view("website.SingleService" ,compact("Services"));
 
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.Services.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        
        $file_name = $this->saveImage($request->media, 'media/media');
        Service::create([
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'desc_ar' => $request->desc_ar,
            'desc_en' => $request->desc_en,
            'content_ar' => $request->content_ar,
            'content_en' => $request->content_en,
            'media' =>$file_name,
        ]);
    
        return redirect(route('services.index') )->with('add',__('words.Added successfully'));;

     
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
        $Services = Service::where('id', $id)->first();
        
        return view("admin.Services.edit",compact("Services"))->with('edit',__('words.The Service has been added successfully'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request,$id)
    {
        $Services = Service::findOrFail($id);

        $file_name = $this->saveImage($request->media, 'media/media');
        $Services->title_ar = $request->title_ar;
        $Services->title_en = $request->title_en;
        $Services->desc_ar = $request->desc_ar;
        $Services->desc_en = $request->desc_en;
        $Services->content_ar = $request->content_ar;
        $Services->content_en = $request->content_en;
        $Services->media =$file_name;
        $Services->save();
    
        return redirect(route('services.index') )->with('add',__('words.Modified successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->service_id;
        $services_id = Service::where('id', $id)->first();
        $services_id->delete();
        // session()->flash('delete',__('words.The deletion was completed successfully'));

        return redirect(route('services.index') )->with('delete',__('words.Deleted successfully'));
        
}
}
