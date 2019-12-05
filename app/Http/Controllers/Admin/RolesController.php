<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use Auth;

class RolesController extends Controller
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
            $roles = Role::where('name', 'LIKE', "%$keyword%")->orWhere('label', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $roles = Role::latest()->paginate($perPage);
        }
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Visualizo la pagina principal de roles  '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $permissions = Permission::select('id', 'name', 'label')->get()->pluck('label', 'name');        
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Creo un nuevo rol a las '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required']);

        $role = Role::create($request->all());
        $role->permissions()->detach();

        if ($request->has('permissions')) {
            foreach ($request->permissions as $permission_name) {
                $permission = Permission::whereName($permission_name)->first();
                $role->givePermissionTo($permission);
            }
        }
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Guarda los cambios de la tabla rol '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return redirect('admin/roles')->with('flash_message', 'Role added!');
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
        $role = Role::findOrFail($id);
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Mostrar los roles a las '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return view('admin.roles.show', compact('role'));
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
        $role = Role::findOrFail($id);
        $permissions = Permission::select('id', 'name', 'label')->get()->pluck('label', 'name');
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Edito un rol a las  '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     * @return void
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, ['name' => 'required']);

        $role = Role::findOrFail($id);
        $role->update($request->all());
        $role->permissions()->detach();

        if ($request->has('permissions')) {
            foreach ($request->permissions as $permission_name) {
                $permission = Permission::whereName($permission_name)->first();
                $role->givePermissionTo($permission);
            }
        }
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Actualizo los roles a las   '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return redirect('admin/roles')->with('flash_message', 'Role updated!');
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
        Role::destroy($id);
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Elimino un rol a las  '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return redirect('admin/roles')->with('flash_message', 'Role deleted!');
    }
}
