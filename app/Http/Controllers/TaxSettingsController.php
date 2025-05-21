<?php

namespace App\Http\Controllers;

use App\Livewire\TaxSetting as LivewireTaxSetting;
use Illuminate\Http\Request;

class TaxSettingsController extends Controller
{
    public function edit()
    {
        $settings = LivewireTaxSetting::first();
        return view('livewire.admin.tax-setting', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'pph' => 'required|numeric|min:0|max:100',
            'bpjs_kesehatan' => 'required|numeric|min:0|max:100',
            'bpjs_ketenagakerjaan' => 'required|numeric|min:0|max:100',
            'ptkp' => 'required|numeric|min:0',
        ]);

        $settings = LivewireTaxSetting::firstOrCreate([]);
        $settings->update($validated);

        return redirect()->route('tax-settings.edit')->with('success', 'Pengaturan pajak berhasil disimpan.');
    }
}
