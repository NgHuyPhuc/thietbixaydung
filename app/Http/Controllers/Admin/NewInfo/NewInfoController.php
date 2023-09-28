<?php

namespace App\Http\Controllers\Admin\NewInfo;

use App\Http\Controllers\Controller;
use App\Models\Newinfo;
use Illuminate\Http\Request;

class NewInfoController extends Controller
{
    public function index()
    {
        $data['news'] = Newinfo::orderby('id', 'desc')->paginate(5);
        // dd($data);
        return view('backend.news.listnews', $data);
    }
    public function create()
    {
        return view('backend.news.addnews');
    }
    public function postcreate(Request $request)
    {
        $new = new Newinfo();
        $new->title = $request->title;
        $new->content = $request->content;
        $new->level = $request->level;
        if($request->hasFile('image')){
            $new->image = $request->image->getClientOriginalName();
            $request->image->move('upload/img', $request->image->getClientOriginalName());
            $new->save();
            $request->session()->flash('alert', 'Đã thêm mới thành công');
            return redirect()->route('new.home');
        }
        else{
            $new->image = 'default.png';
            $new->save();
            $request->session()->flash('alert', 'Đã thêm mới thành công');
            return redirect()->route('new.home');
        }
    }
    public function edit(Request $request)
    {
        $data['new'] = Newinfo::findOrFail($request->id);
        return view('backend.news.editnews', $data);
    }
    public function postedit(Request $request)
    {
        $new = Newinfo::findOrFail($request->id);
        $new->title = $request->title;
        $new->content = $request->content;
        $new->level = $request->level;
        if($request->hasFile('image')){
            $new->image = $request->image->getClientOriginalName();
            $request->image->move('upload/img', $request->image->getClientOriginalName());
        }
        $new->save();
        
        $request->session()->flash('alert', 'Đã sửa thành công');
        return redirect()->route('new.home');
    }
    public function delete(Request $request)
    {
        $new = Newinfo::findOrFail($request->id);
        $new->delete();
        $request->session()->flash('alert', 'Đã xóa thành công');
        return redirect()->route('new.home');
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
