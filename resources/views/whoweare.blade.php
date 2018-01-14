@extends('master')

@section('content')
<div id="WhoWeAre">
  <section id="AboutUs" class="hero">
    <div class="hero-head">
      @include('navbar')
    </div>
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
      <div class="columns">
        <div class="column is-10 is-offset-1">
          <div class="box is-shadowless">
            <article class="media">
              <div class="media-left">
                <figure class="profile-image">
                  <img class="image" src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                </figure>
              </div>
              <div class="media-content">
                <div class="content">
                  <div class="name">
                    <h3 class="has-text-weight-semibold is-size-5 is-marginless">Ckatiuscka Ribadeneira</h3>
                    <label>Founder & CEO</label>
                  </div>
                  <p>
                    Ckatu believes in dreams and loves working with the dreamers
                    that work hard to make them come true. As a former Management 
                    Consultant in one of  the top Fortune Global 500 companies she 
                    enjoys the mix of business and her passion: Music.
                  </p>
                </div>
                <nav class="level">
                  <div class="level-left">
                    <a class="level-item social-link is-size-5">
                      <span class="icon-facebook icon"></span>
                    </a>
                    <a class="level-item social-link is-size-5">
                      <span class="icon-twitter icon"></span>
                    </a>
                    <a class="level-item social-link is-size-5">
                      <span class="icon-instagram icon"></span>
                    </a>
                  </div>
                </nav>
              </div>
            </article>
          </div>

          <div class="box is-shadowless">
            <article class="media">
              <div class="media-right">
                <figure class="profile-image">
                  <img class="image" src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                </figure>
              </div>
              <div class="media-content">
                <div class="content">
                  <div class="name">
                    <h3 class="has-text-weight-semibold is-size-5 is-marginless">Mikayla Witholt</h3>
                    <label>Management Assistant</label>
                  </div>
                  <p>
                    Mikay is an amazing friend and co-worker, who knows how to 
                    strive for what she believes. Working for a while in the Music 
                    Industry and studying at the HBA she knows her way around
                    and is the perfect complement to the team.
                  </p>
                </div>
                <nav class="level">
                  <div class="level-left">
                    <a class="level-item social-link is-size-5">
                      <span class="icon-facebook icon"></span>
                    </a>
                    <a class="level-item social-link is-size-5">
                      <span class="icon-twitter icon"></span>
                    </a>
                    <a class="level-item social-link is-size-5">
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
