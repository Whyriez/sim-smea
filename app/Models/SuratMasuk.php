<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;
    protected $table = "surat_masuk";
    protected $fillable = ['id', 'nomor_berkas', 'alamat_pengirim', 'tanggal', 'nomor', 'perihal', 'nomor_petunjuk', 'nomor_paket', 'berkas'];

    // public function detailDisposisi()
    // {
    //     return $this->hasMany(LembarDisposisi::class,  'id', 'id_surat_masuk');
    // }
}
