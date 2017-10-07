<?php
namespace AtomicServer\Parsers;

class NginxConfigParser extends ConfigParser{
    const LEFT_BRACKET = '{';
    const RIGHT_BRACKET = '}';
    const SEMI_COLON = ';';
    const SPACE = ' ';
    const IF_KEYWORD = 'if';
    const SET_KEYWORD = 'SET';
    /**
     * Undocumented variable
     *
     * @var [string]
     */
    private $activeConfig;

    public function __construct(){

    }

    /**
     * Load config file into memory
     *
     * @param string $pathToConfig
     * @param string $configName
     * @return this
     */
    public function fromConfig(string $pathToConfig, string $configName = 'default'): this{
        $activeConfig = $this->loadFromFile($pathToConfig . $configName)
                             ->read();
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function getServerBlockList(): array{

    }
    
}