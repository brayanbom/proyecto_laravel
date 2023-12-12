<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function asignarrol(Request $request)
    {
        $user = User::find($request->input('usuario'));
        $role = Role::find($request->input('rol'));

        $user->assignRole($role);
        $user->save();

        return redirect()->route('dashboard')->with('usuario', 'se le asigno un rol a ese usuario');
    }


    public function quitarRol(Request $request)
    {
        $user = User::find($request->input('usuario'));
        $role = Role::find($request->input('rol'));

        $user->removeRole($role);
        $user->save();

        return redirect()->route('dashboard')->with('quitar_rol', 'se le quito un rol a ese usuario');
    }

    public function eliminarUsuario(Request $request)
    {
        $id = $request->usuario;
        User::find($id)->delete();
        

        return redirect()->route('dashboard')->with('quitar_rol', 'se elimino usuario');
    }
}
