<?php
namespace App\Classes;

class Classes{
    protected $token;
    public function __construct() {
        $this->token = config('app.TelegramToken');
    }
}