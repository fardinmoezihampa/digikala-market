<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use App\Models\CategoryFeature;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Features extends Component
{
    use WithPagination;

    public $name;
    public $search='';
    public $categoryName;
    public $categoryId;
    public $featureId;
    public $deleteId;


    public function mount(Category $category)
    {
        $this->categoryName = $category->name;
        $this->categoryId = $category->id;
    }

    public function submit($formData, CategoryFeature $categoryFeature)
    {
        $validator = Validator::make($formData, [
            'name' => 'required|string|min:2|max:50',
        ], [
            '*.required' => 'این فیلد الزامی است.',
            '*.string' => 'این نام معتبر نیست.',
            '*.min' => 'حداقل تعداد کاراکتر :min',
            '*.max' => 'حداکثر تعداد کارکتر :max',
        ]);

        $validator->validate();
        $this->resetValidation();
        $categoryFeature->submit($formData, $this->categoryId, $this->featureId);
        $this->dispatch('success', 'عملیات با موفقیت انجام شد.');
        $this->reset(['name']);
        $this->resetPage();
    }

    public function edit($featureId)
    {
        $categoryFeature = CategoryFeature::query()->where('id', $featureId)->first();
        if ($categoryFeature) {
            $this->name = $categoryFeature->name;
            $this->featureId = $categoryFeature->id;
        }
    }

    public function delete($feature_id = null)
    {
        if ($feature_id) {
            $this->deleteId = $feature_id;
            return;
        }

        if ($this->deleteId) {
            $categoryFeature = CategoryFeature::query()->where('id', $this->deleteId)->first();

            if ($categoryFeature->values()->exists()) {
                $this->dispatch('error', 'این ویژگی دارای مقدار است و نمی توان آنرا حذف کرد!');
                return;
            }
            $categoryFeature->delete();
            $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد.');
            $this->deleteId = null;
        }
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $categoryFeatures = CategoryFeature::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->where('category_id', $this->categoryId)
            ->paginate(5);


        return view('livewire.admin.category.features.index', [
            'categoryFeatures' => $categoryFeatures,
        ])->layout('layouts.admin.app');
    }
}
