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
	public function test_getNameAuthor_method1()
	    {
	    	$test = new \InteractiveDataPost;
	    	$this->assertInternalType('object', $test->getNameAuthor("5a35e17dd7d69e7bfb31379e"));
	    	$this->assertNotEmpty($test->getPost("5a35e17dd7d69e7bfb31379e"));
	    }
	public function test_getNameAuthor_method2()
	{
		$test = new \InteractiveDataPost;
		$this->$this->assertSame('{
			"_id" : ObjectId("5a35e17dd7d69e7bfb31379e"),
			"email" : "minhduynamdinh@gmail.com",
			"password" : "123456",
			"name" : "nguoi vo hinh",
			"birth" : "16/03/1995",
			"hometown" : "Nam Định",
			"highschool" : "thpt Ly Tư Trong - Nam Dinh",
			"university" : "Hanoi University of Science"
		}', $test->getNameAuthor("5a35e17dd7d69e7bfb31379e"));
		
	}
}
