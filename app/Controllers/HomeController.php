<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function actionAboutGet($request, $response)
    {
        return $response->create('Greeting!');
    }
}