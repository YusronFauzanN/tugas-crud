<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with('kelas')->get();
        $kelas = Kelas::all();
        return view('mahasiswa', compact(['mahasiswa', 'kelas']));
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
            'kelas' => 'required|integer',
        ]);

        // Insert Data
        $mahasiswa = Mahasiswa::create([
            'nama' => $validated['nama'],
            'nim' => $validated['nim'],
            'class_id' => $validated['kelas']
        ]);
        
        return redirect('/mahasiswa');
        
    }
    public function edit($id)
    {
        $kelas = Kelas::all();
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa-edit', compact(['mahasiswa', 'kelas']));
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
