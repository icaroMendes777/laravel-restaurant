<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'code',
        'description',
        'ingredients',
        'price',
        'picture1_url',
        'picture2_url',
        'picture3_url',
        'active',
        'category_id',
    ];



    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
