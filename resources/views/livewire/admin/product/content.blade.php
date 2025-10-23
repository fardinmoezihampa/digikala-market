<div>
    @section('title','محتوای محصول')
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h6> محتوا برای محصول :
                        <span wire:ignore
                              class="text-info">{{\Illuminate\Support\Str::limit(@$productName,70)}}</span>
                    </h6>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <form wire:submit="submit(Object.fromEntries(new FormData($event.target)))">
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <label for="short_description">معرفی محصول</label>
                        <textarea class="form-control" rows="5" wire:model="shortDescription" id="short_description" name="short_description"></textarea>
                    </div>
                </div>
                @error('short_description')
                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                     wire:loading.remove>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <svg> ...</svg>
                    </button>
                    <strong>خطا !</strong> {{$message}}.</button>
                </div>
                @enderror

                <div class="row mb-4">
                    <div class="col-sm-12" wire:ignore>
                        <label for="long_description">بررسی محصول</label>
                        <textarea class="form-control" id="long_description" wire:model="longDescription" name="long_description"></textarea>
                    </div>
                </div>
                @error('long_description')
                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                     wire:loading.remove>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <svg> ...</svg>
                    </button>
                    <strong>خطا !</strong> {{$message}}.</button>
                </div>
                @enderror
                <div class="text-left">
                    <button type="submit" class="btn btn-primary _effect--ripple waves-effect waves-light">ذخیره</button>
                </div>
            </form>
        </div>
    </div>
    @push('scripts')
       {{-- <script src="https://cdn.ckeditor.com/4.25.1-lts/full/ckeditor.js"></script>--}}
        <script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
        <script>
            document.addEventListener('livewire:init', () => {

                const editor=CKEDITOR.replace('long_description',{
                    contentsLangDirection: 'rtl',
                    height: 500,
                })
                editor.on('change',function (event) {
                    console.log(event.editor.getData());
                @this.set('longDescription',event.editor.getData())
                })
            })
            CKEDITOR.config.removePlugins = 'notification'; // حذف افزونه اعلان
            CKEDITOR.config.versionCheck = false;
        </script>
    @endpush
</div>

{{--
<script>
    document.addEventListener('livewire:init', () => {

        const editor=CKEDITOR.replace('long_description',{
            filebrowserUploadUrl: "{{route('admin.ck-upload', [$productId,'_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            contentsLangDirection: 'rtl',
            height: 500,
        })
        editor.on('change',function (event) {
            console.log(event.editor.getData());
        @this.set('longDescription',event.editor.getData())
        })
    })

</script>--}}
