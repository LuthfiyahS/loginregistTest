<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthenticateController extends Controller
{
    public function __invoke(Request $request)
    {
        //dd($request);

        $request = $request->all();
        unset($request['_token']);
         $response = Http::post('http://127.0.0.1:8000/api/auth/login', $request);

        $jsonData = $response->json();
    

     dd($jsonData);
    echo 'kesini';
    }
}
