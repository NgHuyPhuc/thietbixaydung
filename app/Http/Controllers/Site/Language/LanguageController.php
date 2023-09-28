<?php

namespace App\Http\Controllers\Site\Language;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    //
    public function index(Request $request){
        if($request->language)
        {
            Session::put('language', $request->language);
            
        }
        return redirect()->back();
    }
}
