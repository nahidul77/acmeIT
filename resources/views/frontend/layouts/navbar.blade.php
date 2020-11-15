<header>
    <nav id="navigation4" class="container navigation">
        <div class="nav-header">
            <a class="nav-brand" href="{{route('index')}}">
                <img src="{{url('upload/logo_images/'.$logo->image)}}" class="main-logo" alt="logo" id="main_logo">
            </a>
            <div class="nav-toggle"></div>
        </div>
        <!--<button type="button" class="btn btn-outline-danger ml-5 btn-sm d-md-none d-lg-none d-xl-none" data-toggle="modal" style="margin-top:10px!important" data-target="#iptvPreReg">IPTV Pre-registration</button>-->
        <div class="nav-menus-wrapper">
            <ul class="nav-menu align-to-right">
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('packages')}}">Packages</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>