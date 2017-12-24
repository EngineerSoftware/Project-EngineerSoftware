<?php
class SampleTest extends \PHPUnit\Framework\TestCase
{
    public function testTrueAssertsToTrue()
    {
		/** @test */
        $this->assertTrue(true);
    }
}
