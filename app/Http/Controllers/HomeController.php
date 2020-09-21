<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use Session;

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

    public function Password()
    {
        return view('admin.password');
    }

    public function savePassword(Request $request)
    {
        $user = User::find($request->id);
        if ($request->email == $user->email) {

            $request->validate([
            'password'=>'required|min:8'
        ]);
 
        $user = User::find($request->id);
        $user->password = Hash::make($request['password']);
        $user->save();

        Session::flash('msg','Password Change Success!');
        return back();

        }else{
            Session::flash('umsg','Password Change Not Success!');
            return back();
        }
        
    }


}
