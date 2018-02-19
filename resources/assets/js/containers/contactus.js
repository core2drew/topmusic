import React, { Component } from 'react'
import { Link } from "react-router-dom";
import Layout from '../components/layout'

class ContactUs extends Component {
  render(){
    return(
      <Layout idName="ContactUs" className="wrapper">
        <div id="Notif" className="column is-5-desktop is-6-tablet _margin-auto notification is-success has-text-centered">
          <button className="delete"></button>
          <h1 className="is-size-4 header">Thank you for getting in touch!</h1>
          <p className="content">We appreciate you contacting us. One of our colleagues will get back to you shortly.</p>
        </div>
        <div className="container is-fullhd">
          <div className="columns is-marginless is-centered is-multiline">
            <form id="ContactUsForm" method="POST" className="column is-5-widescreen is-5-desktop is-8-tablet">
              <div className="field">
                <div className="control">
                  <input id="Fullname" className="input"type="text" name="name" placeholder="Full Name" autoComplete="off"/>
                </div>
              </div>
              <div className="field">
                <div className="control">
                  <input id="Email" className="input" type="text" name="email" placeholder="Email" autoComplete="off"/>
                  <label className="label has-text-right">Invalid Email</label>
                </div>
              </div>
              <div className="field">
                <div className="control">
                  <textarea id="Message" className="textarea" type="text" name="message" placeholder="Message" rows="8"></textarea>
                </div>
              </div>
              <button id="SendMessage" className="button is-success">Send</button>
            </form>
            <div id="Details" className="column is-5-widescreen is-5-desktop is-8-tablet">
              <div className="details level">
                <div className="level-left">
                  <span className="level-item icon icon-location is-size-4 is-size-3-mobile _margin-auto-tablet"></span>
                </div>
                <p className="level-item _flex-content-baseline-widescreen _flex-content-baseline-fullhd _flex-content-center-mobile _margin-leftless-mobile has-text-centered-mobile">
                  Carolina MacGillavrylaan 357 
                  1098XA Amsterdam
                </p>
              </div>
              <div className="details level">
                <div className="level-left">
                  <span className="level-item icon icon-phone is-size-4 is-size-3-mobile _margin-auto-tablet"></span>
                </div>
                <p className="level-item _flex-content-baseline-widescreen _flex-content-baseline-fullhd _flex-content-center-mobile _margin-leftless-mobile has-text-centered-mobile">
                  +49 176 832 03349
                </p>
              </div>
              <div className="details level">
                <div className="level-left">
                  <span className="level-item icon icon-mail is-size-4 is-size-3-mobile _margin-auto-tablet"></span>
                </div>
                <p className="level-item _flex-content-baseline-widescreen _flex-content-baseline-fullhd _flex-content-center-mobile _margin-leftless-mobile has-text-centered-mobile">
                  info@topmusicmanagement.com
                </p>
              </div>
              <h3 className="is-size-5 is-uppercase has-text-weight-bold has-text-centered-mobile">Stay Connected</h3>
              <p className="has-text-centered-mobile">
                We are so looking forward to hearing from you,
                if you want to work with us, have some questions,
                or just want to send some love, please take the
                time to say hola!
              </p>
              <div id="Social" className="level is-hidden-mobile">
                <div className="level-item level-left social-media">
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
              </div>
            </div>
          </div>
        </div>
      </Layout>
    )
  }
}

export default ContactUs