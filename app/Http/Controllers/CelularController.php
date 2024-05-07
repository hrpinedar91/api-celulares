<?php

namespace App\Http\Controllers;

use App\Models\Celular;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCelularRequest;
use App\Http\Requests\UpdateCelularRequest;

class CelularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Celular::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCelularRequest $request)
    {
        //
        $celular = Celular::create($request->all());
        return response()->json($celular, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Celular $celular)
    {
        //
        return $celular->load('category');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCelularRequest $request, Celular $celular)
    {
        //
        $celular->update($request->all());
        return response()->json($celular, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Celular $celular)
    {
        //
        $celular->delete();
        return response()->json(null, 204);
    }
}
