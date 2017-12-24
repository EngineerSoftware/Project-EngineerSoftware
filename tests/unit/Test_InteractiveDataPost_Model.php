<?php

use PHPUnit\Framework\TestCase;
class Test_InteractiveDataPost_Model extends \PHPUnit\Framework\TestCase 
{
	public function test_getPost_method1()
	    {
	    	$test = new \InteractiveDataPost;
	    	$this->assertInternalType('object', $test->getPost("5a35e17dd7d69e7bfb31379e"));
	    	$this->assertCount(1, $test->getPost("5a35e1d4d7d69e7bfb31379f"));
	    }
	public function test_getPost_method2()
	    {
	    	$test = new \InteractiveDataPost;
	    	$this->assertInternalType('object', $test->getPost("5a35e518f3994baad05a85d2"));
	    	$this->assertEmpty( $test->getPost("5a35e518f3994baad05a85d"));
	    }
	public function test_getPost_method3()
	    {
	    	$test = new \InteractiveDataPost;
	    	$this->assertInternalType('object', $test->getPost("5a35e17dd7d69e7bfb31379e"));
	    	$this->assertNotEmpty($test->getPost("5a35e518f3994baad05a85d2"));
	    }
}
