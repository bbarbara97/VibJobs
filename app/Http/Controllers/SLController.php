<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SLController extends Controller
{
    //

    public function delete($id){
        //Recuperar el objeto
        $user = User::findOrFail($id);
        try{
            $user->delete();
            return redirect('registrar');
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect('registrar');
        }
    }

    public function store(Request $request){
        //Validación de los campos
        $request->validate(['email' => 'required',
    ]);


    $usuari = new User;
    $usuari->name = $request->nom;
    $usuari->surname = $request->cogn;
    $usuari->email = $request->email; 
    //$usuari->idioma = 'Castellano'; 
    $usuari->password = Hash::make($request->pass); 
    $usuari->country = $request->pais; 
    $usuari->location = $request->loc;
    $usuari->cp = $request->cp; 
    $usuari->course = $request->curso;   
    $usuari->save();

    return redirect('inicio.html');
    }
}
