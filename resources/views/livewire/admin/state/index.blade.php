<div>
    @section('title','استانها')
    <div class="row">
        {{--form--}}
        @include('livewire.admin.state.form')
        {{--list--}}
        @include('livewire.admin.state.table')
    </div>
    @include('layouts.admin.include.modal')
</div>

