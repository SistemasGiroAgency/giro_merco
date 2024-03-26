<?php

namespace App\Http\Controllers;

use App\Models\Sucursal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SucursalController extends Controller
{
    public function index()
    {
        $sucursal = DB::table('sucursals as su')->select(
            'su.id as id',
            'su.nombre_sucursal as nombre_sucursal',
            'su.horario as horario',
            'su.telefono as telefono',
            'su.mapa as mapa',
            'su.como_llegar as como_llegar',
            'su.id_zona as id_zona',
            'zo.nombre_zona as nombre_zona',
        )
        ->leftjoin('zonas as zo', 'zo.id', '=', 'zo.id')
        ->where('id_zona')
        ->get();
        
        return view('ZONASUCURSAL.sucursal', ['sucursal' => $sucursal]);
    }

    public function create()
    {
        $zonas = DB::table('zonas as zo')->select(
            'zo.id as id',
            'zo.nombre_zona as nombre_zona',
        )
        ->get();
        return view('ZONASUCURSAL.create', ['zonas' => $zonas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sucursales = new Sucursal();
        $sucursales->nombre_sucursal = $request->nombre_sucursal;
        $sucursales->horario = $request->horario;
        $sucursales->telefono = $request->telefono;
        $sucursales->mapa = $request->mapa;
        $sucursales->como_llegar = $request->como_llegar;
        $sucursales->id_zona = $request->id_zona;
        $sucursales->save();
        return redirect()->route('zona.index');
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
        $edit = Sucursal::find($id);
        $data = [
            'edit'=>$edit
        ];
        return view('ZONASUCURSAL.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sucursales = Sucursal::find($id);
        $sucursales->nombre_sucursal = $request->nombre_sucursal;
        $sucursales->horario = $request->horario;
        $sucursales->telefono = $request->telefono;
        $sucursales->mapa = $request->mapa;
        $sucursales->como_llegar = $request->como_llegar;
        $sucursales->id_zona = $request->id_zona;
        $sucursales->save();
        return redirect()->route('zona.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
