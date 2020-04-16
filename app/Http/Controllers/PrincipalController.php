<?php

namespace App\Http\Controllers;

use App\Principal;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('principal');
    }

    public function predicas()
    {
        return view('predicas');
    }

    public function grupos()
    {
        return view('grupos');
    }

    public function ubicacion()
    {
        return view('ubicacion');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function cultura()
    {
        return view('cultura');
    }

    public function correo()
    {
        $nombre = var_dump(request('nombre'));
        $tel =  var_dump(request('telefono'));
        $edad = var_dump(request('edad'));
        $grupo = var_dump(request('grupo'));
        $asunto = var_dump(request('asunto'));
        $men = var_dump(request('mensaje'));
        $correo = var_dump(request('corroe'));

        print_r($nombre);
        print_r($tel);
        print_r($asunto);
        print_r($men);
        print_r($grupo);
        print_r($edad);
        print_r($correo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Principal  $principal
     * @return \Illuminate\Http\Response
     */
    public function show(Principal $principal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Principal  $principal
     * @return \Illuminate\Http\Response
     */
    public function edit(Principal $principal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Principal  $principal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Principal $principal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Principal  $principal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Principal $principal)
    {
        //
    }
}
