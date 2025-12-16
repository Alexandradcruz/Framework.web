<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Propinsi;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function index()
    {
        $data = Kota::with('propinsi')->paginate(5);
        return view('kota.index', compact('data'));
    }

    public function create()
    {
        $propinsi = Propinsi::all();
        return view('kota.create', compact('propinsi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kota' => 'required|string|max:100',
            'propinsi_id' => 'required|exists:propinsi,id',
        ]);

        Kota::create([
            'nama_kota' => $request->nama_kota,
            'propinsi_id' => $request->propinsi_id,
        ]);

        return redirect()->route('kota.index')->with('success', 'Data kota berhasil ditambahkan');
    }

    public function edit(Kota $kota)
    {
        $propinsi = Propinsi::all();
        return view('kota.edit', compact('kota', 'propinsi'));
    }

    public function update(Request $request, Kota $kota)
    {
        $request->validate([
            'nama_kota' => 'required|string|max:100',
            'propinsi_id' => 'required|exists:propinsi,id',
        ]);

        $kota->update([
            'nama_kota' => $request->nama_kota,
            'propinsi_id' => $request->propinsi_id,
        ]);

        return redirect()->route('kota.index')->with('success', 'Data kota berhasil diubah');
    }

    public function destroy(Kota $kota)
    {
        $kota->delete();
        return redirect()->route('kota.index')->with('success', 'Data kota berhasil dihapus');
    }
}
