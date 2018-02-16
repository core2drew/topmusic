import React, { Component } from 'react'
import { Link } from "react-router-dom";

class Navigation extends Component {
  render(){
    return(
      <div id="Navbar" className="navbar is-transparent is-fixed-top">
        <div className="container">
          <div className="navbar-brand">
            <Link to="/" className="navbar-item">
              <img className="_initial-maxheight" src="images/logo/logo-267x45.png" alt="Top Music Management"/>
            </Link>
            <span className="navbar-burger burger is-flex-tablet-only is-flex-mobile" data-target="navbarMenuHeroC">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </div>
          <div id="navbarMenuHeroC" className="navbar-menu has-text-centered-touch">
            <div className="navbar-end">
              <Link to="/" activeclassname="is-active" className="navbar-item is-uppercase">
                Home
              </Link>
              <Link to="whoweare" activeclassname="is-active" className="navbar-item is-uppercase">
                Who We Are
              </Link>
              <Link to="whatwedo" activeclassname="is-active" className="navbar-item is-uppercase">
                What We Do
              </Link>
              <Link to="clients" activeclassname="is-active" className="navbar-item is-uppercase">
                Clients
              </Link>
              <Link to="contactus" activeclassname="is-active" className="navbar-item is-uppercase">
                Contact
              </Link>
            </div>
          </div>
        </div>
      </div>
    )
  }
}

export default Navigation