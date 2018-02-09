@extends('master')

@section('content')
<div id="WhatWeDo" class="wrapper">
  <section id="Services" class="hero">
    <div class="hero-head">
      @include('navbar')
    </div>
    <div class="hero-body">
      <div class="container">
        <h1 class="title has-text-centered has-text-weight-semibold">
          Top Music Management offers the following services
        </h1>

        <div class="columns is-centered is-flex-mobile _flex-wrap-mobile">
          <div class="column has-text-centered is-2-widescreen is-one-fifth-desktop is-one-quarter-tablet is-two-fifths-mobile">
            <span class="icon-mic icon"></span>
            <h4 class="title is-size-5 has-text-weight-normal is-marginless">
              Artist<br/>
              Management
            </h4>
          </div>
          <div class="column has-text-centered is-2-widescreen is-one-fifth-desktop is-one-quarter-tablet is-two-fifths-mobile">
            <span class="icon-rockstar-shirt icon"></span>
            <h4 class="title is-size-5 has-text-weight-normal is-marginless">
              Personal<br/>
              Branding
            </h4>
          </div>
          <div class="column has-text-centered is-2-widescreen is-one-fifth-desktop is-one-quarter-tablet is-two-fifths-mobile">
            <span class="icon-distance icon"></span>
            <h4 class="title is-size-5 has-text-weight-normal is-marginless">
              Tour<br/>
              Management
            </h4>
          </div>
          <div class="column has-text-centered is-2-widescreen is-one-fifth-desktop is-one-quarter-tablet is-two-fifths-mobile">
            <span class="icon-favorite-book icon"></span>
            <h4 class="title is-size-5 has-text-weight-normal is-marginless">
              Booking<br/>
              Management
            </h4>
          </div>
        </div>

        <div class="columns is-centered is-flex-mobile _flex-wrap-mobile">
          <div class="column has-text-centered is-2-widescreen is-one-fifth-desktop is-one-quarter-tablet is-two-fifths-mobile">
            <span class="icon-podium icon"></span>
            <h4 class="title is-size-5 has-text-weight-normal is-marginless">
              Strategic Career<br/>
              Planning
            </h4>
          </div>
          <div class="column has-text-centered is-2-widescreen is-one-fifth-desktop is-one-quarter-tablet is-two-fifths-mobile">
            <span class="icon-social-media-graph icon"></span>
            <h4 class="title is-size-5 has-text-weight-normal is-marginless">
              Marketing<br/>
              and Social Media
            </h4>
          </div>
          <div class="column has-text-centered is-2-widescreen is-one-fifth-desktop is-one-quarter-tablet is-two-fifths-mobile">
            <span class="icon-search-rockstar icon"></span>
            <h4 class="title is-size-5 has-text-weight-normal is-marginless">
              A&R<br/>
              Consultancy
            </h4>
          </div>
          <div class="column has-text-centered is-2-widescreen is-one-fifth-desktop is-one-quarter-tablet is-two-fifths-mobile">
            <span class="icon-balance icon"></span>
            <h4 class="title is-size-5 has-text-weight-normal is-marginless">
              Legal<br/>
              Advisory
            </h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="Operating" class="hero">
    <div class="hero-body">
      <div class="container">
        <div class="columns is-centered is-multiline">
          <div class="column is-3-widescreen is-4-desktop is-8-tablet has-text-centered-touch is-flex">
            <p class="is-size-5 has-text-weight-semibold">
              We are currently operating
              in South America, Europe and
              opening new markets in Asia
              and the MENA Region.
              Our headquarter is in
              Amsterdam.
            </p>
          </div>
          <div class="column is-5-widescreen is-7-desktop is-12-tablet has-text-centered">
            <img src="images/whatwedo/map.png"/>
          </div>
      </div>
    </div>
  </section>
  @include('footer', ['class'=>'default'])
</div>
@stop