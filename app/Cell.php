<?php

namespace App;

class Cell {

    protected $state ; 

    function __construct($state){ 
        $this->state=$state;         
    }     
    public function setState($state){
        $this->state = $state;
    }
    public function getState(){
        return $this->state;    
    }   
}