<?php
require 'GetDataByEmail.php';
 
class UserEmailData extends PHPUnit_Framework_TestCase
{
    private $edata;
 
    protected function setUp()
    {
        $this->edata = new GetDataByEmail();
    }
 
    protected function tearDown()
    {
        $this->edata = NULL;
    }
 
    public function testIdData()
    {
        $result = $this->edata->userDataByEmail('anin@gmail.com');
		//$this->assertTrue(is_numeric($result));
		$this->assertStringMatchesFormat('%d', $result);
    }
	
	public function testfIdData()
    {
        $result = $this->edata->userDataByEmail('anin@gmail.com');
		if(empty('$result')){
		$this->fail('ID can not be blank'); 
	     }

    }
	
	
	 public function testFname()
    {
        $result = $this->edata->userFnameByEmail('anin@gmail.com');
		 $this->assertRegExp('/^[a-z0-9]+$/iD', $result , "Name can not be only numeric");
		//$this->assertTrue("Name can not be only numeric",is_numeric($result));
    }
	 public function testFnamenum()
    {
        $result = $this->edata->userFnameByEmail('anin@gmail.com');
		$this->assertRegExp('/[^0-9]/', $result,'Firstname shall not contains only numbers');
    }
	
	 public function testFnamelen()
    {
        $result = $this->edata->userFnameByEmail('anin@gmail.com');
		$this->assertRegExp('/^[a-zA-Z]{3,15}$/', $result,'Firstname should be minimum 3 and maximum 15 length');
    }
	
	public function testEmptyFname()
    {
        $result = $this->edata->userFnameByEmail('anin@gmail.com');
		if(empty($result)){
		$this->fail('Firstname can not be blank'); 
		//$this->assertEmpty($result,"Firstname can not be blank");
	}
    }
	
	
	public function testDate()
    {
        $result = $this->edata->userDateByEmail('anin@gmail.com');
		$this->assertRegExp('/\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}/', $result,'Date format isnot correct');

    }
	
	public function testEmptyDate()
    {
        $dtresult = $this->edata->userDateByEmail('anin@gmail.com');
		if(empty($dtresult)){
		$this->fail('Date Field can not be blank'); 
		//$this->assertEmpty($result,"Firstname can not be blank");
	}
    }
	

 
}