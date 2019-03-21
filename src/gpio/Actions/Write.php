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
class Write
{
    /**
     * @since Version 0.1.0
     * @var string
     */
    public const CMD = 'gpio :option write :pin :state';

    /**
     * @since Version 0.1.0
     * @param int $pin
     * @param int $state
     * @return string
     */
    public static function mainFunction(int $pin, int $state): string
    {
        $cmd = self::CMD;
        $cmd = str_replace(':pin' , $pin , $cmd);
        $cmd = str_replace(':state', $state, $cmd);
        return $cmd;
    }
}