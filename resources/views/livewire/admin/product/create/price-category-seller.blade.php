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
