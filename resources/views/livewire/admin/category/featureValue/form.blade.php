<div class="col-md-4">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12 ">
                    <h4>
                       افزودن مقادیر به ویژگی
                        <span class="text-success">({{$featureName}})</span>
                    </h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            <form wire:submit="submit(Object.fromEntries(new FormData($event.target)))">
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <label for="value" class="form-label">نام مقادیر :</label>
                        <input type="text" class="form-control" wire:model="value" id="value" name="value"
                               placeholder="" autocomplete="">
                    </div>
                </div>
                @error('value')
                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                     wire:loading.remove>
                    <strong class="text-white">خطا! : </strong> {{$message}}</button>
                </div>
                @enderror

                <button type="submit" class="btn btn-primary _effect--ripple waves-effect waves-light">
                    <span wire:loading.remove>ثبت</span>
                    <div class="spinner-border text-white me-2 align-self-center loader-sm" wire:loading></div>
                </button>
            </form>

        </div>
    </div>
</div>
