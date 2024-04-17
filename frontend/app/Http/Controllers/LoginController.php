<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use App\Services\ApiGatewayService;

class LoginController extends Controller
{
    public $apigatewayService;

    public function __construct(ApiGatewayService $apigatewayService)
    {
        $this->apigatewayService = $apigatewayService;
    }

    public function login(Request $request)
    {
        $result = Http::post('http://localhost:8001/login', $request->all());

        if($result=='F'){
            return redirect('/');
        }
        else{
            return view('home.dashboard');
        }
    }

    
}
