@extends('master')

@section('content')
<div id="Clients">
  @include('navbar')
  <div class="container is-fullhd">
    <div class="columns is-marginless">
      <div class="column is-flex" style="background-image:url('images/clients/Oscar Troya.jpg')">
        <img class="logo" src="images/clients/Oscar Troya - Logo.png"/>
      </div>
      <div class="column" style="background-image:url('images/clients/Hasse de Moor.jpg')"></div>
      <div class="column" style="background-image:url('images/clients/Frankie Ruscello.jpg')"></div>
      <div class="column" style="background-image:url('images/clients/Bobby Rock.jpg')"></div>
    </div>
  </div>
  @include('footer', ['class'=>'default'])
</div>
@stop