<?php

namespace App\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Product;
use App\Models\Seller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Livewire\Component;

class Create extends Component
{
    public $categories = [];
    public $sellers = [];
    public $name;
    public $slug;
    public $productId;

    public function mount()
    {
        $this->categories = Category::all();
        $this->sellers = Seller::query()->select('id', 'shop_name')->get();
    }

    public function submit($formData, Product $product)
    {
        if (isset($formData['featured'])) {
            $formData['featured'] = true;
        } else {
            $formData['featured'] = false;
        }

        $vaildator = Validator::make($formData, [
            'name' => 'required|string',
            'slug' => 'required|string',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'price' => 'required|integer',
            'discount' => 'nullable|integer',
            'stock' => 'required|integer',
            'featured' => 'nullable|boolean',
            'discount_duration' => 'nullable|string',
            'sellerId' => 'required|exists:sellers,id',
            'categoryId' => 'required|exists:categories,id',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است',
            '*.integer' => 'مقدار ورودی باید عددی باشد',
            '*.min' => 'حداقل تعداد کارکتر :min',
            'categoryId.exists' => 'دسته بندی نامعتبر است.',
            'sellerId.exists' => 'فروشنده نامعتبر است.',
        ]);

        $vaildator->validate();
        $this->resetValidation();
        $product->submit($formData, $this->productId);
        $this->dispatch('success', 'عملیات با موفقیت انجام شد.');
        $this->reset();
    }

    public function updatedName()
    {
        $this->slug = Str::slug($this->name, '-', null);
    }

    public function render()
    {
        return view('livewire.admin.product.create')->layout('layouts.admin.app');
    }
}
