<?php

use PHPUnit\Framework\TestCase;
use App\Cell;
use App\GameOfLife;


class GameOfLifeTest extends TestCase
{
    public function testLiveCellLessThanTwoNeightborsDies(){
        $gameOfLife = new GameOfLife();
        $currentState = new Cell("Alive");        
        $liveNeighbor = 1 ; 
        $expected = $gameOfLife->newState($currentState , $liveNeighbor);        
        $this->assertEquals($expected, new Cell("Dead"))  ;
    }
}