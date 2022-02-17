<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $table = 'trips';
    protected $fillable = [
        'cat_id',
        'name',
        'brief',
        'description',
        'image',
        'capacity',
        'trending',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }
}
