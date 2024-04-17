<?php

/*
namespace App\Http\Controllers\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\RecoveryPassword;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Session;
*/



namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
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
        return view('home.dashboard');
    }
}
