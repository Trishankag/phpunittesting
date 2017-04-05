<?php
require 'Add.php';
 
class AddTests extends PHPUnit_Framework_TestCase
{
    private $add;
 
    protected function setUp()
    {
        $this->add = new Add();
    }
 
    protected function tearDown()
    {
        $this->add = NULL;
    }
 
    public function testAdd()
    {
        $result = $this->add->valueadd(1, 2);
        $this->assertEquals(8, $result);
    }
	
 
}