@extends('master')

@section('content')
<section class="section">
    <div class="container">
        <h1 class="title">
            Hello World
        </h1>
        <p class="subtitle">
            My first website with <strong>Bulma</strong>!
        </p>

        <div class="columns">
            <div class="column">1</div>
            <div class="column">2</div>
            <div class="column">3</div>
            <div class="column">4</div>
            <div class="column">5</div>
        </div>

        <a class="button">
        Button
        </a>

        <a class="button is-primary">
        Primary button
        </a>

        <a class="button is-large">
        Large button
        </a>

        <a class="button is-loading">
        Loading button
        </a>
    </div>
</section>
@stop

@section('scripts')
@stop