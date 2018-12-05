<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PerfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('perfil');
    }

    public function cambiar(Request $request){
    	$user=User::find($request->input('id'));
    	$user->name=$request->input('name');
    	$user->email=$request->input('email');
    	$user->password=$request->input('pass');
    	$user->save();

    	return redirect('/');
    }
}
