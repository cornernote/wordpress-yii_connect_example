<?php

/**
 * @param $object
 * @param string $name
 */
function printr($object, $name = '')
{
    $console = false;
    if (in_array(php_sapi_name(), array('cli'))) {
        $console = true;
    }
    $classHint = '';
    $bt = debug_backtrace();
    $file = $bt[0]['file'];

    if ($console) {
        print  $file . ' on line ' . $bt[0]['line'] . " $name is: ";
    }
    else {
        print '<div style="background: #FFFBD6">';
        $nameLine = '';
        if ($name)
            $nameLine = '<b> <span style="font-size:18px;">' . $name . "</span></b> $classHint printr:<br/>";
        print '<span style="font-size:12px;">' . $nameLine . ' ' . $file . ' on line ' . $bt[0]['line'] . '</span>';
        print '<div style="border:1px solid #000;">';
        print '<pre>';
    }

    if (is_array($object))
        print_r($object);
    else
        var_dump($object);
    if (!$console) {
        print '</pre>';
        echo '</div></div><hr/>';
    }
}

function debug($object, $name = null)
{
    printr($object, $name);
}

/**
 * Value or Default
 * @param $value
 * @param null $default
 * @return mixed
 */
function vd(&$value, $default = null)
{
    return isset($value) ? $value : $default;
}

