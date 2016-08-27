<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 24.08.16
 * Time: 0:16
 */
function autoload($className)
{
    //$classesDir = "classes".DIRECTORY_SEPARATOR;
    $className = ltrim($className, '\\');
    $fileName  = "classes".DIRECTORY_SEPARATOR;
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  .= str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
}
spl_autoload_register('autoload');