@extends('master')

@section('content')
<section id="WhoWeAre">
  @include('navbar')
  <section id="AboutUs" class="hero">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title is-size-2">
          We are Top Music Management
        </h1>
        <h2 class="subtitle is-size-5">
          a young and dynamic Artist Management Company <br/>
          focused on the needs of our artists.
        </h2>

        <div class="content">
          <p>
            We understand artists and their aim to focus on their musical production and performance. However,<br/> 
            in the music industry artists are subject to pressures 24 hours a day, seven days a week. 
          </p>
          <p>
            This is why Top Music Management offers 360-degree support to our clients, providing space for<br/>
            creativity and enabling the artist to grow professionally beyond their wildest dreams. 
          </p>
          <p>
            By devising and executing individually customized career strategies and services we facilitate our<br/>
            artists to excel. Our aim is to create a partnership, in which our clients can rely on us for their<br/>
            careers, while they fully focus on what they and what we love: Music.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section id="Attitudes" class="hero">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h2 class="subtitle is-size-5">
          Our success is not only do to the quality of our work, it´s down to trust,<br/>
          attitude and the way we approach our artists, life and music
        </h2>
        <div class="columns">
          <div class="column has-text-centered">
            <span class="icon-passion icon"></span>
            <h4 class="title is-size-5 has-text-weight-normal is-marginless">Passion</h4>
            <p class="details">
              Our desire to support our<br/>
              artists to produce good music<br/>
              and share it with the world runs<br/>
              deep. Music is our passion thats<br/>
              why we enjoy every step of the<br/>
              way with you!<br/>
            </p>
          </div>
          <div class="column has-text-centered">
            <span class="icon-success icon"></span>
            <h4 class="title is-size-5 has-text-weight-normal is-marginless">Success</h4>
            <p class="details">
              We are highly motivated to<br/>
              help you reach beyond limits<br/>
              and expectations<br/>
            </p>
          </div>
          <div class="column has-text-centered">
            <span class="icon-focus icon"></span>
            <h4 class="title is-size-5 has-text-weight-normal is-marginless">Focus</h4>
            <p class="details">
              We focus on our artists,<br/>
              their needs and aspirations,<br/>
              so we do everything for<br/>
              their professional<br/>
              development
            </p>
          </div>
          <div class="column has-text-centered">
            <span class="icon-party icon"></span>
            <h4 class="title is-size-5 has-text-weight-normal is-marginless">Party</h4>
            <p class="details">
              Top Music Management doesn't<br/>
              just want the best for you,<br/>
              we want to make things<br/>
              happen around the<br/>
              gobble, come join us!
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="TheTeam">
    <section class="header hero">
      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="title">
            Meet the Team
          </h1>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="box">
        <article class="media">
          <div class="media-left">
            <figure class="image">
              <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
            </figure>
          </div>
          <div class="media-content">
            <div class="content">
              <p>
                <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
              </p>
            </div>
            <nav class="level is-mobile">
              <div class="level-left">
                <a class="level-item">
                  <span class="icon is-small"><i class="fas fa-reply"></i></span>
                </a>
                <a class="level-item">
                  <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                </a>
                <a class="level-item">
                  <span class="icon is-small"><i class="fas fa-heart"></i></span>
                </a>
              </div>
            </nav>
          </div>
        </article>
      </div>
    </div>
  </section>
  @include('footer')
</section>
@stop
