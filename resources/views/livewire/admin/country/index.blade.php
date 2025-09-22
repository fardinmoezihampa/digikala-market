<div>
    @section('title','کشورها')
    <div class="row">
        {{--form--}}
        @include('livewire.admin.country.form')
        {{--list--}}
        @include('livewire.admin.country.table')
    </div>
    @include('layouts.admin.include.modal')
</div>

