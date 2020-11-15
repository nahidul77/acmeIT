<div id="top-bar" class="hidden-sm-down">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-12">
                <div class="top-bar-welcome">
                    <ul>
                        <li>Welcome to {{$contact->name}}</li>
                    </ul>
                </div>
                <div class="top-bar-info">
                    <ul>
                        <li><i class="fa fa-phone"></i>{{$contact->mobile}}<li>
                        <li><i class="fa fa-envelope"></i>{{$contact->email}}<li>
                    </li></ul>
                </div>
                <!--<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#iptvPreReg">IPTV Pre-registration</button>-->
            </div>
            <div class="col-md-3 col-12">
                <ul class="social-icons hidden-md-down">
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