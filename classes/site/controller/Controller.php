<?php
namespace site\controller;

use site\model\Login;
class Controller{
    
    private $username;
    
    public function __Construct(){
        
    }
    
    public function getData(){
        
    }
    public function login($un,$pw){
        \Login::login($un,$pw);
    }
    public function setUsername($un) {
        $this->username = $un;
    }
    public function getUsername(){
        return $this->username;
    }
    
}

