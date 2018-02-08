@extends('master')

@section('content')
<div id="WhoWeAre" class="wrapper">
  <section id="AboutUs" class="hero">
    <div class="hero-head">
      @include('navbar')
    </div>
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title is-size-2">
          We are Top Music Management
        </h1>
        <h2 class="column _margin-auto is-6-fullhd is-8-desktop is-9-tablet subtitle is-size-4">
          a young and dynamic Artist Management Company
          focused on the needs of our artists.
        </h2>

        <div class="content column _margin-auto is-7-fullhd is-8-desktop is-9-tablet">
          <p>
            We understand artists and their aim to focus on their musical production and performance.
            However, in the music industry artists are subject to pressures 24 hours a day, seven days a week. 
          </p>
          <p>
            This is why Top Music Management offers 360-degree support to our clients, providing space for
            creativity and enabling the artist to grow professionally beyond their wildest dreams. 
          </p>
          <p>
            By devising and executing individually customized career strategies and services we facilitate our
            artists to excel. Our aim is to create a partnership, in which our clients can rely on us for their
            careers, while they fully focus on what they and what we love: Music.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section id="Attitudes" class="hero">
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="columns">
          <div class="column is-8-desktop is-8-tablet is-offset-2-desktop is-offset-2-tablet">
            <h2 class="subtitle is-size-5">
              Our success is not only do to the quality of our work, it´s down to trust,
              attitude and the way we approach our artists, life and music.
            </h2>
          </div>
        </div>
        <div class="columns is-desktop is-flex-tablet _flex-wrap-tablet is-block-mobile">
          <div class="column has-text-centered is-3-desktop is-5-tablet is-8-mobile _margin-auto-tablet">
            <span class="icon-passion icon"></span>
            <h4 class="title is-size-5 has-text-weight-semibold is-marginless">Passion</h4>
            <p class="details">
              Our desire to support our
              artists to produce good music
              and share it with the world runs
              deep. Music is our passion thats
              why we enjoy every step of the
              way with you!
            </p>
          </div>
          <div class="column has-text-centered is-3-desktop is-5-tablet is-8-mobile _margin-auto-tablet">
            <span class="icon-success icon"></span>
            <h4 class="title is-size-5 has-text-weight-semibold is-marginless">Drive</h4>
            <p class="details">
              We are highly motivated to
              help you reach beyond limits
              and expectations.
            </p>
          </div>
          <div class="column has-text-centered is-3-desktop is-5-tablet is-8-mobile _margin-auto-tablet">
            <span class="icon-focus icon"></span>
            <h4 class="title is-size-5 has-text-weight-semibold is-marginless">Focus</h4>
            <p class="details">
              We focus on our artists,
              their needs and aspirations,
              so we do everything for
              their professional
              development.
            </p>
          </div>
          <div class="column has-text-centered is-3-desktop is-5-tablet is-8-mobile _margin-auto-tablet">
            <span class="icon-party icon"></span>
            <h4 class="title is-size-5 has-text-weight-semibold is-marginless">Party</h4>
            <p class="details">
              Top Music Management doesn't
              just want the best for you,
              we want to make things
              happen around the
              gobble, come join us!
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="TheTeam">
    <section class="hero">
      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="title">
            Meet the Team
          </h1>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="columns is-marginless is-centered">
        <div class="column is-8-desktop">
          <div class="box is-shadowless _margin-bottomless-mobile">
            <article class="media is-flex-mobile _flex-column-mobile _flex-items-center-mobile">
              <div class="media-left _margin-rightless-mobile">
                <figure class="profile-image">
                  <img class="image" src="images/profile/Ckati.jpg" alt="Image">
                </figure>
              </div>
              <div class="media-content has-text-centered-mobile">
                <div class="content">
                  <div class="name">
                    <h3 class="has-text-weight-semibold is-size-5 is-marginless">Ckatu</h3>
                    <label>Founder & CEO</label>
                  </div>
                  <p>
                    Ckatu believes in dreams and loves working with the dreamers
                    that work hard to make them come true. As a former Management 
                    Consultant in one of  the top Fortune Global 500 companies she 
                    enjoys the mix of business and her passion: Music.
                  </p>
                </div>
                <nav class="level is-flex-mobile _flex-content-center-mobile">
                  <div class="level-left">
                    <a href="https://www.facebook.com/ckatiuscka.ribadeneira" target="_blank" class="level-item social-link is-size-5 is-inline-mobile">
                      <span class="icon-facebook icon"></span>
                    </a>
                    <a href="https://mobile.twitter.com/ckatur" target="_blank" class="level-item social-link is-size-5 is-inline-mobile">
                      <span class="icon-twitter icon"></span>
                    </a>
                    <a href="https://www.instagram.com/ckatu/" target="_blank" class="level-item social-link is-size-5 is-inline-mobile">
                      <span class="icon-instagram icon"></span>
                    </a>
                  </div>
                </nav>
              </div>
            </article>
          </div>

          <div class="box is-shadowless">
            <article class="media is-flex-mobile _flex-column-mobile _flex-items-center-mobile">
              <div class="media-right _margin-leftless-mobile">
                <figure class="profile-image">
                  <img class="image" src="images/profile/Mikayla.jpg" alt="Image">
                </figure>
              </div>
              <div class="media-content has-text-centered-mobile">
                <div class="content">
                  <div class="name">
                    <h3 class="has-text-weight-semibold is-size-5 is-marginless">Mikay</h3>
                    <label>Management Assistant</label>
                  </div>
                  <p>
                    Mikay is an amazing friend and co-worker, who knows how to 
                    strive for what she believes. Working for a while in the Music 
                    Industry and studying at the HBA she knows her way around
                    and is the perfect complement to the team.
                  </p>
                </div>
                <nav class="level is-flex-mobile _flex-content-center-mobile">
                  <div class="level-left">
                    <a href="https://www.facebook.com/mikayla.witholt" target="_blank" class="level-item social-link is-size-5 is-inline-mobile">
                      <span class="icon-facebook icon"></span>
                    </a>
                    <a href="https://www.instagram.com/mikaylawitholt/" target="_blank" class="level-item social-link is-size-5 is-inline-mobile">
                      <span class="icon-twitter icon"></span>
                    </a>
                    <a href="https://mobile.twitter.com/Mikaylaalaaa" target="_blank" class="level-item social-link is-size-5 is-inline-mobile">
                      <span class="icon-instagram icon"></span>
                    </a>
                  </div>
                </nav>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('footer', ['class'=>'default'])
</div>
@stop
