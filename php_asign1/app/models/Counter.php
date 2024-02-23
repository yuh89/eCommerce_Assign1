<?php
namespace app\models;
class Counter
{
    private $count;

    public function __construct()
    {
        $counterFilePath = 'resources/counter.txt';

        if (file_exists($counterFilePath)) {
            $file = fopen($counterFilePath, 'w');
            flock($file, LOCK_EX);
            $fileContent = file_get_contents($counterFilePath);
            $this->count = json_decode($fileContent)->count;
            fclose($file);
        } else {
            $this->count = 0;
        }
    }

    public function increment()
    {
        $this->count++;
    }

    
    public function __toString()
    {
        return json_encode(['count' => $this->count]);
    }



    public function write()
    {
        $counterFilePath = 'resources/counter.txt';
        $countJson = json_encode(['count' => $this->count]);

        if (file_exists($counterFilePath)) {
        $file = fopen($counterFilePath, 'w');
        flock($file, LOCK_EX);
        fwrite($file, $countJson);
        flock($file, LOCK_UN);
        fclose($file);
        }
    }

  
}