<div>
    @section('title','دسته بندی ها')
    <div class="row">
        {{--form--}}
        @include('livewire.admin.category.form')
        {{--list--}}
        @include('livewire.admin.category.table')
    </div>
    @include('layouts.admin.include.modal')
</div>

