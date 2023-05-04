@extends('layouts.app')
@extends('components.main-nav')
@section('title', 'Company Name')
@section('content')
<div class="container">
  <div class="jumbotron">
    <h1 class="display-4">Welcome to Company Name</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <hr class="my-4">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porta in nunc sed euismod. Duis feugiat turpis non leo volutpat, in consequat nisl mollis. Integer accumsan nec ipsum eu rutrum. Cras commodo ligula nec justo hendrerit egestas. Nam eget magna odio. Nullam elementum pellentesque risus, in cursus arcu hendrerit at. Etiam quis massa faucibus, tempor lacus quis, consectetur augue. Duis ut dolor eget felis aliquet sagittis. </p>
    <a class="btn btn-primary btn-lg" href="/Search" role="button">Browse</a>
  </div>


  <div class="row mt-5">
    <div class="col-md-6">
      <h2>About Us</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="/about-us" class="btn btn-primary">Learn More</a>
    </div>
    <div class="col-md-6">
      <h2>Contact Us</h2>
      <p>velit, sed suscipit nisi. Quisque ac mi quis ex rutrum lobortis vitae ut dui. Curabitur commodo, lorem sit amet consequat luctus, dui dolor feugiat ipsum, quis malesuada ex lacus eget metus. Fusce scelerisque varius </p>
      <a href="/contact-us" class="btn btn-primary">Contact Us</a>
    </div>
  </div>
</div>
@endsection
