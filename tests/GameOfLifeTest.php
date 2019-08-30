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

        $expected = new Cell("Dead");
        $getState = $gameOfLife->newState($currentState , $liveNeighbor);        

        $this->assertEquals($expected, $getState)  ;
    }
    public function testLiveCellWithTwoOrThreeNeighborsAliveIsCellSurvivor(){
        $gameOfLife = new GameOfLife();
        $currentState = new Cell("Alive");        
        $liveNeighbor = 3 ; 
        $getState = $gameOfLife->newState($currentState , $liveNeighbor);
        $expected = new Cell("Alive");
        
        $this->assertEquals($expected, $getState)  ;
    }
}