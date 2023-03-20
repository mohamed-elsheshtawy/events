<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Http\Traits\mediaTrait;
use Illuminate\Support\Facades\DB;

class RegisteredUserController extends Controller
{
    use mediaTrait;

    public function index()
    {
        $users=User::orderBy('id', 'DESC')->get();
        return view("admin.profile.edit",compact("users"));
    }

    public function edit()
    {
        $users = User::first();
        
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
        $file_name = $this->saveImage($request->media, 'media/media');
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->media =$file_name;

        $users->save();
    
        return view ("admin.home")->with('edit',__('words.Modified successfully'));
    }
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
       
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
