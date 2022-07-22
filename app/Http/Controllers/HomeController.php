<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile() {
        return view('admin.profile', [
            "user" => auth()->user()
        ]);
    }

    public function updateProfile(Request $request){
        // dd(auth()->user()->id);
        $user = User::findOrFail(auth()->user()->id)->first();
       $user->title = $request['title'];
       $user->position = $request['position'];
       $user->first_name = $request['first_name'];
       $user->last_name = $request['last_name'];
       $user->church = $request['church'];
       $user->phone = $request['phone'];
       
        // $validate = $request->validate([
        //     "title" => "required",
        //     "position" => "required",
        //     "church" => "required",
        //     "first_name" => "required",
        //     "last_name" => "required",
        //     "email" => "required",
        //     "church" => "required",
        //     "phone" => "required|min:11|max:11"
        // ]);
       if ($user->save()) {
        return back()->with('success', "You have successfully updated your profile");
       }
    }
}
