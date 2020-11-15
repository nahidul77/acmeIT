@extends('frontend.layouts.master')
@section('content')
    <!-- Page Title START -->
<div class="page-title-section" style="background-image: url({{asset('frontend/img/header-img/About-Header.png')}});">
	<div class="container">
		<h1 class="text-danger">About Us</h1>
		<!--<ul>
			<li><a href="index.php" class="text-dark">Home</a></li>
			<li><span class="text-dark">About</span></li>
		</ul>-->
	</div>
</div>
<!-- Page Title END -->


<!-- Info & Feature Section START -->
<div class="section-block mpt-30 mpb-30">
	<div class="container">
        <div class="section-heading text-center">
            <h4>{{$info->title}}</h4>
            <div class="section-heading-line"></div>
        </div>
        <p class="py-4">{{$info->description}}</p>
		<div class="row">
			<div class="col-md-4 col-sm-4 col-12">
				<img src="{{url('upload/info_images/'.$info->image)}}" class="w-100">
			</div>
			<div class="col-md-8 col-sm-8 col-12 mmt-30">
				<div class="pl-30-md">
					<div class="mt-35">
						<a href="contact.html" class="primary-button button-sm mb-15-xs">Contact Us</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Info & Feature Section END -->
@include('frontend.layouts.client')
@endsection