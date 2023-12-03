<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailDisposisiDtrs extends Model
{
    use HasFactory;
    protected $table = "detail_disposisi_trskn";
    protected $fillable = ['id_lembards', 'idtrsk_ke', 'name_dtrsk'];
}
