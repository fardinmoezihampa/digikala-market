<?php

namespace App\Livewire\Admin\Category;

use App\Models\CategoryFeature;
use App\Models\CategoryFeatureValue;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class FeatureValue extends Component
{
    use WithPagination;

    public $value;
    public $valueId;
    public $featureName;
    public $featureId;
    public $deleteId;
    public $search = '';

    public function mount(CategoryFeature $categoryFeature)
    {
        $this->featureId = $categoryFeature->id;
        $this->featureName = $categoryFeature->name;
    }

    public function submit($formData, CategoryFeatureValue $categoryFeatureValue)
    {
        $validator = Validator::make($formData, [
                'value' => 'required|string|max:100',
            ]
            ,
            [
                '*.required' => 'این فیلد الزامی است.',
                '*.string' => 'مقدار ورودی نامعتبر است!',
                '*.max' => 'حداکثر تعداد کارکتر :max',
            ]
        );

        $validator->validate();
        $this->resetValidation();
        $categoryFeatureValue->submit($formData, $this->valueId, $this->featureId);
        $this->dispatch('success', 'عملیات با موفقست انجام شد.');
        $this->reset(['value']);
    }

    public function edit($valueId)
    {
        $featureValue = CategoryFeatureValue::query()->where('id', $valueId)->first();
        if ($featureValue) {
            $this->value = $featureValue->name;
            $this->valueId = $featureValue->id;
            $this->featureId = $featureValue->category_feature_id;
        }
    }

    public function delete($value_id = null)
    {
        if ($value_id) {
            $this->deleteId = $value_id;
            return;
        }

        if ($this->deleteId) {
            CategoryFeatureValue::query()->where('id', $this->deleteId)->delete();
            $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد.');
            $this->deleteId = null;
        }

    }


    public function render()
    {
        $featureValues = CategoryFeatureValue::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->where('category_feature_id', $this->featureId)
            ->paginate(5);

        return view('livewire.admin.category.featureValue.index', [
            'featureValues' => $featureValues,
        ])->layout('layouts.admin.app');
    }
}
