<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rombel;
use App\Models\Dosen;
use Illuminate\Support\Facades\DB;

class RombelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_rombel = DB::table('rombel')
            ->join('dosen', 'rombel.dosen_id', '=', 'dosen.id')
            ->select('rombel.*', 'dosen.nama as nama_dosen')
            ->get();

        $dosens = dosen::all();

        return view('rombel.index', compact('data_rombel', 'dosens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $data_dosen = dosen::all();
        // $rombel = new rombel();
        // return view('rombel.edit', ['rombel' => $rombel, $data_dosen => 'data_dosen']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
  {
    $rombel = new Rombel();
    $rombel->kode = $request->kode;
    $rombel->thn_masuk = $request->thn_masuk;
    $rombel->dosen_id = $request->dosen_id;
    $rombel->save();
    return redirect('rombel');
  }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data_rombel = DB::tablle('rombel')
        ->join('dosen', 'rombel.dosen_id', '=', 'dosen.id')
        ->select('rombel.*', 'dosen.nama as nama_dosen')
        ->where('rombel.id', $id)
        ->first();

        return view('rombel.index', compact('data_rombel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data_rombel = DB::table('rombel')->where('id', $id)->get();
        $dosens = DB::table('dosen')->get();
        return view('rombel.edit', compact('data_rombel', 'dosens'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rombel = Rombel::findOrFail($id);
        $rombel->kode = $request->kode;
        $rombel->thn_masuk = $request->thn_masuk;
        $rombel->dosen_id = $request->dosen_id;
        $rombel->save();
        return redirect('rombel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('rombel')->where('id', $id)->delet();
        return redirect('rombel');
    }
}
