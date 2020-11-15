<div class="swiper-main-slider-fade swiper-container">
    <div class="swiper-wrapper">
        <!-- Slide 1 Start -->
        @foreach ($sliders as $key => $slider)

        <div class="swiper-slide slider-{{$key+1}}" style="">
            <!-- <div class="medium-overlay"></div> -->
            <div class="container">
                <div class="slider-content left-holder">
                    <div class="row m-flex-column-reverse">
                        <div class="col-md-6 col-sm-12 col-12 d-flex flex-column m-text-center">
                            <h2 class="animated fadeInDown mt-auto">{{$slider->short_title}}</h2>
                            <p class="animated fadeInDown">{{$slider->long_title}}</p>
                            <div class="animated fadeInUp mt-30 mb-auto">
                                <a href="#" class="dark-button button-md">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-12 mmb-50">
                            <p class="animated bounceInRight">
                            <img src="{{url('upload/slider_images/'.$slider->image)}}" class="w-100">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    
        @endforeach
        <!-- Slide 1 End -->
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"><i class="fa fa-angle-right fa-3x"></i></div>
    <div class="swiper-button-prev"><i class="fa fa-angle-left fa-3x"></i></div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>