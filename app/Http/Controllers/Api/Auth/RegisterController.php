<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Client;

class RegisterController extends Controller
{
    public function __construct(){
    	$this->client = Client::find(2);
    }    

    public function register( Request $request ){
    	$this->validate($request, [
    		'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed'
    	]);

    	$user = User::create([
    		'name' => request('name'),
    		'email' => request('email'),
    		'password' => bcrypt('password')
    	]);

    	$params = [
			'grant_type' => 'password',
            'client_id' => $this->client->id,
            'client_secret' => $this->client->secret,
			'username' => request('email'),
			'password' => request('password'),
			'scope' => '*',
    	];

    	$request->request->add($params);

    	$proxy = Request::create('oauth/token','POST');

    	return Route::dispatch($proxy);
    }
}
