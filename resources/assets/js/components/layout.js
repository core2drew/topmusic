import React, { Component } from 'react'
import Navigation from './navigation'
import Footer from './footer'

const Layout = (props) => (
  <div id={props.idName} className={props.className}>
    <Navigation/>
    {props.children}
    <Footer/>
  </div>
)

export default Layout