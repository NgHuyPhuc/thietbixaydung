<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Newinfo;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index()
    {
        return view('frontend.index');
    }
    public function listprd()
    {
        return view('frontend.product.listproduct');
    }
    public function search(Request $request)
    {
        return view('frontend.product.search');
    }
    public function detail(Request $request)
    {
        return view('frontend.product.detail');
    }
    public function listnew()
    {
        return view('frontend.tintuc.listtintuc');
    }
    public function new(Request $request)
    {
        return view('frontend.tintuc.newinfo');
    }

    public function about()
    {
        $data['news'] = Newinfo::get()->take(3);
        $data['about'] = About::orderby('id','desc')->first();
        // dd($data);
        return view('frontend.tintuc.about',$data);
    }
    
}
