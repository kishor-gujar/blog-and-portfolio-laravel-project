import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class PortfolioHead extends Component {
    render() {
        return (
            <div className="ms-hero-page ms-hero-img-coffee ms-hero-bg-success mb-6">
        <div className="container">
          <div className="text-center">
            <h1 className="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Portfolio</h1>
            <p className="lead lead-lg color-white text-center center-block mt-2 mb-4 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">Discover our projects and the
              <span className="color-warning">rigorous process</span> of creation. Our principles are creativity, design, experience and knowledge.</p>
            <a href="javascript:void(0)" className="btn btn-raised btn-warning animated fadeInUp animation-delay-10">
              <i className="zmdi zmdi-accounts"></i> Our Services</a>
            <a href="javascript:void(0)" className="btn btn-raised btn-info animated fadeInUp animation-delay-10">
              <i className="zmdi zmdi-email"></i> Concact us</a>
          </div>
        </div>
      </div>
        );
    }
}


