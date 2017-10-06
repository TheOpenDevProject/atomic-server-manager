<?php 
namespace AtomicServer\Info;
/**
* This class gets values from the underlying system.
*
* @author TheOpenDevProject (Jesse Bud)
*/
class ServerStatus{

   /**
    * Gets the CPU info sheet as a string
    *
    * @return string
    */
    public function getProcInfo(): string{
        $output = shell_exec("lscpu");
        return $output;
    }

    /**
     * Gets the systems available free memory in Mb
     *
     * @return string
     */

    public function getFreeMemInfo(): string{
        $output = shell_exec("free -m");
        return $output;
    }

    /**
     * Gets the servers uptime since last reboot / shutdown
     *
     * @return string
     */
    public function getServerUptime(): string{
        $output = shell_exec("uptime");
        return $output;
    }    

    /**
     * Gets the available disk space for all drives (df)
     *
     * @return string
     */
    public function getDiskSpace():string{
        $output = shell_exec("df");
        return $output;
    }
}