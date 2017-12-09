
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */
 
require('./bootstrap');

import ReactDOM from 'react-dom';

import React from 'react'
import {
  BrowserRouter as HashRouter,
  Route,
  Link
} from 'react-router-dom'

const BasicExample = () => (
  <HashRouter basename="/account">
  <div className="container container-full">
    <div className="ms-paper">
      <div className="row">
        <div className="col-lg-3 ms-paper-menu-left-container">
          <div className="ms-paper-menu-left">
              <h3 className="ms-paper-menu-title">
                <i className="zmdi zmdi-apps"></i> Account
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </HashRouter>
)

const Account = () => (
  <div>
    <h2>Home</h2>
  </div>
)

const About = () => (
  <div>
    <h2>About</h2>
  </div>
)


export default BasicExample

if (document.getElementById('app')) {
    ReactDOM.render(<BasicExample />, document.getElementById('app'));
}

//
//
// <div>
//   <ul>
//     <li><Link to="/">Account</Link></li>
//     <li><Link to="/about">About</Link></li>
//     </ul>
//   <hr/>
//
//   <Route exact path="/" component={Account}/>
//   <Route path="/about" component={About}/>
// </div>
