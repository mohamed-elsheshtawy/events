<?php

namespace App\Http\Controllers\admin;
use app\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function index()
    {
        
        $users=User::orderBy('id', 'DESC')->first();
        return view("admin.profile.index",compact("users"));
    }

    public function edit($id)
    {
        $users = User::where('id', $id)->first();
        
        return view("admin.profile.edit",compact("users"))->with('edit',__('words.Modified successfully'));
        
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' =>'required',

        ]);
        $users = User::findOrFail($id);

  
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->save();
    
        return redirect('admin/')->with('edit',__('words.Modified successfully'));
    }
}