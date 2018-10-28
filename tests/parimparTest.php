<?php
use PHPUnit\Framework\TestCase;
require 'parimpar.php';

class parimparTests extends TestCase
{
    private $parimpar;
 
    protected function setUp()
    {
        $this->parimpaR = new parimpar();
    }
 
    protected function tearDown()
    {
        $this->parimpaR = NULL;
    }
 
    public function testparimpar()
    {
        $result = $this->parimpaR->par(34);
        $this->assertEquals('par', $result);
    }

   public function testparimpar()
    {
        $result = $this->parimpaR->par(23);
        $this->assertEquals('impar', $result);
    }

 public function testparimpar()
    {
        $result = $this->parimpaR->par(2540);
        $this->assertEquals('par', $result);
    }
 public function testparimpar()
    {
        $result = $this->parimpaR->par(7);
        $this->assertEquals('impar', $result);
    }
}
