<?php

namespace App\Http\Controllers\ApiDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $clients = [
            [
                'id' => 1,
                'name' => 'José da Silva',
                'email' => 'jose@gmail.com'
            ]
        ];

        $products = [
            [
                'id' => 1,
                'name' => 'Video Game',
                'email' => '1000.00'
            ],
            [
                'id' => 2,
                'name' => 'Filme Vingadores',
                'email' => '30.00'
            ],
        ];

        return response()->json(
            [
                'clients' => $clients,
                'products' => $products

            ]
        );
    }
}
