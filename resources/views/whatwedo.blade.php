@extends('master')

@section('content')
<div id="WhatWeDo">
  <section id="Services" class="hero">
    <div class="hero-head">
      @include('navbar')
    </div>
    <div class="hero-body">
      <div class="container">
        <h1 class="title has-text-centered has-text-weight-semibold">
          Top Music Management offers the following services
        </h1>

        <div class="columns is-centered">
          <div class="column has-text-centered is-2">
            <span class="icon-mic icon"></span>
            <h4 class="title is-size-5 has-text-weight-normal is-marginless">
              Artist<br/>
              Management
            </h4>
          </div>
          <div class="column has-text-centered is-2">
            <span class="icon-rockstar-shirt icon"></span>
            <h4 class="title is-size-5 has-text-weight-normal is-marginless">
              Personal<br/>
              Branding
            </h4>
          </div>
          <div class="column has-text-centered is-2">
            <span class="icon-distance icon"></span>
            <h4 class="title is-size-5 has-text-weight-normal is-marginless">
              Tour<br/>
              Management
            </h4>
          </div>
          <div class="column has-text-centered is-2">
            <span class="icon-favorite-book icon"></span>
            <h4 class="title is-size-5 has-text-weight-normal is-marginless">
              Booking<br/>
              Management
            </h4>
          </div>
        </div>

        <div class="columns is-centered">
          <div class="column has-text-centered is-2">
            <span class="icon-podium icon"></span>
            <h4 class="title is-size-5 has-text-weight-normal is-marginless">
              Strategic Career<br/>
              Planning
            </h4>
          </div>
          <div class="column has-text-centered is-2">
            <span class="icon-social-media-graph icon"></span>
            <h4 class="title is-size-5 has-text-weight-normal is-marginless">
              Marketing<br/>
              and Social Media
            </h4>
          </div>
          <div class="column has-text-centered is-2">
            <span class="icon-search-rockstar icon"></span>
            <h4 class="title is-size-5 has-text-weight-normal is-marginless">
              A&R<br/>
              Consultancy
            </h4>
          </div>
          <div class="column has-text-centered is-2">
            <span class="icon-balance icon"></span>
            <h4 class="title is-size-5 has-text-weight-normal is-marginless">
              Basic Legal<br/>
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
        <div class="columns is-centered">
          <div class="column is-3 is-flex">
            <p class="is-size-5 has-text-weight-semibold">
              We are currently operating<br/>
              in South America, Europe and<br/>
              opening new markets in Asia<br/>
              and the MENA Region.<br/> 
              Our headquarter is in<br/>
              Amsterdam.
            </p>
          </div>
          <div class="column has-text-centered is-7">
            <img src="images/whatwedo/map.png"/>
          </div>
      </div>
    </div>
  </section>
  @include('footer', ['class'=>'default'])
</div>
@stop