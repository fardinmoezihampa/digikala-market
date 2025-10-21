<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryFeature extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function submit($formData, $categoryId, $featureId)
    {
        CategoryFeature::query()->updateOrCreate(
            [
                'id' => $featureId,
            ]
            ,
            [
                'name' => $formData['name'],
                'category_id' => $categoryId,
            ]
        );
    }

    public function categoryFeatureValues()
    {
        return $this->hasMany(CategoryFeatureValue::class, 'category_feature_id', 'id');
    }

}
