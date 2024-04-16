<?php

namespace App\Services;

class ApiGatewayService extends ApiService
{
    public function __construct(){
        $this->endpoint = 'http://localhost:8001';
        //$this->endpoint = 'http://26.220.92.239:8004';
        //$this->endpoint = 'https://adminmlmw.lucasolving.com';
        //$this->endpoint = env('PRODUCTS_SERVICE_BASE_URL');
    }
}