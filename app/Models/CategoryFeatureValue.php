<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryFeatureValue extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function featureValueForProduct()
    {
        return $this->hasOne(ProductFeatureValue::class, 'category_feature_value_id', 'id')
            ->where('product_id', request()->route('product')->id ?? null);
    }
}
