<div class="section-block mpt-40 mpb-10">
    <div class="container">
        <div class="section-heading center-holder">
            <h3>Most Popular Package</h3>
            <div class="section-heading-line"></div>
            <div class="row">
                <div class="col-md-5 col-sm-5 col-12">
                    <div class="pricing-list-2 border-0 shadow-none">
                        <div class="text-center">
                            <img src="{{asset('/')}}frontend/img/cloud-computing.svg" alt="Cloud Computing" style="width:50px!important;">
                        </div>
                        <h4>{{$popular->speed}}</h4>
                        <div class="pricing-list-2-price">
                            <h3><sup>BDT </sup>{{round($popular->price)}}</h3>
                            <span>/month</span>
                        </div>
                        <ul class="pricing-list-2-prod">
                            <li>{{$popular->limit}}</li>
                            <li>{{$popular->optics}}</li>
                            <li>{{$popular->ip}}</li>
                            <li>{{$popular->support}}</li>
                        </ul>
                        <div class="text-center mt-25">
                            <a href="home-internet.html" class="text-danger font-weight-bold">View All Packages  <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-12">
                    <div class="mt-50">
                        <img src="{{url('upload/popular_images/'.$popular->image)}}" alt="Most Popular Package">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>