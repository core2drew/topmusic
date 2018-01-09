@extends('master')

@section('styles')
  <link href="css/landing.css" rel="stylesheet"/>
@stop

@section('content')
<section id="LandingPage" class="hero is-fullheight">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head">
    <header class="navbar is-transparent">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item">
            <img class="_initial-maxheight" src="images/logo/logo-267x45.png" alt="Logo">
          </a>
          <span class="navbar-burger burger" data-target="navbarMenuHeroC">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroC" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item is-active is-uppercase">
              Home
            </a>
            <a class="navbar-item is-uppercase">
              Who We Are
            </a>
            <a class="navbar-item is-uppercase">
              What We Do
            </a>
            <a class="navbar-item is-uppercase">
              Clients
            </a>
            <a class="navbar-item is-uppercase">
              Contacts
            </a>
          </div>
        </div>
      </div>
    </header>
  </div>

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container">
      <h1 class="title has-text-weight-light is-size-1">
        Music is in our hearts, <br/>
        reason why we work to <br/>
        make the impossible happen.
      </h1>
    </div>
  </div>

  @include('footer')
</section>
@stop
