<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Oferta;
use Auth;
use Illuminate\Support\Facades\DB;

class OfertasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ofertas = DB::table('ofertas')->get();
        $user = Auth::user()->id;
        //$ofertas = auth()->user()->ofertas;
        //$ofertas = auth()->user();
        return view('inicio',compact('ofertas','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Auth::user()->id;
        return view('form',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $oferta = new Oferta;
    $oferta->name = $request->name; 
    $oferta->location = $request->locations; 
    $oferta->contract = $request->contract; 
    $oferta->course = $request->course;
    $oferta->requeriments = $request->requeriments;
    $oferta->description = $request->description;    
    $oferta->user_id = Auth::user()->id; 
    $oferta->save();

    return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
