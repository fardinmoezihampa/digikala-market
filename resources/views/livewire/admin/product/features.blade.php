<div>
    @section('title','ویژگی محصول')
    <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
            <h4> ویژگی دسته بندی
                <span wire:ignore="" class="text-info">{{\Illuminate\Support\Str::limit(@$productName,50)}}</span>
            </h4>
        </div>
    </div>
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <form wire:submit="submit(Object.fromEntries(new FormData($event.target)))">
                @foreach($features as $feature)
                    <div class="row">
                        <div class="col-md-2">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h6> {{$feature->name}}</h6>
                            </div>
                        </div>
                        <div class="col-md-8 mb-2">
                            <select id="select-beast" name="featureValueId[{{$loop->index}}]" class="form-select"
                                    wire:ignore>
                                @forelse($feature->categoryFeatureValues as $value)
                                    <option value="{{ $feature->id }}_{{ $value->id }}"
                                        {{ ( $value->featureValueForProduct->category_feature_value_id ?? null ) == $value->id ? 'selected' : '' }}>
                                        {{ $value->name }}
                                    </option>
                                @empty
                                    <option value="">مقدار ندارد</option>
                                @endforelse
                            </select>
                        </div>
                        @error('featureValueId.*')
                        <div class="alert alert-light-danger alert-dismissible fade show border-0 mt-2" role="alert"
                             wire:loading.remove>
                            <strong class="text-white">خطا! : </strong> {{$message}}</button>
                        </div>
                        @enderror

                    </div>
                @endforeach
                <div class="col-sm-12 text-center">
                    <button class="btn btn-success w-25">
                        <span wire:loading.remove>ذخیره</span>
                        <div class="spinner-border text-white me-2 align-self-center loader-sm"
                             wire:loading></div>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
