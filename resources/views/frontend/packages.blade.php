@extends('frontend.layouts.master')
@section('content')
    <!-- Page Title START -->
<div class="page-title-section" style="background-image: url({{asset('frontend/img/header-img/Offer-header.png')}});">
	<div class="container">
		<h1 class="text-danger">Internet Packages</h1>
		<!--<ul>
			<li><a href="index.php" class="text-dark">Home</a></li>
			<li><span class="text-dark">Home Internet</span></li>
		</ul>-->
	</div>
</div>
<!-- Page Title END -->




<!-- Pricing Section START -->
<div class="section-block mpt-30 mpb-30">
	<div class="container">
		<div class="section-heading center-holder">
			<span>Our Packages</span>
			<h3>Pick The Best Plan For You</h3>
			<div class="section-heading-line"></div>
			<p>Super Speed Optical Fiber Inernet Connectivity with Real IP Right to Your Door Steps</p>			
		</div>		
		<div class="row mt-50 mmt-10">
            @foreach($packages as $key => $package)
			<div class="col-md-4 col-sm-4 col-12 d-flex">
				<div class="pricing-list w-100 d-flex align-items-center flex-column">
					 <h4>PACKAGE {{$key+1}}</h4>
					 <div class="pricing-list-price">
					 	<h2><sup>BDT</sup>{{round($package->price)}}</h2>
					 	<span>/ MONTH</span>
					 </div>
					 <ul>
					 	<li><b>{{$package->speed}} Mbps</b></li>
					 	<li>{{$package->limit}}</li>
					 	<li>{{$package->optics}}</li>
					 	<li>{{$package->ip}}</li>
					 	<li>{{$package->support}}</li>
					 </ul>
					 <div class="pricing-list-button mt-auto w-100 ml-0">
						<a href="{{route('contact')}}">Buy Now</a>
						<!--<a href="">Not Available</a>-->
					</div>
				</div>
            </div>
            @endforeach
        </div>
    </div>
</div>
			
@endsection