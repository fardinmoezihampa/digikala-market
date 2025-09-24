<div>
    @section('title','شهرها')
    <div class="row">
        {{--form--}}
        @include('livewire.admin.city.form')
        {{--list--}}
        @include('livewire.admin.city.table')
    </div>
    @include('layouts.admin.include.modal')
</div>

