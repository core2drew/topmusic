@extends('master')

@section('content')
<div id="Clients" class="wrapper">
  @include('navbar')
  {{--
  <section class="hero is-fullheight is-dark">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          We’re working on an amazing surprise, stay tunned!
        </h1>
      </div>
    </div>
  </section>
  --}}
  <div class="container is-fluid is-marginless">
    <div class="columns is-multiline is-marginless _height-initial-mobile">
        <div class="column is-flex is-4-desktop is-6-tablet" style="background-image:url('images/clients/edx.jpg')">
          <div class="shader"></div>
          <img class="logo" alt="edx-logo" src="images/clients/edx-logo.png"/>
        </div>
        <div class="column is-flex is-4-desktop is-6-tablet" style="background-image:url('images/clients/djsfrommars.jpg')">
          <div class="shader"></div>
          <img class="logo" alt="djs-from-mars-logo" src="images/clients/djsfrommars-logo.png"/>
        </div>
        <div class="column is-flex is-4-desktop is-6-tablet" style="background-image:url('images/clients/pinkpanda.jpg')">
          <div class="shader"></div>
          <img class="logo" alt="pink-panda-logo" src="images/clients/pinkpanda-logo.png"/>
        </div>
        <div class="column is-flex is-4-desktop is-6-tablet" style="background-image:url('images/clients/loudgarden.jpg')">
          <div class="shader"></div>
          <img class="logo" alt="loud-garden-logo" src="images/clients/loudgarden-logo.png"/>
        </div>
        <div class="column is-flex is-4-desktop is-6-tablet" style="background-image:url('images/clients/iceleak.jpg')">
          <div class="shader"></div>
          <img class="logo" alt="ice-leak-logo" src="images/clients/iceleak-logo.png"/>
        </div>
        <div class="column is-flex is-4-desktop is-6-tablet" style="background-image:url('images/clients/lialisse.jpg')">
          <div class="shader"></div>
          <img class="logo" alt="lialisse-logo" src="images/clients/lialisse-logo.png"/>
        </div>
        <div class="column is-flex is-4-desktop is-6-tablet" style="background-image:url('images/clients/msfaith.jpg')">
          <div class="shader"></div>
          <img class="logo" alt="msfaith-logo" src="images/clients/msfaith-logo.png"/>
        </div>
        <div class="column is-flex is-8-desktop is-hidden-tablet-only is-hidden-mobile tmm-logo" style="background-image:url('images/clients/TMM.png')">
        </div>
    </div>
  </div>
  @include('footer', ['class'=>'default'])
</div>
@stop