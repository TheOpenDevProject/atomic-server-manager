<?php

use AtomicServer\Parsers\NginxConfigParser;


class NginxConfigParser_Test extends PHPUnit_Framework_TestCase{
    public $instance;

    public function setUp(){
        $this->instance = new NginxConfigParser;
    }

    public function testLoadFile(){
        $this->instance->fromConfig('/etc/nginx/sites-available/','budyj.xyz');
    }
}