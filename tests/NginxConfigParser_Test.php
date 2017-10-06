<?php
require '../src/Parsers/NginxConfigParser.php';
    
class NginxConfigParser_Test extends PHPUnit_Framework_TestCase{
    public $instance;

    public function setUp(){
        $this->instance = new AtomicServer\Parsers\NginxConfigParser;
    }

    public function testLoadFile(){
        $this->instance->loadFromFile('/etc/nginx/sites-available/budyj.xyz');
    }
}