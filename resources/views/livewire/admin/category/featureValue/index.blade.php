<div>
    @section('title','مقادیر هر ویژگی')
    <div class="row">
        {{--form--}}
        @include('livewire.admin.category.featureValue.form')
        {{--list--}}
        @include('livewire.admin.category.featureValue.table')
    </div>
    @include('layouts.admin.include.modal')
</div>

