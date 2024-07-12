<?php

namespace App\Http\Controllers;

use App\Models\Prodi; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_prodi = Prodi::all();

        return view('prodi.index',['data_prodi'=>$list_prodi]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $prodi = new Prodi();
        $prodi->kode = $request->kode;
        $prodi->nama = $request->nama;
        $prodi->save();
        return redirect('prodi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
            $data_prodi = DB::table('prodi')->where('id',$id)->get();
            return view('prodi.edit', compact('data_prodi'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $prodi =Prodi::find($request->id);
        $prodi->kode = $request->kode;
        $prodi->nama = $request->nama;
        $prodi->save();
        return redirect('prodi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    DB ::table('prodi')-> where ('id', $id)->delete();
    return redirect('prodi');
}
}
