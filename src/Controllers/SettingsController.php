<?php

namespace Laralum\Settings\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laralum\Laralum\Packages;
use Laralum\Settings\Models\Settings;
use Laralum\Settings\Settings as Setts;

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

        foreach ($packages as $package) {
            $sets = Setts::get($package);
            if ($sets) {
                $final_packages[$package] = Setts::view($package);
            }
        }

        return view('laralum_settings::index', ['packages' => $final_packages]);
    }

    /**
     * Update the general settings.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->authorize('update', Settings::class);

        $this->validate($request, [
            'appname'     => 'required',
            'description' => 'required',
            'keywords'    => 'required',
            'author'      => 'required',
        ]);

        Settings::first()->update([
            'appname'       => $request->appname,
            'description'   => $request->description,
            'keywords'      => $request->keywords,
            'author'        => $request->author,
        ]);

        return redirect()->route('laralum::settings.index', ['p' => 'Settings'])->with('success', __('laralum_settings::general.updated_settings'));
    }
}
