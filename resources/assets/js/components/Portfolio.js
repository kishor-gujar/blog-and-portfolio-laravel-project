import React, {Component} from 'react';
import axios from 'axios';
import { Link } from 'react-router';
import TableRow from './TableRow';

class Portfolio extends Component {
  constructor(props) {
       super(props);
       this.state = {value: '', items: ''};
     }
     componentDidMount(){
       axios.get('http://programmingplace.dev/api/portfolio')
       .then(response => {
         this.setState({ items: response.data.data });
       })
       .catch(function (error) {
         console.log(error);
       })
     }
     tabRow(){
       if(this.state.items instanceof Array){
         return this.state.items.map(function(object, i){
             return <TableRow obj={object} key={i} />;
         })
       }
     }

  render(){
    return (
        <div className="row" id="Container">
            {this.tabRow()}
        </div>
    )
  }
}
export default Portfolio;