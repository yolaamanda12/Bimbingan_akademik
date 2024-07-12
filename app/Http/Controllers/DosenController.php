<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Prodi;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_dosen = DB::table('dosen')
            ->join('prodi', 'dosen.prodi_id', '=', 'prodi.id')
            ->select('dosen.*', 'prodi.nama as nama_prodi')
            ->get();

        $prodis = Prodi::all();

        return view('dosen.index', compact('data_dosen', 'prodis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $data_prodi = Prodi::all();
        // $dosen = new Dosen();
        // return view('dosen.edit', ['dosen' => $dosen, $data_prodi => 'data_prodi']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dosen = new Dosen();
        $dosen->nama = $request->nama;
        $dosen->tmp_lahir = $request->tmp_lahir;
        $dosen->tgl_lahir = $request->tgl_lahir;
        $dosen->jk = $request->jk;
        $dosen->prodi_id = $request->prodi_id;
        $dosen->save();
        return redirect('dosen');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data_dosen = DB::tablle('dosen')
        ->join('prodi', 'dosen.prodi_id', '=', 'prodi.id')
        ->select('dosen.*', 'prodi.nama as nama_prodi')
        ->where('dosen.id', $id)
        ->first();

        return view('dosen.index', compact('data_dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data_dosen = DB::table('dosen')->where('id', $id)->get();
        $prodis = DB::table('prodi')->get();
        return view('dosen.edit', compact('data_dosen', 'prodis'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->nama = $request->nama;
        $dosen->tmp_lahir = $request->tmp_lahir;
        $dosen->tgl_lahir = $request->tgl_lahir;
        $dosen->jk = $request->jk;
        $dosen->prodi_id = $request->prodi_id;
        $dosen->save();
        return redirect('dosen');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('dosen')->where('id', $id)->deleted();
        return redirect('dosen');
    }
}
