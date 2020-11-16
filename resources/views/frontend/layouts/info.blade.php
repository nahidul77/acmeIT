<div class="section-block pb-0 mpt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6 col-12">
                <div class="section-heading mt-30">
                    <span>{{$info->title}}</span>
                    <h4>{{$info->sub_title}}</h4>
                    <div class="section-heading-line-left"></div>
                </div>
                <div class="text-content mt-25 animated fadeInDown">
                    <p>{{$info->description}}</p>
                </div>
                <div class="mt-25">
                    <a href="{{route('about')}}" class="primary-button button-md">Learn More</a>
                </div>
            </div>
            <div class="col-md-7 col-sm-6 col-12 mt-n3 mmt-0">
                <img src="{{url('upload/info_images/'.$info->image)}}" class="">
            </div>
        </div>
    </div>
</div>