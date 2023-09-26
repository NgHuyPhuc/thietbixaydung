<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'ten',
        'id_cat',
        'description',
        'more_description',
        'gia',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, "id_cat", "id");
    }
}
