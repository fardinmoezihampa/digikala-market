<?php

namespace App\Livewire\Admin\Product;


use App\Traits\UPloadFile;
use Illuminate\Http\Request;
use Livewire\Component;

class CkUpload extends Component
{
    use UPloadFile;

    public function upload($productId,Request $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $this->uploadImageInWebpFormat($file,$productId,null,null,'Content');

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('products/'.$productId.'/content/'.pathinfo($file->hashName(), PATHINFO_FILENAME) . '.webp');
            $msg = 'تصویر با موفقیت لود شد.';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;

        }
    }

}
