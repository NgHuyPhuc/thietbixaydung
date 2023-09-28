<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Newinfo;
use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index()
    {
        return view('frontend.index');
    }
    public function listprd(Request $request)
    {
        $data['listprd'] = Product::where('id_cat', $request->id)->paginate(5);
        $data['category'] = Category::get()->take(10);
        $data['name'] = Category::where('id', $request->id)->first();
        $data['prdside'] = Product::orderby('id','desc')->get()->take(3);

        // dd($data);
        return view('frontend.product.listproduct', $data);
    }
    public function search(Request $request)
    {
        $data['listprd'] = Product::where('ten','like','%' . $request->keyword . '%')
        ->orwhere('description','like','%' . $request->keyword . '%')
        ->orwhere('more_description','like','%' . $request->keyword . '%')
        ->paginate(6);
        $data['category'] = Category::get()->take(10);
        $data['prdside'] = Product::orderby('id','desc')->get()->take(3);
        return view('frontend.product.search',$data);
    }
    public function detail(Request $request)
    {
        $data['product'] = Product::findOrFail($request->id);
        $data['prdside'] = Product::orderby('id','desc')->get()->take(3);
        $data['category'] = Category::get()->take(10);
        return view('frontend.product.detail',$data);
    }
    public function listnew()
    {

        $data['news'] = Newinfo::orderby('id','desc')->where('level',2)->paginate(6);
        $data['newside'] = Newinfo::orderby('id','desc')->where('level',2)->get()->take(3);

        return view('frontend.tintuc.listtintuc',$data);
    }
    public function new(Request $request)
    {  
        $data['newside'] = Newinfo::orderby('id','desc')->where('level',2)->get()->take(3);
        $data['new'] = Newinfo::findOrFail($request->id);
        return view('frontend.tintuc.newinfo',$data);
    }

    public function about()
    {
        $data['newside'] = Newinfo::orderby('id','desc')->where('level',2)->get()->take(3);
        $data['about'] = About::orderby('id','desc')->first();
        // dd($data);
        return view('frontend.tintuc.about',$data);
    }
    
}
