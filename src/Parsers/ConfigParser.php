<?php

namespace AtomicServer\Parsers;

class ConfigParser{
    public $configFileHandle;
    public function __construct(){

    }

    public function __destruct(){
        //Close the open handle we have on the config file.
        $this->closeFileHandle();
    }
    /**
     * Opens a handle to the config file.
     *
     * @param string $file
     * @return self
     */

    public function loadFromFile(string $file): self{
        $this->configFileHandle = fopen($file,'r');
        return $this;
    }

    /**
     * Ensures we dont leave an open handle to the config file
     *
     * @return void
     */
    private function closeFileHandle(): void{
        fclose($this->configFileHandle);
    }
}