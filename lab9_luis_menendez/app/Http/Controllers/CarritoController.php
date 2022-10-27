<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Http\Requests\StoreCarritoRequest;
use App\Http\Requests\UpdateCarritoRequest;
use App\Models\Item;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $usr = $request->user();

        $items = $usr->items;

        foreach ($items as $item) {
            $item->cant = $item->pivot->cant;
        }

        return response()->json([
            'carrito' => $items,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarritoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarritoRequest $request)
    {
        //
        $rq = $request->input();
        $user = $request->user();

        if ($rq['cant'] == 0) {
            $user->items()->detach([$rq['item_id']]);
        } else {
            $user->items()->syncWithoutDetaching([$rq['item_id'] => ['cant' => $rq['cant']]]);
        }
        return response()->json("Succes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function show(Carrito $carrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarritoRequest  $request
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarritoRequest $request, Carrito $carrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrito $carrito)
    {
        //
    }
}
