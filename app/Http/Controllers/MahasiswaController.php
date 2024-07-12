<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Models\Rombel;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data_mahasiswa = DB::table('mahasiswa')
            ->join('prodi', 'mahasiswa.prodi_id', '=', 'prodi.id')
            ->join('rombel', 'mahasiswa.rombel_id', '=', 'rombel.id')
            ->select('mahasiswa.*', 'prodi.nama as nama_prodi', 'rombel.kode as kode_rombel')
            ->get();

        $prodis = Prodi::all();
        $rombels = Rombel::all();

        return view('mahasiswa.index', compact('data_mahasiswa', 'prodis', 'rombels'));
    }

    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->tmp_lahir = $request->tmp_lahir;
        $mahasiswa->tgl_lahir = $request->tgl_lahir;
        $mahasiswa->ipk = $request->ipk;
        $mahasiswa->prodi_id = $request->prodi_id;
        $mahasiswa->rombel_id = $request->rombel_id;
        $mahasiswa->save();

        return redirect('mahasiswa');
    }

    public function show(string $id)
    {
        $data_mahasiswa = DB::table('mahasiswa')
            ->join('prodi', 'mahasiswa.prodi_id', '=', 'prodi.id')
            ->join('rombel', 'mahasiswa.rombel_id', '=', 'rombel.id')
            ->select('mahasiswa.*', 'prodi.nama as nama_prodi', 'rombel.kode as kode_rombel')
            ->where('mahasiswa.id', $id)
            ->first();

        return view('mahasiswa.detail', compact('data_mahasiswa'));
    }

    public function edit(string $id)
    {
        $data_mahasiswa = DB::table('mahasiswa')->where('id',$id)->get();
        $prodis = DB::table('prodi')->get();
        $rombels = DB::table('rombel')->get();

        return view('mahasiswa.edit', compact('data_mahasiswa','prodis','rombels'));

    }

    public function update(Request $request)
    {
        $mahasiswa = Mahasiswa::find($request->id);

        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->tmp_lahir = $request->tmp_lahir;
        $mahasiswa->tgl_lahir = $request->tgl_lahir;
        $mahasiswa->ipk = $request->ipk;
        $mahasiswa->prodi_id = $request->prodi_id;
        $mahasiswa->rombel_id = $request->rombel_id;
        $mahasiswa->save();

        return redirect('mahasiswa');
    }

    public function destroy(string $id)
    {
        DB::table('mahasiswa')->where('id',$id)->delete();
        return redirect('mahasiswa');
    }
}
