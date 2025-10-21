<?php

namespace App\Livewire\Admin\Product;

use App\Models\CategoryFeature;
use App\Models\Product;
use App\Models\ProductFeatureValue;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Features extends Component
{
    public $features = [];
    public $productId;
    public $productName;

    public function mount(Product $product)
    {
        $categoryId = $product->category_id;
        $this->productId = $product->id;
        $this->productName = $product->name;

        $this->features = CategoryFeature::query()
            ->with('categoryFeatureValues', 'categoryFeatureValues.featureValueForProduct')
            ->where('category_id', $categoryId)
            ->get();
        //dd($this->features);
    }

    public function submit($formData, ProductFeatureValue $productFeatureValue)
    {
        $featureIds = [];
        $featureValuesIds = [];

        foreach ($formData as $value) {
            if (empty($value)) {
                // اگر کاربر چیزی انتخاب نکرده، از این آیتم بگذر
                continue;
            }

            [$featureId, $featureValueId] = explode('_', $value);
            $featureIds[] = $featureId;
            $featureValuesIds[] = $featureValueId;
        }

        $data = [
            'feature_ids' => $featureIds,
            'feature_value_ids' => $featureValuesIds,
        ];

        $validator = Validator::make($data, [
            'feature_ids' => 'required|array',
            'feature_ids.*' => 'required|exists:category_features,id',
            'feature_value_ids' => 'required|array',
            'feature_value_ids.*' => 'required|exists:category_feature_values,id',
        ],
            [
                '.required' => 'این فیلد ضروری است',
                '.array' => 'نوع اطلاعات باید آرایه باشد',
                'feature_ids.*.exists' => 'این ویژگی نامعتبر است',
                'feature_values_ids.*.exists' => 'مقادیر این ویژگی نامعتبر است',
            ]);

        $validator->validate();
        $this->resetValidation();

        $productFeatureValue->submit($formData, $this->productId);
        $this->redirect(route('admin.product.index'));
        session()->flash('success', 'عملیات ثبت ویژگی با موفقیت انجام شد.');
    }

    public function render()
    {
        return view('livewire.admin.product.features')->layout('layouts.admin.app');
    }
}





















