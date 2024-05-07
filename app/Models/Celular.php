<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celular extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image',
        'weight',
        'is_waterproof',
        'release_date',
        'specifications'
    ];

    protected $table = 'celulares';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
