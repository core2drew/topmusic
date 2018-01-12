@extends('master')

@section('content')
<section id="LandingPage" class="hero is-fullheight">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head">
    @include('navbar')
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
