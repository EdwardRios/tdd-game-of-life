<?php

use PHPUnit\Framework\TestCase;
use App\User;

class CellTest extends TestCase
{
    public function testName(){
        $user = new User;
        $user->setName("Edward")  ;
        $this->assertEquals($user->getName(),"Edward")  ;
    }
}