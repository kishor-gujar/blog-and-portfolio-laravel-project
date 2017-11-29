<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Client;

class LoginController extends Controller
{
	public function __construct(){
		$this->client = Client::find(2);
	}

    public function login(Request $request){
    	$this->validate($request, [
    		'username' => 'required',
            'password' => 'required',
    	]);

    	$params = [
			'grant_type' => 'password',
            'client_id' => $this->client->id,
            'client_secret' => $this->client->secret,
			'username' => request('username'),
			'password' => request('password'),
			'scope' => '*',
    	];

    	$request->request->add($params);

    	$proxy = Request::create('oauth/token','POST');

    	return Route::dispatch($proxy);
    }

    public function refresh(Request $request){

    }

    public function logout(Request $request){

    }
}
