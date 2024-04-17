<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Services\DeliveryService;
use App\Services\OrderService;
use App\Services\CommissionService;
use App\Mail\ReEnviarRegisterConfirmation;
use Carbon\Carbon;
use App\Models\User;
use Hash;
use Validator;
use Illuminate\Validation\Rules\Password;


use Illuminate\Support\Facades\Http;
use App\Services\ApiGatewayService;


/*namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Services\ApiGatewayService;*/

class HomeController extends Controller
{
    public $apigatewayService;

    public function __construct(ApiGatewayService $apigatewayService)
    {
        $this->apigatewayService = $apigatewayService;
    }    

    public function compras()
    {
        $result = Http::get('http://localhost:8003/compras');
        return $result;
        //return 'texto de prueba: compras';
    } 

    public function ventas()
    {
        $result = Http::get('http://localhost:8004/ventas');
        return $result;
        //return 'texto de prueba: ventas';
    }
}
