<?php

namespace App\Http\Controllers;

use App\Models\Registrador;
use Illuminate\Http\Request;

class RegistradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registrador.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registrador.create');
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
     * @param  \App\Models\Registrador  $registrador
     * @return \Illuminate\Http\Response
     */
    public function show(Registrador $registrador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registrador  $registrador
     * @return \Illuminate\Http\Response
     */
    public function edit(Registrador $registrador)
    {
        return view('registrador.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registrador  $registrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registrador $registrador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registrador  $registrador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registrador $registrador)
    {
        //
    }
}
