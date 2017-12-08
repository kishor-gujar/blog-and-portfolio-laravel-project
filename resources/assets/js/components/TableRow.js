import React, { Component } from 'react';

class TableRow extends Component {
  render() {
    return (
        <div className="col-lg-4 col-md-6 mix category-1" style={{ display: 'inline-block' }} data-bound="">
        <div className="card">
            <figure className="ms-thumbnail">
                <img src={this.props.obj.image} alt={this.props.obj.title} className="img-fluid"/>
                <figcaption className="ms-thumbnail-caption text-center">
                    <div className="ms-thumbnail-caption-content">
                        <h4 className="ms-thumbnail-caption-title mb-2"> {this.props.obj.title}</h4>
                        <a href="javascript:void(0)" className="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-white color-danger">
                            <i className="zmdi zmdi-favorite"></i>
                        </a>
                        <a href="javascript:void(0)" className="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-white color-warning">
                            <i className="zmdi zmdi-star"></i>
                        </a>
                        <a href="javascript:void(0)" className="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-white color-success">
                            <i className="zmdi zmdi-share"></i>
                        </a>
                    </div>
                </figcaption>
            </figure>
            <div className="card-block text-center portfolio-item-caption">
                <h3 className="color-primary no-mt"><a href={this.props.obj.url}>{this.props.obj.title}</a></h3>
                <p>{}</p>
            </div>
        </div>
    </div>
    );
  }
}

export default TableRow;