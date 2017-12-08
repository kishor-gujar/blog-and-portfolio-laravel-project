<?php

namespace App\Http\Controllers\Api;

use App\Portfolio;
use App\Http\Resources\Portfolio as PortfolioResource;
use App\Http\Resources\PortfolioCollection;
use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Category;

class PortfolioController extends Controller
{
    public function index(){
    	$categorys = Category::all();
        $portfolios = Portfolio::paginate(6);
    	return new PortfolioCollection($portfolios);
    }

    public function single($p){
    	$portfolio = Portfolio::find($p);
    	return new PortfolioResource($portfolio);
    }

    public function category($c){
        $categorys = Category::all();
        $category = Category::find($c);
        $portfolios = $category->portfolios()->paginate(6);
        return response()->json(
            ['portfolios' => $portfolios, 
            'categorys' => $categorys]);
    }

    public function gallery(){
        $portfolios = Portfolio::paginate(20);
        return response()->json(['portfolios' => $portfolios]);
    }
}
