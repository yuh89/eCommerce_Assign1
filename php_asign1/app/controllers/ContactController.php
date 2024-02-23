<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Counter;

class ContactController extends Controller
{
    public function index()
    {
        include_once 'app/views/Contact/index.php';
    }

    public function see_message()
    {
        include_once 'app/views/Contact/read.php';
    }

    function complete_registration(){
        $contact = new \app\models\Message();

        $contact->email = $_POST['email'];
        $contact->message = $_POST['message'];
        $contact->ip = $_SERVER['REMOTE_ADDR'];

        $contact->write();

        header('Location: /Contact/read');
    }
}

