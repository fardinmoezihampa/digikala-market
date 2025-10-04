<div class="row mb-4 layout-spacing layout-top-spacing">
    @section('title','افزودن محصول')
    <form class="row" wire:submit="submit(Object.fromEntries(new FormData($event.target)))">
        <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

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

            <div class="widget-content widget-content-area ecommerce-create-section mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <label for="product-images">آپلود تصاویر محصول</label>
                        <div class="multiple-file-upload">
                            <input class="form-control" type="file" wire:model="photos" multiple>
                            <div class="d-flex">
                                @foreach($photos as $photo)
                                    @if(in_array($photo->getMimeType(),['image/jpeg','image/jpg','image/png','image/gif','image/webp']))
                                        <div class="item w-25 m-2">
                                            <img src="{{$photo->temporaryUrl()}}" class="w-100" alt="">
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            @error('photos.*')
                            <div class="alert alert-light-danger alert-dismissible fade show border-0 mt-2" role="alert"
                                 wire:loading.remove>
                                <strong class="text-white">خطا! : </strong> {{$message}}</button>
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="row">
                <div class="col-xxl-12 col-xl-8 col-lg-8 col-md-7 mt-xxl-0 mt-4">
                    <div class="widget-content widget-content-area ecommerce-create-section">
                        <div class="row">

                            <div class="col-xxl-12 col-md-6 mb-4">
                                <label for="price">قیمت</label>
                                <input type="text" name="price" class="form-control" id="price" value="">
                                @error('price')
                                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-2 mt-2"
                                     role="alert"
                                     wire:loading.remove>
                                    <strong class="text-white">خطا! : </strong> {{$message}}</button>
                                </div>
                                @enderror
                            </div>

                            <div class="col-xxl-12 col-md-6 mb-4">
                                <label for="stock">موجودی</label>
                                <input type="text" name="stock" class="form-control" id="stock" value="">
                                @error('stock')
                                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-2 mt-2"
                                     role="alert"
                                     wire:loading.remove>
                                    <strong class="text-white">خطا! : </strong> {{$message}}</button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-xxl-12 col-md-6 mb-4">
                                <label for="categoryId">نام دسته بندی</label>
                                <select class="form-select" name="categoryId" id="categoryId">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('categoryId')
                                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-2 mt-2"
                                     role="alert"
                                     wire:loading.remove>
                                    <strong class="text-white">خطا! : </strong> {{$message}}</button>
                                </div>
                                @enderror
                            </div>

                            <div class="col-xxl-12 col-md-6 mb-4">
                                <label for="sellerId">فروشنده</label>
                                <select class="form-select" name="sellerId" id="sellerId">
                                    @foreach($sellers as $seller)
                                        <option value="{{$seller->id}}">{{$seller->shop_name}}</option>
                                    @endforeach
                                </select>
                                @error('sellerId')
                                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-2 mt-2"
                                     role="alert"
                                     wire:loading.remove>
                                    <strong class="text-white">خطا! : </strong> {{$message}}</button>
                                </div>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-12 col-xl-4 col-lg-4 col-md-5 mt-4">
                    <div class="widget-content widget-content-area ecommerce-create-section">
                        <div class="row">
                            <div class="col-sm-12 mb-4">
                                <label for="discount">درصد تخفیف</label>
                                <input type="text" name="discount" class="form-control" id="discount" value="">
                                @error('discount')
                                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-2 mt-2"
                                     role="alert"
                                     wire:loading.remove>
                                    <strong class="text-white">خطا! : </strong> {{$message}}</button>
                                </div>
                                @enderror
                            </div>

                            <div class="col-sm-12 mb-4">
                                <label for="discount_duration">تاریخ انقضاء</label>
                                <input type="date" name="discount_duration" class="form-control" id="discount_duration"
                                       value="">
                                @error('discount_duration')
                                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-2 mt-2"
                                     role="alert"
                                     wire:loading.remove>
                                    <strong class="text-white">خطا! : </strong> {{$message}}</button>
                                </div>
                                @enderror
                            </div>

                            <div class="col-sm-12 mb-4">
                                <div class="switch form-switch-custom switch-inline form-switch-danger">
                                    <input class="switch-input" name="featured" type="checkbox" role="switch"
                                           id="pricing-includes-texes">
                                    <label class="switch-label" for="featured">کالای ویژه</label>
                                </div>
                                @error('featured')
                                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-2 mt-2"
                                     role="alert"
                                     wire:loading.remove>
                                    <strong class="text-white">خطا! : </strong> {{$message}}</button>
                                </div>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <button class="btn btn-success w-100">
                                    <span wire:loading.remove>ذخیره</span>
                                    <div class="spinner-border text-white me-2 align-self-center loader-sm" wire:loading></div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
