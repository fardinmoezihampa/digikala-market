<?php

namespace App\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Seller;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $photos = [];

    public $categories = [];
    public $sellers = [];
    public $productId;
    public $product;
    public $coverIndex = 0;

    //edit
    public $name;
    public $slug;
    public $discount_duration;


    public function mount()
    {
        if ($_GET and $_GET['p_id']) {

            $this->productId = $_GET['p_id'];
            $product = $this->product = Product::query()
                ->with('seo', 'images')
                ->where('id', $this->productId)
                ->firstOrFail();

            $this->name = $product->name;
            $this->slug = $product->seo->slug;

            $this->discount_duration = $product->discount_duration
                ? Carbon::parse($product->discount_duration)->format('Y-m-d')
                : null;
        }

        $this->categories = Category::all();
        $this->sellers = Seller::query()->select('id', 'shop_name')->get();


    }

    public function submit($formData, Product $product)
    {
        $formData['discount_duration'] = $this->discount_duration ?: null;

        if (isset($formData['featured'])) {
            $formData['featured'] = true;
        } else {
            $formData['featured'] = false;
        }

        if (!isset($formData['sellerId'])) {
            $formData['sellerId'] = null;
        }

        $formData['photos'] = $this->photos;

        $formData['coverIndex'] = $this->coverIndex;

        $vaildator = Validator::make($formData, [
            'photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
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
            'coverIndex' => 'required',
        ], [
            'coverIndex.required' => 'لطفاٌ یک عکس شاخص انتخاب کنید.',
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است',
            '*.integer' => 'مقدار ورودی باید عددی باشد',
            '*.min' => 'حداقل تعداد کارکتر :min',
            'categoryId.exists' => 'دسته بندی نامعتبر است.',
            'sellerId.exists' => 'فروشنده نامعتبر است.',
            'photos.*.image' => 'فرمت عکس نامعبر است!',
        ]);

        $vaildator->validate();
        $this->resetValidation();
        $product->submit($formData, $this->productId, $this->photos, $this->coverIndex);
        $this->reset();
        $this->redirect(route('admin.product.index'));
        session()->flash('success', 'محصول با موفقیت افزوده شد.');
    }

    public function setCoverImage($index)
    {
        $this->coverIndex = $index;
    }

    public function setCoverOldImage($photoId)
    {
        ProductImage::query()->where('product_id', $this->productId)->update(['is_cover' => false]);

        ProductImage::query()->where([
            'product_id' => $this->productId,
            'id' => $photoId,
        ])->update(['is_cover' => true]);

        $this->dispatch('success',' تصویر کاور با موفقیت تغییر کرد');
    }


    public function removePhoto($index)
    {
        if ($index === $this->coverIndex) {
            $this->coverIndex = null;
        }
        array_splice($this->photos, $index, 1);
    }

    public function removeOldPhoto(ProductImage $productImage, $productId)
    {
        $productImage->delete();
        File::delete(public_path('products/' . $productId . '/small/' . $productImage->path));
        File::delete(public_path('products/' . $productId . '/medium/' . $productImage->path));
        File::delete(public_path('products/' . $productId . '/large/' . $productImage->path));
    }


    public function updatedName()
    {
        $this->slug = Str::slug($this->name, '-', null);
    }

    public function render()
    {
        return view('livewire.admin.product.create.index')->layout('layouts.admin.app');
    }
}
