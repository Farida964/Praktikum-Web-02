<?php

namespace App\Http\Controllers;

use App\Models\Unit_Kerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unit_kerja = Unit_Kerja::get();
        return view('unit_kerja.index', compact('unit_kerja'));
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
     * @param  \App\Models\Unit_Kerja  $unit_Kerja
     * @return \Illuminate\Http\Response
     */
    public function show(Unit_Kerja $unit_Kerja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unit_Kerja  $unit_Kerja
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit_Kerja $unit_Kerja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unit_Kerja  $unit_Kerja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit_Kerja $unit_Kerja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit_Kerja  $unit_Kerja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit_Kerja $unit_Kerja)
    {
        //
    }
}
