<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Setting;
use Illuminate\Http\Request;
use Auth;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $settings = Setting::where('key', 'LIKE', "%$keyword%")
                ->orWhere('value', 'LIKE', "%$keyword%")
                ->orderBy('key')->paginate($perPage);
        } else {
            $settings = Setting::orderBy('key')->paginate($perPage);
        }
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Visualizo la pagina principal de ajustes '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Creo un nuevo ajuste a las '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return view('admin.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'key' => 'required|string|unique:settings',
                'value' => 'required'
            ]
        );

        $requestData = $request->all();

        Setting::create($requestData);
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Guardo los cambios hechos en ajustes a las  '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);

        return redirect('admin/settings')->with('flash_message', 'Setting added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $setting = Setting::findOrFail($id);
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Visualizo individualmente la tabla settings  '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return view('admin.settings.show', compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $setting = Setting::findOrFail($id);
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Edito un ajuste de la tabla settings a las '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return view('admin.settings.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'key' => 'required|string|unique:settings,key,' . $id,
                'value' => 'required'
            ]
        );
        $requestData = $request->all();

        $setting = Setting::findOrFail($id);
        $setting->update($requestData);
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Actualizo la tabla settings a las  '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return redirect('admin/settings')->with('flash_message', 'Setting updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Setting::destroy($id);
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Elimino una final de la tabla settings a las '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return redirect('admin/settings')->with('flash_message', 'Setting deleted!');
    }
}
