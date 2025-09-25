<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $name;
    public $categoryId;
    public $categories = [];

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function submit($formData, Category $category)
    {

        $validator = Validator::make($formData, [
            'name' => 'required|string|max:30',
            'parentId' => 'nullable|exists:categories,id',
        ],
            [
                '*.required' => 'این فیلد الزامی است.',
                '*.string' => 'این نام معتبر نیست.',
                '*.max' => 'حداکثر تعداد کارکتر:max',
                'parentId.exists' => 'نام دسته والد نامعتبر است!',
            ]
        );

        $validator->validate();
        $this->resetValidation();
        $category->submit($formData, $this->categoryId);
        $this->dispatch('success', 'عملیات با موفقیت انجام شد.');
        $this->reset();
    }

    public function render()
    {
        $allCategories = Category::query()->latest()->paginate(10);
        return view('livewire.admin.category.index', [
            'allCategories' => $allCategories,
        ])->layout('layouts.admin.app');
    }
}
