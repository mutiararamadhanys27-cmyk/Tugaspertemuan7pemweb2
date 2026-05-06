<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index()
    {
        $data = Masyarakat::all();

        return view('data-masyarakat.index', compact('data'));
    }

    public function create()
    {
        $genders = ['Laki-laki', 'Perempuan'];

        return view('data-masyarakat.create', compact('genders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_kk' => 'required|digits:16',
            'nomor_ktp' => 'required|digits:16',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        Masyarakat::create($request->all());

        return redirect()->route('data-masyarakat.index');
    }

    public function edit($id)
    {
        $masyarakat = Masyarakat::findOrFail($id);

        $genders = ['Laki-laki', 'Perempuan'];

        return view('data-masyarakat.edit', compact('masyarakat', 'genders'));
    }

    public function update(Request $request, $id)
    {
        $masyarakat = Masyarakat::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        $masyarakat->update(
            $request->except(['nomor_kk', 'nomor_ktp'])
        );

        return redirect()->route('data-masyarakat.index');
    }
}