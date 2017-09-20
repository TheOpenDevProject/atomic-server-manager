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
    public static function GetProcInfo(): string{
        $output = shell_exec("lspcu");
        return $output;
    }
}