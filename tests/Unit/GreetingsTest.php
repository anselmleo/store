<?php

namespace Tests\Unit;

use Mockery;
use Tests\TestCase;
use App\Http\Controllers\Greetings;
use App\Http\Controllers\StringInUppercase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GreetingsTest extends TestCase
{
    // /**
    //  * A basic unit test example.
    //  *
    //  * @return void
    //  */
    // public function testExample()
    // {
    //     $this->assertTrue(true);
    // }

    protected $mock;

    public function testIfSumReturnsCorrectValue()
    {
        $firstNumber = 32;
        $secondNumber = 42;
        $expectedResult = 74;

        $greetings = new Greetings();
        $actual = $greetings->sum($firstNumber, $secondNumber);

        $this->assertEquals($actual, $expectedResult);
    }

    public function testIfGetNameReturnsAValue()
    {
        $arg = 'Taiwo';
        $expectedName = 'Taiwo';

        $greetings = new Greetings();
        $greetings->setName($arg);
        $actual = $greetings->getName();

        $this->assertEquals($actual, $expectedName);
        
    }

    public function testIfSetNameReturnsAValue()
    {
        $arg = 'Shola';
        
        $greetings = new Greetings();
        $greetings->setName($arg);

        $expectedName = $greetings->getName();
        $this->assertEquals($expectedName, $arg);

    }

    public function testIfMessageReturnsRightGreeting()
    {
        $visitorArg = 'Funsho';
        $username = 'Henry';
        $expectedMessage = $username . ' greets ' . $visitorArg;
        
        $this->mock = Mockery::mock(Greetings::class)->makePartial();
        $this->mock->shouldReceive('getName')->once()
        ->andReturn($username);

        $actualMessage = $this->mock->message($visitorArg);

        $this->assertEquals($actualMessage, $expectedMessage);

        Mockery::close();
        
    }

    public function testIfMessageInUppercaseReturnsRightGreeting()
    {
        $visitorArg = 'Funsho';
        $username = 'Henry';
        $expectedMessage = $username . ' greets ' . $visitorArg;
        
        $this->mock = Mockery::mock(Greetings::class)->makePartial();
        $stringMock = Mockery::mock(StringInUppercase::class)->makePartial();
       

        $this->mock->shouldReceive('getName')->once()
        ->andReturn($username);

        $stringMock->shouldReceive('capitalize')->once()
        ->andReturn($username)->with($expectedMessage);

        $actualMessage = $this->mock->message($visitorArg, $stringMock);
        //$actualMessage

        $this->assertEquals($actualMessage, $expectedMessage);
        
        Mockery::close();
    }
}
