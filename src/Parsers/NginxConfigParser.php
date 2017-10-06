<?php
namespace AtomicServer\Parsers;

class NginxConfigParser extends ConfigParser{
    const LEFT_BRACKET = '{';
    const RIGHT_BRACKET = '}';
    const SEMI_COLON = ';';
    const SPACE = ' ';
    const IF_KEYWORD = 'if';
    const SET_KEYWORD = 'SET';
    
    public function __construct(){

    }
    
}