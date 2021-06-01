<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'jadwal_kuliah';
    protected $fillable = ['id','kd_mkul','nama_mkul','kd_dosen','jam', 'ruang_kelas', 'jumlah_mhs','tanggal_mulai'];
}
