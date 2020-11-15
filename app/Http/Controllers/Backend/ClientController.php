<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Client;

class ClientController extends Controller
{
    public function view(){
        $clients = Client::all();
        return view('backend.client.view-client', ['clients'=> $clients]);
    }

    public function add(){
        return view('backend.client.add-client');
    }

    public function store(Request $request){
        $client = new Client();
        $client->name = $request->name;
        $client->created_by = Auth::user()->id;
        if($request->has('image')){
            $file = $request->file('image');
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/client_images'), $fileName);
            $client->image = $fileName;
        }
        $client->save();
        return redirect()->route('clients.view')->with('success', 'client Saved Successfully');
    }

    public function edit($id){
        $client = Client::find($id);
        return view('backend.client.edit-client', ['client'=>$client]);
    }

    public function update($id, Request $request){
        $client = Client::find($id);
        $client->name = $request->name;
        $client->updated_by = Auth::user()->id;
        if($request->has('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/client_images/'.$client->image));
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/client_images'), $fileName);
            $client->image = $fileName;
        }
        $client->save();
        return redirect()->route('clients.view')->with('success', 'client Updated Successfully');
    }

    public function delete($id){
        $client = Client::find($id);
        if(file_exists('public/upload/client_images/'.$client->image) AND !empty($client->image)){
            unlink('public/upload/client_images/'. $client->image);
        }
        $client->delete();
        return redirect()->route('clients.view')->with('success', 'client Deleted Successfully');
    }
}
