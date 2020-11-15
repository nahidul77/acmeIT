<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Package;

class PackageController extends Controller
{
    public function view(){
        $packages = Package::all();
        return view('backend.package.view-package', ['packages'=> $packages]);
    }

    public function add(){
        return view('backend.package.add-package');
    }

    public function store(Request $request){
        $package = new Package();
        $package->speed = $request->speed;
        $package->price = $request->price;
        $package->limit = $request->limit;
        $package->optics = $request->optics;
        $package->ip = $request->ip;
        $package->support = $request->support;
        $package->created_by = Auth::user()->id;
        $package->save();
        return redirect()->route('packages.view')->with('success', 'New Package Saved Successfully');
    }

    public function edit($id){
        $package = Package::find($id);
        return view('backend.package.edit-package', ['package'=>$package]);
    }

    public function update($id, Request $request){
        $package = Package::find($id);
        $package->speed = $request->speed;
        $package->price = $request->price;
        $package->limit = $request->limit;
        $package->optics = $request->optics;
        $package->ip = $request->ip;
        $package->support = $request->support;
        $package->updated_by = Auth::user()->id;
        $package->save();
        return redirect()->route('packages.view')->with('success', 'Package Updated Successfully');
    }

    public function delete($id){
        $package = Package::find($id);
        $package->delete();
        return redirect()->route('packages.view')->with('success', 'Package Deleted Successfully');
    }
}
