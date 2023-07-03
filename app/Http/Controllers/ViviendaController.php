<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreViviendaRequest;
use App\Http\Requests\UpdateViviendaRequest;
use App\Models\Vivienda;

class ViviendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viviendas = Vivienda::all();
        return view('viviendas.viviendaIndex', compact('viviendas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreViviendaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vivienda $vivienda)
    {
        return view('viviendas.viviendaShow', compact('vivienda'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vivienda $vivienda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateViviendaRequest $request, Vivienda $vivienda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vivienda $vivienda)
    {
        //
    }
}
