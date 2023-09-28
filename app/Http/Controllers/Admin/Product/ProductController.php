<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data['product'] = Product::orderby('id', 'desc')->paginate(5);
        return view('backend.product.listproduct', $data);
    }
    public function create()
    {
        $data['categories'] = Category::all();
        return view('backend.product.addproduct',$data);
    }
    public function postcreate(Request $request)
    {
        $product = new Product();
        $product->id_cat = $request->category;
        $product->ten = $request->ten;
        $product->description = $request->description;
        $product->more_description = $request->more_description;
        $product->gia = $request->gia;
        if($request->hasFile('image')){
            $product->image = $request->image->getClientOriginalName();
            $request->image->move('upload/img', $request->image->getClientOriginalName());
            $product->save();
            $request->session()->flash('alert', 'Đã thêm mới thành công');
            return redirect()->route('product.home');
        }
        else{
            $product->image = 'default.png';
            $product->save();
            $request->session()->flash('alert', 'Đã thêm mới thành công');
            return redirect()->route('product.home');
        }
    }
    public function edit(Request $request)
    {
        $data['categories'] = Category::all();
        $data['product'] = Product::findOrFail($request->id);
        // dd($data);
        return view('backend.product.editproduct',$data);
    }
    public function postedit(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->id_cat = $request->category;
        $product->ten = $request->ten;
        $product->description = $request->description;
        $product->more_description = $request->more_description;
        $product->gia = $request->gia;
        if($request->hasFile('image')){
            $product->image = $request->image->getClientOriginalName();
            $request->image->move('upload/img', $request->image->getClientOriginalName());
        }
        $product->save();
        $request->session()->flash('alert', 'Đã sửa thành công!');
        return redirect()->route('product.home');
    }
    public function delete(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->delete();
        $request->session()->flash('alert', 'Đã xóa thành công!');
        return redirect()->route('product.home');
    }
    public function ckeditor_image(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move('upload/ckeditor', $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('upload/ckeditor/' . $fileName);
            $msg = 'Tải ảnh thành công';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum,'$url','$msg')</script>";
            @header("Content-Type: text/html; charset=utf-8");
            echo $response;
        }
    }
    public function file_browser(Request $request)
    {
        $paths = glob(public_path('upload/ckeditor/*'));

        $fileNames = array();
        foreach ($paths as $path) {
            array_push($fileNames, basename($path));
        }
        $data = array(
            'fileNames' => $fileNames
        );
        // dd($data);
        return view('backend.listimg')->with($data);
    }
}
