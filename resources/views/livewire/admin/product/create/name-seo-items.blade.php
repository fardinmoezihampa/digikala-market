<div class="widget-content widget-content-area ecommerce-create-section">

    <div class="row mb-4">
        <div class="col-sm-12">
            <label for="name">نام محصول</label>
            <input type="text" class="form-control" name="name" wire:model.live.debounce.300ms="name"
                   id="name">
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
            <label for="slug">اسلاگ</label>
            <input type="text" class="form-control" wire:model="slug" id="slug" name="slug">
        </div>
    </div>
    @error('slug')
    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
         wire:loading.remove>
        <strong class="text-white">خطا! : </strong> {{$message}}</button>
    </div>
    @enderror

    <div class="row mb-4">
        <div class="col-sm-12">
            <label for="meta_title">عنوان متا</label>
            <input type="text" class="form-control" id="meta_title" name="meta_title">
        </div>
    </div>
    @error('meta_title')
    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
         wire:loading.remove>
        <strong class="text-white">خطا! : </strong> {{$message}}</button>
    </div>
    @enderror

    <div class="row mb-4">
        <div class="col-sm-12">
            <label for="meta_description">توضیحات متا</label>
            <textarea type="text" class="form-control" id="meta_description"
                      name="meta_description"></textarea>
        </div>
    </div>
    @error('meta_description')
    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
         wire:loading.remove>
        <strong class="text-white">خطا! : </strong> {{$message}}</button>
    </div>
    @enderror

</div>
