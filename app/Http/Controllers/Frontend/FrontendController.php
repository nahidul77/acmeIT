<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Info;
use App\Model\Popular;
use App\Model\Client;
use App\Model\Contact;
use App\Model\Package;
class FrontendController extends Controller
{ 
    public function home(){
        $contact = Contact::first();
        $logo = Logo::first();
        $sliders = Slider::all();
        $info = Info::first();
        $popular = Popular::first();
        $clients = Client::all();
        return view('frontend.home', [
                'logo'=>$logo,
                'contact'=>$contact, 
                'sliders'=>$sliders, 
                'info'=>$info,
                'popular'=>$popular,
                'clients'=>$clients,
                ]);
    }

    public function packages(){
        $logo = Logo::first();
        $contact = Contact::first();
        $packages = Package::all();
        return view('frontend.packages',[
            'logo'=>$logo, 
            'contact'=>$contact,
            'packages'=>$packages,
        ]);
    }

    public function about(){
        $contact = Contact::first();
        $logo = Logo::first();
        $info = Info::first();
        $clients = Client::all();
        return view('frontend.about',[
            'logo'=>$logo,
            'contact'=>$contact, 
            'info'=>$info,
            'clients'=>$clients,
        ]);
    }

    public function contact(){
        $contact = Contact::first();
        $logo = Logo::first();
        $contact = Contact::first();
        $clients = Client::all();
        return view('frontend.contact',[
            'logo'=>$logo, 
            'contact'=>$contact,
            'clients'=>$clients,
        ]);
    }
}
