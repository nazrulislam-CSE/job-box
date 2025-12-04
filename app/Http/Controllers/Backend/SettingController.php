<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Session;
use Illuminate\Support\Carbon;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $pageTitle = 'Advance Settings';
        $settings = Setting::all()->keyBy('name');
        return view('admin.settings.index', compact('pageTitle','settings'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
    {
        // dd($request->all());
        // 1. Update all TEXT settings
        foreach ($request->except(['_token', '_method', 'site_logo', 'site_footer_logo', 'site_favicon', 'site_contact_logo', 'site_company_logo']) as $key => $value) {

            $setting = Setting::where('name', $key)->first();

            if ($setting) {
                $setting->value = $value ?? "";
                $setting->save();
            }
        }

        // 2. Update IMAGE settings
        updateImage($request, 'site_logo', 'setting/logo');
        updateImage($request, 'site_footer_logo', 'setting/logo');
        updateImage($request, 'site_favicon', 'setting/favicon');
        updateImage($request, 'site_contact_logo', 'setting/logo');
        updateImage($request, 'site_company_logo', 'setting/logo');

        return back()->with('success', 'Settings Updated Successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
