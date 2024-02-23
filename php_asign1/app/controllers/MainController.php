<?php

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller
{
    public function index()
    {
        include_once 'app/views/Main/index.php';
    }

    public function about_us()
    {
        include_once 'app/views/Main/about_us.php';
    }
}