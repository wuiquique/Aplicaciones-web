<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Http\Requests\StoreEstudianteRequest;
use App\Http\Requests\UpdateEstudianteRequest;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('estudiantes_lista', [
            "estudiantes" => Estudiante::all(),
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
     * @param  \App\Http\Requests\StoreEstudianteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstudianteRequest $request)
    {
        //
        $estudiante = new Estudiante();

        $estudiante->nombre = $request->input("nombre");
        $estudiante->dpi = $request->input("dpi");
        $estudiante->direccion = $request->input("direccion");
        $estudiante->telefono = $request->input("telefono");
        $estudiante->departamento = $request->input("departamento");
        $estudiante->municipio = $request->input("municipio");
        $estudiante->zona = $request->input("zona");
        $estudiante->birth = $request->date("birth");
        $estudiante->genero = $request->input("genero");
        $estudiante->carrera = $request->input("carrera");
        $estudiante->facultad = $request->input("facultad");

        $estudiante->save();

        return redirect("/estudiantes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
        return view('estudiantes_ver', [
            "estudiante" => $estudiante,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        //
        return view('estudiantes_update', [
            "estudiante" => $estudiante,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEstudianteRequest  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEstudianteRequest $request, Estudiante $estudiante)
    {
        //
        $estudiante->nombre = $request->input("nombre");
        $estudiante->dpi = $request->input("dpi");
        $estudiante->direccion = $request->input("direccion");
        $estudiante->telefono = $request->input("telefono");
        $estudiante->departamento = $request->input("departamento");
        $estudiante->municipio = $request->input("municipio");
        $estudiante->zona = $request->input("zona");
        $estudiante->birth = $request->date("birth");
        $estudiante->genero = $request->input("genero");
        $estudiante->carrera = $request->input("carrera");
        $estudiante->facultad = $request->input("facultad");

        $estudiante->save();

        return redirect("/estudiantes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiante $estudiante)
    {
        //
        $estudiante->delete();
        return redirect("/estudiantes");
    }
}
