<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'short_title', 'description', 'thumbnail_image', 'product_image', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function bulletPoints()
    {
        return $this->hasMany(BulletPoint::class);
    }
}
