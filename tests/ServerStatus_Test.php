<?php

use AtomicServer\Info\ServerStatus;

class ServerStatus_Test extends PHPUnit_Framework_TestCase{
    public $instance;

    public function setUp(){
        $this->instance = new ServerStatus;
    }

    public function testCanGetLSCPU(){
        $result = $this->instance->getProcInfo();
        $this->assertNotEmpty($result);
    }

    public function testCanGetFreeMem(){
        $result = $this->instance->getFreeMemInfo();
        $this->assertNotEmpty($result);
    }

    public function testCanGetServerUptime(){
        $result = $this->instance->getServerUptime();
        $this->assertNotEmpty($result);
    }

    
}