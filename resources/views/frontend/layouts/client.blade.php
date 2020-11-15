<div class="section-clients py-4">
    <div class="container">
        <h3 class="text-center">Our Clients</h3>
            <div class="section-heading-line"></div>
        <div class="owl-carousel owl-theme clients" id="clients">
            @foreach($clients as $client)
            <div class="item">
                <img src="{{url('upload/client_images/'.$client->image)}}" alt="{{$client->name}}">
            </div>
            @endforeach
        </div>
    </div>
</div>