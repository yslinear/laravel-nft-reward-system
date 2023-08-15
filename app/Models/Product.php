<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'point',
        'nft_point',
        'description',
        'category_id',
        'start_at',
        'end_at',
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function productUsers()
    {
        return $this->hasMany(ProductUser::class);
    }
}
