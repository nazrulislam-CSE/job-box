<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

if (!function_exists('get_setting')) {
    function get_setting($name)
    {
        return Setting::where('name', $name)->first();
    }
}

if (!function_exists('updateImage')) {
    function updateImage($request, $name, $folder)
    {
        if ($request->hasFile($name)) {

            $file = $request->file($name);

            // Store file (without "public/")
            $path = $file->store($folder, 'public');

            // Get setting row
            $setting = Setting::where('name', $name)->first();

            if (!$setting) return null;

            // Delete old file
            if ($setting->value && Storage::disk('public')->exists($setting->value)) {
                Storage::disk('public')->delete($setting->value);
            }

            // Save new file path
            $setting->value = $path;
            $setting->save();

            return $path;
        }

        return null;
    }
}
