@extends('frontend.layouts.master')
@section('content')
    <!-- Page Title START -->
<div class="page-title-section" style="background-image: url({{asset('frontend/img/header-img/Contact-Header.png')}});">
    <div class="container">
        <h1 class="text-danger">Contact</h1>
        <!--<ul>
            <li><a href="index.php" class="text-dark">Home</a></li>
            <li><span class="text-dark">Contact</span></li>
        </ul>-->
    </div>
</div>
<!-- Page Title END -->


<!-- Contact Section START -->
<div class="section-block mpt-30 mpb-30">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success contact__msg" style="display: none" role="alert">
                        Your message was sent successfully.
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-12">
                <div class="section-heading mt-15">
                    <h4>Let's Talk About Your Business</h4>
                    <div class="section-heading-line-left"></div>
                </div>
                @if(Session::get('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>{{Session::get('success')}}</strong>
                    </div>
                @endif
                <div class="contact-form-box mt-30">
                    <!-- Form START -->
                    <form action="{{route('contact.store')}}" class="contact-form myform"   method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-12">
                                <input type="text" name="first_name" id="first_name" placeholder="First name" required="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <input type="text" name="last_name" id="last_name" placeholder="Last name" required="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <input type="email" name="email" id="email" placeholder="E-mail" required="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <input type="text" name="mobile" id="mobile" placeholder="Mobile number" required="">
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="subject" id="subject" placeholder="Subject" required="">
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" id="message" placeholder="Message" required=""></textarea>
                            </div>
                            <div class="col-md-12 mb-30">
                                <div class="center-holder">
                                    <button name="submit" type="submit">Send Message</button>
                                </div>
                                <span class="output_message"></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5 col-sm-5 col-12">
                <div class="contact-info-box">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="contact-info-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-4 center-holder">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-8">
                                        <h4>Call Us</h4>
                                        <p>{{$contact->mobile}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="contact-info-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-4 center-holder">
                                        <i class="fa fa-envelope-open"></i>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-8">
                                        <h4>Email</h4>
                                        <p>{{$contact->email}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="contact-info-section border-bottom-0">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-4 center-holder">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-8">
                                        <h4>Our Corporate Office</h4>
                                        <p>{{$contact->address}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>  
@endsection