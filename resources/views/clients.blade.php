@extends('master')

@section('content')
<div id="Clients" class="wrapper">
  @include('navbar')
  <div class="container is-fluid is-marginless">
    <div class="columns is-multiline is-marginless _height-initial-mobile">
      <div class="column is-flex is-4-desktop is-6-tablet" style="background-image:url('images/clients/Aesty.jpg')">
        <div class="shader"></div>
        <img class="logo" alt="Aesty" src="images/clients/Aesty - Logo.png"/>
      </div>
      <div class="column is-flex is-4-desktop is-6-tablet" style="background-image:url('images/clients/Aizy.jpg')">
        <div class="shader"></div>
        <img class="logo" alt="Aizy" src="images/clients/Aizy - Logo.png"/>
      </div>
      <div class="column is-flex is-4-desktop is-6-tablet" style="background-image:url('images/clients/Hasse de Moor.jpg')">
        <div class="shader"></div>
        <img class="logo" alt="Hasse de Moor" src="images/clients/Hasse de Moor - Logo.png"/>
      </div>
      <div class="column is-flex is-4-desktop is-6-tablet" style="background-image:url('images/clients/Bobby Rock.jpg')">
        <div class="shader"></div>
        <img class="logo" alt="Bobby Rock" src="images/clients/Bobby Rock - Logo.png"/>
      </div>
      <div class="column is-flex is-4-desktop is-6-tablet" style="background-image:url('images/clients/Frankie Ruscello.jpg')">
        <div class="shader"></div>
        <img class="logo" alt="Frankie Ruscello" src="images/clients/Frankie Ruscello - Logo.png"/>
      </div>
      <div class="column is-flex is-4-desktop is-6-tablet is-hidden-mobile tmm-logo" style="background-image:url('images/clients/TMM.png')">
      </div>
    </div>
  </div>
  @include('footer', ['class'=>'default'])
</div>
@stop