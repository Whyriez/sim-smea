<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LembarDisposisi extends Model
{
    use HasFactory;
    protected $table = "lembar_disposisi";
    protected $fillable = ['id', 'id_surat_masuk', 'surat_dari', 'tanggal_surat', 'nomor_surat', 'diterima_tanggal', 'nomor_agenda', 'sifat', 'hal', 'catatan'];

    // public function lembardisposisi()
    // {
    //     return $this->belongsTo(DetailLembarDisposisi::class, 'id');
    // }
}
