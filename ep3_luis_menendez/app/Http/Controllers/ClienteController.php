<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Models\Trabajador;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('clientes_lista', [
            "clientes" => Cliente::all(),
            "trabajador" => Trabajador::all(),
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
     * @param  \App\Http\Requests\StoreClienteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        //
        $cliente = new Cliente();

        $cliente->nombre = $request->input("nombre");
        $cliente->apellido = $request->input("apellido");
        $cliente->direccion = $request->input("direccion");
        $cliente->correo = $request->input("correo");
        $cliente->telefono = $request->input("telefono");
        $cliente->estado = $request->input("estado");
        $cliente->profesion = $request->input("profesion");
        $cliente->cuenta = $request->input("cuenta");
        $cliente->trab_id = $request->input("trab_id");

        $cliente->save();

        return redirect("/clientes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
        return view('clientes_ver', [
            "cliente" => $cliente,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
        return view('clientes_update', [
            "cliente" => $cliente,
            "trabajadores" => Trabajador::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClienteRequest  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        //
        $cliente->nombre = $request->input("nombre");
        $cliente->apellido = $request->input("apellido");
        $cliente->direccion = $request->input("direccion");
        $cliente->correo = $request->input("correo");
        $cliente->telefono = $request->input("telefono");
        $cliente->estado = $request->input("estado");
        $cliente->profesion = $request->input("profesion");
        $cliente->cuenta = $request->input("cuenta");
        $cliente->trab_id = $request->input("trab_id");

        $cliente->save();

        return redirect("/clientes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
        $cliente->delete();
        return redirect("/clientes");
    }
}
