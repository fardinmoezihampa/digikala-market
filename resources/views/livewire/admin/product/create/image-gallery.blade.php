<div class="widget-content widget-content-area ecommerce-create-section mt-3">
    <div class="row">
        <div class="col-md-12">
            <label for="product-images">آپلود تصاویر محصول</label>
            <div class="multiple-file-upload">
                <div class="field-wrapper mt-1 mb-1"
                     x-data="{isUploading:false,progress:0 }"
                     x-on:livewire-upload-start="isUploading=true"
                     x-on:livewire-upload-finish="isUploading=false"
                     x-on:livewire-upload-error="isUploading=false"
                     x-on:livewire-upload-progress="progress=$event.detail.progress"
                >
                    <input class="form-control" type="file" wire:model="photos" multiple>
                    <div x-show="isUploading" class="progress mt-3 ltr">
                        <div
                            class="progress-bar progress-bar-striped  bg-danger progress-bar-animated"
                            role="progressbar"
                            x-bind:style="`width:${progress}%`"
                            aria-valuenow="10"
                            aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>

                @error('coverIndex')
                <div class="alert alert-light-danger alert-dismissible fade show border-0 mt-2" role="alert"
                     wire:loading.remove>
                    <strong class="text-white">خطا! : </strong> {{$message}}</button>
                </div>
                @enderror
                <div class="d-flex flex-wrap">
                    @foreach($photos as $index=>$photo)
                        @if($photo && in_array( $photo->getMimeType(),['image/jpeg','image/jpg','image/png','image/gif','image/webp']))
                            <div class="item w-25 m-2">
                                <img src="{{$photo->temporaryUrl()}}" class="w-100 rounded" alt="">
                                <div
                                    class="d-flex justify-content-between align-items-center mt-2 bg-dark p-2 rounded">
                                    <div class="form-check form-check-primary form-check-inline">
                                        <input type="radio" id="cover_image" class="form-check-input"
                                               {{ !is_null($coverIndex) && $index == $coverIndex ? 'checked' : '' }}
                                               wire:click="setCoverImage({{$index}})"
                                               name="cover_image">
                                        <label for="cover_image" class="text-white m-0">بعنوان کاور</label>
                                    </div>
                                    <a href="javascript:void(0);"
                                       class="action-btn text-danger btn-delete bs-tooltip"
                                       wire:click="removePhoto({{$index}})"
                                       data-toggle="tooltip" data-placement="top" title=""
                                       data-bs-original-title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-trash-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </a>
                                </div>
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
{{--edit--}}
<div class="widget-content widget-content-area ecommerce-create-section mt-3">
    @if(@$product->images)
        <div class="row">
            <div class="col-md-12">
                <label for="product-images">گالری تصاویر محصول</label>
                <div class="multiple-file-upload">
                    <div class="d-flex flex-wrap">
                        @foreach($product->images as $photo)
                            <div class="item m-2">
                                <img src="/products/{{$product->id}}/small/{{$photo->path}}" class="w-100 rounded"
                                     alt="">
                                <div class="d-flex justify-content-between align-items-center mt-2 bg-dark p-2 rounded">
                                    <div class="form-check form-check-primary form-check-inline">
                                        <input type="radio" id="cover_image" class="form-check-input"
                                               {{ !is_null($coverIndex) && @$photo->id == @$product->coverImage->id ? 'checked' : '' }}
                                               wire:confirm="آیا از تغییر تصویر کاور مطمئن هستید؟"
                                               wire:click="setCoverOldImage({{$photo->id}})"
                                               name="cover_image">
                                        <label for="cover_image" class="text-white m-0">بعنوان کاور</label>
                                    </div>
                                    <a href="javascript:void(0);" class="action-btn text-danger btn-delete bs-tooltip"
                                       wire:confirm="آیا از حذف مطمئن هستید؟"
                                       wire:click="removeOldPhoto({{$photo}},{{$product->id}})"
                                       data-toggle="tooltip" data-placement="top" title=""
                                       data-bs-original-title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-trash-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
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
    @endif
</div>
























