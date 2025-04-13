<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldFormSurat extends Model
{
    use HasFactory;

    protected $fillable = ['jenis_surat_id', 'nama_field', 'label', 'tipe', 'pilihan', 'is_required'];

    public function jenisSurat() {
        return $this->belongsTo(JenisSurat::class);
    }
}
