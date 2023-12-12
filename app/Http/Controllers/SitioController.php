<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Sitio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SitioController extends Controller
{
    public function insertars(Request $request)
    {
        if ($request->imagen) {
            $file = $request->imagen;
            $destinationPath = 'imagen/';
            $filename =  $file->getClientOriginalName();
            $imagenPath = $destinationPath . $filename;
        } else {
            $imagenPath = null; // Si no se carga una imagen, establece el valor a null
        }

        Sitio::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precios' => $request->precios,
            'region_id' => $request->region_id,
            'imagen' => $imagenPath, // Asigna la ruta de la imagen
        ]);


        return redirect()->route('dashboard')->with('creaste', 'Creaste un nuevo sitio');
    }

    public function eliminars(Sitio $id)
    {
        /* id ya esta intanciado */
        $id->delete();
        return redirect()->route('dashboard')->with('eliminar_sitio', 'Sitio turistico eliminado');
    }


    public function edits(Sitio $id)
    {
        $regiones = Region::all();
        return view('edits', compact('id', 'regiones'));
    }

    public function updates(Request $request, Sitio $id)
    {

        // Verificar si se ha adjuntado una nueva imagen
        if ($request->imagen) {
            $file = $request->imagen;
            $destinationPath = 'imagen/';
            $filename =  $file->getClientOriginalName();
            $id->imagen = $destinationPath . $filename;
        }

        // Actualizar los campos de la nota con los datos del formulario
        $id->nombre = $request->nombre;
        $id->descripcion = $request->descripcion;
        $id->precios = $request->precios;
        $id->region_id = $request->region_id;
        $id->save();

        
        return redirect()->route('dashboard')->with('sitio_turistico_actualizado', 'Sitio turistico modificado con exito');

    }

    public function show(Sitio $id)
    {
        /* $usuario = Auth::user();
        $nombre = Auth::user()->name; */
        return view('sitios_turisticos', compact(['id']));
    }
}
