<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        // dd(Auth::guard('web')->check());
        return view('backend.index');
    }
    public function create()
    {

    }
    public function postcreate(Request $request)
    {

    }
    public function edit(Request $request)
    {

    }
    public function postedit(Request $request)
    {

    }
    public function delete(Request $request)
    {

    }
}
