<?php

namespace App\Livewire\Admin\Country;

use App\Models\Country;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use  WithPagination;

    public $name;
    public $search='';
    public $countryId;
    public $deleteId;

    public function submit($formData, Country $country)
    {
        $validator = Validator::make($formData, [
            'name' => 'required|string|max:30',
        ],
            [
                '*.required' => 'این فیلد الزامیست.',
                '*.string' => 'مقدار این فیلد نامعتبر است!',
                '*.max' => 'حداکثر تعداد کارکتر:max',
            ]);

        $validator->validate();
        $country->submit($formData, $this->countryId);
        $this->reset();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد.');
    }

    public function edit($country_id)
    {
        $country = Country::query()->where('id', $country_id)->first();
        if ($country) {
            $this->name = $country->name;
            $this->countryId = $country->id;
        }
    }

    /* public function delete($country_id)
     {
         Country::query()->where('id', $country_id)->delete();
         $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد.');
     }*/

    public function delete($country_id = null)
    {
        // اگر کاربر برای اولین بار کلیک کرد -> فقط id رو نگه داریم (مرحله آماده‌سازی)
        if ($country_id) {
            $this->deleteId = $country_id;
            return;
        }

        // اگر id خالی بود -> یعنی از modal تایید شده -> حالا رکورد رو حذف کنیم
        if ($this->deleteId) {
            Country::query()->where('id', $this->deleteId)->delete();
            $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد');
            $this->deleteId = null; // پاک کردن مقدار برای دفعات بعد
        }
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $countries = Country::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->paginate(10);

        return view('livewire.admin.country.index', [
            'countries' => $countries,
        ])->layout('layouts.admin.app');
    }
}
