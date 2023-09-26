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
        $product->save();
        $request->session()->flash('alert', 'Đã thêm mới thành công!');
        return redirect()->route('product.home');
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
}
