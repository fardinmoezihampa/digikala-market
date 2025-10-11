<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use App\Models\SeoItem;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $deletedId;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function delete($product_id = null)
    {
        if ($product_id) {
            $this->deletedId = $product_id;
            return;
        }

        if ($this->deletedId) {

            $product = Product::query()->where('id', $this->deletedId)->firstOrFail();
            $product->delete();

            $seoItem = SeoItem::query()->where('ref_id', $this->deletedId)->firstOrFail();
            $seoItem->delete();

            $this->dispatch('success', 'محصول مورد نظر باموفقیت حذف شد.');
            $this->deletedId = null;
        }
    }

    public function render()
    {
        $products = Product::query()
            ->with('category', 'coverImage')
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->latest()
            ->paginate(6);

        return view('livewire.admin.product.index', [
            'products' => $products,
        ])->layout('layouts.admin.app');
    }
}
