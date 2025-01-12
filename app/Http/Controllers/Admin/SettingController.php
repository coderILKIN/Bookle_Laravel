<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingUpdateRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Setting::first();
        return view('admin.setting.index', compact('settings'));
    }

  

    /**
     * Update the specified resource in storage.
     */
    public function update(SettingUpdateRequest $request)
    {
        $validated = $request->validated();

        $setting = Setting::first();


        $imageFields = [
            'logo_image',
            'slider_image',
            'slider_image_two',
            'breadcrump_image',
            'breadcrump_image_two',
            'banner_background_image',
            'banner_image'
        ];
    
        foreach ($imageFields as $imageField) {
            if ($request->hasFile($imageField)) {
                // Silinən şəkili yoxla və sil
                if ($setting->{$imageField}) {
                    Storage::delete($setting->{$imageField});
                }
                
                // Yeni şəkili yüklə
                $validated[$imageField] = Storage::putFile('uploads/settings/images', $request->file($imageField));
            }
        }


        if($setting){
            $setting->update($validated);
        } else{
            Setting::create($validated);
        }

        return redirect()->back()->with('success', 'Setting update successfully');
    }

   
}
