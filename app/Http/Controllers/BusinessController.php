<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Business;
use App\Models\Oferta;
use Auth;
use App\Models\Experiencia;
use Illuminate\Support\Facades\Hash;

class BusinessController extends Controller
{
    //
    public function index()
    {
        //
        return view('inicio');
    }

    public function store(Request $request)
    {
        //Validación de los campos
        $request->validate([
            'email' => 'required',
        ]);


        $user = new User;
        $user->email = $request->email;
        //$user->idioma = 'Castellano'; 
        $user->password = Hash::make($request->password);
        $user->country = 'España';
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


    public function storeOferta(Request $request)
    {
        //Validación de los campos
        $request->validate([
            'email' => 'required',
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

    public function legal()
    {
        $idU = Auth::user()->id;
        return view('footer/legal', compact('idU'));
    }

    public function privacidad()
    {
        $idU = Auth::user()->id;
        return view('footer/privacidad', compact('idU'));
    }

    public function ayuda()
    {
        $idU = Auth::user()->id;
        return view('footer/ayuda', compact('idU'));
    }

    public function show(User $user)
    {
        $ofertas = auth()->user()->ofertasB;
        $idU = Auth::user()->id;
        return view('ofertasE', compact('user', 'ofertas','idU'));
    }

    public function destroy($id)
    {

        $oferta = Oferta::findOrFail($id);
        try {
            $oferta->delete();
            return redirect('/')->with('status', 'Oferta borrada!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/')->with('status', 'No se puede borrar.');
        }
    }

    public function candidatosL($id)
    {
        $user = Auth::user()->id;
        $idU = Auth::user()->id;
        $ofertas = Oferta::findOrFail($id);
        
        return view('listacandidatos',compact('ofertas','user','idU'));
    }

    public function perfil(User $user){
        $idU = $user->id;
        $user = User::find($idU);
        
        $exp = $user->experiencia;
        $estudios = $user->estudios;
        $idiomas = $user->idiomas;
        $datos = $user->datos;

        return view('perfiles',compact('user','exp','estudios','idiomas','datos','idU'));

    }
}
