<?php

namespace App\Http\Controllers;

use App\Models\Petani;
use Illuminate\Http\Request;

class PetaniController extends Controller
{
    public function index()
    {
        $petanis = Petani::all();
        return view('admin.petanis.index', compact('petanis'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nama' => 'required|string|max:255',
        //     'username' => 'required|string|max:255|unique:petanis',
        //     'alamat' => 'required|string',
        //     'notelepon' => 'required|string|max:15',
        // ]);

        Petani::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'alamat' => $request->alamat,
            'notelepon' => $request->notelepon,
        ]);

        return redirect()->back()->with('success', 'Petani berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $petani = Petani::findOrFail($id);
        return view('admin.petanis.edit', compact('petani'));
    }

    public function update(Request $request, $id)
    {
        $petani = Petani::findOrFail($id);
        $petani->update($request->all());
        return redirect()->route('petanis.index')->with('success', 'Petani berhasil diperbarui');
    }

    public function destroy(Petani $Petani)
    {
        $Petani->delete();
        return redirect()->route('petanis.index')->with('success', 'Petani deleted successfully.');
    }
}