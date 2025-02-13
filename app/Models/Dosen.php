<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'dosen';
// table adalah property laravel yang didalam nya terkoneksi dengan
// nama table yang mau kita tampilkan data nya,
// tetapi hanya dapat di akses di dalam class model tersebut ataupun turunan nya

protected $fillable = ['id','nama','tmp_lahir','tgl_lahir', 'jk', 'prodi_id'];
// fillable adalah variable dalam model eloquent yang tugasnya
// membatasi kolom mana yang dapat di isi atau di input
}