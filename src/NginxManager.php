<?php
use AtomicServer\Interfaces;
namespace AtomicServer\Managers;

class NginxManager implements IWebServerManager{
    public function __construct(){

    }

    /**
     * Lists all available websites
     *
     * @return array
     */
    function ListAvailableWebsites(): array{
        
    }
    
    /**
     * Lists available subdomains for a domain
     *
     * @return array
     */
    function ListAvailableSubDomains(string $domain): array{

    }
    
    /**
     * Adds a new domain
     * @example mydomain.com Example of domain that can be added
     * @param string $domain
     * @return void
     */
    function AddNewDomain(string $domain): void{

    }

    /**
     * Adds a sub-domain to an existing domain
     *
     * @param string $subdomain
     * @param string $domain
     * @return void
     */
    function AddNewSubDomain(string $subdomain, string $domain): void{

    }
    
    /**
     * Sets the permissions on a folder
     *
     * @param string $dir
     * @param int $permission
     * @return void
     */
    function SetFSPermissions(string $dir, int $permission): void{

    }
}