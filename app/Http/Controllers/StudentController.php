<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Oferta;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Facades\Input;

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

    public function miperfil(){
        $user = Auth::user()->id;
        return view('miperfil',compact('user'));

    }

    public function ajustes()
    {
        $user = Auth::user()->id;
        return view('ajustes',compact('user'));
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
        $usuari->country = $request->country;
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
        return view('ajustes/email', compact('email', 'user'));
    }

    public function chmail(Request $request)
    {
        $useri = Auth::user();
        $useri->email = $request['email'];
        $useri->save();
        $user = Auth::user()->id;
        $email = $useri->email;
        return view('ajustes/email', compact('email','user'));
    }

    public function editpass()
    {
        $user = Auth::user()->id;
        return view('ajustes/passw',compact('user'));
    }

    public function chpass(Request $request)
    {
        $useri = Auth::user();
        $useri->password = Hash::make($request['password']);
        $useri->save();
        $password = $useri->password;
        $user = Auth::user()->id;
        return view('ajustes/passw', compact('password','user'));
    }

    public function editdireccion()
    {
        $loc = Auth::user()->location;
        $cp = Auth::user()->cp;
        $country = Auth::user()->country;
        $user = Auth::user()->id;
        return view('ajustes/direccion', compact('loc','cp','country','user'));
    }

    public function chdireccion(Request $request)
    {
        $useri = Auth::user();
        $useri->location = $request['locations'];
        $useri->cp = $request['cp'];
        $useri->country = $request['country'];
        $useri->save();
        $loc = $useri->location;
        $cp = $useri->cp;
        $country = $useri->country;
        $user = Auth::user()->id;
        return view('ajustes/direccion', compact('loc','cp','country','user'));
    }

    public function enrol(Request $request){
        $idOferta = $request->oferta;
        //dd($id);
        $user = Auth::user();
        $user->ofertas()->attach($idOferta);
        
        return redirect('/');
    }

    public function showO(User $user){
        $ofertas = Oferta::all();
        return view('ofertas', compact('user', 'ofertas'));
    }
}
