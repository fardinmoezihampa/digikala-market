<?php

namespace App\Models;

use App\Traits\UPLoadFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes,UPLoadFile;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function coverImage()
    {
        return $this->hasOne(ProductImage::class, 'product_id', 'id')
            ->where('is_cover', true);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    public function seo()
    {
        return $this->hasOne(SeoItem::class, 'ref_id', 'id');
    }

}
