<?php

namespace I9IoT\Gpio\Actions;

/**
 * Class Mode
 *
 * @package     I9IoT\Gpio\Actions
 * @author      Felipe Dominguesche <fe.dominguesche@gmail.com>
 * @version     Version 0.1.0
 * @access      public
 * @link        https://github.com/ioteducation/gpio
 * @since       Version 0.1.0
 */
class Mode
{
    /**
     * @since Version 0.1.0
     * @var string
     */
    public const CMD = 'gpio :option mode :pin :mode';

    /**
     * @since Version 0.1.0
     * @param int    $pin
     * @param string $mode
     * @return string
     */
    public static function mainFunction(int $pin, string $mode): string
    {
        $cmd = self::CMD;
        $cmd = str_replace(':pin' , $pin , $cmd);
        $cmd = str_replace(':mode', $mode, $cmd);
        return $cmd;
    }
}