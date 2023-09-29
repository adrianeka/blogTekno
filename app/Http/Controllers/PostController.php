<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $postModel;
    public function __construct(){
        $this->postModel = new PostModel;
    }

    public function index(){
        $data = [
            'postDatas' => $this->postModel::all()
        ];
        return view('blog.dashboard', $data);
    }

    public function store(Request $request){
        $postData = new PostModel();
        $postData->title = $request->input('title');
        $postData->content = $request->input('content');
        if($request->file('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/images/', $filename);
            $postData->image = $filename;
        }
        $postData->visitors = 0;
        $postData->comment = 0;
        $postData->engagement = 0;
        $postData->save();
        return redirect()->back();
    }
}
