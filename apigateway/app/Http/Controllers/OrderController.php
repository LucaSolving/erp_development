<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    public function login(Request $request)
    {
        $request1 = Http::post('http://localhost:8002/login', $request->all());
        return $request1;
    }

    public function demo()
    {
        return 'texto de prueba';
    }
}
