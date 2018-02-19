import React, { Component } from 'react'
import Layout from '../components/layout'

class Clients extends Component {
  render(){
    return(
      <Layout idName="Clients" className="wrapper">
        <div className="container is-fluid is-marginless">
          <div className="columns is-multiline is-marginless _height-initial-mobile">
            {/* <div className="column is-flex is-3" style={{backgroundImage:`url('images/clients/Oscar Troya.jpg')`}}>
              <div className="shader"></div>
              <img className="logo" src="images/clients/Oscar Troya - Logo.png"/>
            </div> */}
            <div className="column is-flex is-4" style={{backgroundImage:`url('images/clients/Hasse de Moor.jpg')`}}>
              <div className="shader"></div>
              <img className="logo" src="images/clients/Hasse de Moor - Logo.png"/>
            </div>
            <div className="column is-flex is-4" style={{backgroundImage:`url('images/clients/Bobby Rock.jpg')`}}>
              <div className="shader"></div>
              <img className="logo" src="images/clients/Bobby Rock - Logo.png"/>
            </div>
            <div className="column is-flex is-4" style={{backgroundImage:`url('images/clients/Frankie Ruscello.jpg')`}}>
              <div className="shader"></div>
              <img className="logo" src="images/clients/Frankie Ruscello - Logo.png"/>
            </div>
          </div>
        </div>
      </Layout>
    )
  }
}

export default Clients