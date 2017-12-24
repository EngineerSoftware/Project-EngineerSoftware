<?php

use PHPUnit\Framework\TestCase;
class Test_InteractiveDataFriendRelation_Model extends \PHPUnit\Framework\TestCase 
{
	public function test_GetFriendRelation_method1()
	{
		$test = new \InteractiveDataFriendRelation;
		$this->assertInternalType('object', $test->GetFriendRelation("5a35e17dd7d69e7bfb31379e"));
		$this->assertCount(1, $test->GetFriendRelation("5a35e518f3994baad05a85d2"));
	}
	public function test_GetFriendRelation_method2()
	{
		$test = new \InteractiveDataFriendRelation;
		$this->assertNull("5a35e518f3994baad05a85");
		$this->assertEmpty("5a35e518f3994baad05a85d");
	}
	
}
?>
