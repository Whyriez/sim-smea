<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailDisposisiDengHormat extends Model
{
    use HasFactory;
    protected $table = "detail_disposisi_dng_hormat";
    protected $fillable = ['id_lembards', 'idng_hormat', 'name_hormat'];
}
