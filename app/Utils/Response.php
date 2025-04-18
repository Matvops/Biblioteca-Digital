<?php

namespace App\Utils;

class Response {
    private $status;   
    private $message;
    private $data;

    private function __construct($status, $message, $data){
        $this->status = $status;
        $this->message = $message;
        $this->data = $data;
    }

    private function __clone(){}

    public static function getResponse($status, $message, $data = null){
        return new Response($status, $message, $data);
    }

    public function getStatus(){
        return $this->status;
    }

    public function getMessage(){
        return $this->message;
    }

    public function getData(){
        return $this->data;
    }
}