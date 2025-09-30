<?php

namespace App\Livewire\Admin\City;

use App\Models\City;
use App\Models\state;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
   use WithPagination;

    public $name;
    public $search='';
    public $states = [];
    public $stateId;
    public $cityId;
    public $deleteId;

    public function mount()
    {
        $this->states = state::all();
    }


    public function submit($formData, City $city)
    {
        $validator = Validator::make($formData, [
            'name' => 'required|string|min:2|max:30',
            'stateId' => 'required|string|exists:states,id',
        ],
            [
                '*.required' => 'این فیلد الزامیست.',
                '*.string' => 'نامعتبر است!',
                '*.max' => 'حداکثر تعداد کارکتر :max',
                '*.min' => 'حداقل تعداد کارکتر :min',
                'countryId.exists' => 'نام استان نامعتبر است.',
            ]);

        $validator->validate();
        $this->resetValidation();
        $city->submit($formData, $this->cityId);
        $this->reset();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد.');
    }


    public function delete($city_id = null)
    {
        // اگر کاربر برای اولین بار کلیک کرد -> فقط id رو نگه داریم (مرحله آماده‌سازی)
        if ($city_id) {
            $this->deleteId = $city_id;
            return;
        }

        // اگر id خالی بود -> یعنی از modal تایید شده -> حالا رکورد رو حذف کنیم
        if ($this->deleteId) {
            City::query()->where('id', $this->deleteId)->delete();
            $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد.');
            $this->deleteId = null;  // پاک کردن مقدار برای دفعات بعد
        }
    }


    public function edit($city_id)
    {
        $city = City::query()->where('id', $city_id)->first();
        if ($city) {
            $this->name = $city->name;
            $this->cityId = $city->id;
            $this->stateId = $city->state_id;
        }
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $cities = City::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->with('state')
            ->paginate(10);

        return view('livewire.admin.city.index', [
            'cities' => $cities,
        ])->layout('layouts.admin.app');
    }
}
