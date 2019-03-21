<?php

namespace I9IoT\Gpio\Actions;

/**
 * Class Write
 *
 * @package     I9IoT\Gpio\Actions
 * @author      Felipe Dominguesche <fe.dominguesche@gmail.com>
 * @version     Version 0.1.0
 * @access      public
 * @link        https://github.com/ioteducation/gpio
 * @since       Version 0.1.0
 */
class Read
{
    /**
     * @since Version 0.1.0
     * @var string
     */
    public const CMD = 'gpio :option read :pin';

    /**
     * @since Version 0.1.0
     * @param int $pin
     * @return string
     */
    public static function mainFunction(int $pin): string
    {
        $cmd = self::CMD;
        $cmd = str_replace(':pin' , $pin , $cmd);
        return $cmd;
    }
}