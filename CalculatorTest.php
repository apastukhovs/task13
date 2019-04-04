<?php
include_once 'libs/Calculator.php';
include_once 'libs/config.php';

class CalculatorTest extends PHPUnit_Framework_TestCase
{
	private $calc;
	public function setUp(){
		$this->calc = new Calculator();
	}
	public function testCreation()
	{
		$this->assertInstanceOf(Calculator::class, $this->calc);
	}
	public function testSetFirstNum()
	{
		$val=5;
		$this->calc->setFirstNum($val);
		$this->assertEquals($val,$this->calc->getFirstNum());
	}
	public function testSetSecondNum()
	{
		$val=5;
		$this->calc->setSecondNum($val);
		$this->assertEquals($val,$this->calc->getSecondNum());
	}
	public function testSetMemory()
	{
		$val=5;
		$this->calc->setMemory($val);
		$this->assertEquals($val,$this->calc->getMemory());
	}
	public function testSum()
	{
		$this->calc->setFirstNum(5);
		$this->calc->setSecondNum(3);
		$this->assertEquals(5 + 3,$this->calc->sum());
		$this->assertEquals($this->calc->getFirstNum() + $this->calc->getSecondNum(),$this->calc->sum());
	}
	public function testSubtraction()
	{
		$this->calc->setFirstNum(5);
		$this->calc->setSecondNum(3);
		$this->assertEquals(5 + 3,$this->calc->Subtraction());
		$this->assertEquals($this->calc->getFirstNum() + $this->calc->getSecondNum(),$this->calc->Subtraction());
    }
    
    public function testZeroDiv()
	{
		$this->calc->setFirstNum(0);
		$this->assertEquals(ERROR, $this->calc->div1());
		$this->calc->setFirstNum(10);
		$this->calc->setSecondNum(0);
		$this->assertEquals(ERROR, $this->calc->div());
    }
    
    public function testDiv()
	{
		$this->calc->setFirstNum(5);
		$this->calc->setSecondNum(3);
		$this->assertEquals(5 / 3,$this->calc->div());
		$this->assertEquals($this->calc->getFirstNum() / $this->calc->getSecondNum(),$this->calc->div());
	}
	public function testMultiplication()
	{
		$this->calc->setFirstNum(5);
		$this->calc->setSecondNum(3);
		$this->assertEquals(5 * 3,$this->calc->getMultiple());
		$this->assertEquals($this->calc->getFirstNum() * $this->calc->getSecondNum(),$this->calc->getMultiple());
	}
	public function testSqrt()
	{
		$this->calc->setFirstNum(5);
		$this->calc->setSecondNum(3);
		$this->assertEquals(sqrt(5),$this->calc->getSquare());
		$this->assertEquals(sqrt($this->calc->getFirstNum()),$this->calc->getSquare());
    }
    
    public function testPercent()
	{
		$this->calc->setFirstNum(5);
		$this->calc->setSecondNum(3);
		$this->assertEquals(3 *(5 / 100),$this->calc->getPercent());
		$this->assertEquals($this->calc->getSecondNum() * ($this->calc->getFirstNum() / 100),$this->calc->getPercent());
	}