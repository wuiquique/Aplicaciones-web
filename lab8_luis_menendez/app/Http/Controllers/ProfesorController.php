<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Http\Requests\StoreProfesorRequest;
use App\Http\Requests\UpdateProfesorRequest;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('profesores_lista', [
            "profesores" => Profesor::all(),
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
     * @param  \App\Http\Requests\StoreProfesorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfesorRequest $request)
    {
        //
        $profesore = new Profesor();

        $profesore->nombre = $request->input("nombre");
        $profesore->dpi = $request->input("dpi");
        $profesore->direccion = $request->input("direccion");
        $profesore->telefono = $request->input("telefono");
        $profesore->departamento = $request->input("departamento");
        $profesore->municipio = $request->input("municipio");
        $profesore->zona = $request->input("zona");
        $profesore->birth = $request->date("birth");
        $profesore->genero = $request->input("genero");
        $profesore->grado = $request->input("grado");

        $profesore->save();

        return redirect("/profesores");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show(Profesor $profesore)
    {
        //
        return view('profesores_ver', [
            "profesor" => $profesore,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesor $profesore)
    {
        //
        return view('profesores_update', [
            "profesor" => $profesore,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfesorRequest  $request
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfesorRequest $request, Profesor $profesore)
    {
        //
        $profesore->nombre = $request->input("nombre");
        $profesore->dpi = $request->input("dpi");
        $profesore->direccion = $request->input("direccion");
        $profesore->telefono = $request->input("telefono");
        $profesore->departamento = $request->input("departamento");
        $profesore->municipio = $request->input("municipio");
        $profesore->zona = $request->input("zona");
        $profesore->birth = $request->date("birth");
        $profesore->genero = $request->input("genero");
        $profesore->grado = $request->input("grado");

        $profesore->save();

        return redirect("/profesores");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesor $profesore)
    {
        //
        $profesore->delete();
        return redirect("/profesores");
    }
}
