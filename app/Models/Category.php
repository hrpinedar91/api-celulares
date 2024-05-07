<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'is_active',
        'image'
    ];

    protected $table = 'categories';

    public function celulares()
    {
        return $this->hasMany(Celular::class);
    }
}
