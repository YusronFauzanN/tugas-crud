<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa', compact('mahasiswa'));
    }
    public function find(Request $request)
    {
        $mahasiswa = Mahasiswa::where('nama', 'LIKE', '%' . $request->nama . '%')->get();
        return view('mahasiswa', compact('mahasiswa'));
    }
    public function store(Request $request)
    {
        // Validating
        $validated = $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|string',
        ]);
        // Insert Data
        $mahasiswa = Mahasiswa::create([
            'nama' => $validated['nama'],
            'nim' => $validated['nim']
        ]);
        
        return redirect('/mahasiswa');
        
    }
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa-edit', compact('mahasiswa'));
    }
    public function update(Request $request, $id){
        // Validating
        $validated = $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|string',
        ]);
        // Find data
        $mahasiswa = Mahasiswa::find($id);

        $mahasiswa->update([
            'nama' => $validated['nama'],
            'nim' => $validated['nim'],
        ]);
        
        return redirect('/mahasiswa');
    }
    public function delete($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa');
    }
}
