<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPengajuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'jenis_surat_id', 'data_pengajuan', 'dokumen', 'status', 'catatan_admin', 'file_surat'
    ];

    protected $casts = [
        'data_pengajuan' => 'array',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function jenisSurat() {
        return $this->belongsTo(JenisSurat::class, 'jenis_surat_id');
    }
}
