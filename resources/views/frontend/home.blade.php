@extends('frontend.layouts.master')
@section('content')
    <!-- Slider START -->
@include('frontend.layouts.slider')
<!-- Slider END -->

<!-- Info Section START -->
@include('frontend.layouts.info')
<!-- Info Section END -->

<!-- Package START -->
@include('frontend.layouts.popular')
<!-- Package END -->

<!-- Clients Carousel START -->
@include('frontend.layouts.client')
<!-- Clients Carousel END -->

       
@endsection