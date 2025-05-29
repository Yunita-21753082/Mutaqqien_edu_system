<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;
use App\Models\Wali;

class RAController extends Controller
{
    public function index()
    {
        $dataRA = Santri::where('id_unit', 1)->get();
        return view('data_ra.index', compact('dataRA'));
    }

    public function create()
    {
        $wali = Wali::all();
        return view('data_ra.create', compact('wali'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'id_wali' => 'required',
        ]);

        Santri::create(array_merge($request->all(), ['id_unit' => 1]));
        return redirect()->route('data-ra.index')->with('success', 'Data RA berhasil ditambahkan');
    }

    public function edit($id)
    {
        $santri = Santri::findOrFail($id);
        $wali = Wali::all();
        return view('data_ra.edit', compact('santri', 'wali'));
    }

    public function update(Request $request, $id)
    {
        $santri = Santri::findOrFail($id);
        $santri->update($request->all());
        return redirect()->route('data-ra.index')->with('success', 'Data RA berhasil diperbarui');
    }

    public function destroy($id)
    {
        $santri = Santri::findOrFail($id);
        $santri->delete();
        return redirect()->route('data-ra.index')->with('success', 'Data RA berhasil dihapus');
    }
}