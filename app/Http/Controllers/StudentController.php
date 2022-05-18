<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Oferta;
use App\Models\Experiencia;
use App\Models\Estudio;
use App\Models\Idioma;
use App\Models\Dato;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function delete($id)
    {
        //Recuperar el objeto
        $user = User::findOrFail($id);
        
        try {
            $user->delete();
            return redirect('registrar');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('registrar');
        }
    }

    public function miperfil(User $user){
        $user = Auth::user()->id;
        $userModel = Auth::user();
        //$exp = Experiencia::all();
        $exp = auth()->user()->experiencia;
        $estudios = auth()->user()->estudios; // estudios del usuario conectado
        $idiomas = auth()->user()->idiomas;
        $datos = auth()->user()->datos;

        $idU = Auth::user()->id;
        return view('miperfil',compact('user','exp','estudios','idiomas','datos','userModel','idU'));

    }

    public function ajustes()
    {
        $user = Auth::user()->id;
        $idU = Auth::user()->id;
        return view('ajustes',compact('user','idU'));
    }

    public function store(Request $request)
    {
        //Validación de los campos
        $request->validate([
            'email' => 'required',
        ]);


        $usuari = new User;
        $usuari->email = $request->email;
        //$usuari->idioma = 'Castellano'; 
        $usuari->password = Hash::make($request->password);
        $usuari->country = 'España';
        $usuari->location = $request->locations;
        $usuari->cp = $request->cp;
        $usuari->role_id = 2;
        $usuari->save();

        $student = new Student;
        $student->student_name = $request->name;
        $student->student_surname = $request->surname;
        $student->DNI = $request->dni;
        $student->course = $request->course;
        $student->user_id = $usuari->id;
        $student->save();

        auth()->login($usuari);

        return redirect('/');
    }


    public function editmail()
    {
        $email = Auth::user()->email;
        $user = Auth::user()->id;
        $idU = Auth::user()->id;
        return view('ajustes/email', compact('email', 'user','idU'));
    }

    public function chmail(Request $request)
    {
        $useri = Auth::user();
        $useri->email = $request['email'];
        $useri->save();
        $user = Auth::user()->id;
        $email = $useri->email;

        $idU = Auth::user()->id;
        return view('ajustes/email', compact('email','user','idU'));
    }

    public function editpass()
    {
        $user = Auth::user()->id;

        $idU = Auth::user()->id;
        return view('ajustes/passw',compact('user','idU'));
    }

    public function chpass(Request $request)
    {
        $useri = Auth::user();
        if($useri->password == Hash::make($request['password'])){
            $useri->password = Hash::make($request['password2']);
            $useri->save();

            $user = Auth::user()->id;

            $idU = Auth::user()->id;
            return view('ajustes/passw', compact('user','idU'));
        }

        $user = Auth::user()->id;

        $idU = Auth::user()->id;
        return view('ajustes/passw', compact('user','idU'));
    }

    public function editdireccion()
    {
        $loc = Auth::user()->location;
        $cp = Auth::user()->cp;
        $country = Auth::user()->country;
        $user = Auth::user()->id;

        $idU = Auth::user()->id;
        return view('ajustes/direccion', compact('loc','cp','country','user','idU'));
    }

    public function chdireccion(Request $request)
    {
        $useri = Auth::user();
        $useri->location = $request['locations'];
        $useri->cp = $request['cp'];
        $useri->save();
        $loc = $useri->location;
        $cp = $useri->cp;
        $country = $useri->country;
        $user = Auth::user()->id;

        $idU = Auth::user()->id;
        return view('ajustes/direccion', compact('loc','cp','country','user','idU'));
    }

    public function enrol(Request $request){
        $idOferta = $request->oferta;
        //dd($id);
        $user = Auth::user();
        if($user->ofertas()->find($idOferta)){ //Comprobación de si existe la oferta
            return redirect('/');
        } 
        
        $user->ofertas()->attach($idOferta);
        
        return redirect('/');
    }

    public function showO(User $user){
        $ofertas = Oferta::all();

        $idU = Auth::user()->id;
        return view('ofertas', compact('user', 'ofertas','idU'));
    }

    public function experiencia(){
        $user = Auth::user()->id;

        $idU = Auth::user()->id;
        return view('miperfil/experiencia', compact('user','idU'));
    }

    public function upExperiencia(Request $request)
    {
        $expe = new Experiencia;
        $expe->name = $request->name;
        $expe->business = $request->business;
        $expe->time = $request->time;
        $expe->description = $request->description;
        $expe->user_id = Auth::user()->id;
        $expe->save();
        $user = Auth::user()->id;

        $exp = auth()->user()->experiencia;
        $estudios = auth()->user()->estudios; // estudios del usuario conectado
        $idiomas = auth()->user()->idiomas;
        $datos = auth()->user()->datos;

        $userModel = Auth::user();
        $idU = Auth::user()->id;
        return view('miperfil', compact('user','exp','estudios','idiomas','datos','idU','userModel'));
    }

    public function estudio(){
        $user = Auth::user()->id;

        $idU = Auth::user()->id;
        return view('miperfil/estudio', compact('user','idU'));
    }

    public function upEstudio(Request $request)
    {
        $estudios = new Estudio;
        $estudios->name = $request->name;
        $estudios->institute = $request->institute;
        $estudios->time = $request->time;
        $estudios->user_id = Auth::user()->id;
        $estudios->save();
        $user = Auth::user()->id;

        $exp = auth()->user()->experiencia;
        $estudios = auth()->user()->estudios; // estudios del usuario conectado
        $idiomas = auth()->user()->idiomas;
        $datos = auth()->user()->datos;

        $userModel = Auth::user();
        $idU = Auth::user()->id;
        return view('miperfil', compact('user','estudios','exp','idiomas','datos','idU','userModel'));
    }

    public function idioma(){
        $user = Auth::user()->id;

        $idU = Auth::user()->id;
        return view('miperfil/idioma', compact('user','idU'));
    }

    public function upIdioma(Request $request)
    {
        $idiomas = new Idioma;
        $idiomas->name = $request->name;
        $idiomas->level = $request->level;
        $idiomas->user_id = Auth::user()->id;
        $idiomas->save();
        $user = Auth::user()->id;

        $exp = auth()->user()->experiencia;
        $estudios = auth()->user()->estudios; // estudios del usuario conectado
        $idiomas = auth()->user()->idiomas;
        $datos = auth()->user()->datos;

        $idU = Auth::user()->id;
        $userModel = Auth::user();
        return view('miperfil', compact('user','estudios','exp','idiomas','datos','idU','userModel'));
    }

    public function datos(){
        $user = Auth::user()->id;

        $idU = Auth::user()->id;
        return view('miperfil/datos', compact('user','idU'));
    }

    public function upDatos(Request $request)
    {
        $datos = new Dato;
        $datos->license = $request->license;
        $datos->vehicle = $request->vehicle;
        $datos->nationality = $request->nationality;
        $datos->work_permit = $request->work;
        $datos->autonomous = $request->autonomous;
        $datos->user_id = Auth::user()->id;
        $datos->save();
        $user = Auth::user()->id;

        $exp = auth()->user()->experiencia;
        $estudios = auth()->user()->estudios; // estudios del usuario conectado
        $idiomas = auth()->user()->idiomas;
        $datos = auth()->user()->datos;

        $idU = Auth::user()->id;
        $userModel = Auth::user();
        return view('miperfil', compact('user','estudios','exp','idiomas','datos','idU','userModel'));
    }

    public function modE($id){
        $user = Auth::user()->id;

        $idU = Auth::user()->id;

        $experiencia = Experiencia::findOrFail($id);
        return view('miperfil/modexp', compact('user','idU','experiencia'));
    }

    public function modificarExp(Request $request, $id)
    {
        $idU = Auth::user()->id;

        $exp = Experiencia::findOrFail($id);

        $exp->name = $request->name;
        $exp->business = $request->business;
        $exp->time = $request->time;
        $exp->description = $request->description;
        $exp->user_id = Auth::user()->id;
        $exp->save(); //Guardo


        return redirect('miperfil/'. $idU);
    }

    public function modEst($id){
        $user = Auth::user()->id;

        $idU = Auth::user()->id;

        $estudios = Estudio::findOrFail($id);
        return view('miperfil/modest', compact('user','idU','estudios'));
    }

    public function modificarEst(Request $request, $id)
    {
        $idU = Auth::user()->id;

        $est = Estudio::findOrFail($id);

        $est->name = $request->name;
        $est->institute = $request->institute;
        $est->time = $request->time;
        $est->user_id = Auth::user()->id;
        $est->save(); //Guardo


        return redirect('miperfil/'. $idU);
    }

    public function modI($id){
        $user = Auth::user()->id;

        $idU = Auth::user()->id;

        $idioma = Idioma::findOrFail($id);
        return view('miperfil/modi', compact('user','idU','idioma'));
    }

    public function modificarI(Request $request, $id)
    {
        $idU = Auth::user()->id;

        $idioma = Idioma::findOrFail($id);

        $idioma->name = $request->name;
        $idioma->level = $request->level;
        $idioma->user_id = Auth::user()->id;
        $idioma->save(); //Guardo


        return redirect('miperfil/'. $idU);
    }
}
