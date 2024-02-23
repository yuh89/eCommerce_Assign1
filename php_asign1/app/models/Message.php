<?php
namespace app\models;
class Message
{
    public $message;
    public $email;
    public $ip;

    public function __construct($object = null){
        if($object == null)
        return;

        $this->email = $object->email;
        $this->message = $object->message;
        $this->ip = $_SERVER['REMOTE_ADDR'];

    }

    public function write()
{
        $filename = 'resources/messages.txt';
        $file_handle = fopen($filename, 'a'); 
        flock($file_handle, LOCK_EX);
        $data = json_encode(array('email' => $this->email, 'message' => $this->message, 'ip' => $this->ip));
        fwrite($file_handle, $data . "\n");
        flock($file_handle, LOCK_UN);
        fclose($file_handle);
}

public function read()
{
    $messageFile = 'resources/messages.txt';
    return file($messageFile, FILE_IGNORE_NEW_LINES);
}

}