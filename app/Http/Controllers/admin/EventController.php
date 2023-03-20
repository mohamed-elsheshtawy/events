<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Traits\mediaTrait;


class EventController extends Controller
{
    use mediaTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events=Event::orderBy('id', 'DESC')->paginate(30);
        return view("admin.events.index" ,compact("events"));
 
    }

    public function AllEvents()
    {
        $events=Event::select(
            'date',
            'id',
            'media',
            'name_'.app()->getLocale() .' as  name',
            'desc_'.app()->getLocale() .' as  desc')->get();
        return view("website.AllEvents" ,compact("events"));
 
    }



    

    public function SingleEvents($id)
    {
        $events=Event::select(
            'date',
            'id',
            'media',
            'name_'.app()->getLocale() .' as  name',
            'desc_'.app()->getLocale() .' as  desc')->where('id', $id)->get();
        return view("website.SingleEvent" ,compact("events"));
 
    }
  

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.events.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventRequest $request)
    {
        
        $file_name = $this->saveImage($request->media, 'media/media');
        Event::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'desc_ar' => $request->desc_ar,
            'desc_en' => $request->desc_en,
            'media' =>$file_name,
            'date' => $request->date,

        ]);
      
        return redirect('/admin/events')->with('add',__('words.Added successfully'));
        
     
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
        $events = Event::where('id', $id)->first();
        
        return view("admin.events.edit",compact("events"))->with('edit',__('words.Modified successfully'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEventRequest $request,$id)
    {
        $events = Event::findOrFail($id);

        $file_name = $this->saveImage($request->media, 'media/media');
        $events->name_ar = $request->name_ar;
        $events->name_en = $request->name_en;
        $events->desc_ar = $request->desc_ar;
        $events->desc_en = $request->desc_en;
        $events->media =$file_name;
        $events-> date = $request->date;
        $events->save();
    
        return redirect('/admin/events')->with('edit',__('words.Modified successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->event_id;
        $events_id = Event::where('id', $id)->first();
        $events_id->delete();
        // session()->flash('delete',__('words.The deletion was completed successfully'));

        return redirect('/admin/events')->with('delete',__('words.Deleted successfully'));
        
}
}