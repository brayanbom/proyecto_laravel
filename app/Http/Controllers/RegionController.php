<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Sitio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RegionController extends Controller
{
    public function index(): View
    {
        $regiones = Region::all();//select * from region
        $usuarios = User::all();
        $roles = Role::all();

        return view('dashboard', compact('regiones', 'usuarios','roles'));
    }




    public function edit(Request $request): View
    {
        $id = $request->input('region'); // Obtener el valor del campo 'region' del formulario

        $region = Region::find($id);
        
        
        return view('mostrar', compact('region'));
    } 

    public function crear(Request $request)
    {
        $region = new Region;
        $region->nombre = $request->nombre;
        $region->save();

        return redirect()->route('dashboard')->with('success', 'Creaste una nueva region');
    }

    public function eliminar(Request $request)
    {
        $id = $request->region;
        Region::find($id)->delete();
        return redirect()->route('dashboard')->with('danger', 'Eliminaste una region');
    }


    public function crears(): View
    {
        $regiones = Region::all();
        return view('crears', compact('regiones'));
    }

    

    
}
