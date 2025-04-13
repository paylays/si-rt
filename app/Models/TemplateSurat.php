<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateSurat extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'judul', 'pesan', 'is_read'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
