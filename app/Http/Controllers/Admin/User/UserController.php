<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index(){
        $data['user'] = User::orderby('id', 'asc')->paginate(5);
        return view('backend.user.listuser', $data);
    }
    public function create()
    {
        return view('backend.user.adduser');
    }
    public function postcreate(Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->level = $request->level;
        $user->save();
        $request->session()->flash('alert', 'Đã thêm mới thành công!');
        return redirect()->route('useradminsite.home');
    }
    public function edit(Request $request)
    {
        $data['user'] = User::findOrFail($request->id);
        return view('backend.user.edituser',$data);
    }
    public function postedit(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->name = $request->name;
        $user->password = $request->password;
        $user->level = $request->level;
        $user->save();
        $request->session()->flash('alert', 'Đã sửa thành công!');
        return redirect()->route('useradminsite.home');
    }
    public function delete(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->delete();
        $request->session()->flash('alert', 'Đã xóa thành công!');
        return redirect()->route('useradminsite.home');
    }
}
