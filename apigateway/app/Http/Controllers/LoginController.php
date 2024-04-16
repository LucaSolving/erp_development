<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        /*$response = Http::post('http://localhost:8001/orders', [
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ]);
    
        return $response->json();*/

        return 'llego';
    }
}
