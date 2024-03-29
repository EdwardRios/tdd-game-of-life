<?php

namespace App;
use App\Cell;

class GameOfLife {

    
    public function __construct()
    {
        $cellDead = new Cell("Alive");    
    }
    public function newState($currentState, $liveNeighbors){
        $cellDead  = new Cell("Dead");
        $cellAlive = new Cell("Alive");         
        if($currentState == $cellAlive && ($liveNeighbors < 2) )
            return $cellDead;
        if($currentState == $cellAlive && ($liveNeighbors > 3) )
            return $cellDead; 
        if($currentState == $cellDead && ($liveNeighbors == 3) )
            return $cellAlive;     
        return $currentState;
    }
}