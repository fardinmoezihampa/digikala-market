<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $categories = Category::query()->latest()->paginate(10);
        return view('livewire.admin.category.index', [
            'categories' => $categories,
        ])->layout('layouts.admin.app');
    }
}
