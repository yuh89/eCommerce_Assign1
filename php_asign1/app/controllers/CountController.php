<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Counter;

class CountController extends Controller
{
    public function index()
    {
        $counter = new Counter();
        $counter->increment();
        $counter->write();
        echo $counter;
    }
}