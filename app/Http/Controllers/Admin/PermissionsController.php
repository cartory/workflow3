<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Permission;
use Illuminate\Http\Request;
use Auth;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 15;

        if (!empty($keyword)) {
            $permissions = Permission::where('name', 'LIKE', "%$keyword%")->orWhere('label', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $permissions = Permission::latest()->paginate($perPage);
        }
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Entro a la pagina principal de permisos '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return view('admin.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {   
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Crear un permiso '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return view('admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required']);

        Permission::create($request->all());
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Guarda los cambios de permisos a las  '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return redirect('admin/permissions')->with('flash_message', 'Permission added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        $permission = Permission::findOrFail($id);
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Muestra los permisos nuevos y antiguos  '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return view('admin.permissions.show', compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
        $permission = Permission::findOrFail($id);
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Editar permisos creados  '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return view('admin.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return void
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, ['name' => 'required']);

        $permission = Permission::findOrFail($id);
        $permission->update($request->all());
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Actualiza la tabla permisos  '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return redirect('admin/permissions')->with('flash_message', 'Permission updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        Permission::destroy($id);
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Elimina un permiso '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return redirect('admin/permissions')->with('flash_message', 'Permission deleted!');
    }
}
