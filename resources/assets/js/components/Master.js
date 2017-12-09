import React, {Component} from 'react';
import {Router,Route, Link}from 'reactRouter';

class Master extends Component{
  render (){
    <ul>
      <li>
          <a>Page1</a>
      </li>
    </ul>
    <div>
      {this.props.children}
    </div>
  }
}

export default Master;
