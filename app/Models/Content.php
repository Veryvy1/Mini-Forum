<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
protected $fillable = [
    'judul',
    'deskripsi',
    'gambar',
    'kategori_id'
];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
