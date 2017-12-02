<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\Auth\IssueTokenTrait;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Client;

class RegisterController extends Controller
{
	use IssueTokenTrait;
	
    public function __construct(){
    	$this->client = Client::find(2);
    }    

    public function register( Request $request ){
    	$this->validate($request, [
    		'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6'
    	]);

    	$user = User::create([
    		'name' => request('name'),
    		'email' => request('email'),
    		'password' => bcrypt('password')
		]);

		return $this->issueToken($request, 'password');		
	}
}
