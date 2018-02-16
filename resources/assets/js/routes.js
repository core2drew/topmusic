import React from "react";
import { BrowserRouter as Router, Route, Link } from "react-router-dom";
import Navigation from './containers/navigation'
import Footer from './containers/footer'
import Home from './containers/home'
import WhoWeAre from './containers/whoweare'
import WhatWeDo from './containers/WhatWeDo'
import Clients from './containers/clients'
import ContactUs from './containers/contactus'

const Routes = () => (
  <Router>  
    <div id="Layout">
      <Navigation/>
      <Route exact path="/" component={Home} />
      <Route path="/whoweare" component={WhoWeAre} />
      <Route path="/whatwedo" component={WhatWeDo} />
      <Route path="/clients" component={Clients} />
      <Route path="/contactus" component={ContactUs} />
      <Footer/>
    </div>
  </Router>
);

export default Routes;