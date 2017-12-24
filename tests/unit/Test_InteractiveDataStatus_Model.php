<?php

use PHPUnit\Framework\TestCase;
class Test_InteractiveDataStatus_Model extends \PHPUnit\Framework\TestCase {
	public function test_GetStatus_method1()
	{
		$test = new \InteractiveDataStatus;
		$this->assertInternalType("array", $test->GetStatus("5a35e17dd7d69e7bfb31379e"));
		$this->assertEquals('{
			"_id" : ObjectId("5a3e3353fe80ec735d42fe1d"),
			"id_author" : "5a35e1d4d7d69e7bfb31379f",
			"id_user" : "5a35e17dd7d69e7bfb31379e",
			"status" : 1
		}]', $test->GetStatus("5a35e17dd7d69e7bfb31379e"));
	}
}
?>