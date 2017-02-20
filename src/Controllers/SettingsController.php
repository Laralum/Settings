<?php

namespace Laralum\Settings\Controllers;

use Laralum\Settings\Models\Settings;
use Laralum\Settings\Settings as Setts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laralum\Laralum\Packages;

class SettingsController extends Controller
{
    /**
     * Display all the modules settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Packages::all();
        $final_packages = [];

        foreach( $packages as $package ) {
            $sets = Setts::get($package);
            if( $sets ) {
                $final_packages[$package] = Setts::view($package);
            }
        }

        return view('laralum_settings::index', ['packages' => $final_packages]);
    }

    /**
     * Update the general settings.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'appname' => 'required',
        ]);

        Settings::first()->update([
            'appname'   => $request->input('appname'),
        ]);

        return redirect()->route('laralum::settings.index', ['p' => 'Settings'])->with('success', __('laralum_settings::general.updated_settings'));
    }
}
