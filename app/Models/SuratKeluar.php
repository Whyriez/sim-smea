<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;
    protected $table = "surat_keluar";
    protected $fillable = ['id', 'nomor_berkas', 'alamat_penerima', 'tanggal', 'tipe_surat', 'perihal', 'nomor_petunjuk', 'nomor_paket', 'berkas'];
}
