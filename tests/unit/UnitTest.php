<?php
class UnitTest extends \PHPUnit\Framework\TestCase
{
	protected $user;
	public function setUp()
	{
		$this->user = new \App\Models\User;
	}
	/** @test */
	public function That_We_Can_Get_The_First_Name()
	{
		$this->user->setFirstName('Billy');
		$this->assertEquals($this->user->getFirstName(), 'Billy');
	}

	public function testThatWeCanGetTheLastName()
	{
		$this->user->setLastName('Garrett');
		$this->assertEquals($this->user->getLastName(), 'Garrett'); 

	}
	public function testFullNameIsReturned()
	{
		$this->user->setFirstName('Billy');
		$this->user->setLastName('Garrett');
		$this->assertEquals($this->user->getFullName(),'Billy Garrett'); 
	}
	public function testFirstAndLastNameAreTrimmed()
	{
		$this->user->setFirstName(' Billy   ');
		$this->user->setLastName('    Garrett  ');
		$this->assertEquals($this->user->getFirstName(),	 'Billy');
		$this->assertEquals($this->user->getLastName(), 'Garrett');

	}
	public function testEmailAddressCanBeSet(){
		$this->user->setEmail('billy@codecourse.com');
		$this->assertEquals($this->user->getEmail(),'billy@codecourse.com');
	}
	public function testEmailVariablesContainCorrectValue(){
		$this->user->setFirstName('Billy');
		$this->user->setLastName('Garrett');
		$this->user->setEmail('billy@codecourse.com');

		$emailVariables = $this->user->getEmailVaribles();
		$this->assertArrayHasKey('full_name',$emailVariables);
		$this->assertArrayHasKey('email',$emailVariables);

		$this->assertEquals($emailVariables['full_name'], 'Billy Garrett');
		$this->assertEquals($emailVariables['email'], 'billy@codecourse.com');
	}
}