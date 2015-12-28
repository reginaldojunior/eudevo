<?php

require '/opt/lampp/htdocs/aniversarios/Classes/Math.php';

/**
* 
*/
class MathTest extends PHPUnit_Framework_TestCase
{
    
    protected $math;

    public function setUp() 
    {
        $this->math = new Math;
    }

    public function testOperacaoMatematica() 
    {
        $this->assertEquals(5, $this->math->sum(6, 2), 'Não');
    }

    public function testOperacaoIsTrue() 
    {
        $this->assertEquals(true, $this->math->isTrue(), 'Não retornou true');
    }

    public function tearDown()
    {

    }

}