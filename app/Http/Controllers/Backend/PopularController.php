<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Popular;

class PopularController extends Controller
{
    public function view(){
        $populars = Popular::all();
        $popularCount = Popular::count();
        return view('backend.popular.view-popular', ['populars'=> $populars, 'popularCount'=>$popularCount]);
    }

    public function add(){
        return view('backend.popular.add-popular');
    }

    public function store(Request $request){
        $popular = new Popular();
        $popular->speed = $request->speed;
        $popular->price = $request->price;
        $popular->limit = $request->limit;
        $popular->optics = $request->optics;
        $popular->ip = $request->ip;
        $popular->support = $request->support;
        $popular->created_by = Auth::user()->id;
        if($request->has('image')){
            $file = $request->file('image');
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/popular_images'), $fileName);
            $popular->image = $fileName;
        }
        $popular->save();
        return redirect()->route('populars.view')->with('success', 'popular Package Saved Successfully');
    }

    public function edit($id){
        $popular = Popular::find($id);
        return view('backend.popular.edit-popular', ['popular'=>$popular]);
    }

    public function update($id, Request $request){
        $popular = Popular::find($id);
        $popular->speed = $request->speed;
        $popular->price = $request->price;
        $popular->limit = $request->limit;
        $popular->optics = $request->optics;
        $popular->ip = $request->ip;
        $popular->support = $request->support;
        $popular->updated_by = Auth::user()->id;
        if($request->has('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/popular_images/'.$popular->image));
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/popular_images'), $fileName);
            $popular->image = $fileName;
        }
        $popular->save();
        return redirect()->route('populars.view')->with('success', 'popular Package Updated Successfully');
    }

    public function delete($id){
        $popular = Popular::find($id);
        if(file_exists('public/upload/popular_images/'.$popular->image) AND !empty($popular->image)){
            unlink('public/upload/popular_images/'. $popular->image);
        }
        $popular->delete();
        return redirect()->route('populars.view')->with('success', 'popular Package Deleted Successfully');
    }
}
