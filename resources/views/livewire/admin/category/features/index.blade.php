<div>
    @section('title','ویژگی های هر دسته')
    <div class="row">
        {{--form--}}
        @include('livewire.admin.category.features.form')
        {{--list--}}
        @include('livewire.admin.category.features.table')
    </div>
    @include('layouts.admin.include.modal')
</div>

