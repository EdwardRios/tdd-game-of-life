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
        return $currentState;
    }
}