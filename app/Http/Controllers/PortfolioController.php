<?php

namespace App\Http\Controllers;

use App\Portfolio;
use TCG\Voyager\Models\Category;

class PortfolioController extends Controller
{
    public function index(){
    	$categorys = Category::all();
    	$portfolios = Portfolio::paginate(6);
    	return view('portfolio.index',
    		['portfolios' => $portfolios,
    		'categorys' => $categorys]);
    }

    public function single($p){
    	$portfolio = Portfolio::find($p);
    	return view('portfolio.single',['portfolio' => $portfolio]);
    }

    public function category($c){
        $categorys = Category::all();
        $category = Category::find($c);
        $portfolios = $category->portfolios()->paginate(6);
        return view('portfolio.category',
            ['portfolios' => $portfolios,
            'categorys' => $categorys]);
    }

    public function gallery(){
        $portfolios = Portfolio::paginate(20);
        return view('portfolio.gallery', ['portfolios' => $portfolios]);
    }
}
