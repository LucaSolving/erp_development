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
        //$stockproduct_test = $this->apigatewayService->get('/demo/');

        //$stockproduct_test = Http::get('http://localhost:8001/demo');

        /*$stockproduct_test = Http::withHeaders([
            'X-CSRF-TOKEN' => csrf_token(), // Laravel helper function
          ])->post('http://localhost:8001/orders', [
            'username' => $request->input('username'),
            'password' => $request->input('password')
          ]);*/

        $stockproduct_test = Http::post('http://localhost:8001/orders', $request->all());
        echo 'enviando';
        print_r($request->all());
        //$response = $this->apigatewayService->post('/orders/',$request->all());
    
        return $stockproduct_test;
    }
}
