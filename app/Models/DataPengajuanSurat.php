<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPengajuanSurat extends Model
{
    use HasFactory;

    protected $fillable = ['pengajuan_surat_id', 'nama_field', 'isi'];

    public function pengajuan() {
        return $this->belongsTo(PengajuanSurat::class);
    }
}
