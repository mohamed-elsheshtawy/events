<?php

namespace App\Http\Controllers\admin;
use App\Http\Requests\ClientRequest;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Traits\mediaTrait;

class ClientController extends Controller
{
    use mediaTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients=Client::orderBy('id', 'DESC')->paginate(30);
        return view("admin.Clients.index",compact("clients"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.Clients.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        
        $file_name = $this->saveImage($request->media, 'media/media');
        Client::create([
            'title_ar' => $request->title_ar,
            'title_en' => $request->title_en,
            'desc_ar' => $request->desc_ar,
            'desc_en' => $request->desc_en,
            'media' =>$file_name,

        ]);
    
        return redirect(route('clients.index'))->with('add',__('words.Added successfully'));;

     
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
        $Clients = Client::where('id', $id)->first();
        
        return view("admin.Clients.edit",compact("Clients"))->with('edit',__('words.The Client has been added successfully'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRequest $request,$id)
    {
        $clients = Client::findOrFail($id);

        $file_name = $this->saveImage($request->media, 'media/media');
        $clients->title_ar = $request->title_ar;
        $clients->title_en = $request->title_en;
        $clients->desc_ar = $request->desc_ar;
        $clients->desc_en = $request->desc_en;
        $clients->media =$file_name;
        $clients->save();
    
        return redirect(route('clients.index'))->with('add',__('words.Modified successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->client_id;
        $clients_id = client::where('id', $id)->first();
        $clients_id->delete();
        // session()->flash('delete',__('words.The deletion was completed successfully'));

        return redirect(route('clients.index'))->with('delete',__('words.Deleted successfully'));
        
}
}