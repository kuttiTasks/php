<?php

class HelloIsHelloTest extends PHPUnit_Framework_TestCase
{
	public function testHello(){
		$helloString = 'hello';
		$this->assertEquals('hello', $helloString);
	}

	public function testHello2(){
		$helloString = 'hello';
		$this->assertEquals('hello', $helloString);
	}

}