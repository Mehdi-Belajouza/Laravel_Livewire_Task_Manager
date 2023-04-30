@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    @extends('components.navigation')
  <div class="row">
    <div class="col-md-12">
      <h1>Welcome to My Website</h1>
      <p>Discover the latest news, trends, and information on a wide range of topics.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h2>Popular Articles</h2>
      <ul class="list-group">
        <li class="list-group-item"><a href="/articles/123">10 Tips for Better Sleep</a></li>
        <li class="list-group-item"><a href="/articles/456">How to Train for a Marathon</a></li>
        <li class="list-group-item"><a href="/articles/789">Top 5 Destinations for Adventure Travel</a></li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h3>Join Our Community</h3>
      <p>Sign up for our newsletter and never miss an update!</p>
      <form action="/newsletter-signup" method="POST">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Enter your email address">
          <button type="submit" class="btn btn-primary">Sign up</button>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h4>What Our Users Are Saying</h4>
      <ul class="list-unstyled">
        <li>
          <blockquote class="blockquote">
            <p class="mb-0">"I love this website! It's my go-to source for all things health and wellness."</p>
            <footer class="blockquote-footer">Jane D.</footer>
          </blockquote>
        </li>
        <li>
          <blockquote class="blockquote">
            <p class="mb-0">"The content is always fresh and relevant. I recommend this website to all my friends."</p>
            <footer class="blockquote-footer">John S.</footer>
          </blockquote>
        </li>
        <li>
          <blockquote class="blockquote">
            <p class="mb-0">"I've learned so much from the articles and resources on this website. Keep up the great work!"</p>
            <footer class="blockquote-footer">Sarah L.</footer>
          </blockquote>
        </li>
      </ul>
    </div>
  </div>
</div>
@endsection
