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
use App\Model\communicate;
use Illuminate\Support\Facades\Mail;
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

    public function store(Request $request){
        $contact = new communicate();
        $request->validate([
            'first_name'=> 'required',
            'last_name'=> 'required',
            'email'=> 'required',
            'mobile'=> 'required',
            'subject'=> 'required',
            'message'=> 'required',
        ]);
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->mobile = $request->mobile;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        
        $data = Array(
            'name' => $request->first_name.' '.$request->last_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'subject' => $request->subject,
            'msg' => $request->message,
        );

        Mail::send('frontend.emails.contact', $data, function($message) use($data){
            $message->from('support@acmeit.com', 'Acme IT');
            $message->to($data['email']);
            $message->subject('Thanks for Contact Us');
        });
        return redirect()->back()->with('success', 'Your Message Sent Successfully!');
    }
}
