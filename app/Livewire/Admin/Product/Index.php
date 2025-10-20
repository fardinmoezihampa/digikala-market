<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
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

    public function delete(Product $product = null)
    {
        if ($product->id) {
            $this->deletedId = $product->id;
            return;
        }

        $product->removeProduct($this->deletedId);
        $this->dispatch('success', 'محصول مورد نظر باموفقیت حذف شد.');
        $this->deletedId = null;
        $this->resetPage();

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
