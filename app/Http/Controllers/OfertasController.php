<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use App\Models\Ofertas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfertasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ofertas = DB::table('ofertas as of')->select(
            'of.id as id',
            'of.imagen as imagen',
            'of.id_zona as id_zona',
            'of.id_sucursal as id_sucursal',
            'zo.nombre_zona as nombre_zona',
            'su.nombre_sucursal as nombre_sucursal',
        )
        ->leftjoin('zonas as zo', 'zo.id', '=', 'id_zona')
        ->leftjoin('sucursals as su', 'su.id', '=', 'id_sucursal')
        ->get();
        return view('OFERTAS/ofertas', ['oferta' => $ofertas]);
    }

    public function create()
    {
        $ofertas = DB::table('sucursals as su')->select(
            'su.id as id',
            'su.id_zona as id_zona',
            'zo.nombre_zona as nombre_zona'
        )
        ->leftJoin('zonas as zo', 'zo.id', '=', 'id_zona')
        ->get();

        return view('OFERTAS/create', ['oferta' => $ofertas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ofertas = new Ofertas();
        $ofertas->imagen = $request->imagen;
        $ofertas->id_zona = $request->id_zona;
        $ofertas->id_sucursal = $request->id_sucursal;
        $ofertas->save();
        return redirect()->route('ofertas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
