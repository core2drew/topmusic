import React, { Component } from 'react'

class WhatWeDo extends Component {
  render(){
    return(
      <div id="WhatWeDo" className="wrapper">
        <section id="Services" className="hero">
          <div className="hero-body">
            <div className="container">
              <h1 className="title has-text-centered has-text-weight-semibold">
                Top Music Management offers the following services
              </h1>

              <div className="columns is-centered is-flex-mobile _flex-wrap-mobile">
                <div className="column has-text-centered is-2-widescreen is-one-fifth-desktop is-one-quarter-tablet is-two-fifths-mobile">
                  <span className="icon-mic icon"></span>
                  <h4 className="title is-size-5 has-text-weight-normal is-marginless">
                    Artist<br/>
                    Management
                  </h4>
                </div>
                <div className="column has-text-centered is-2-widescreen is-one-fifth-desktop is-one-quarter-tablet is-two-fifths-mobile">
                  <span className="icon-rockstar-shirt icon"></span>
                  <h4 className="title is-size-5 has-text-weight-normal is-marginless">
                    Personal<br/>
                    Branding
                  </h4>
                </div>
                <div className="column has-text-centered is-2-widescreen is-one-fifth-desktop is-one-quarter-tablet is-two-fifths-mobile">
                  <span className="icon-distance icon"></span>
                  <h4 className="title is-size-5 has-text-weight-normal is-marginless">
                    Tour<br/>
                    Management
                  </h4>
                </div>
                <div className="column has-text-centered is-2-widescreen is-one-fifth-desktop is-one-quarter-tablet is-two-fifths-mobile">
                  <span className="icon-favorite-book icon"></span>
                  <h4 className="title is-size-5 has-text-weight-normal is-marginless">
                    Booking<br/>
                    Management
                  </h4>
                </div>
              </div>

              <div className="columns is-centered is-flex-mobile _flex-wrap-mobile">
                <div className="column has-text-centered is-2-widescreen is-one-fifth-desktop is-one-quarter-tablet is-two-fifths-mobile">
                  <span className="icon-podium icon"></span>
                  <h4 className="title is-size-5 has-text-weight-normal is-marginless">
                    Strategic Career<br/>
                    Planning
                  </h4>
                </div>
                <div className="column has-text-centered is-2-widescreen is-one-fifth-desktop is-one-quarter-tablet is-two-fifths-mobile">
                  <span className="icon-social-media-graph icon"></span>
                  <h4 className="title is-size-5 has-text-weight-normal is-marginless">
                    Marketing<br/>
                    and Social Media
                  </h4>
                </div>
                <div className="column has-text-centered is-2-widescreen is-one-fifth-desktop is-one-quarter-tablet is-two-fifths-mobile">
                  <span className="icon-search-rockstar icon"></span>
                  <h4 className="title is-size-5 has-text-weight-normal is-marginless">
                    A&R<br/>
                    Consultancy
                  </h4>
                </div>
                <div className="column has-text-centered is-2-widescreen is-one-fifth-desktop is-one-quarter-tablet is-two-fifths-mobile">
                  <span className="icon-balance icon"></span>
                  <h4 className="title is-size-5 has-text-weight-normal is-marginless">
                    Legal<br/>
                    Advisory
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="Operating" className="hero">
          <div className="hero-body">
            <div className="container">
              <div className="columns is-centered is-multiline">
                <div className="column is-3-widescreen is-4-desktop is-8-tablet has-text-centered-touch is-flex">
                  <p className="is-size-5 has-text-weight-semibold">
                    We are currently operating
                    in South America, Europe and
                    opening new markets in Asia
                    and the MENA Region.
                    Our headquarter is in
                    Amsterdam.
                  </p>
                </div>
                <div className="column is-5-widescreen is-7-desktop is-12-tablet has-text-centered">
                  <img src="images/whatwedo/map.png"/>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    )
  }
}

export default WhatWeDo