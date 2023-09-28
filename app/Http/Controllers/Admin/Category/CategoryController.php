<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $data['category'] = Category::orderby('id', 'desc')->paginate(5);
        return view('backend.category.listcategory', $data);
    }
    public function create()
    {
        return view('backend.category.addcategory');
    }
    public function postcreate(Request $request)
    {
        $category = new Category();
        $category->ten = $request->ten;
        if($request->hasFile('image')){
            $category->image = $request->image->getClientOriginalName();
            $request->image->move('upload/img', $request->image->getClientOriginalName());
            $category->save();
            $request->session()->flash('alert', 'Đã thêm mới thành công');
            return redirect()->route('category.home');
        }
        else{
            $category->image = 'default.png';
            $category->save();
            $request->session()->flash('alert', 'Đã thêm mới thành công');
            return redirect()->route('category.home');
        }
        $category->save();
        $request->session()->flash('alert', 'Đã thêm mới thành công!');
        return redirect()->route('category.home');
    }
    public function edit(Request $request)
    {
        $data['category'] = Category::findOrFail($request->id);
        return view('backend.category.editcategory',$data);
    }
    public function postedit(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->ten = $request->ten;
        if($request->hasFile('image')){
            $category->image = $request->image->getClientOriginalName();
            $request->image->move('upload/img', $request->image->getClientOriginalName());
        }
        $category->save();
        $request->session()->flash('alert', 'Đã sửa thành công!');
        return redirect()->route('category.home');
    }
    public function delete(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->delete();
        $request->session()->flash('alert', 'Đã sửa thành công!');
        return redirect()->route('category.home');
    }
}
