<?php
/**
 * Created by PhpStorm.
 * User: kazi
 * Date: 3/8/21
 * Time: 11:16 PM
 */

/**
 * @param $className
 */
function autoloader($className)
{
    include_once str_replace("\\","/",$className).'.php';
}

spl_autoload_register('autoloader');