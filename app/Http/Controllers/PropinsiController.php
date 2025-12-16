<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propinsi;

class PropinsiController extends Controller
{
    public function index()
    {
        $propinsi = Propinsi::orderBy('id', 'DESC')->paginate(5);
        return view('propinsi.index', compact('propinsi'));
    }

    public function create()
    {
        return view('propinsi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_propinsi' => 'required|max:100'
        ]);

        Propinsi::create([
            'nama_propinsi' => $request->nama_propinsi
        ]);

        return redirect()->route('propinsi.index')->with('message', 'Data propinsi berhasil disimpan!');
    }

    public function show($id)
    {
        $propinsi = Propinsi::findOrFail($id);
        return view('propinsi.show', compact('propinsi'));
    }

    public function edit($id)
    {
        $propinsi = Propinsi::findOrFail($id);
        return view('propinsi.edit', compact('propinsi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_propinsi' => 'required|max:100'
        ]);

        $propinsi = Propinsi::findOrFail($id);
        $propinsi->update([
            'nama_propinsi' => $request->nama_propinsi
        ]);

        return redirect()->route('propinsi.index')->with('message', 'Data propinsi berhasil diupdate!');
    }

    public function destroy($id)
    {
        $propinsi = Propinsi::findOrFail($id);
        $propinsi->delete();

        return redirect()->route('propinsi.index')->with('message', 'Data propinsi berhasil dihapus!');
    }
}
