<?php

namespace App\Livewire\Admin\State;

use App\Models\Country;
use App\Models\state;
use App\Repositories\admin\AdminStateRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $name;
    public $search = '';
    public $countryId;
    public $stateId;
    public $deleteId;

    private $repository;

    public function boot(AdminStateRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public $countries = [];

    public function mount()
    {
        $this->countries = Country::all();
    }

    public function submit($formData)
    {
        $validator = Validator::make($formData, [
            'name' => 'required|string|min:2|max:30',
            'countryId' => 'required|exists:countries,id',
        ],
            [
                '*.required' => 'این فیلد الزامیست.',
                '*.string' => 'نامعتبر است!',
                '*.max' => 'حداکثر تعداد کارکتر :max',
                '*.min' => 'حداقل تعداد کارکتر :min',
                'countryId.exists' => 'نام کشور نامعتبر است.',
            ]);

        $validator->validate();
        $this->resetValidation();
        $this->repository->submit($formData, $this->stateId);
        $this->reset();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد.');
    }


    public function edit($state_id)
    {
        $state = state::query()->where('id', $state_id)->first();
        if ($state) {
            $this->name = $state->name;
            $this->stateId = $state->id;
            $this->countryId = $state->country_id;
        }
    }

    public function delete($state_id = null)
    {
        // اگر کاربر برای اولین بار کلیک کرد -> فقط id رو نگه داریم (مرحله آماده‌سازی)
        if ($state_id) {
            $this->deleteId = $state_id;
            return;
        }

        // اگر id خالی بود -> یعنی از modal تایید شده -> حالا رکورد رو حذف کنیم
        if ($this->deleteId) {
            state::query()->where('id', $this->deleteId)->delete();
            $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد.');
            $this->deleteId = null; // پاک کردن مقدار برای دفعات بعد
        }
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $states = state::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->with('country')
            ->paginate(10);

        return view('livewire.admin.state.index', [
            'states' => $states,
        ])->layout('layouts.admin.app');
    }
}
