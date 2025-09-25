<div class="col-md-4">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>مدیریت دسته بندیها</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <form wire:submit="submit(Object.fromEntries(new FormData($event.target)))">
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <label for="name" class="form-label">نام دسته بندی :</label>
                        <input type="text" class="form-control" wire:model="name" id="name" name="name"
                               placeholder="" autocomplete="">
                    </div>
                </div>
                @error('name')
                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                     wire:loading.remove>
                    <strong class="text-white">خطا! : </strong> {{$message}}</button>
                </div>
                @enderror

                <div class="row mb-4">
                    <div class="col-sm-12">
                        <label for="categoryId" class="form-label">دسته بندی والد :</label>
                        <select id="select-beast" name="categoryId" wire:model="categoryId" class="form-control" wire:ignore
                                placeholder=""
                                autocomplete="off">
                            <option value="">انتخاب دسته بندی والد ...</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @error('categoryId')
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
