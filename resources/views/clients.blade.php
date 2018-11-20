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
        <div class="column is-flex is-8-desktop is-hidden-mobile tmm-logo" style="background-image:url('images/clients/TMM.png')">
        </div>
    </div>
    <div id="Info">
      <div class="notification">
        <button class="delete close is-large"></button>
        Top Music Management manages solely the bookings of these artists.
      </div>
      <svg class="show" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" xml:space="preserve">
        <g>
          <rect x="135.5" y="53.5" fill="#FFFFFF" width="228" height="393"/>
          <g>
            <path d="M250,0C111.93,0,0,111.93,0,250c0,138.07,111.93,250,250,250c138.07,0,250-111.93,250-250
              C500,111.93,388.07,0,250,0z M291.405,70.155c0.97-0.045,1.966-0.055,2.97,0c13.536-0.445,25.311,9.765,27.19,22.97
              c6.045,25.354-20.885,50.77-45.624,40.625C246.396,120.036,261.28,71.62,291.405,70.155z M279.221,180.471
              c19.189-1.22,22.539,21.11,16.559,43.75c-11.67,52.016-29.834,102.41-39.689,154.845c4.76,20.705,30.865-3.044,42.031-10.625
              c9.494-7.55,11.145,1.915,14.374,9.846c-23.695,16.601-47.515,33.505-73.905,46.875c-24.794,15.04-45.089-8.34-38.905-34.376
              c10.23-48.575,23.695-96.416,34.69-144.845c3.436-26.17-31.005,0.47-41.25,6.56c-8.26,10.381-12.181,2.805-15.625-6.56
              c27.459-20.055,55.455-44.67,85.781-60.625C269.475,182.235,274.79,180.75,279.221,180.471z"/>
          </g>
        </g>
      </svg>
    </div>

    
  </div>
  @include('footer', ['class'=>'default'])
</div>
@stop