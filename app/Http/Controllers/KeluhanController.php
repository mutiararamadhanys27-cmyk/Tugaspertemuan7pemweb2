<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use App\Models\Masyarakat;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    public function index()
    {
        $data = Keluhan::with('masyarakat')->get();

        return view('keluhan.index', compact('data'));
    }

    public function create()
    {
        $masyarakat = Masyarakat::all();

        return view('keluhan.create', compact('masyarakat'));
    }

    public function store(Request $request)
{
    $request->validate([
        'keluhan' => 'required',
        'masyarakat_id' => 'required',
        'status' => 'nullable',
        'reject_reason' => 'nullable'
    ]);

    $status = $request->status ?? 'sent';

    $reject_reason = null;

    if ($status == 'rejected') {
        $reject_reason = $request->reject_reason;
    }

    Keluhan::create([
        'keluhan' => $request->keluhan,
        'status' => $status,
        'reject_reason' => $reject_reason,
        'masyarakat_id' => $request->masyarakat_id
    ]);

    return redirect()->route('keluhan.index');
}
}
