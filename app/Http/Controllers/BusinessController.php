<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Business;
use App\Models\Oferta;
use Auth;
use Illuminate\Support\Facades\Hash;

class BusinessController extends Controller
{
    //
    public function index()
    {
        //
        return view('inicio');
    }

    public function store(Request $request){
        //Validación de los campos
        $request->validate(['email' => 'required',
    ]);


    $user = new User;
    $user->email = $request->email; 
    //$user->idioma = 'Castellano'; 
    $user->password = Hash::make($request->password); 
    $user->country = $request->country; 
    $user->location = $request->locations;
    $user->cp = $request->cp;
    $user->role_id = 1;    
    $user->save();

    $business = new Business;
    $business->business_name = $request->name;
    $business->CIF = $request->cif;
    $business->tlf = $request->tlf;
    $business->description = $request->description;
    $business->user_id = $user->id;
    $business->save();

    auth()->login($user);

    return redirect('/');
    }


    public function storeOferta(Request $request){
        //Validación de los campos
        $request->validate(['email' => 'required',
    ]);


    $oferta = new Oferta;
    $oferta->name = $request->name; 
    $oferta->location = $request->location; 
    $oferta->contract = $request->contract; 
    $oferta->course = $request->course;
    $oferta->requeriments = $request->requeriments;
    $oferta->description = $request->description;    
    $oferta->user_id = Auth::user()->id; 
    $oferta->save();

    return redirect('/');
    }

    public function legal(){
        $user = Auth::user()->id;
        return view('footer/legal', compact('user'));
    }

    public function privacidad(){
        $user = Auth::user()->id;
        return view('footer/privacidad', compact('user'));
    }
}
