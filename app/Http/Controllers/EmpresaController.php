<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use Illuminate\Support\Facades\Hash;

class EmpresaController extends Controller
{
    //
    
    public function delete($id){
        //Recuperar el objeto
        $empresa = Empresa::findOrFail($id);
        try{
            $empresa->delete();
            return redirect('registrar');
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect('registrar');
        }
    }

    public function store(Request $request){
        //Validación de los campos
    //     $request->validate(['email' => 'required',
    // ]);


    $empresa = new Empresa;
    $empresa->nombre = $request->nom;
    $empresa->telefono = $request->tlf;
    $empresa->email = $request->email; 
    $empresa->cif = $request->cif; 
    $empresa->password = Hash::make($request->pass); 
    $empresa->descripcion = $request->desc; 
    $empresa->idioma = 'Castellano';  
    $empresa->save();

    return redirect('inicio.html');
    }
}
