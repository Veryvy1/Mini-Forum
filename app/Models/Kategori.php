<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = [
        'kategori',
        'totalPost'
    ];

    public function Content()
    {
        return $this->hasMany(Content::class);
    }
}
