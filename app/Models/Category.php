<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
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
    ];



    public function product(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
