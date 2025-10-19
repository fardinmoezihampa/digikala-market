<div class="col-md-12">
    @section('title','مدیریت محصولات')
    @if(session()->has('success'))
        <div class="alert alert-icon-left alert-light-success alert-dismissible fade show mb-4" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <svg data-bs-dismiss="alert"> ...</svg>
            </button>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-check-square">
                <polyline points="9 11 12 14 22 4"></polyline>
                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
            </svg>
            <strong>پیغام!</strong>
            {{session()->get('success')}}
        </div>
    @endif
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-md-4">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>لیست محصولات</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-sm-12 mt-2">
                        <input wire:model.live.debounce.300ms="search" type="text" class="form-control" id="search"
                               name="search"
                               placeholder="جستجو..." autocomplete="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="col-sm-12 mt-2">
                        <a href="{{route('admin.product.create')}}" class="btn btn-outline-success mb-2 me-4" target="_blank">
                            محصول جدید
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-plus">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-gradient text-info">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">کد محصول</th>
                        <th scope="col">تصویر</th>
                        <th scope="col">نام محصول</th>
                        <th scope="col">نام دسته</th>
                        <th scope="col">قیمت</th>
                        <th class="text-center" scope="col">عملیات</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($products as $product)
                        <tr>
                            <td>
                                {{--{{$loop->index+1}}--}}
                                {{$loop->iteration + $products->firstItem()-1}}
                            </td>
                            <td>{{$product->p_code}}</td>
                            <td>
                                @if(isset($product->coverImage->path))
                                    <img class="rounded"
                                         src="/products/{{$product->id}}/small/{{$product->coverImage->path}}"
                                         alt="تصویر محصول"
                                         style="width: 60px; height: 60px; object-fit: cover;">
                                @else
                                    <span class="badge badge-info">بدون تصویر</span>
                                @endif

                            </td>
                            <td>
                                <div class="media">
                                    <div class="media-body align-self-center">
                                        <h6 class="mb-0">{{\Illuminate\Support\Str::limit($product->name,40)}}</h6>
                                    </div>
                                </div>
                            </td>

                            <td>
                                {{$product->category->name}}
                            </td>
                            <td>
                                {{number_format($product->price)}}
                            </td>
                            <td class="text-center">
                                <div class="action-btns">
                                    <a href="{{route('admin.product.create')}}?p_id={{$product->id}}"
                                       class="action-btn btn-edit bs-tooltip me-2"
                                       data-toggle="tooltip" data-placement="top" title=""
                                       data-bs-original-title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-edit-2">
                                            <path
                                                d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0);"
                                       wire:click="delete({{$product->id}})"
                                       data-bs-toggle="modal"
                                       data-bs-target="#deleteModal"
                                       class="action-btn btn-delete bs-tooltip"
                                       data-placement="top" title=""
                                       data-bs-original-title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-trash-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$products->links('layouts.admin.include.pagination')}}
            </div>
        </div>
    </div>
    @include('layouts.admin.include.modal')
</div>

