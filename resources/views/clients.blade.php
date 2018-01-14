@extends('master')

@section('content')
<div id="Clients">
  @include('navbar')
  <div class="container is-fullhd">
    <div class="columns is-marginless">
      <div class="column is-flex" style="background-image:url('images/clients/Oscar Troya.jpg')">
        <div class="shader"></div>
        <img class="logo" src="images/clients/Oscar Troya - Logo.png"/>
      </div>
      <div class="column is-flex" style="background-image:url('images/clients/Hasse de Moor.jpg')">
        <div class="shader"></div>
        <img class="logo" src="images/clients/Hasse de Moor - Logo.png"/>
      </div>
      <div class="column is-flex" style="background-image:url('images/clients/Bobby Rock.jpg')">
        <div class="shader"></div>
        <img class="logo" src="images/clients/Bobby Rock - Logo.png"/>
      </div>
      <div class="column is-flex" style="background-image:url('images/clients/Frankie Ruscello.jpg')">
        <div class="shader"></div>
        <img class="logo" src="images/clients/Frankie Ruscello - Logo.png"/>
      </div>
    </div>
  </div>
  @include('footer', ['class'=>'default'])
</div>
@stop