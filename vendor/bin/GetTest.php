<?php
require 'GetData.php';
 
class UserData extends PHPUnit_Framework_TestCase
{
    private $udata;
 
    protected function setUp()
    {
        $this->udata = new GetData();
    }
 
    protected function tearDown()
    {
        $this->udata = NULL;
    }
 
    public function testData()
    {
        $result = $this->udata->userData('abc@gmail.com');
        $this->assertEquals('username', $result);
    }
	
	 
    public function testEmptyData()
    {
        $result = $this->udata->userData('');
        $this->assertEquals('', $result);
    }
 
}