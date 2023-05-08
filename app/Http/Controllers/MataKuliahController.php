<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mk = MataKuliah::all();
        return view('mata-kuliah', compact('mk'));
    }
}
