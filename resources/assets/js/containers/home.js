import React, { Component } from 'react'
import Layout from '../components/layout'

class Home extends Component {
  render(){
    return(
      <Layout idName="LandingPage" className="hero is-fullheight">
        <div className="hero-body">
          <div className="container">
            <h1 className="title has-text-weight-light is-size-1-desktop is-size-2-tablet has-text-centered-mobile">
              Music is in our hearts, <br/>
              reason why we work to <br/>
              make the impossible happen.
            </h1>
          </div>
        </div>
      </Layout>
    )
  }
}

export default Home