<?php

use PHPUnit\Framework\TestCase;
use App\Cell;

class CellTest extends TestCase
{
    public function testState(){
        $cell = new Cell("Alive");          
        $this->assertEquals($cell->getState(),"Alive");
    }
}