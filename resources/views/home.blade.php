@extends('layouts.app')
@extends('components.main-nav')
@section('title', 'Company Name')
@section('content')
<div class="container">
  <div class="jumbotron">
    <h1 class="display-4">Welcome to Company Name</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <hr class="my-4">
    <p>We offer a wide range of products and services to meet your needs. Browse our catalog and discover what we can do for you.</p>
    <a class="btn btn-primary btn-lg" href="/catalog" role="button">Browse</a>
  </div>



  <div class="row mt-5">
    <div class="col-md-6">
      <h2>About Us</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="/about-us" class="btn btn-primary">Learn More</a>
    </div>
    <div class="col-md-6">
      <h2>Contact Us</h2>
      <p>Have a question or need more information? Get in touch with us today.</p>
      <a href="/contact-us" class="btn btn-primary">Contact Us</a>
    </div>
  </div>
</div>
@endsection
