<?php
declare(strict_types=1);
	/**
	 * summary
	 */
	use PHPUnit\Framework\TestCase;
	
	class Test_Model_InteractiveDataProfile extends \PHPUnit\Framework\TestCase 
	{
	    /**
	     * summary
	     */
	    

	    public function test_GetProfileWithUser_method1():void
	    {
	    	$this->assertInstanceOf(
	    		InteractiveDataProfile::class,
	    		InteractiveDataProfile::GetProfileWithUser("minhduynamdinh@gmail.com","123456")
	    	);
	    }
	    public function test_GetProfileWithUser_method2():void
	    {
	    	$this->assertInstanceOf(
	    		InteractiveDataProfile::class,
	    		InteractiveDataProfile::GetProfileWithUser("tuandoan0603@gmail.com","123456")
	    	);
	    }
	    public function test_GetProfileWithUser_method3():void
	    {
	    	$this->assertInstanceOf(
	    		InteractiveDataProfile::class,
	    		InteractiveDataProfile::GetProfileWithUser("nguyenhung@gmail.com","654321")
	    	);
	    }
	    public function test_GetProfileWithUser_method4():void
	    {
	    	$this->assertInstanceOf(
	    		InteractiveDataProfile::class,
	    		InteractiveDataProfile::GetProfileWithUser("thanhnam@gmail.com","654321")
	    	);
	    }
	    public function test_GetProfileWithUser_CheckExist_method1()
	    {
	    	$test = new \InteractiveDataProfile;

	    	$this->assertInternalType('object', $test->GetProfileWithUser_CheckExist("tranviet@gmail.com"));
	    	$this->assertCount(1, $test->GetProfileWithUser_CheckExist("tranminh@gmail.com"));
	    }
	    public function test_GetProfileWithUser_CheckExist_method2()
	    {
	    	$test = new \InteractiveDataProfile;

	    	$this->assertInternalType('object', $test->GetProfileWithUser_CheckExist("tankhanh@gmail.com"));
	    	$this->assertEquals('[{
	    		"_id" : ObjectId("5a35e73450f73c71ce70a190"),
	    		"email" : "thanhtu@gmail.com",
	    		"password" : "123456",
	    		"name" : "Nguyen Thanh Tu",
	    		"birth" : "21/11/1997",
	    		"hometown" : "Ha Noi",
	    		"highschool" : "thpt nguyen hue",
	    		"university" : "Ha Noi University of Science"
	    	}]',  $test->GetProfileWithUser_CheckExist("thanhtu@gmail.com")););
	    }
	     public function test_InsertProfile_method(){
	     	$test = new \InteractiveDataProfile;
	     	$this->$this->assertTrue($test->InsertProfile("nguyen thi mai","nguyenmai@gmail.com","123456","21/11/1991","Ho Chi Minh","thpt tan lap","Dai hoc Khoa hoc Tu nhien");
	     }
	    {

	}
