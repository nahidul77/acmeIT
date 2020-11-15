<footer class="mpt-0">
    <div class="container">
        <div class="row">
            <!-- Column 1 Start -->
            <div class="col-md-6 col-sm-6 col-12">
                <h3>Contact</h3>
                <div class="mt-25">
                    <p>
                        {{$contact->name}}<br>
                        {{$contact->address}}<br>
                        Tel : {{$contact->mobile}}<br>
                        Email : {{$contact->email}}
                    </p>
                </div>
            </div>
            <!-- Column 1 End -->
            <!-- Column 2 Start -->
            <div class="col-md-6 col-sm-6 col-12">
                <h3>Quick Links</h3>
                <ul class="footer-list">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('packages')}}">Packages</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
            <!-- Column 2 End -->
        </div>

        <!-- Footer Bar Start -->
        <div class="footer-bar">
            <div class="row">
                <div class="col-sm-6 pt-2 m-text-center">
                    <p><span class="primary-color">{{$contact->name}}</span> © {{date('Y')}}. All Rights Reserved.</p>
                </div>
                <div class="col-sm-6">
                    <div class="footer-social-icons text-right m-text-center">
                        <ul>
                            <li><a href="{{$contact->fb_link}}" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                            <!--<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-skype"></i></a></li>-->
                            <li><a href="{{$contact->yt_link}}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bar End -->
    </div>
</footer>