<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use App\Http\Requests\StoreTrabajadorRequest;
use App\Http\Requests\UpdateTrabajadorRequest;

class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('trabajadors_lista', [
            "trabajadors" => Trabajador::all(),
        ]);
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
     * @param  \App\Http\Requests\StoreTrabajadorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrabajadorRequest $request)
    {
        //
        $trabajador = new Trabajador();

        $trabajador->nombre = $request->input("nombre");
        $trabajador->apellido = $request->input("apellido");
        $trabajador->direccion = $request->input("direccion");
        $trabajador->correo = $request->input("correo");
        $trabajador->telefono = $request->input("telefono");
        $trabajador->cargo = $request->input("cargo");

        $trabajador->save();

        return redirect("/trabajadors");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function show(Trabajador $trabajador)
    {
        //
        return view('trabajadors_ver', [
            "trabajador" => $trabajador,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function edit(Trabajador $trabajador)
    {
        //
        return view('trabajadors_update', [
            "trabajador" => $trabajador,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTrabajadorRequest  $request
     * @param  \App\Models\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrabajadorRequest $request, Trabajador $trabajador)
    {
        //
        $trabajador->nombre = $request->input("nombre");
        $trabajador->apellido = $request->input("apellido");
        $trabajador->direccion = $request->input("direccion");
        $trabajador->correo = $request->input("correo");
        $trabajador->telefono = $request->input("telefono");
        $trabajador->cargo = $request->input("cargo");

        $trabajador->save();

        return redirect("/trabajadors");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trabajador $trabajador)
    {
        //
        $trabajador->delete();
        return redirect("/trabajadors");
    }
}
