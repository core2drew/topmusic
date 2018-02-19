import React, { Component } from 'react'
import { NavLink } from "react-router-dom";

const Navigation = (props) => (
  <div id="Navbar" className="navbar is-transparent is-fixed-top">
    <div className="container">
      <div className="navbar-brand">
        <NavLink to="/" className="navbar-item">
          <img className="_initial-maxheight" src="images/logo/logo-267x45.png" alt="Top Music Management"/>
        </NavLink>
        <span className="navbar-burger burger is-flex-tablet-only is-flex-mobile" data-target="navbarMenuHeroC">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </div>
      <div id="navbarMenuHeroC" className="navbar-menu has-text-centered-touch">
        <div className="navbar-end">
          <NavLink exact to="/" activeClassName="is-active" className="navbar-item is-uppercase">
            Home
          </NavLink>
          <NavLink to="/whoweare" activeClassName="is-active" className="navbar-item is-uppercase">
            Who We Are
          </NavLink>
          <NavLink to="/whatwedo" activeClassName="is-active" className="navbar-item is-uppercase">
            What We Do
          </NavLink>
          <NavLink to="/clients" activeClassName="is-active" className="navbar-item is-uppercase">
            Clients
          </NavLink>
          <NavLink to="/contactus" activeClassName="is-active" className="navbar-item is-uppercase">
            Contact
          </NavLink>
        </div>
      </div>
    </div>
  </div>
)

export default Navigation