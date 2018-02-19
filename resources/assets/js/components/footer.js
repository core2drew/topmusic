import React, { Component } from 'react'

const Footer = (props) => (
  <div id="Footer" className={`${props.variant ? props.variant : ''} footer is-paddingless`}>
    <div className="container">
        <div className="level is-flex-mobile _flex-column-reverse-mobile ">
          <div className="level-item level-left social-media is-block-mobile has-text-centered-mobile">
            <a href="https://www.facebook.com/topmusicmanagement" target="_blank" className="is-size-5 _padding-rightless social-link">
              <span className="icon-facebook icon is-medium"></span>
            </a>
            <a href="https://mobile.twitter.com/TopMusicMGMT?p=s" target="_blank" className="is-size-5 _padding-rightless social-link">
              <span className="icon-twitter icon is-medium"></span>
            </a>
            <a href="https://www.instagram.com/topmusicmanagement" target="_blank" className="is-size-5 _padding-rightless social-link">
              <span className="icon-instagram icon is-medium"></span>
            </a>
          </div>
          <p className="level-item level-right is-size-7 is-block-mobile has-text-centered-mobile">
            © 2018 Top Music Management. All rights reserved.
          </p>
        </div>
    </div>
  </div>
)
export default Footer