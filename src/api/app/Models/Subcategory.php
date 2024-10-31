<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $table = 'ms_subcategories';

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'icon',
        'color',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
